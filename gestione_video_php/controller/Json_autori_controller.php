<?php

class Json_autori_controller
{
    public function getAll()
    {
        header('Access-Control-Allow-Origin: *');
        //echo __CLASS__ . " -> " . __FUNCTION__;
        $autoreDao = new AutoreDao();
        $res = $autoreDao->read();

        //print_r($res);
        echo json_encode($res);
    }
}
