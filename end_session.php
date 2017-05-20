<?php
/**
 * Created by PhpStorm.
 * User: Alberto
 * Date: 5/16/2017
 * Time: 10:20 AM
 */
session_start();
$_SESSION = array();
session_destroy();
header("location: index.php");