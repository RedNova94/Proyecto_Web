<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 12:40 PM
 */
session_start();
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="./css/style_sign.css">
<?php }

include_once('session_header.php');
?>

<table align="center">
    <td align="center" colspan="1" rowspan="1">
        <div class="text-center" style="padding:50px 0">
            <div class="logo"><i>Registrar Disco<i></i></div>
            <!-- Main Form -->
            <div class="login-form-1">
                <form id="login-form"  class="text-left" action="new_disc.php" method="post">
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Titulo" name="Titulo" placeholder="titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Artista" name="Artista" placeholder="artista">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="Descripcion" name="Descripción" placeholder="descripcion">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="Precio" name="Precio" placeholder="precio">
                            </div>
                        </div>
                    <div><p></p></div>
                        <button type="submit"><i>Agregar</i></button>
                    </div>

                </form>
            </div>
        </div>
    </td>
</table>

<?php
include_once('footer.php');
?>