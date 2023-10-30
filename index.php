<?php

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/utils/utilsFacade.php";

use Kernel\App\Application;

Application::init($main_urls);
Application::listen();

?>