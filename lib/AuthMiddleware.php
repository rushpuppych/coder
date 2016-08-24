<?php

namespace lib;

/**
* AuthMiddleware
* This Middleware checks the loggin status for all the authenticated
* pages of the WebApp
*
* @author: Severin Holm
* @version: 1.0.0
*/
class AuthMiddleware {

    /**
    * __invoke Magic Method
    * This method will be invoked when the authMiddleware is called and
    * checks the Account Session status.
    * @params obj $request
    * @params obj $response
    * @params Array $args
    * @return
    */    
    public function __invoke($request, $response, $next)
    {
        if(!isset($_SESSION['user'])) {
            $response->getBody()->write('SECURITY ERROR.');
         } else {
            $response = $next($request, $response);
        }
        return $response;
    }
}