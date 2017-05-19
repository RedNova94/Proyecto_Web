<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 10:07 AM
 */
$PageTitle="Carrito";

if (isset($_SESSION['shadowplay_username'])) {
    include_once ("header.php");
} else {
    include_once ("session_header.php");
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
        <a href="disc_catalog.php" class="btn btn-block btn-primary">Volver al catálogo</a>
    </div>
</div>
