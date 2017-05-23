<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/22/2017
 * Time: 11:46 PM
 */
if($_POST['add_titulo']=="" || $_POST['add_artista']== "" || $_POST['add_imagen']== "" || $_POST['add_precio']=="") {
    echo "<script>
    alert('Por favor llena todos los campos');
    window.location.href='modify.php';
    </script>";
} else {

}