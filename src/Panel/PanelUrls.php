<?php

use App\Panel\Controllers;
use Kernel\Router\Route;
use Kernel\Types\Methods;

$render_controller = new Controllers\RenderController();

$panel_urls = [
  new Route("/panel", Methods::GET, [$render_controller, "render_panel_page"]),
];

?>