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

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of data_nascita
     */
    public function getData_nascita()
    {
        return $this->data_nascita;
    }

    /**
     * Set the value of data_nascita
     *
     * @return  self
     */
    public function setData_nascita($data_nascita)
    {
        $this->data_nascita = $data_nascita;

        return $this;
    }

    /**
     * Get the value of avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set the value of avatar
     *
     * @return  self
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get the value of cognome
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set the value of cognome
     *
     * @return  self
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }

    /**
     * Get the value of id_autore
     */
    public function getId_autore()
    {
        return $this->id_autore;
    }

    /**
     * Set the value of id_autore
     *
     * @return  self
     */
    public function setId_autore($id_autore)
    {
        $this->id_autore = $id_autore;

        return $this;
    }
}
