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

        public function listar_usuarios(){   
            console.log("hola como aquii")         
            $query = "SELECT id, nombre, carrera FROM user";
            $sql = Conexion::conectar()->prepare($query);
            console.log($sql)
            if($sql->execute()){
                $rows = $sql->fetchAll(\PDO::FETCH_OBJ);
                
                return json_encode($rows);
            }else{
                return false;
            }
        }
    }

?>