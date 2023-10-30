<?php

namespace App\Auth\Controllers;

use Kernel\Views\Views;

class RenderController
{
  public function render_login_page()
  {
    return Views::render_template("auth/login.html");
  }

  public function render_register_page()
  {
    return Views::render_template("auth/register.html");
  }
}

?>