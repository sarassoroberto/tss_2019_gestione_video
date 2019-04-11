<?php
/**
 * classe di routing
 * http://localhost:5500/index.php?controller=gestione_utenti
 * http://localhost:5500/index.php?controller=non_esiste
 *
 */
class Router
{

    public static function getRoute()
    {
        try {
            $controller = filter_input(INPUT_GET, 'controller');
            $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING, array('default' => Config::DEFAULT_ACTION));

            if (empty($controller)) {
                $controller = Config::DEFAULT_CONTROLLER;
            }

            if (empty($action)) {
                $action = Config::DEFAULT_ACTION;
            }

            $controllerName = ucfirst($controller) . '_controller';

            if (!method_exists($controllerName, $action)) {
                header("HTTP/1.0 404 Not Found");
                die();
            }

            $controller_attivo = new $controllerName();
            $controller_attivo->$action();

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @example
     *  Router::link('controller/action/key/value/key2/value2');
     *  Router::link('gestione_utenti/tutti/key/value/key2/value2');
     *
     *  link("gestione_utenti/tutti")
     *  link("gestione_utenti/elimina/id")
     *  link("gestione_utenti/elimina/id")
     *
     * @param [type] $url_str
     * @return void
     */
    public static function link($url_str)
    {

        $url_parts = explode('/', $url_str);

        $controller_action_parts = array_splice($url_parts, 0, 2);

        $query = http_build_query(array(
            'controller' => $controller_action_parts[0],
            'action' => $controller_action_parts[1],
        ));

        $params = array();

        while (count($url_parts)) {
            list($key, $value) = array_splice($url_parts, 0, 2);
            $params[$key] = $value;
        }

        $params_query = http_build_query($params);

        echo 'index.php?' . $query . '&' . $params_query;
    }

}
