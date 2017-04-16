<?php

$PageTitle="Iniciar Sesión";

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="css/style_sign.css">
<?php }

include_once('header.php');
?>
<table align="center">
<td align="center" colspan="0" rowspan="1">
<div class="text-center" style="padding:50px 0">
    <div class="logo"><i>Sign In<i></i></div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="login-form" action="validate_user.php" class="text-left" method="post">
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
                    </div>
                    <!--<div class="form-group login-group-checkbox">
                        <input type="checkbox" id="lg_remember" name="lg_remember">
                        <label for="lg_remember">remember</label>
                    </div> -->
                </div>
                <div><p></p></div>
                <button type="submit" ><i>Login</i> </button>
            </div>
            <div class="etc-login-form">
                <p>new user? <a href="sign_up.php">create new account</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
</td>
</table>
<?php
include_once('footer.php');
?>