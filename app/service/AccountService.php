<?php

namespace app\service;
use lib\vectorsix\V6Mailer;
use ReCaptcha\ReCaptcha;

/**
 * AccountSettings
 * Manages the Login, Signup and Password Recovery process of a
 * User Account.
 *
 * @author: Severin Holm
 * @version: 1.0.0
 */
class AccountService extends \lib\BaseService
{
    /**
     * Login Method
     * Gets the users credentials and starts the user session.
     * @param obj $request
     * @param obj $response
     * @param Array $args
     * @return
     */
    public function login($request, $response, $args)
    {
        // Get Formdata
        $strEmail = $request->getParam('email');
        $strPassword = sha1($request->getParam('password'));

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail, 'password' => $strPassword]]);

        // Check Login
        if(count($arrAccount) > 0 && $arrAccount) {
            // Check Status
            if($arrAccount[0]['status'] == 1) {
                // Login Denied Account is not activated
                return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_deny_active']));
            }

            // Check Block
            if($arrAccount[0]['status'] == 2) {
                // Login Denied Account is not activated
                return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_deny_block']));
            }

            // Check Deleted
            if($arrAccount[0]['status'] == 99) {
                // Login Denied Account is not activated
                return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_deny_deleted']));
            }

            // Login Success
            $this->session['user'] = $arrAccount[0];
            unset($this->session['user']['password']);
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_success']));
        }

        // Login Denied
        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_deny']));
    }

    /**
     * Logout Method
     * Destroys the Session and redirects to Login Page
     * @param $request
     * @param $response
     * @param $args
     */
    public function logout($request, $response, $args)
    {
        // Session Destroy
        session_destroy();

        // Redirect to Login
        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_logout']));
    }

    /**
     * Signup Method
     * This method gets the form values and creates a new user account.
     * @param obj $request
     * @param obj $response
     * @param Array $args
     * @return
     */
    public function signup($request, $response, $args)
    {
        // Get Formdata
        $strGoogleCode = $request->getParam('g-recaptcha-response');
        $strEmail = $request->getParam('email');
        $strNickname = $request->getParam('nickname');
        $strPassword1 = $request->getParam('password_1');
        $strPassword2 = $request->getParam('password_2');

        $arrRecord = [];
        $arrRecord['email'] = $strEmail;
        $arrRecord['nickname'] = $strNickname;
        $arrRecord['password'] = sha1($strPassword1);
        $arrRecord['status'] = 1;

        // Captcha Check
        if(!$this->checkReCaptcha($strGoogleCode)) {
            // Signup Denied (ReCaptcha failed)
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'signup_error_1']));
        }

        // Password Check
        if($strPassword1 != $strPassword2) {
            // Signup Denied (Password check error)
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'signup_error_2']));
        }

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail]]);
        if(count($arrAccount) > 0 && $arrAccount) {
            // Signup Denied (Double Account)
            if($arrAccount[0]['status'] != '99') {
                return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_error_3']));
            }
        }

        // Data Validation
        if(!$this->signupValidation($arrRecord)) {
            // Signup Denied (Validation error)
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'signup_error_4']));
        }

        // Create Account (in Database)
        $numLastId = $this->db->insert('account', $arrRecord);

        // Set Activation mail data
        $strActivationCode = $this->generateActivationCode($arrRecord, $numLastId);
        $arrSubmitEmailPlaceholder = [
            'img_logo' => '',
            'text_logo' => 'CodeBot Account Service',
            'body_img_hero' => 'http://localhost:8888/coder/assets/image/email/email_hero.png',
            'body_title' => 'Hi, ' . $strNickname . '!',
            'body_title_subtext' => 'Welcome on CodeBot the Ultimative AI Coding environment.',
            'body_interaction' => 'Your account is successfully created but you have to activate it. <br><a href="http://localhost:8888/coder/account/activate/' . $strActivationCode . '">Please Click here to activate your account.</a>',
        ];

        // Send Activation email
        $objMail = new V6Mailer();
        $objMail->setSmtpConfigFromDb($this->db, 'rushpuppy');
        $objMail->addAddress($strEmail);
        $objMail->setHtmlTemplate('hero', $arrSubmitEmailPlaceholder);
        $objMail->send();

        // Redirect to Index Page
        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_send']));
    }

    /**
     * Account Activation Method
     * This method gets the form values and sends a password recovery email to
     * the user. This email contains a restore URL.
     * @param obj $request
     * @param obj $response
     * @param Array $args
     * @return
     */
    public function activate($request, $response, $args)
    {
        // Extract Email and CheckCode From Args
        $strCode = base64_decode($args['code']);
        $strEmail = substr($strCode, 0, strlen($strCode) - 40);
        $strCheckCode_1 = substr($strCode, strlen($strCode) - 40);

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail, 'status' => 1]]);
        if(empty($arrAccount)) {
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_error']));
        }

        // Get Account Data
        $arrAccount = $arrAccount[0];
        $strCheckCode_2 = sha1($arrAccount['password'] . $arrAccount['id']);

        // Check Activiation Code
        if($strCheckCode_1 != $strCheckCode_2) {
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_error']));
        }

        // Update Account Status to 3 (Active)
        $this->db->update('account', ['status' => 3], ['id' => $arrAccount['id']]);

        // Redirect to Index Page
        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'login_success']));
    }

    /**
     * Recovery Method
     * This method gets the form values and sends a password recovery email to
     * the user. This email contains a restore URL.
     * @param obj $request
     * @param obj $response
     * @param Array $args
     * @return
     */
    public function recovery($request, $response, $args)
    {
        // Get Formdata
        $strEmail = $request->getParam('email');

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail]]);
        if(count($arrAccount) == 0) {
            // Recovery Denied (Wrong email)
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'recovery_error_1']));
        } else {
            $arrAccount = $arrAccount[0];
        }

        // Send Recovery Email to user
        // Set Activation mail data
        $strActivationCode = $this->generateActivationCode($arrAccount, $arrAccount['id']);
        $arrSubmitEmailPlaceholder = [
            'img_logo' => '',
            'text_logo' => 'CodeBot Account Service',
            'body_img_hero' => 'http://localhost:8888/coder/assets/image/email/email_hero.png',
            'body_title' => 'Hi, ' . $arrAccount['nickname'] . '!',
            'body_title_subtext' => 'Password Recovery mail.',
            'body_interaction' => 'You forgot your password? <br>well silly you ;-) butt that is not a big problem just <br><a href="http://localhost:8888/coder/account/setrecovery/' . $strActivationCode . '"> click here to reset your password.</a>',
        ];

        // Send Activation email
        $objMail = new V6Mailer();
        $objMail->setSmtpConfigFromDb($this->db, 'rushpuppy');
        $objMail->addAddress($strEmail);
        $objMail->setHtmlTemplate('hero', $arrSubmitEmailPlaceholder);
        $objMail->send();

        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'recovery_success']));
    }

    /**
     * Recovery Set new Password Method
     * If this one is triggered the new Password will be set.
     * @param $request
     * @param $response
     * @param $args
     */
    public function setRecovery($request, $response, $args)
    {
        // Extract Email and CheckCode From Args
        $strCode = base64_decode($args['code']);
        $strEmail = substr($strCode, 0, strlen($strCode) - 40);
        $strCheckCode_1 = substr($strCode, strlen($strCode) - 40);

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail, 'status' => 3]]);
        if(empty($arrAccount)) {
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'recovery_error']));
        }

        // Get Account Data
        $arrAccount = $arrAccount[0];
        $strCheckCode_2 = sha1($arrAccount['password'] . $arrAccount['id']);

        // Check Activiation Code
        if($strCheckCode_1 != $strCheckCode_2) {
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'recovery_error']));
        }

        // Update Account Status to 3 (Active)
        $strNewPassword = substr(uniqid(), 0, 10);
        $this->db->update('account', ['password' => sha1($strNewPassword)], ['id' => $arrAccount['id']]);

        // Send New Password to User Email
        // Set Activation mail data
        $strActivationCode = $this->generateActivationCode($arrAccount, $arrAccount['id']);
        $arrSubmitEmailPlaceholder = [
            'img_logo' => '',
            'text_logo' => 'CodeBot Account Service',
            'body_img_hero' => 'http://localhost:8888/coder/assets/image/email/email_hero.png',
            'body_title' => 'Hi, ' . $arrAccount['nickname'] . '!',
            'body_title_subtext' => 'Your account is now recovered.',
            'body_interaction' => 'Here is your new Password: <br><b>' . $strNewPassword . '</b>',
        ];

        // Send Activation email
        $objMail = new V6Mailer();
        $objMail->setSmtpConfigFromDb($this->db, 'rushpuppy');
        $objMail->addAddress($strEmail);
        $objMail->setHtmlTemplate('hero', $arrSubmitEmailPlaceholder);
        $objMail->send();

        // Redirect to Index Page
        return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'recovery_sendpassword']));
    }

    /**
     * Change Nickname, Default Language or Profile Image of an existing User Account
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function changeProfile($request, $response, $args)
    {
        // Get Formdata
        $strNickname = $request->getParam('nickname', $this->session['nickname']);
        $strLanguage = $request->getParam('language', $this->session['language']);

        // Upload Image (if file is uploadet)
        $strFileName = $this->session['user']['profile_img'];
        if(!empty($_FILES['profile_img']['name'])) {
            $strFileName = $this->uploadUserImage();
            if(substr($strFileName, 0, 5) == 'error') {
                $numErrorCode = str_replace('error_', '', $strFileName);
                return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'profile_error_' . $numErrorCode]));
            }
        }

        // Save Formdata in Database
        $arrUser = [
            'nickname' => $strNickname,
            'default_lang' => $strLanguage,
            'profile_img' => $strFileName
        ];
        $numUserId = $this->session['user']['id'];
        $this->db->update('account', $arrUser, ['id' => $numUserId]);
        $this->userSessionUpdate();

        // Redirect to succes user settings page
        return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'profile_success']));

    }

    /**
     * Changes the Password of an existing User Account
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function changePassword($request, $response, $args)
    {
        // Get Formdata
        $strOldPassword = $request->getParam('old_password');
        $strPassword1 = $request->getParam('new_password_1', '1');
        $strPassword2 = $request->getParam('new_password_1', '2');

        // Check if New Password is Correct
        if($strPassword1 != $strPassword2) {
            return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'password_error_1']));
        }

        // Check DB For Old Password
        $numUserId = $this->session['user']['id'];
        $arrAccount = $this->db->select('account', '*', ['AND' => ['id' => $numUserId, 'password' => sha1($strOldPassword)]]);
        if(count($arrAccount) == 0) {
            return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'password_error_2']));
        }

        // Update new Password in Database
        // Save Formdata in Database
        $this->db->update('account', ['password' => sha1($strPassword1)], ['id' => $numUserId]);

        // Redirect to succes user settings page
        return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'password_success_1']));

    }

    /**
     * Sends an Change Email with the link for the Email change Request.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function sendChangeEmail($request, $response, $args)
    {
        // Get Formdata
        $strEmail = $request->getParam('email');

        // Send new email address to user email
        // Set Activation mail data
        $numUserId = $this->session['user']['id'];
        $arrAccount = $this->db->select('account', '*', ['AND' => ['id' => $numUserId]])[0];
        $strActivationCode = $this->generateActivationCode($arrAccount, $arrAccount['id']);
        $arrSubmitEmailPlaceholder = [
            'img_logo' => '',
            'text_logo' => 'CodeBot Account Service',
            'body_img_hero' => 'http://localhost:8888/coder/assets/image/email/email_hero.png',
            'body_title' => 'Hi, ' . $arrAccount['nickname'] . '!',
            'body_title_subtext' => 'Email Changing.',
            'body_interaction' => 'You want to change your email? <br>Just click on the link: <br><a href="http://localhost:8888/coder/account/changeemail/' . $strActivationCode . '"> click here to change your email.</a>',
        ];

        // Send Activation email
        $objMail = new V6Mailer();
        $objMail->setSmtpConfigFromDb($this->db, 'rushpuppy');
        $objMail->addAddress($strEmail);
        $objMail->setHtmlTemplate('hero', $arrSubmitEmailPlaceholder);
        $objMail->send();

        // Redirect to success user settings page
        return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'email_success_1']));
    }

    /**
     * Changes The Email by Parameter. This is the Method the sendChangeEmail Link
     * Referes to.
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function changeEmail($request, $response, $args)
    {
        // Extract Email and CheckCode From Args
        $strCode = base64_decode($args['code']);
        $strEmail = substr($strCode, 0, strlen($strCode) - 40);
        $strCheckCode_1 = substr($strCode, strlen($strCode) - 40);

        // Get User Account
        $arrAccount = $this->db->select('account', '*', ['AND' => ['email' => $strEmail, 'status' => 3]]);
        if(empty($arrAccount)) {
            return $response->withRedirect($this->route->pathFor('home_index', ['code' => 'email_error_1']));
        }

        // Update new Email to Account
        $numUserId = $this->session['user']['id'];
        $this->db->update('account', ['email' => $strEmail], ['id' => $numUserId]);
        $this->userSessionUpdate();

        // Redirect to success user settings page
        return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'email_success_2']));
    }

    /**
     * Deletes the User Account from the Database
     * @param $request
     * @param $response
     * @param $args
     * @return mixed
     */
    public function deleteAccount($request, $response, $args)
    {
        // Get Formdata
        $strDelete = $request->getParam('delete');
        $strPassword = $request->getParam('delete_password');

        // Check Delete
        if(strtolower($strDelete) != 'yes') {
            return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'delete_error_1']));
        }

        // Check Password
        $numUserId = $this->session['user']['id'];
        $arrAccount = $this->db->select('account', '*', ['AND' => ['id' => $numUserId, 'password' => sha1($strPassword)]]);
        if(count($arrAccount) == 0) {
            return $response->withRedirect($this->route->pathFor('user_settings', ['code' => 'delete_error_2']));
        }

        // Delete User Folder
        $strUploadDir = __DIR__ . '/../../data/user_upload/' . $this->session['user']['email'];
        $this->unlinkRecursive($strUploadDir, true);

        // Soft Delete Account
        $this->db->update('account', ['status' => 99, 'profile_img' => null], ['id' => $numUserId]);

        return $response->withRedirect($this->route->pathFor('account_logout'));
    }

    /**
     * Validates the Signup Form Data and returns true or false
     * @param $arrData
     * @return bool
     */
    protected function signupValidation($arrData)
    {
        // Every Field musst at least have a length of 4 digits
        foreach($arrData as $strKey => $strValue) {
            if(!empty($strValue)) {
                if(strlen($strValue) < 4 && $strKey != 'status') {
                    return false;
                }
            } else {
                return false;
            }
        }
        return true;
    }

    /**
     * This Quick Method merges email and Password hash and Creates a Activiation hash for the Signup
     * Mail. Caution this is not 100% Secure. But Hey no body knows this :-)
     * @param $arrData
     * @param $numLastId
     * @return string
     */
    protected function generateActivationCode($arrData, $numLastId)
    {
        $strEmail = $arrData['email'];
        $strPassword = $arrData['password'];
        $strActivationCode = base64_encode($strEmail . sha1($strPassword . $numLastId));
        return $strActivationCode;
    }

    /**
     * Sends the GoogleCode to Google to Check if the Captcha is valid or not.
     * @param $strGoogleCode
     * @return bool
     */
    protected function checkReCaptcha($strGoogleCode)
    {
        // Ret Recaptcha Paramse
        $strGoogleSecret = '6LcQzxoTAAAAALvXPk8Yn3BJBfe7tVlH7ffzkoK6';
        $strRemoteIp = $_SERVER['REMOTE_ADDR'];

        // Check ReCaptcha agains Google PHP API
        $objRecaptcha = new ReCaptcha($strGoogleSecret);
        $objResponse = $objRecaptcha->verify($strGoogleCode, $strRemoteIp);
        if ($objResponse->isSuccess()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Uploads the user image and return true or false if upload fails
     * @return bool
     */
    protected function uploadUserImage()
    {
        // Check if size is les than 1MB
        $numImgSize = $_FILES['profile_img']['size'];
        if($numImgSize > 1000000) {
            return 'error_1';
        }

        // Check file extendsion for image format
        $strFileType = strtolower(pathinfo(basename($_FILES['profile_img']['name']), PATHINFO_EXTENSION));
        if($strFileType != "jpg" && $strFileType != "png" && $strFileType != "jpeg" && $strFileType != "gif" ) {
            return 'error_2';
        }

        // Save File in user Folder
        $strUploadDir = __DIR__ . '/../../data/user_upload/' . $this->session['user']['email'];
        if(!is_dir($strUploadDir)) {
            mkdir($strUploadDir);
        }
        $strDestFile = uniqid() . '.' . $strFileType;
        if (move_uploaded_file($_FILES['profile_img']['tmp_name'], $strUploadDir . '/' . $strDestFile)) {
            // Remove Old Profile Image from User Dir
            if (file_exists($strUploadDir . '/' . $this->session['user']['profile_img'])) {
                unlink($strUploadDir . '/' . $this->session['user']['profile_img']);
            }
        } else {
            return 'error_3';
        }

        // Return File Name
        return $strDestFile;
    }

    /**
     * Reads the Account infos from db and resets them in the session.
     */
    protected function userSessionUpdate()
    {
        $numUserId = $this->session['user']['id'];
        $arrAccount = $this->db->select('account', '*', ['AND' => ['id' => $numUserId]]);
        unset($arrAccount[0]['password']);
        $this->session['user'] = $arrAccount[0];
    }

    /**
     * Deletes a direcotry recursively
     * @param $strDir
     * @param $boolDeleteRootToo
     */
    protected function unlinkRecursive($strDir, $boolDeleteRootToo)
    {
        if(!$dh = @opendir($strDir)) {
            return;
        }
        while (false !== ($obj = readdir($dh))) {
            if($obj == '.' || $obj == '..') {
                continue;
            }

            if (!@unlink($strDir . '/' . $obj)) {
                unlinkRecursive($strDir.'/'.$obj, true);
            }
        }
        closedir($dh);
        if ($boolDeleteRootToo){
            @rmdir($strDir);
        }
        return;
    }
}