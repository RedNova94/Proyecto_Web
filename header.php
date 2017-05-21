<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->

    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>

    
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
            <a href='disc_catalog.php' title='Catalogos'>
                <span>Catálogo</span>
            </a>
        </li>
        <li>
            <a href='sign_in.php' title='Iniciar Sesion'>
                <span>Iniciar Sesión</span>
            </a>
        </li>
<<<<<<< HEAD

=======
        <li>
            <a href='carrito.php' title='Carrito'>
                <span>Carrito</span>
            </a>
        </li>

        <li>
            <a href='users_table.php' title='users'>
                <span>users</span>
            </a>
        </li>
>>>>>>> a81f08dff0ee3435fcd730659d849c49177ed116
    </ul>


</div>
