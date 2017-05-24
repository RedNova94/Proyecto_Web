<?php

$PageTitle="Página Principal";

session_start();
if(isset($_SESSION["shadowplay_islog"])) {
    include_once ("session_header.php");
} else {
    include_once ("header.php");
}

?>

<div class="box">
    <div class="box-content">
        <h1 class="tag-title">SHADOWPLAY</h1>
        <hr />
        <p>¡Bienvenido a la tienda Shadowplay! Aquí podrás encontrar discos de todo tipo de bandas, para todos los gustos.
            La tienda funciona como un intermediario, ordenando los discos al proveedor para después enviarlos.
            Pasa al Catálogo para poder observar los productos disponibles.
        </p>
        <br />
    </div>
</div>

<?php
include_once('footer.php');
?>
