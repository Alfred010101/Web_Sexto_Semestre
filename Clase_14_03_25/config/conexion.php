<?php
    require_once "variables.php";
    class Conexion{
        public function conectar(){
            $conexion = new PDO("mysql:host=".host.";dbname=".bd, user, password);
            $conexion->exec("set names utf8");
            return $conexion;
        } 
    }
?>