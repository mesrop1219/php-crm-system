<?php

namespace App\Auth\Controllers;

use App\Auth\Services\AuthService;
use Kernel\Views\Views;

class AuthController
{
  private AuthService $service;

  public function __construct()
  {
    $this->service = new AuthService();
  }

  public function add_user()
  {
    try {
      $this->service->create_user([
        "email" => $_POST["email"],
        "password" => $_POST["password"],
        "name" => $_POST["name"],
        "lastname" => $_POST["lastname"],
        "role" => $_POST["role"]
      ]);

      return header("Location: /auth/login");
    } catch (\Throwable $th) {
      return Views::render_template("auth/register.html", ["error" => "Sorry but email is used!"]);
    }
  }

  public function login_user()
  {
    $user = $this->service->get_user($_POST["email"]);
    $password = password_verify($_POST["password"], $user[0]["password"]);

    if ($user && $password) {
      setcookie("user", json_encode($user), 0, "/");
      return header("Location: /");
    }

    return Views::render_template("auth/login.html", ["error" => "Sorry but email or password not correct!"]);
  }

  public function logout()
  {
    setcookie("user", "", 0, "/");
    header("Location: /");
  }
}