<?php

namespace Kernel\Router;

use Kernel\Router\Traits\useRouter;
use Kernel\Views\Views;

class Router
{
  use useRouter;

  public static function init_routes(array $routes)
  {
    foreach ($routes as $route) {
      self::add_route($route);
    }
  }

  public static function listen()
  {
    try {
      $main_url = self::get_main_path($_SERVER["REQUEST_URI"]);
      $route = self::find_route($main_url, $_SERVER["REQUEST_METHOD"]);

      foreach ($route->middlewares as $middleware) {
        $middleware() === FALSE ? die(): null;
      }
      
      ($route->controller)();
    } catch (\Throwable $th) {
      // echo $th->getMessage();
      Views::render_template("sys/404.html");
    }
  }
}

?>