<?php

class Gestione_utenti_controller
{
    private $view ;
    public function __construct()
    {
        //echo "sono il costruttore: " . __CLASS__ . " " . __FUNCTION__ . '<br>';
        $this->view = new ViewCore();
    }

    public function tutti()
    {
        //echo "sono il metodo tutti: " . __CLASS__ . " " . __FUNCTION__ . '<br>';

        $utentiDao = new AutoreDao();
        $res = $utentiDao->read();

        $this->view->render( 'gestione_utenti/tutti_gli_utenti.html',['autori' => $res]);

      
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
