<?php
require './functions.php';
require 'Core/Router.php';

//php -S localhost:8000
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
//$router->route($uri, $method);
$router = new Router();
$router->get('/', 'blog/index.php');
$router->get('/blogs', 'blog/index.php');
$router->get('/blogs/new', 'blog/create.php');
$router->post("/blogs/store", "blog/store.php");

$router->get("/blog", "blog/show.php");

try 
{
    $router->route($uri, $method);
} catch (Exception $exception) {
    dd($exception); 
    // return redirect($router->previousUrl());
}