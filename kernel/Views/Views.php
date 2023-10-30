<?php

namespace Kernel\Views;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Views
{
    private static FilesystemLoader $loader;
    private static Environment $twig;

    public static function init_template_configs()
    {
        self::$loader = new FilesystemLoader(MAIN_DIR . "/templates");
        self::$twig = new Environment(self::$loader, ["debug" => DEBUG]);
    }

    public static function render_template(string $template_path, array $params = [])
    {
        echo self::$twig->render($template_path, $params);
    }
}

?>