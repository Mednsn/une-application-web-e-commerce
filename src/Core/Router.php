<?php
namespace App\core;

class Router
{
    private array $routes;

    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function dispatch(string $url)
    {
        if (!isset($this->routes[$url])) {
            http_response_code(404);
            echo "404 - Page not found";
            return;
        }

        [$controller, $method] = $this->routes[$url];  
        $controller = "\App\Controllers\\" . $controller;
        $v = new $controller();
        $v->$method();
    }
}
