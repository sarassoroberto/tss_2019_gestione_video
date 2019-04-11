<?php
/**
 * classe di routing
 * http://localhost:5500/index.php?controller=gestione_utenti
 * http://localhost:5500/index.php?controller=non_esiste
 *
 */
class Router
{
    const ROUTE_ERROR_CONTROLLER_NOT_EXIST = 0;
    const ROUTE_ERROR_CONTROLLER_NOT_EXIST_MSG = 'Il controller richiesto non esiste';

    public static function getRoute()
    {
        try {
            $controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_STRING, array('default' => Config::DEFAULT_CONTROLLER));
            // var_dump(isset($controller));
            $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING, array('default' => Config::DEFAULT_ACTION));
            //var_dump(empty($action));

            // var_dump(class_exists($controllerName, true));
            //echo $controllerName;
            $controllerName = ucfirst($controller) . '_controller';

            if (!class_exists($controllerName, true)) {

                $controller_attivo = new $controllerName();
                if (method_exists($controller, $action)) {}
            } else {
                if (class_exists($controllerName, true)) {}
                throw new Exception(Router::ROUTE_ERROR_CONTROLLER_NOT_EXIST_MSG, Router::ROUTE_ERROR_CONTROLLER_NOT_EXIST);
            }

            $controller_attivo->$action();

            //echo $controllerName . "<br>";
            /**
             * @todo: definire un controller predefinito, o impostare la risposta http con codice 404
             */
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
