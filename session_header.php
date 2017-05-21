<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <link rel="stylesheet" href="style_main.css">
    <?php
    if (function_exists('customPageHeader')){
        customPageHeader();
    }?>

    <title>Title</title>
    <link rel="stylesheet" href="css/style_main.css">
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
            <a href='show_users.php' title='Miembros'>
                <span>Miembros</span>
            </a>
        </li>
        <li>
            <a href='user_profile.php' title= 'Usuario'>
                <span> <?php echo $_SESSION["shadowplay_username"]?> </span>
            </a>
        </li>
        <?php if($_SESSION['shadowplay_priviledge'] == 1) {
            ?>
            <li>
                <a href="add_product.php" title="Nuevo Disco"> Nuevo Disco</a>
            </li>

        <?php } ?>
        <li>
            <a href='shopping_cart.php' title='Carrito'>
                <span>Carrito</span>
            </a>
        </li>
        <li>
            <a href="end_session.php" title = 'Cerrar Sesión'>
                <span>Cerrar Sesión</span>
            </a>
        </li>



    </ul>


</div>