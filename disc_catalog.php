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
$filter_query = "SELECT * FROM inventory WHERE LIKE ";
$resultado = mysqli_query($conexion, $sql_query);

?>  <input id="search" type="text" name="search" placeholder="Buscar.."> <br /> <?php

while ($row = mysqli_fetch_array($resultado)){ ?>
    <div class="cd">
      <div class="cd-content">
        <h3><?php echo $row['product_name']; if(isset($_SESSION["shadowplay_islog"])) {
          ?> <a id="editlink" href="modify.php?cd=<?php echo $row['product_id'] ?>">
            <img src="images/pencil.png" id="edit" /></a>
        <?php } ?>
         </h3>
        <hr />
        <img src="<?php echo $row['product_image'] ?>" class="art"/>
        <div class="about">


        <h4><?php echo $row['product_artist'] ?> </h4>
        <p>
          $<?php echo $row['product_price'] ?>
        </p>
        <?php
        if(isset($_SESSION["shadowplay_islog"])) { ?>
            <form action="shopping_cart.php" method="post">
                <input type="hidden" value="<?php echo $row['product_id'] ?>" id="cd_id" name="cd_id">
                <input type="submit" value="Comprar">
            </form>
        <?php } ?>
        </div>
      </div>
    </div>
<script>
document.getElementById('search').onkeyup = function(){

  var search_query = document.getElementById('search').value.toLowerCase();
  var all_divs = document.getElementsByClassName('cd');
  if(search_query){

    for ( i = 0; i < all_divs.length; i++ ){
      if(!all_divs[i].textContent.toLowerCase().includes(search_query)){
        all_divs[i].style.display = 'none';
      }
    }
  }else{
    for ( i = 0; i < all_divs.length; i++ ){
      all_divs[i].style.display = 'inline-block';

    }
  }
}

</script>
<?php }
include_once('footer.php');
?>
