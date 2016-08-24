<?php
/**
* WebApp Socket Server
* Amazing WebSocket Server Template for a quick and easy implementation of a WebApplication
*
* @author: Severin Holm
*/

// Session Start
session_start();

// Include PSR-7 Autoloader
require "vendor/autoload.php";

// Include Config
$arrConfig = [];
$arrDbConfig = [];
include_once "app/config.php";
$container['config'] = $arrConfig;

// Create all Server Instances
$ws = new Ratchet\WebSocket\WsServer(new \app\server\WebSocketBroadcast());
$ws->disableVersion(0);

$server = Ratchet\Server\IoServer::factory(new Ratchet\Http\HttpServer($ws), 8110);
$server->run();




// TODO: This code here works but without HttpServer
// it would be nice to have this code insted of the running code because it has Routes in it !!!
//$server = new Ratchet\App('localhost', 8110);
//$server->route('/broadcast', new \app\server\WebSocketBroadcast());
//$server->run();