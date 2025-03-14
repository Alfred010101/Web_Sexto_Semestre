<?php
    require_once "../config/conexion.php";
    class Formulario extends Conexion{
        public function _construct(){

        }

        public function altaUsuario($nombre, $carrera, $tipo){
            $query = "INSERT INTO user (nombre, carrera, tipo) VALUES ('$nombre', '$carrera', '$tipo')";
            $sql = Conexion::conectar()->prepare($query);
            if($sql->execute()){
                return $sql;
            }else{
                return false;
            }
        }
    }

?>