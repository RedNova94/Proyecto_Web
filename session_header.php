<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <link rel="stylesheet" href="style_main.css">
    <?php if (function_exists('customPageHeader')){
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
            <a href='#peliculas' title='Peliculas'>
                <span>Catálogo</span>
            </a>
        </li>
        <li>
            <a href='#miembros' title='Miembros'>
                <span>Miembros</span>
            </a>
        </li>
        <li>
            <a href='#perfil' title= 'Usuario'>
                <span> <?php echo $_COOKIE["shadowplay_username"] ?> </span>
            </a>
        </li>
        <li>
            <a>
                <span onclick="endSession()">Cerrar Sesión</span>
            </a>
        </li>
    </ul>


</div>