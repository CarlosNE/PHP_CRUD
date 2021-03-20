<?php

//require_once "Config.php";

class Database{
    public static PDO $gbd;
    public function __construct()
    {

        /* Conectar a una base de datos de MySQL invocando al controlador */
        try {
            $this->gbd = new PDO(Config::$dsn, Config::$username, Config::$password );
        } catch (PDOException $e) {
            echo "Falló la conexión: " . $e->getMessage();
        }
    }

}