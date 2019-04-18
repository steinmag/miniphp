<?php

namespace App\Core;

class Router
{
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($file)
    {
        $router = new static;
        require Config::get('base_path').'/'.$file;
        return $router;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }
        throw new \Exception("Route {$uri} does not exist!");
    }

    public function callAction($controller, $action)
    {
        $controller = "App\\http\\controllers\\{$controller}";
        $controller = new $controller;
        if (!method_exists($controller, $action)) {
            throw new Exception("{$controller} does not respond to the {$action} action", 1);
        }
        return $controller->$action();
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}
