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
            'Contact/index' => 'Contact,index',
            'Contact/read' => 'Contact,read',
        ];
        

        foreach ($routes as $routeUrl => $controllerMethod) {
            

            if ($url == $routeUrl) { 
                
                [$controller,$method] = explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\' .$controller;
                $controller = new $controller();
                $controller->$method();
                break;
            }
        }
    }
}
