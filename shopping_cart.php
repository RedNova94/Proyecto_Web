<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 10:07 AM
 */
$PageTitle="Carrito";
    session_start();
    include_once ("session_header.php");

include "database/database_connection.php";
$sql_query = "SELECT * FROM Inventory WHERE id=''";
$resultado = mysqli_query($conexion, $sql_query);

while ($row = mysqli_fetch_array($resultado)){?>
    <div class="box cd">
        <table>
            <tr>
                <td><strong> TITULO </strong></td>
                <td> <?php echo $row['product_name'] ?> </td>
            </tr>
            <tr>
                <td><strong> ARTISTA </strong></td>
                <td> <?php echo $row['product_artist'] ?> </td>
            </tr>
            <tr>
                <td><strong> DESCRPICION </strong></td>
                <td> <?php echo $row['product_description'] ?> </td>
            </tr>
            <tr>
                <td><strong> PRECIO </strong></td>
                <td> <?php echo $row['product_price'] ?> </td>
            </tr>
        </table>
    </div>

    <br>
    <br>

<?php } ?>


<div class="box">
    <div class="box-content">
        <h1 class="tag-title">Carrito</h1>
        <hr />
        <p>


        </p>  <br />
        <a href="catalogo.php" class="btn btn-block btn-primary">Volver al catálogo</a>
    </div>
</div>
