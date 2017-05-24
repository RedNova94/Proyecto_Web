<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/22/2017
 * Time: 9:36 AM
 */

include('database/database_connection.php');
$id = $_POST['id'];
$sql_query = "DELETE FROM users WHERE username='$id' ";

mysqli_query($conexion, $sql_query);
mysqli_close($conexion);

header("location: show_users.php");

?>