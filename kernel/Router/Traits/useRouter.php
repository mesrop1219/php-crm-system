<?php

namespace Kernel\Router\Traits;

use Kernel\Router\Route;
use Error;

trait useRouter
{
  private static array $routes = [
    "GET" => [],
    "POST" => []
  ];

  private static function add_route(Route $route)
  {
    self::$routes[$route->method][] = $route;
  }

  private static function find_route(string $url, string $method)
  {
    $route = array_filter(self::$routes[$method], function(Route $route_value) use($url) {
      return $route_value->url === $url;
    });

    if (count($route) === 0) {
      throw new Error("Sorry but we can't find this route!");
    }

    return $route[array_keys($route)[0]];
  }

  private static function get_main_path(string $url)
  {
    $main_url = explode("?", $url);

    return is_string($main_url) ? $main_url : $main_url[0];
  }
}

?>