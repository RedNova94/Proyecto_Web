<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 4/15/2017
 * Time: 7:45 PM
 */

if($_POST['reg_username']=="" || $_POST['reg_password']== "" || $_POST['reg_password_confirm']== "" || $_POST['reg_email']=="") {

    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='../sign_up.php';
    </script>";
}
else if($_POST['reg_password'] != $_POST['reg_password_confirm']) {
    echo "<script>
        alert('Las contraseñas no coinciden');
        window.location.href='../sign_up.php';
        </script>";
} else {
    include("database/database_connection.php");
    $sql_query = "INSERT INTO users (username, password, email) VALUES ('" . $_POST["reg_username"] . "', '"
        . $_POST["reg_password"] . "', '" . $_POST["reg_email"] . "')";

    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    header("location: index.php");
}
?>