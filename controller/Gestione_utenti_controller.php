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
        print_r($res);
    }
}
