<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 4/15/2017
 * Time: 6:34 PM
 */

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "shadowplay";

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
if (!$conexion) {
    die("Fallo: " . mysqli_connect_error());
}

$sql_query = "SELECT username, password FROM users WHERE username ='" . $_REQUEST["lg_username"] . "' 
                AND password ='" . $_REQUEST["lg_password"] . "'";

$resultado = mysqli_query($conexion, $sql_query);
mysqli_close($conexion);

if (mysqli_num_rows($resultado) > 0) {
    header("location: index.php");
} else {
    echo "<script>
    alert('Usuario o Contraseña incorrectos');
    window.location.href='sign_in.php';
    </script>";
}

?>