<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 21/05/2017
 * Time: 12:26 PM
 */

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

    <div class="box cd">
        <?php  include "show_users.php" ?>
        <div class="box-content">
            <hr />
            <img class="album" src="" />
            <br />
            <a href="index.php" class="btn btn-block btn-primary">volver</a>
        </div>
    </div>



<?php
include_once('footer.php');

