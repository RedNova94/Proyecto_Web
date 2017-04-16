<?php

$PageTitle="Registro";

function customPageHeader(){?>
    <!--Arbitrary HTML Tags-->
    <link rel="stylesheet" href="css/style_sign.css">
<?php }

include_once('header.php');
?>

    <table align="center">
        <td align="center" colspan="0" rowspan="0">
            <div class="text-center" style="padding:50px 0">
                <div class="logo"><i>Sign Up</i></div>
                <!-- Main Form -->
                <div class="login-form-1">
                    <form id="register-form" action="register_user.php" class="text-left" method="get">
                        <div class="login-form-main-message"></div>
                        <div class="main-login-form">
                            <div class="login-group">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
                                </div>
                            </div>

                            <div><p></p></div>
                            <button type="submit"><i> Register</i></button>
                            <div class="etc-login-form">
                                <p><i>¿Ya tienes una cuenta? <a href="sign_in.php">Iniciar Sesión</a></i></p>
                            </div>
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