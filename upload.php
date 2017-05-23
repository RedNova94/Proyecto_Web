<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/20/2017
 * Time: 1:42 PM
 */
session_start();
$target_dir = "profile_pictures/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;




// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $name = $_SESSION['shadowplay_username'];
        $imageExt = pathinfo($target_file,PATHINFO_EXTENSION);
        $tmp_name = $_FILES["fileToUpload"]["tmp_name"];
        $full_name = $name.'.'.$imageExt;
        $uploadOk = 1;
    } else {
        echo "<script> 
                alert('File is not an image.');
                window.location='upload_avatar.php';
              </script>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "<script> 
                alert('Sorry, your file is too large.');
                window.location='upload_avatar.php';
              </script>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageExt != "jpg" && $imageExt != "png") {
    echo "<script> 
                alert('Sorry, only JPG and PNG files are allowed.');
                window.location='upload_avatar.php';
              </script>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {;
    echo "<script> 
                alert('Sorry, your file was not uploaded.');
                window.location='upload_avatar.php';
              </script>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($tmp_name, $target_dir.$full_name)) {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        echo "<script> 
        alert('Imagen Guardada');
        window.location='user_profile.php';
      </script>";
    } else {
        echo "<script> 
                alert('There was an error uploading your fileS');
                window.location='upload_avatar.php';
              </script>";
    }
}
?>