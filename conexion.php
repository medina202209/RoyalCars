<?php

//definir varibles con datos de servidor y la base de datos
$server = 'localhost';
$users = 'root';
$password = '';
$bd = 'alquiler_vehiculos';

//se crea conexion a la BD
$conexion = new mysqli($server, $users, $password, $bd);

//validar conexión
if ($conexion->connect_error) {

    die('Error en la conexion' . $conexion->connect_error);
};