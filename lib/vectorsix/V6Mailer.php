<?php


namespace lib\vectorsix;
use PHPMailer;

/**
 * PHPMailer Wrapper for HTML Templates and other funny stuff
 * User: Rushpuppy
 * Date: 14.03.16
 * Time: 18:09
 */
class V6Mailer extends PHPMailer
{
    /**
     * Loading the Mail Connection Configuration from the Database
     * @param $objDb
     * @param $strConfigKey
     */
    public function setSmtpConfigFromDb($objDb, $strConfigKey)
    {
        // Loading SMTP Config from DB
        $arrMailConfig = $objDb->select('cfg_mail', '*', ['config_key' => $strConfigKey]);
        $arrMailConfig = $arrMailConfig[0];

        // Set All Conection Options
        $this->isSMTP();
        $this->Host = $arrMailConfig['host'];
        $this->SMTPAuth = (bool) $arrMailConfig['smtp_auth'];
        $this->Username = $arrMailConfig['username'];
        $this->Password = $arrMailConfig['password'];
        $this->SMTPSecure = $arrMailConfig['smtp_secure'];
        $this->Port = $arrMailConfig['port'];
    }

    /**
     * Loading of the Link.css file and Template.html and merging with Placeholder Code
     * Then set those in PHPMailer.
     * @param $strTemplateName
     * @param $arrPlaceholder
     */
    public function setHtmlTemplate($strTemplateName, $arrPlaceholder)
    {
        // Load Template HTML
        $strHtmlCode = file_get_contents(__DIR__ . '/foundation-emails-master/templates/' . $strTemplateName . '.html');

        // Replace All Placeholder
        foreach($arrPlaceholder as $strKey => $strValue) {
            $strHtmlCode = str_replace("{{" .$strKey  . "}}", $strValue, $strHtmlCode);
        };

        // Set Email Body
        $this->isHTML(true);
        $this->Body = $strHtmlCode;
    }


}