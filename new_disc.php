<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/20/2017
 * Time: 10:50 AM
 */

if($_POST['Titulo']=="" || $_POST['Artista']== "" || $_POST['Descripcion']== "" || $_POST['Precio']=="") {

    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='add_product.php';
    </script>";
} else {
    include ("database/database_connection.php");
    $sql_query = "INSERT INTO inventory (product_name, product_artist, product_description, product_price) 
                  VALUES ('" . $_POST["Titulo"] . "', '" . $_POST["Artista"] . "', '" . $_POST["Descripcion"] . "', '" . $_POST["Precio"] . "')";

    mysqli_query($conexion, $sql_query);
    mysqli_close($conexion);

    header("location: index.php");
}