<?php
session_start();
use App\Core\Router;

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../src/core/Router.php';

$routes = require_once __DIR__ . '/../src/Config/Routes.php';

$router = new Router($routes);

$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$router->dispatch($url);