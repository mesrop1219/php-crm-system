<?php

namespace App\Static\Controllers;

use Kernel\Views\Views;

class StaticController
{
  public function render_home_page()
  {
    return Views::render_template("static/home.html");
  }
}

?>