<?php
/**
* WebApp
* Cool WebApp Template Application. It comes with a lot of pre build in features and the complete
* login and authentication process. So that you can just start building your Application.
*
* @author: Severin Holm
*/

// Session Start
session_start();

// Include PSR-7 Autoloader
require "vendor/autoload.php";

// Create App
// The App starts in Public mode if the client is not
// localhost.
if($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost') {
    $configuration = [
        'settings' => [
            'displayErrorDetails' => true,
        ],
    ];
    $c = new \Slim\Container($configuration);
    $app = new \Slim\App($c);
} else {
    $app = new \Slim\App;
}

$container = $app->getContainer();

// Include Config
$arrConfig = [];
$arrDbConfig = [];
include_once "app/config.php";
$container['config'] = $arrConfig;


// Register Twig Container
$container['view'] = function ($container) {
    if($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
        $view = new \Slim\Views\Twig('app/templates/', [
            'cache' => false,
            'debug' => 'true',
            'auto_reload' => 'true'
        ]);
    } else {
        $view = new \Slim\Views\Twig('app/templates/', [
            'cache' => 'cache/',
            'debug' => 'false',
            'auto_reload' => 'false'
        ]);    
    }

    // Add Globals and Config to twig
    $twig = $view->getEnvironment();
    $twig->addGlobal('config', $container['config']['page_header']);

    if(isset($_SESSION['user'])) {
        $twig->addGlobal('navigation', $container['config']['user_navigation']);
    } else {
        $twig->addGlobal('navigation', $container['config']['public_navigation']);
    }

    if(isset($_SESSION['user'])) {
        $twig->addGlobal('user', $_SESSION['user']);
    }

    $view->addExtension(new \Slim\Views\TwigExtension($container['router'], $container['request']->getUri()));
    return $view;
};

// Databse Instance
$container['db_config'] = $arrDbConfig;
$container['db'] = function($container) {
    if($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {        
        $db = new medoo($container['db_config']['dev']);
    } else {
        $db = new medoo($container['db_config']['live']);
    }
    return $db;    
};

// Include Dependency Injection
include_once "app/container.php";

// Include Routing
include_once "app/routing.php";

// Run App
$app->run();
