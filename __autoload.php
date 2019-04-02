<?php
spl_autoload_register(function ($nome_classe_cercata) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'class/' . $nome_classe_cercata . '.php';
    // echo $path . "<br>";
    if (file_exists($path)) {

        include $path;
    }
});

spl_autoload_register(function ($nome_classe_cercata) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'controller/' . $nome_classe_cercata . '.php';
    //echo "autoload del controller: " . $path . "<br>";
    if (file_exists($path)) {

        include $path;
    }
});

spl_autoload_register(function ($nome_classe_cercata) {
    $path = __DIR__ . DIRECTORY_SEPARATOR . 'class/interfaces/' . $nome_classe_cercata . '.php';
    if (file_exists($path)) {
        include $path;
    } // echo $path . "<br>";
});
