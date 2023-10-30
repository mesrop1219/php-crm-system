<?php

use App\Static\Controllers;
use Kernel\Router\Route;
use Kernel\Types\Methods;

$render_controller = new Controllers\StaticController();

$static_urls = [
  new Route("/", Methods::GET, [$render_controller, "render_home_page"])
];

?>