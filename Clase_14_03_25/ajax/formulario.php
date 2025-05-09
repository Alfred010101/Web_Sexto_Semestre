<?php
    require_once "../model/formulario.php";
    $operaciones = new Formulario();
    $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : "";
    $carrera = isset($_POST['carrera']) ? ($_POST['carrera']) : "";
    $tipo = isset($_POST['tipo']) ? ($_POST['tipo']) : "";

    switch($_GET['option']){
        case 'alta_usuario':
            $respuesta = $operaciones->altaUsuario($nombre, $carrera, $tipo);
            echo $respuesta ? 'OK' : 'Fail';
            break;
        case 'listar_usuarios':
            console.log("hola como estas");
            $res = $operaciones->listar_usuarios();
            $data=[];
            
            foreach (json_decode($res) as $clave => $val) {
                $data[$clave] = ["nombre" => $val->nombre, "carrera" => $val->carrera, "boton" => '<button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button><button type="button" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>'];
            }
            
            echo json_encode(["data" => $data]);
        default:
            echo 'No existe esa petición';
    }
?>