<?php

use App\Todo\Controllers;
use Kernel\Router\Route;
use Kernel\Types\Methods;

$render_controller = new Controllers\RenderController();
$todo_controller  = new Controllers\TodoController();

$todo_urls = [
  new Route("/todo", Methods::GET, [$render_controller, "render_todo_page"]),
  new Route("/todo/update", Methods::GET, [$render_controller, "update_todo_page"]),
  new Route("/todo/update", Methods::POST, [$todo_controller, "edit_todo"]),
  new Route("/todo/create", Methods::POST, [$todo_controller, "add_todo"]),
  new Route("/todo/drop", Methods::GET, [$todo_controller, "drop_todo"]),
];

?>