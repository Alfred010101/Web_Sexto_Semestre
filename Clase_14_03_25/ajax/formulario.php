<?php
    require_once "../model/formulario.php";
    $operaciones = new Formulario();
    $id = isset($_POST['id']) ? ($_POST['id']) : "";
    $nombre = isset($_POST['nombre']) ? ($_POST['nombre']) : "";
    $carrera = isset($_POST['carrera']) ? ($_POST['carrera']) : "";
    $tipo = isset($_POST['tipo']) ? ($_POST['tipo']) : "";

    switch($_GET['option']){
        case 'alta_usuario':
            $respuesta = $operaciones->altaUsuario($nombre, $carrera, $tipo);
            echo $respuesta ? 'OK' : 'Fail';
            break;

        case 'listar_usuarios':
            $res = $operaciones->listar_usuarios();
            $data=[];
            foreach (json_decode($res) as $clave => $val) {
                $data[$clave] = [
                    "id" => $val->id,
                    "nombre" => $val->nombre,
                    "carrera" => $val->carrera,
                    "boton" => '
                        <button type="button" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger" onclick="eliminar_usuario(' . $val->id . ')">
                            <i class="bi bi-trash3-fill"></i>
                        </button>'
                ];                
            }
            echo json_encode(["data" => $data]);
            break;

        case 'editar_usuario':
            $respuesta = $operaciones->editar_usuario($nombre, $carrera, $tipo, $id);
            echo $respuesta ? 'OK' : 'Fail';
            break;

        case 'eliminar_usuario':
            $respuesta = $operaciones->eliminar_usuario($id);
            echo $respuesta ? 'Elimino carrectamente' : 'Fail';
            break;

        default:
            echo 'No existe esa petición';
    }
?>