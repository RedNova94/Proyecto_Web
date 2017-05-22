<?php
session_start();
$UserName= $_SESSION['shadowplay_username'];
$UserAvatar = "profile_pictures/Lambo.jpg";
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
            <img src="<?php if ($handle = opendir('profile_pictures/')) {
                                if (file_exists('profile_pictures/'.$UserName.'.png')) {
                                    echo 'profile_pictures/'.$UserName.'.png';
                                } else if (file_exists('profile_pictures/'.$UserName.'.jpg')) {
                                            echo 'profile_pictures/'.$UserName.'.jpg';
                                }
                            }
                            closedir($handle); ?>">
        </div>
        <div class="about">
            <p>
                <strong>Email:</strong>
                <?php echo $UserEmail; ?>
            </p>
        </div>
    </div>
</div>

<?php
include_once('footer.php');
?>