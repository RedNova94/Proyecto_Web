<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 10:07 AM
 */
$PageTitle="Carrito";
if(count($_COOKIE) > 0){
    if ($_COOKIE["shadowplay_username"] == "") {
        include_once ("header.php");
    } else {
        include_once ("session_header.php");
    }
} else {
    include_once ("header.php");
}

?>


<div class="box">
    <div class="box-content">
        <h1 class="tag-title">Heading</h1>
        <hr />
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis sit amet neque.</p>
        <br />
        <a href="ppc.html" class="btn btn-block btn-primary">Learn more</a>
    </div>
</div>
