<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 4/15/2017
 * Time: 6:34 PM
 */

    $username = $_POST['lg_username'];
    $password = $_POST['lg_password'];
    include ("database/database_connection.php");
    $sql_query = "SELECT username, password, email, admin FROM users WHERE username ='" . $username. "' 
                AND password ='" . $password . "'";

    $resultado = mysqli_query($conexion, $sql_query);
    $row = mysqli_fetch_array($resultado);
    mysqli_close($conexion);

    if (mysqli_num_rows($resultado) > 0) {
        $email = $row['email'];
        $priviledge = $row['admin'];
        session_start();
        $_SESSION["shadowplay_username"] = $username;
        $_SESSION["shadowplay_password"] = $password;
        $_SESSION["shadowplay_email"] = $email;
        $_SESSION["shadowplay_priviledge"] = $priviledge;
        $_SESSION["shadowplay_islog"] = true;
        header("location: index.php");
    } else {
        echo "<script>
        alert('Usuario o Contraseña incorrectos');
        window.location.href='sign_in.php';
        </script>";
    }


?>