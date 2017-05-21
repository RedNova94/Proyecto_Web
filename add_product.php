<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 12:40 PM
 */
<<<<<<< HEAD
session_start();
=======

>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="./css/style_sign.css">
<?php }

<<<<<<< HEAD
include_once('session_header.php');
?>

=======
include_once('header.php');
?>
>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
<table align="center">
    <td align="center" colspan="1" rowspan="1">
        <div class="text-center" style="padding:50px 0">
            <div class="logo"><i>Registrar Disco<i></i></div>
            <!-- Main Form -->
            <div class="login-form-1">
<<<<<<< HEAD
                <form id="login-form"  class="text-left" action="new_disc.php" method="post">
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <input type="text" class="form-control" id="add_titulo" name="add_titulo" placeholder="titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="add_artista" name="add_artista" placeholder="artista">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="add_descripcion" name="add_descripción" placeholder="descripcion">
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" id="add_recio" name="add_precio" placeholder="precio">
                            </div>
                        </div>
                    <div>
                        <p></p>
                    </div>
                        <button type="submit"><i>Agregar</i></button>
                    </div>
=======
                <form id="login-form"  class="text-left" method="post">
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Titulo" placeholder="titulo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Artista" placeholder="artista">
                            </div>

                        <div clas="form-group">
                            <input type="text" class="form-control" name="Descripción" placeholder="descripcion">
                        </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="Precio" placeholder="precio">
                            </div>
                            </div>
                        <div><p></p></div>
                        <button type="submit"><i>agregar</i></button>
                    </div>

>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
                </form>
            </div>
        </div>
    </td>
</table>
<<<<<<< HEAD

<?php
include_once('footer.php');
?>
=======
>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
