<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/18/2017
 * Time: 10:56 AM
 */
$PageTitle="Página Principal";
function customPageHeader(){

}
session_start();
if(isset($_SESSION["shadowplay_islog"])) {
    include_once ("session_header.php");
} else {
    include_once ("header.php");
}

include "database/database_connection.php";
$sql_query = "SELECT * FROM inventory";
$resultado = mysqli_query($conexion, $sql_query);

while ($row = mysqli_fetch_array($resultado)){ ?>
    <div class="box cd">
      <div class="box-content">


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
                <td> <a href="shopping_cart.php?id=<?php echo $row['product_id']?> " target="rightframe"><button type="submit"><i>Comprar</i></button></a></td>
            </tr>
        </table>
        </div>
    </div>

<?php }
include_once('footer.php');
?>
