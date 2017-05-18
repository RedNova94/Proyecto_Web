<?php

$UserName="Lorem Ipsum";
$UserAvatar = "http://i.imgur.com/8Q693z1.png";
$UserEmail="gerry_hd@live.com.mx";
$PageTitle="Perfil de ".$UserName;
// $UserPwLen=len($UserPw);
$pw ="••••••";
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="css/style_user.css">
<?php }

include_once('header.php');
?>
<div class="box">
    <div class="box-content">
        <h1 class="tag-title"><?php echo $UserName; ?></h1>
        <hr />
        <img src="<?php echo $UserAvatar; ?>">
        <div class="about">


          <p>
            <strong>Email:</strong>
            <?php echo $UserEmail; ?>
          </p>
          <hr />
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
