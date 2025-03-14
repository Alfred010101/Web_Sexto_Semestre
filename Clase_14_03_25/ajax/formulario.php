<?php
    require_once "../model/formulario.php";
    $operaciones = new Formulario();
    $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : "";
    $carrera = isset($_POST['carrera']) ? ($_POST['carrera']) : "";
    $tipo = isset($_POST['tipo']) ? ($_POST['tipo']) : "";

    switch($_GET['opcion']){
        case 'ingresa_usuario':
            $respuesta = $operaciones->altaUsuario('Luis','ISW', '1');
            echo $respuesta ? 'OK' : 'Fail';
            break;

        default:
            echo 'No existe esa petición';
    }
?>