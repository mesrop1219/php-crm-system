<?php

namespace Kernel\Router;

class Route
{
  public string $method;
  public string $url;
  public mixed $controller;
  public array $middlewares;

  public function __construct(string $url, string $method, callable $controller, array $middlewares = [])
  {
    $this->url = $url;
    $this->method = $method;
    $this->controller = $controller;
    $this->middlewares = $middlewares;
  }
}

?>