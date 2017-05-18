<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?= isset($PageTitle) ? $PageTitle : "Default Title"?></title>
    <!-- Additional tags here -->
    <link rel="stylesheet" href="css/style_main.css">
    <?php if (function_exists('customPageHeader')){
        customPageHeader();
    }?>

    <title>Title</title>
    <link rel="stylesheet" href="css/style_main.css">

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
            <a href='catalogo.php' title='Catálogo'>
                <span>Catálogo</span>
            </a>
        </li>
        <li>
            <a href='#miembros' title='Miembros'>
                <span>Miembros</span>
            </a>
        </li>
        <li>
            <a href='sign_in.php' title='Iniciar Sesion'>
                <span>Iniciar Sesión</span>
            </a>
        </li>
    </ul>


</div>
