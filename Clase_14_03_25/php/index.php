<?php
    require_once "operaciones.php";
    $nombre = "Alfred";
    $numero = 32;
    $bolean = false;
    $real = 34.1214;

    echo "Nombre: $nombre, Numero: $numero, Boolean: $bolean, Real: $real";

    $array = array('12', '3', '5', '93');
    echo var_dump($array);

   
    
    $operaciones = new Operaciones();

    if( $operaciones->resta(3, 3) < 0 ){
        echo "El numero es menor a 0";
    }else{
        echo "El numero es mayor a 0";
    }
    
    echo "<br>Resultado de Suma ", $operaciones->suma(3, 3);
    echo "<br>Resultado de Resta ", $operaciones->resta(3, 3);
?>