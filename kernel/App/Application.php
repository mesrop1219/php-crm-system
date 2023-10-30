<?php

namespace Kernel\App;

use Kernel\Router\Router;
use Kernel\Views\Views;

class Application
{
  public static function init(array $urls)
  {
    Views::init_template_configs();
    Router::init_routes($urls);
  }

  public static function listen()
  {
    Router::listen();
  }
}

?>