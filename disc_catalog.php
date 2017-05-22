<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/18/2017
 * Time: 10:56 AM
 */
$PageTitle="Página Principal";
function customPageHeader(){?>
 <link rel="stylesheet" href="css/style_catalog.css">
<?php }
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
        <img src="<?php echo $row['product_image'] ?>" style="width: 50%; height: 50%;"/>

        <h4 class="about"><?php echo $row['product_artist'] ?> </h4>
        <p class="about">
          $<?php echo $row['product_price'] ?>
        </p>
        <?php
        if(isset($_SESSION["shadowplay_islog"])) { ?>
        <a class="about" target="rightframe" onclick="window.location ='shopping_cart.php?id=<?php echo $row['product_id'];?>'"><button type="submit"><i>Comprar</i></button></a></td>
        <?php } ?>
      </div>
    </div>

<?php }
include_once('footer.php');
?>
