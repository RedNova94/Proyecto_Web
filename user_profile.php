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
      <div class="centered">


        <div class="logo"><i><?php echo $UserName; ?></i></div>


            <img id="preview" src="<?php if ($handle = opendir('profile_pictures/')) {
                                if (file_exists('profile_pictures/'.$UserName.'.png')) {
                                    echo 'profile_pictures/'.$UserName.'.png';
                                } else if (file_exists('profile_pictures/'.$UserName.'.jpg')) {
                                            echo 'profile_pictures/'.$UserName.'.jpg';
                                }
                            }
                            closedir($handle); ?>">


            <p>
                <strong>Email:</strong>
                <?php echo $UserEmail; ?>
            </p>
            <p>
              <form action="upload.php" method="post" enctype="multipart/form-data">

                  <label class="button" for="fileToUpload">Cambiar imagen...<input style="width:0px" type="file" name="fileToUpload" id="fileToUpload"></label>
                  <input class="button" id="submit" type="submit" value="Subir" name="submit" style="display:none;">
              </form>
            </p>

      </div>


<script>
document.getElementById('fileToUpload').onchange = function() {
  var reader = new FileReader();

  reader.onload = function (e) {
      // get loaded data and render thumbnail.
      document.getElementById("preview").src = e.target.result;
  };

  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
  document.getElementById('submit').style.display = "inline";
  document.getElementById('submit').style.background = "#00802b";
}
</script>

<?php
include_once('footer.php');
?>
