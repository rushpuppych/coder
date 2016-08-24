<?php

namespace app\controller;

use \lib\BaseController;

/**
 * HomeController
 * This Controller is trigered as first Page but for Users and not for Guests
 * @author: Severin Holm
 * @version: 1.0.0
 */
class HomeUserController extends BaseController
{
    /**
     * Index Method
     * The index method loads the Dashboard Page if there is a valid user
     * Session.
     *
     * @params obj $request
     * @params obj $response
     * @params Array $args
     */
    public function index($request, $response, $args)
    {
        // Get Profile Image
        if(empty($this->session['user']['profile_img'])) {
            $strProfileImage = 'assets/image/placeholder/profile.png';
        } else {
            $strProfileImage = 'data/user_upload/' . $this->session['user']['email'] . '/' . $this->session['user']['profile_img'];
        }

        // Render View
        $this->view->render($response, 'index.html', [
            'page' => 'home_user.html',
            'vue' => 'home_user.js',
            'profile_img' => $strProfileImage,
        ]);
    }
}