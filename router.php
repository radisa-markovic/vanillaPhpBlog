<?php

$URI = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "controllers/blog/index.php",
    '/blogs' => 'controllers/blog/show.php'
];

function routeToController($uri, $routes)
{
    if(array_key_exists($uri, $routes))
    {
        require $routes[$uri];
    }
    else
    {
        abort();
    }
}

function abort($httpStatusCode = 404)
{
    http_response_code($httpStatusCode);
    require "views/$httpStatusCode.php";
    die();
}