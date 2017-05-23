<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/22/2017
 * Time: 11:46 PM
 */

$title = $_POST['add_titulo'];
$artist = $_POST['add_artista'];
$url = $_POST['add_imagen'];
$price = $_POST['add_precio'];
$id = $_COOKIE['cd_id'];

if($_POST['add_titulo']=="" || $_POST['add_artista']== "" || $_POST['add_imagen']== "" || $_POST['add_precio']=="") {
    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='modify.php';
    </script>";
} else {
    include ('database/database_connection.php');
    $sql_query = "UPDATE inventory SET product_title = '$title', product_artist= '$artist', product_image= '$url', product_price= '$price'
                  WHERE product_id = '$id'";

    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    echo $title, "", $artist, "", $url, "", $price, "", $id;

    header("location: disc_catalog.php");

}