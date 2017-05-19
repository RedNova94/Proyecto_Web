<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/16/2017
 * Time: 10:20 AM
 */
/*
setcookie("shadowplay_username", "", time()- 3600);
setcookie("shadowplay_password", "", time() - 3600);
setcookie("shadowplay_email", "", time() - 3600);
setcookie("shadowplay_priviledge", "", time() - 3600);*/

session_destroy();
echo "<script> window.location.href='index.php'</script>";