<?php
session_start();
$UserName= $_SESSION['shadowplay_username'];
$UserAvatar = "http://i.imgur.com/8Q693z1.png";
$UserEmail=$_SESSION['shadowplay_email'];
$pw =$_SESSION['shadowplay_password'];
$PageTitle="Perfil de ".$UserName;

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="css/style_user.css">
    <script src="js/functions.js" type="text/javascript"></script>

<?php }
include_once('session_header.php');
?>

<div class="box">
    <div class="box-content">
        <h1 class="tag-title"><?php echo $UserName; ?></h1>
        <hr />
        <div >
            <img src="<?php echo $UserAvatar; ?>">
            <button onclick="changeAvatar()"> Cambiar Imagen</button>
        </div>
        <div class="about">
            <p>
                <strong>Email:</strong>
                <?php echo $UserEmail; ?>
            </p>
            <p>
                <strong>Contraseña:</strong>
                <?php echo $pw; ?>
            </p>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>