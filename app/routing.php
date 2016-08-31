<?php

/**
 * INDEX Page Routing
 * This just sends you forward to the Public Page Scope
 */
$app->get('/', function ($request, $response, $args) {
    return $response->withRedirect('home/index/ok');
})->setName('home');


/**
 * Public Page Routing
 * This routing belong to the public zone so there is no session and no User
 * In this Case we have 2 Controller one for Guests and one for users
 */
$app->get('/home/index/{code}', 'HomeController:index')->setName('home_index');


/**
 * Loggin Mechanism Routing
 * Here is the complete login mechanism routing. So everything that has todo with
 * the login process comes in here.
 */
$app->post('/account/login', 'AccountService:login')->setName('account_login');
$app->post('/account/signup', 'AccountService:signup')->setName('account_signup');
$app->get('/account/activate/{code}', 'AccountService:activate')->setName('account_activate');
$app->post('/account/recovery', 'AccountService:recovery')->setName('account_recovery');
$app->get('/account/logout', 'AccountService:logout')->setName('account_logout');
$app->get('/account/setrecovery/{code}', 'AccountService:setRecovery')->setName('account_set_recovery');
$app->post('/account/changeprofile', 'AccountService:changeProfile')->setName('account_change_profile');
$app->post('/account/changepassword', 'AccountService:changePassword')->setName('account_change_password');
$app->post('/account/sendchangeemail', 'AccountService:sendChangeEmail')->setName('account_send_change_email');
$app->get('/account/changeemail/{code}', 'AccountService:changeEmail')->setName('account_change_email');
$app->post('/account/deleteaccount/', 'AccountService:deleteAccount')->setName('account_delete');


/**
 * Error Page Routing
 * Thats the error page routing so if you have your own error codes or the
 * user gets one of the official errors like 404 the routing is in here.
 */
// TODO:


/**
 * User Setting Page Routing
 * So After the User is Logged in to your WebApp the only thing he will be
 * able to do is to config his user account, like change his password etc.
 * this is the section of routings that does that part of your application
 */
$app->get('/user/settings/{code}', 'UserMenuController:settings')->add(new \lib\AuthMiddleware())->setName('user_settings');


/**
 * App Demo Routing
 * That all the routing you can find in the Navigation "App Demo"
 */
$app->get('/appdemo/chartdemo/', 'ChartController:index')->add(new \lib\AuthMiddleware())->setName('demo_chart');
$app->get('/appdemo/googlemap/', 'GoogleMapController:index')->add(new \lib\AuthMiddleware())->setName('demo_googlemap');
$app->get('/appdemo/websocket/', 'WebSocketController:index')->add(new \lib\AuthMiddleware())->setName('demo_websocket');

/**
 * App Routings
 * Here comes your application Routing for every page you do.
 */
// TODO: Enter your Routing Rules here!