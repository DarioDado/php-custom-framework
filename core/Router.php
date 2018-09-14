<?php

namespace Core;

class Router 
{
  protected $routes = [
    'GET' => [],
    'POST' => [],
  ];

  public static function load($file)
  {
    $router = new static;

    require $file;

    return $router;
  }

  public function get($url, $controller)
  {
    $this->routes['GET'][$url] = $controller;
  }

  public function post($url, $controller)
  {
    $this->routes['POST'][$url] = $controller;
  }

  public function direct($url, $method)
  {
    if (!array_key_exists($url, $this->routes[$method])) {
      throw new Exception('No route defined for this URL.');
    }
    $this->callAction(...explode('@', $this->routes[$method][$url]));
  }

  private function callAction($controller,$action)
  {
    $className = "App\Controllers\\$controller";
    $controller = new $className;
    if (!method_exists($controller,$action)) {
      throw new Exception("Method $action doesn't exist!");
    }

    $controller->$action();
  }
}