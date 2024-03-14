<?php

namespace app\core;

class App
{
    private $routes = [];

    public function addRoute($url, $handler)
    {
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    function __construct()
    {
    
        $url = $_GET['url'];
        

        $routes = [
            'Main/index' => 'Main,index',
            'main/index' => 'Main,index',
            '' => 'Main,index',
            'Main/about_us' => 'Main,about_us',
            'Contact/Contact_Us' => 'Contact,index',
            'Contact/Messages' => 'Contact,messages',
        ];
        

        foreach ($routes as $routeUrl => $controllerMethod) {
            

            if ($url == $routeUrl) { //match the route
                
                //run the route
                [$controller,$method] = explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\' .$controller;
                $controller = new $controller();
                $controller->$method();
                //make sure that we don't run a second route
                break;
            }
        }
    }
}
