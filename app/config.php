<?php

/**
 * Configuration of the Page Header
 * This are the Values that will be published in the Page header Section of the HTML
 * Page. This Array is passed over to Twig and to the Session
 */
$arrConfig['page_header'] = [
    'html_lang' => 'en',
    'meta_charset' => 'utf-8',
    'meta_description' => 'CodeBot is WebApp Template for Quick starting a new Application without use time for stuff i dont want to do.',
    'meta_keywords' => 'WebApp Framework',
    'meta_application-name' => 'CodeBot',
    'meta_author' => 'Severin Holm, Rushpuppy.ch',
    'page_title' => 'CodeBot - by Rushpuppy.ch'
];


/**
 * DataBase Configuration for the Developement environment.
 * When you work on Localhost this are the configs that are used to connect
 * to the Database.
 */
$arrDbConfig['dev'] = [
    'database_type' => 'mysql',
    'database_name' => 'coder',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'port' => 3306
];


/**
 * DataBase Configuration for the Live environment.
 * When the Project is online this are the configs that are used to connect
 * to the Database.
 */
$arrDbConfig['live'] = [
    'database_type' => 'mysql',
    'database_name' => 'coder',
    'server' => 'localhost',
    'username' => 'root',
    'password' => 'root',
    'charset' => 'utf8',
    'port' => 3306
];


/**
 * Public Navigation
 * This is the Navigation Menu for all Public Pages. This Array is passed over to Twig and to the Session
 */
$arrConfig['public_navigation']['left'] = [];
$arrConfig['public_navigation']['right'] = [];


/**
 * Logedin User Navigation
 * This is the Navigation Menu for all User Pages. This Array is passed over to Twig and to the Session
 */
$arrConfig['user_navigation']['left'] = [
    '0' => ['text' => 'Dashboard', 'linkto' => 'home'],
    '1' => ['text' => 'App Demos', 'children' => [
        '0' => ['text' => 'Webform', 'icon' => 'fa fa-bars', 'linkto' => 'home'],
        '1' => ['divider' => true],
        '2' => ['text' => 'GoogleMap', 'icon' => 'fa fa-street-view', 'linkto' => 'demo_googlemap'],
        '3' => ['text' => 'WebSockets', 'icon' => 'fa fa-video-camera', 'linkto' => 'demo_websocket'],
    ]]
];
$arrConfig['user_navigation']['right'] = [
    '1' => ['text' => 'Account', 'children' => [
        '0' => ['text' => 'Settings', 'icon' => 'fa fa-cog', 'linkto' => 'user_settings', 'args' => ['code' => 'ok']],
        '1' => ['divider' => true],
        '2' => ['text' => 'Deutsch', 'href' => '#'],
        '3' => ['text' => 'Français', 'href' => '#'],
        '4' => ['text' => 'Italiano', 'href' => '#'],
        '5' => ['text' => 'English', 'href' => '#'],
        '6' => ['divider' => true],
        '7' => ['text' => 'Logout', 'icon' => 'fa fa-sign-out', 'linkto' => "account_logout"],
    ]]
];

/**
 * WebSocket Server Configuration
 */
$arrConfig['web_socket'] = [
    '8110' => 'WebSocketDemo', 
];
