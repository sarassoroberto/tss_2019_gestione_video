<?php

class Gestione_utenti_controller
{
    public function __construct()
    {
        //echo "sono il costruttore: " . __CLASS__ . " " . __FUNCTION__ . '<br>';
    }

    public function tutti()
    {
        //echo "sono il metodo tutti: " . __CLASS__ . " " . __FUNCTION__ . '<br>';

        $utentiDao = new AutoreDao();
        $res = $utentiDao->read();

        //print_r($_SERVER);
        //print_r($res);
        // indica dove vengono messi i template
        $loader = new \Twig\Loader\FilesystemLoader('./view');
        $twig = new \Twig\Environment($loader);

        $persona = array(
            'nome' => 'paolo',
            'cognome' => 'verdi'
        );


        echo $twig->render('test.html', ['autori' => $res]);
        //print_r($twig);
    }
}
