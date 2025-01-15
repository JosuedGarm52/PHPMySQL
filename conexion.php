<?php
    $config = include('config.php');

    if ($config === false) {
        die('No se pudo incluir el archivo de configuración.');
    }

    if (!is_array($config)) {
        die('El archivo de configuración no devolvió un array válido.');
    }

    $server = $config['host'];
    $db = $config['dbname'];
    $user = $config['username'];
    $pass = $config['password'];

    $conexion = new mysqli($server, $user, $pass, $db);

    if ($conexion->connect_error) { 
        die("Conexion Fallida" . $conexion->connect_error);
    }else{
        echo "conectado";
    }
?>