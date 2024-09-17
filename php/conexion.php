<?php

function conectar()
{
    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $bd = 'pract';

    try {
        $conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
        
        if (!$conexion) {
            throw new Exception("Error en la conexión: " . mysqli_connect_error());
        }
        
    } catch(Exception $e) {
        $conexion = false;
        echo '<p>Error en la conexión, comuníquese con su Administrador.</p>';
    }

    return $conexion;
}

function desconectar($conexion) 
{
    if ($conexion) {
        mysqli_close($conexion);
    } else {
        echo '<p>No se pudo desconectar porque no hay conexión abierta.</p>';
    }
}

?>
