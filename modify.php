<?php
  $PageTitle = "Modificar producto";
  function customPageHeader(){?>
     <link rel="stylesheet" href="css/style_mod.css">
<link rel="stylesheet" href="css/style_sign.css">
     <?php
  }

  session_start();

  if(isset($_SESSION["shadowplay_islog"])) {
      include_once ("session_header.php");
  } else {
    include_once ("header.php");
  }
  include "database/database_connection.php";

  $sql_query = "SELECT * FROM inventory WHERE product_id='" . $_GET['cd'] . "'";

  $resultado = mysqli_query($conexion, $sql_query);
  $row = mysqli_fetch_array($resultado);
  mysqli_close($conexion);

?>

<div id="main-wrap">
  <div id="new-content">
    <table align="center">
        <td align="center" colspan="1" rowspan="1">
            <div class="text-center" style="padding:50px 0">
                <div class="logo"><i>Modificar disco<i></i></div>
                <!-- Main Form -->

                    <form id="login-form" action="functions/modify_disc.php" class="text-left" method="post">
                        <div class="main-login-form">
                            <div class="login-group">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="mod_precio" name="add_precio" placeholder="precio">
                                </div>
                            </div>
                        <div>
                            <p></p>
                        </div>
                            <form action="functions/modify_disc.php" method="post">
                                <input type="hidden" value="<?php echo $row['product_id'] ?>" id="cd_id" name="cd_id">
                                <input type="submit" value="Guardar Cambios">
                            </form>
                            <br>
                            <br>
                            <br>
                        </div>
                    </form>
                <form action="functions/delet_disc.php" method="post">
                    <input type="hidden" value="<?php echo $row['product_id'] ?>" id="cd_id" name="cd_id">
                    <input type="submit" value="Eliminar Disco">
                </form>
                </div>
            </div>
        </td>
    </table>
  </div>

  <div id="old-content">
    <div class="cd">
      <div class="cd-content">
        <h3>Producto a modificar</h3>
        <hr />
        <img src="<?php echo $row['product_image'] ?>" class="art"/>
        <div class="about">

        <h3><?php echo $row['product_name'] ?></h3>

        <h4><?php echo $row['product_artist'] ?> </h4>
        <p>
          $<?php echo $row['product_price'] ?>
        </p>

        </div>
      </div>
    </div>
  </div>
<br>
<center><button onclick="window.location='disc_catalog.php'">Regresar</button></center>

</div>

<?php
include_once('footer.php');
?>
