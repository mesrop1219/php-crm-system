<?php

// with help of this we can off warnings
error_reporting(0);
define("MAIN_DIR", dirname(dirname(__DIR__)));
define("DEBUG", TRUE); // TRUE only for development mode
define("DSN", "mysql:host=database;dbname=lamp"); // for database configuration
define("USER", "lamp"); // for database configuration
define("PASSWORD", "lamp"); // for database configuration

?>