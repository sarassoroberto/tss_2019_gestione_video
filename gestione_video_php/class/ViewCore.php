<?php
use Twig\TwigFunction;

class ViewCore
{
    /** istanza del motore di template */
    private $twig;
    public function __construct()
    {

        $loader = new \Twig\Loader\FilesystemLoader('./view');
        $this->twig = new \Twig\Environment($loader);
        $this->twig->addGlobal('site_url', SITE_URL);

        // {{ link(controller,action) }}
        // {{ link() }}
        $function = new TwigFunction('link', function ($controller, $action, $parameter) {

            print_r($parameter);

            $url = SITE_URL . "index.php?controller=$controller&action=$action";

            return $url;
        });



        $this->twig->addFunction($function);
    }

    public function render($template_path, $data = [])
    {
        return  $this->twig->render($template_path, $data);
    }
}
