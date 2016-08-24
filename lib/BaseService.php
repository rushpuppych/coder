<?php
/**
 * Created by PhpStorm.
 * User: Rushpuppy
 * Date: 20.03.16
 * Time: 15:08
 */

namespace lib;

/**
 * BaseService
 * BaseService is used for every Service that is used. A service is like an Controller but without
 * Any View Rendering. It Mostly uses Redirects.
 *
 * @author: Severin Holm
 * @version: 1.0.0
 */
class BaseService
{
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
        $this->db = $container->get('db');
        $this->session = &$_SESSION;
        $this->route = $container->get('router');
    }
}