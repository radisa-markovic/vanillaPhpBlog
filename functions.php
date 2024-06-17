<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}

function basePath($path)
{
    return __DIR__ . "\\" . $path;
}

function view($pathToView, $attributes = [])
{
    extract($attributes);
    require "views/$pathToView";
}

function redirect($path)
{
    header("location: $path");
    exit();
}