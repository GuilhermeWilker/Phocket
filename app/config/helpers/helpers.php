<?php

use app\config\classes\Router;

function path()
{
    return $_SERVER['REQUEST_URI'];
}

function requestMethod()
{
    return strtolower($_SERVER['REQUEST_METHOD']);
}

function routerExecute()
{
    try {
        $routes = require '../app/routes/web.php';
        $router = new Router();
        $router->execute($routes);
    } catch (Throwable $th) {
        var_dump($th->getMessage());
    }
}