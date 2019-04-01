<?php
class Autore
{
    private $id_autore;
    private $nome;
    private $cognome;
    private $email;
    private $data_nascita;
    private $avatar;
    private $verifica;

    public  function __set($proprieta, $valore)
    {
        // echo "proprieta: $proprieta -> $valore";
        //nome  : $this->nome 
        $this->$proprieta = $valore;
    }
    public  function &__get($proprieta)
    {
        
        
        return $this->$proprieta;
    }
}

 