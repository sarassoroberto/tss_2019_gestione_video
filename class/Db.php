<?php
require '../config.php';

/**
 * classe connesione al database
 * singleton
 * $pdo = Db::getInstance();
 * $pdo2 = Db::getInstance();
 * var_dump(boolval($pdo == $pdo2));
 */

class Db
{
    private static $instance = null;
    private function __construct()
    { }

    public static function getInstance()
    {
        if (!self::$instance) {

            try {

                self::$instance = new PDO(
                    "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
                    DB_USER,
                    DB_PASSWORD,
                    []
                );
                //echo "connesso";
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

    private function __clone()
    { }
}
