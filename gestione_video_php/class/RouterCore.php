<?php
/**
 * Gestisce tutte le funzonalità per l'instradamento corretto dell'applicazione
 * 
 */
class RouterCore
{
    /**
     * Utility per la creazione dei link dell'applicazione
     *
     * @param string $controller deve essere un controller esistente (./controller/<nome>_controller.php)
     * @param string $action deve essere un metodo esistente del controller attivo
     * @param array  $parameter (opzionale) array associativo di parametri che verranno convertiti in una querystring
     * @return string $url url corretto per poter iniazilzzare un controller  
     */
    public static function link($controller, $action, $parameter = [])
    {
        $query_string_parameter = http_build_query($parameter);
        $url = SITE_URL . "index.php?controller=$controller&action=$action&$query_string_parameter";

        return $url;
    }
}
