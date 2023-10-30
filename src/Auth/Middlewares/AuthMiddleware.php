<?php

namespace App\Auth\Middlewares;

use Kernel\Views\Views;

class AuthMiddleware
{
  public function validation()
  {
    if (mb_strlen($_POST["password"]) < 8) {
      Views::render_template("auth/register.html", ["error" => "Sorry but password more than 8 symbols!"]);
      return FALSE;
    }elseif ($_POST["password"] !== $_POST["confirm"]) {
      Views::render_template("auth/register.html", ["error" => "Sorry but passwords don't match!"]);
      return FALSE;
    }
  }

  public function check_user_state()
  {
    if ($_COOKIE["user"]) {
      header("Location: /");
      return FALSE;
    }
  }
}

?>