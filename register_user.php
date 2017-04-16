<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 4/15/2017
 * Time: 7:45 PM
 */

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "ShadowPlay";


if($_REQUEST['reg_username']=="" || $_REQUEST['reg_password']== "" || $_REQUEST['reg_password_confirm']== "") {

    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='nuevo.php';
    </script>";
}
else if($_REQUEST['contrasena'] != $_REQUEST['contrasena2']) {
    echo "<script>
        alert('Las contraseñas no coinciden');
        window.location.href='nuevo.php';
        </script>";
} else {
    $sentenciaSQL = "INSERT INTO usuarios (usuario, contrasena, nombre) VALUES ('" . $_REQUEST["usuario"] . "', '"
        . $_REQUEST["contrasena"] . "', '" . $_REQUEST["nombre"] . "')";

    header("location: header.php");
}
?>