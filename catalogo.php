<?php
$PageTitle="Página Principal";
function customPageHeader(){
}
if(count($_COOKIE) > 0){
    if ($_COOKIE["shadowplay_username"] == "") {
        include_once ("header.php");
    } else {
        include_once ("session_header.php");
    }
} else {
    include_once ("header.php");
}
include "disc_catalog.php";
include_once('footer.php');
