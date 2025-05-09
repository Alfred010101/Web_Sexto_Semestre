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

        default:
            echo 'No existe esa petición';
    }
?>