<?php
class Autore implements \JsonSerializable
{
    private $id_autore;
    private $nome;
    private $cognome;
    private $email;
    private $data_nascita;
    private $avatar;
    private $verifica;



    /**
     * Get the value of verifica
     */
    public function getVerifica()
    {
        return $this->verifica;
    }

    /**
     * Set the value of verifica
     *
     * @return  self
     */
    public function setVerifica($verifica)
    {
        $this->verifica = $verifica;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function  jsonSerialize()
    {

        return get_object_vars($this);
    }
}
