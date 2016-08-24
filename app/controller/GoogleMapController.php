<?php

namespace app\controller;

use \lib\BaseController;

/**
 * GoogleMapController
 * This Controller takes care of the GoogleMap Api Demo
 * @author: Severin Holm
 * @version: 1.0.0
 */
class GoogleMapController extends BaseController
{
    /**
    * Index Method
    * Loads the GoogleMap Demo Page
    * @params obj $request
    * @params obj $response
    * @params Array $args
    */    
    public function index($request, $response, $args)
    {
        $this->view->render($response, 'index.html', [
            'page' => 'google_map.html',
            'vue' => 'google_map.js',
            'components' => ['GoogleMap']
        ]);
    }
}