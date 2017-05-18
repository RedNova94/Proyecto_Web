<?php
$PageTitle="Página Principal";
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->

<?php }
if(count($_COOKIE) > 0){
    if ($_COOKIE["shadowplay_username"] == "") {
        include_once ("header.php");
    } else {
        include_once ("session_header.php");
    }
} else {
    include_once ("header.php");
}
?>

<?php  include "disc_catalog.php" ?>


<?php
include_once('footer.php');
?>