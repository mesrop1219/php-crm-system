<?php

namespace App\Todo\Controllers;

use App\Todo\Services\TodoService;
use Kernel\Views\Views;

class RenderController
{
  private TodoService $service;

  public function __construct()
  {
    $this->service = new TodoService();  
  }

  public function render_todo_page()
  {
    $user = json_decode($_COOKIE["user"])[0];
    $todos = $this->service->read_todos(json_decode($user->id));
    return Views::render_template("todo/todo.html", ["todos" => $todos]);
  }

  public function update_todo_page()
  {
    return Views::render_template("todo/update_todo.html", [ "todo" => $_GET["todo"], "id" => $_GET["id"] ]);
  }
}

?>