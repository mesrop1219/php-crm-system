<?php

require_once MAIN_DIR . "/src/Static/StaticUrls.php";
require_once MAIN_DIR . "/src/Auth/AuthUrls.php";
require_once MAIN_DIR . "/src/Panel/PanelUrls.php";
require_once MAIN_DIR . "/src/Todo/TodoUrls.php";

$main_urls = [
  ...$static_urls,
  ...$auth_urls,
  ...$panel_urls,
  ...$todo_urls,
];

?>