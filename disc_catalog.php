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
        <h2><?php echo $row['product_name'] ?></h2>
        <hr />
        <img src="<?php echo $row['product_description'] ?>" style="width: 30%; height: 30%;"/>

        <h4><?php echo $row['product_artist'] ?> </h4>
        <p>
          <?php echo $row['product_price'] ?>
        </p>

        <a href="Carrito.php?id=<?php echo $row['product_id']?> " target="rightframe"><button type="submit"><i>Comprar</i></button></a></td>
        </div>
    </div>

<?php }
include_once('footer.php');
?>
