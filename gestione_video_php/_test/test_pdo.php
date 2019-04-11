<?php
require '../__autoload.php';




try {

    $autoreDao = new AutoreDao();
    $autore = $autoreDao->read(6);

    $autore->nome = 'nome cabiato con update';
    $autore->cognome = 'nome cabiato con update';
    $autore->verifica = true;
    $autore->data_nascita = 'dsòfj òjdsf j';

    $autoreDao->update($autore);

    //code...
} catch (PDOException $e) {
    echo $e->getMessage();
}
