<?php

namespace app\controller;

use \lib\BaseController;

/**
 * WebSocketController
 * This Controller Renders a Page fillt with WebSocket Demo
 * The Rachet PHP WebSocket Server has to be running for this Sample to Work
 * @author: Severin Holm
 * @version: 1.0.0
 */
class WebSocketController extends BaseController
{
    /**
    * Index Method
    * Loads the WebSocket Demo Page
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

        // Render Settings View
        $this->view->render($response, 'index.html', [
            'page' => 'websocket.html',
            'vue' => 'websocket.js',
            'components' => ['WebSocket'],
            'js_vars' => [
                'profile_img' => $strProfileImage,
                'nickname' => $this->session['user']['nickname']
            ],
        ]);        
    }
}