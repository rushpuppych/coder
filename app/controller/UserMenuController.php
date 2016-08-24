<?php
/**
 * Created by PhpStorm.
 * User: Rushpuppy
 * Date: 15.03.16
 * Time: 17:19
 */

namespace app\controller;


use lib\BaseController;

/**
 * UserController
 * After Login this Controller Manages the User Account. This Class Manages
 * The User Setting Page.
 *
 * @author: Severin Holm
 * @version: 1.0.0
 */
class UserMenuController extends BaseController
{
    /**
     * Settings Controller
     * Renders the User Settings Page to the front GUI
     * @param $request
     * @param $response
     * @param $args
     */
    public function settings($request, $response, $args)
    {
        // Get Profile Image
        if(empty($this->session['user']['profile_img'])) {
            $strProfileImage = 'assets/image/placeholder/profile.png';
        } else {
            $strProfileImage = 'data/user_upload/' . $this->session['user']['email'] . '/' . $this->session['user']['profile_img'];
        }

        // Render Settings View
        $this->view->render($response, 'index.html', [
            'page' => 'user_settings.html',
            'vue' => 'user_settings.js',
            'profile_img' => $strProfileImage,
            'form_data' => $this->session['user'],
            'code' => $args['code']
        ]);
    }
}