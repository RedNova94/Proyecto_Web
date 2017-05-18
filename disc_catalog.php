<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/18/2017
 * Time: 10:56 AM
 */

include "database/database_connection.php";
$sql_query = "SELECT * FROM Inventory";
$resultado = mysqli_query($conexion, $sql_query);

while ($row = mysqli_fetch_array($resultado)){ ?>
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
            
            
             <tr>
                <td> <a href="Carrito.php" target="rightframe"><button type="submit"><i>Comprar</i></button></a></td>
            </tr>
            
        </table>
    </div>

    <br>
    <br>

<?php } ?>
