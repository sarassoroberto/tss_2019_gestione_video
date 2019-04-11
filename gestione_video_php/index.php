<?php
require './config.php';
require './__autoload.php';
require './vendor/autoload.php';

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
//index.php?controller=gestione_utenti&action=tutti

/**
 * gestione_utenti
 *  - visualizzotutti
 *  - visualizzo solo quelli attivi
 */

//error_reporting(E_ALL);
//gestione_utenti

$controller = filter_input(INPUT_GET, 'controller');
//tutti
$action = filter_input(INPUT_GET, 'action');

$controllerName = ucfirst($controller) . '_controller';

//echo $controllerName . "<br>";
/**
 * @todo: definire un controller predefinito, o impostare la risposta http con codice 404
 */

$controller_attivo = new $controllerName();
$controller_attivo->$action();
