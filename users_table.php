<?php
/**
 * Created by PhpStorm.
 * User: Suheily
 * Date: 21/05/2017
 * Time: 12:26 PM
 */

$PageTitle="Lista de miembros";
function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->

<?php }
include_once ("session_header.php");
?>
    <div class="box">asdfasfgsdg
        <?php  include "show_users.php" ?>
    </div>



<?php
include_once('footer.php');
?>
