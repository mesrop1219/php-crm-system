<?php

namespace App\Panel\Controllers;

use Kernel\Views\Views;

class RenderController
{
  public function render_panel_page()
  {
    return Views::render_template("panel/panel.html");
  }
}