<?php
/**
 * nota: abbiamo impostato una costante SITE_URL
 * che contiene il percorso (url) dell'appicazione
 * php in generale, è serve per formare tutti gli url
 * assoluti dell'applicazione.
 * 
 * FIX: corregge il problema dei percorsi relativi dei
 * template che partono tutti da ./view perchè abbiamo usato
 * dentro il template (twig) base.html 
 * 
 *  <base href="view/"> (nell'head dell'html)
 * 
 */

/**
 * nota: ogni volta che l'applicazione verrà eseguita in un ambiente diverso bisogna assicurarsi che SITE_URL
 * sia valorizzata in maniera corretta:
 * Es: 
 * quando sono su easy php
 * define('SITE_URL', 'http://127.0.0.1:8000/edsa-tss/');
 * 
 * se metto il sito online su un dominio es. http://www.gestione_video/
 * define('SITE_URL', 'http://www.gestione_video/');
 * 
 * ecc.. 
 */


define('SITE_URL', 'http://localhost:5500/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'gestione_video');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
