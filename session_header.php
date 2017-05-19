<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <?php
    if (function_exists('customPageHeader')){
        customPageHeader();
    }
    ?>

    <title>Title</title>

    <link rel="stylesheet" href="./css/style_main.css">
    <script src="js/functions.js"></script>


</head>
<body>
<div id="tabs25">
    <ul>
        <li>
            <a href='index.php' title='Home'>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href='disc_catalog.php' title='Catálogo'>
                <span>Catálogo</span>
            </a>
        </li>
        <li>
            <a href='#miembros' title='Miembros'>
                <span>Miembros</span>
            </a>
        </li>
        <li>
            <a href='user_profile.php' title= 'Usuario'>
                <span> <?php echo $_SESSION["shadowplay_username"] ?> </span>
            </a>
        </li>
        <li>
            <a href="end_session.php" title = 'Cerrar Sesión'>
                <span>Cerrar Sesión</span>
            </a>
        </li>
        <?php if($_COOKIE['shadowplay_priviledge'] == 1) {
            ?>
        <li>
            <a href="#nuevoDisco" title="Nuevo Disco"> Nuevo Disco</a>
        </li>
        <li>
            <a href="cart.php" title='Carrito'>
                <img class="icon" src="images/shopcart.png" >
                <span>1</span>
            </a>
        </li>

        <?php } ?>

    </ul>


</div>