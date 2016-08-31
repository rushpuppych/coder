<?php

namespace app\controller;

use \lib\BaseController;

/**
 * ChartController
 * This Controller takes care of the Chart Demo
 * @author: Severin Holm
 * @version: 1.0.0
 */
class ChartController extends BaseController
{
    /**
     * Index Method
     * Loads the Chart Demo Page
     * @params obj $request
     * @params obj $response
     * @params Array $args
     */
    public function index($request, $response, $args)
    {
        $this->view->render($response, 'index.html', [
            'page' => 'chart.html',
            'vue' => 'chart.js',
        ]);
    }
}