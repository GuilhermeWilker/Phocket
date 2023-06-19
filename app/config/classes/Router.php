<?php

namespace app\config\classes;

class Router
{
    private string $path;
    private string $requestMethod;

    private function routerWasFound($routes)
    {
        if (!isset($routes[$this->requestMethod])) {
            throw new \Exception("Route '{$this->path}' does not exist");
        }

        if (!isset($routes[$this->requestMethod][$this->path])) {
            throw new \Exception("Route '{$this->path}' does not exist");
        }
    }

    private function controllerWasFound(string $controllerNamespace, string $controller, string $action)
    {
        if (!class_exists($controllerNamespace)) {
            throw new \Exception("The controller {$controller} does not exist!");
        }

        if (!method_exists($controllerNamespace, $action)) {
            throw new \Exception("The action {$action} does not exist in controller {$controller}!");
        }
    }

    public function execute($routes)
    {
        $this->path = path();
        $this->requestMethod = requestMethod();

        $this->routerWasFound($routes);

        // o mesmo que list($parm1, $param2) = //...
        [$controller, $action] = explode('@', $routes[$this->requestMethod][$this->path]);
        $controllerNamespace = "app\\controllers\\{$controller}";

        $this->controllerWasFound($controllerNamespace, $controller, $action);

        $controllerInstance = new $controllerNamespace();
        $controllerInstance->$action();
    }
}
