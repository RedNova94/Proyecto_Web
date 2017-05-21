<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 18/05/2017
 * Time: 12:40 PM
 */
session_start();
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="./css/style_sign.css">
<?php }

include_once('session_header.php');
?>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>