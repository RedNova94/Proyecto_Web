<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/22/2017
 * Time: 9:36 AM
 */

include ('database/database_connection.php');
$sql_query = "DELETE FROM users WHERE username='.$_GET[id]' ";

mysqli_query($conexion, $sql_query);
mysqli_close($conexion);

header("location: index.php");

?>