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
    $basedatos = "ShadowPlay";

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
    if (!$conexion) {
        die("Fallo: " . mysqli_connect_error());
    }

    $username = $_REQUEST['lg_username'];
    $password = $_REQUEST['lg_password'];

    $sql_query = "SELECT username, password FROM users WHERE username ='" . $username. "' 
                AND password ='" . $password . "'";

    $resultado = mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    if (mysqli_num_rows($resultado) > 0) {
        echo "<script> window.location.href='index.php'; </script>";
    } else {
        echo "<script>
        alert('Usuario o Contraseña incorrectos');
        window.location.href='sign_in.php';
        </script>";
    }


?>