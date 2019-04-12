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


        $loader = new \Twig\Loader\FilesystemLoader('./view');
        $twig = new \Twig\Environment($loader);

        echo $twig->render(
            'gestione_utenti/tutti_gli_utenti.html',
            ['autori' => $res]
        );
        //print_r($twig);
    }

    public function eliminaAutore()
    {
        $id_autore = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
        echo "elimina autore $id_autore";

        if ($id_autore) {
            $dao = new AutoreDao();
            $dao->delete($id_autore);
        }
        // "gestione_utenti/tutti"
        $url = "index.php?controller=gestione_utenti&action=tutti";
        //header("Location: $url");
    }
}
