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
$basedatos = "shadowplay";


if($_REQUEST['reg_username']=="" || $_REQUEST['reg_password']== "" || $_REQUEST['reg_password_confirm']== "" || $_REQUEST['reg_email']=="") {

    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='sign_up.php';
    </script>";
}
else if($_REQUEST['reg_password'] != $_REQUEST['reg_password_confirm']) {
    echo "<script>
        alert('Las contraseñas no coinciden');
        window.location.href='sign_up.php';
        </script>";
} else {
    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
    $sql_query = "INSERT INTO users (username, password, email) VALUES ('" . $_REQUEST["reg_username"] . "', '"
        . $_REQUEST["reg_password"] . "', '" . $_REQUEST["reg_email"] . "')";

    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    header("location: index.php");
}
?>