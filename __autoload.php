<?php
spl_autoload_register(function ($nome_classe_cercata) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'class/' . $nome_classe_cercata . '.php';
    // echo $path . "<br>";
    require $path;
});


// new DatasetJSON();
