<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/16/2017
 * Time: 11:27 AM
 */

$servidor = "localhost";
$usuario = "root";
$contrasena = "chalo123";
$basedatos = "shadowplay";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
    die("Fallo: " . mysqli_connect_error());
}
