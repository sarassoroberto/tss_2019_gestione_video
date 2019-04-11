<?php
require './config.php';
require './__autoload.php';
require './vendor/autoload.php';

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);
//index.php?controller=gestione_utenti&action=tutti

Router::getRoute();
