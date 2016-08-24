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
        $this->view->render($response, 'index.html', [
            'page' => 'home_user.html',
            'vue' => 'home_user.js'
        ]);
    }
}