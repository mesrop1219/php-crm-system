<?php

namespace App\Todo\Controllers;

use App\Todo\Services\TodoService;
use Kernel\Views\Views;

class TodoController
{
  private TodoService $service;

  public function __construct()
  {
    $this->service = new TodoService();
  }

  public function add_todo()
  {
    try {
      $this->service->create_todo($_POST["todo"], json_decode($_COOKIE["user"])[0]->id);
      header("Location: /todo");
    } catch (\Throwable $th) {
      return Views::render_template("todo/todo.html", [
        "error" => "Sorry but todo can't be more than 50 symbols!",
        "todos" => $this->service->read_todos(json_decode($_COOKIE["user"])[0]->id),
      ]);
    }
  }


  public function drop_todo()
  {
    try {
      $this->service->delete_todo(intval($_GET["id"]));
      header("Location: /todo");
    } catch (\Throwable $th) {
      return Views::render_template("todo/todo.html", [
        "error" => "Sorry but todo can't be more than 50 symbols!",
        "todos" => $this->service->read_todos(json_decode($_COOKIE["user"])[0]->id),
      ]);
    }
  }

  public function edit_todo()
  {
    try {
      $this->service->update_todo($_POST["todo"], $_POST["id"]);
      header("Location: /todo");
    } catch (\Throwable $th) {
      return Views::render_template("todo/update_todo.html", [
        "error" => "Sorry but todo can't be more than 50 symbols!",
        "todo" => $_POST["todo"],
        "id" => $_POST["id"],
      ]);
    }
  }
}

?>