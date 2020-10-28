<?php

class Conexion{

    public static function conectar(){
        $conect = new PDO("mysql: host=localhost; dbname=zapateria; charset=utf8", "root", "");
        $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conect;

    }
}


?>