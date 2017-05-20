<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 10:07 AM
 */
$PageTitle="Carrito";

session_start();
if($_SESSION["shadowplay_islog"]) {
    include_once ("session_header.php");
} else {
    include_once ("header.php");
}

?>


<div class="box">
    <div class="box-content">
        <h1 class="tag-title">Carrito</h1>
        <hr />
        <p>
            Productos:
            -
            -
            -

        </p>  <br />
        <a href="catalog.php" class="btn btn-block btn-primary">Volver al catálogo</a>
    </div>
</div>
