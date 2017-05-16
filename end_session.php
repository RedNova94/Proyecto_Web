<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/16/2017
 * Time: 10:20 AM
 */

setcookie("shadowplay_username", "", time()- 3600);
setcookie("shadowplay_password", "", time() - 3600);
echo "<script> window.location.href='index.php'</script>";