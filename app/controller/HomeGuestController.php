<?php

namespace app\controller;

use \lib\BaseController;

/**
 * HomeController
 * This Controller is trigered as first Page but for Guests and not for Users
 * @author: Severin Holm
 * @version: 1.0.0
 */
class HomeGuestController extends BaseController
{
    /**
    * Index Method
    * The index method controlls the first page from the WebApp.
    * The firstpage is called the 'home' page.
    * @params obj $request
    * @params obj $response
    * @params Array $args
    */    
    public function index($request, $response, $args)
    {
        $this->view->render($response, 'index.html', [
            'page' => 'home_guest.html',
            'vue' => 'home_guest.js',
            'code' => $args['code']
        ]);
    }
}