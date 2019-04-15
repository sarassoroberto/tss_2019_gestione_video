<?php
class ViewCore 
{
    private $engine;   
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('./view');
        $this->engine = new \Twig\Environment($loader);

        $this->engine->addGlobal('site_url', SITE_URL);

        $function = new \Twig\TwigFunction('link', function ($controller='',$action='',$param=[]) {
            $param=http_build_query($param);
            return SITE_URL."?controller=$controller&action=$action&$param";
        });

        $this->engine->addFunction($function);
          
    }

    public function render($path,$data)
    {
        echo $this->engine->render($path,$data); 
    }

    public static function link(){

    }
}
