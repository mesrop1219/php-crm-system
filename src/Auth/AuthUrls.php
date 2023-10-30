<?php

use App\Auth\Controllers;
use App\Auth\Middlewares;
use Kernel\Router\Route;
use Kernel\Types\Methods;


$render_controller = new Controllers\RenderController();
$auth_controller = new Controllers\AuthController();
$auth_middleware = new Middlewares\AuthMiddleware(); 

$auth_urls = [
  new Route("/auth/login", Methods::GET, [$render_controller, "render_login_page"], [
    [$auth_middleware, "check_user_state"]
  ]),
  new Route("/auth/register", Methods::GET, [$render_controller, "render_register_page"], [
    [$auth_middleware, "check_user_state"]
  ]),
  new Route("/auth/logout", Methods::GET, [$auth_controller, "logout"]),
  new Route("/auth/register", Methods::POST, [$auth_controller, "add_user"], [
    [$auth_middleware, "validation"]
  ]),
  new Route("/auth/login", Methods::POST, [$auth_controller, "login_user"]),
];

?>