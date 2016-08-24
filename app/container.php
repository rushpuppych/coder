<?php
/**
 * Controller Registration
 * Here you have to register all your Controller classes to Pimple Dependency Injection
 */
// Main Controller (Home guet or Home User)
$container['HomeController'] = function ($container) {
    if(isset($_SESSION['user'])) {
        return new \app\controller\HomeUserController($container);
    } else {
        return new \app\controller\HomeGuestController($container);
    }
};

// User Menu Controller (Account Settings for user)
$container['UserMenuController'] = function ($container) {
    return new \app\controller\UserMenuController($container);
};

// App Demo Controller
$container['GoogleMapController'] = function ($container) {
    return new \app\controller\GoogleMapController($container);
};

// WebSocket Demo Controller
$container['WebSocketController'] = function ($container) {
    return new \app\controller\WebSocketController($container);
};

/**
 * Service Registration
 * Here you have to register all your Service classes to Pimple Dependency Injection
 */
// Account Service
$container['AccountService'] = function ($container) {
    return new \app\service\AccountService($container);
};

/**
 * Model Registration
 * Here you have to register all your Model classes to Pimple Dependency Injection
 */
// todo