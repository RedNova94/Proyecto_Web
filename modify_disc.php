<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/22/2017
 * Time: 11:46 PM
 */

$price = $_POST['add_precio'];
$id = $_POST['cd_id'];

if($_POST['add_precio']=="") {
    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='modify.php';
    </script>";
} else {
    include ('database/database_connection.php');
    $sql_query = "UPDATE inventory SET product_price= '$price'
                  WHERE product_id = '$id'";

    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    header("location: disc_catalog.php");

}