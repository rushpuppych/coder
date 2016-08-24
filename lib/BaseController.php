<?php

namespace lib;

/**
* BaseController
* Base Controlle is used for every Page Routing and Rendering Controller
*
* @author: Severin Holm
* @version: 1.0.0
*/
class BaseController {
    // Atributes
    public $view;
    public $db;
    public $session;
    public $route;
    
    /**
    * Constructor
    * The constructor loads the attributes
    * @params obj $view
    */
    public function __construct($container) {
        $this->view = $container->get('view');
        $this->db = $container->get('db');
        $this->session = &$_SESSION;
        $this->route = $container->get('router');
    }
}