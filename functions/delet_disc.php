<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/23/2017
 * Time: 6:52 PM
 */
include('database/database_connection.php');
$id = $_POST['cd_id'];
$sql_query = "DELETE FROM inventory WHERE product_id='$id' ";

mysqli_query($conexion, $sql_query);
mysqli_close($conexion);

header("location: disc_catalog.php");

?>