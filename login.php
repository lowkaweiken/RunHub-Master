<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - RunHub</title>
   <link rel="apple-touch-icon" sizes="60x60" href="app-assets/images/squarelogos/logo60x60-01.png">
  <link rel="apple-touch-icon" sizes="76x76" href="app-assets/images/squarelogos/logo76x76-01.png">
  <link rel="apple-touch-icon" sizes="120x120" href="app-assets/images/squarelogos/logo120x120-01.png">
  <link rel="apple-touch-icon" sizes="152x152" href="app-assets/images/squarelogos/logo152x152-01.png">
  <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/squarelogos/logo32x32-01.png">
  <link rel="shortcut icon" type="image/png" href="app-assets/images/squarelogos/logo32x32-01.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/icomoon.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href=".assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <!--<div class="header-overlay" style="  
        height:100vh;
        position: absolute;
        width:100vw;
        background:#37BC9B;
        opacity:0.5;"></div>-->
        <div class="content-body" style="background-image: url(img/tabur.jpg);">
            <section class="flexbox-container">
                <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1  box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header no-border">
                            <div class="card-title text-xs-center">
                                <div class="p-1">
                                    <a href="landingPage.php">
                                        <img src="app-assets/images/squarelogos/white135x45-01-fixed.png" alt="branding logo">
                                    </a>
                                </div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Login into RunHub</span></h6>
                        </div>
                        <div class="card-body collapse in">
                            <div class="card-block">
                                <form class="form-horizontal form-simple" action="includes/login-inc.php" method="POST" novalidate>
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="uid" placeholder="Your Username or Email" required>
                                        <div class="form-control-position">
                                            <i class="icon-head"></i>
                                        </div>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="pwd" placeholder="Enter Password" required>
                                        <div class="form-control-position">
                                            <i class="icon-key3"></i>
                                        </div>
                                    </fieldset>
<!--                         <fieldset class="form-group row">
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-left">
                                <fieldset>
                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                    <label for="remember-me"> Remember Me</label>
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-xs-12 text-xs-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                        </fieldset> -->
                        <button type="submit" class="btn btn-success btn-lg btn-block" name="submit" style="border-radius: 30px;"><i class="icon-unlock2"></i> Login</button>
                    </form>
                </div>
            </div>
            <div class="card-footer">
                <div class="">
                    <p class="float-sm-center text-xs-center m-0">New to RunHub? <a href="register.php" class="card-link success">Sign Up</a></p>
                </div>
            </div>
                <?php

                        if(!isset($_GET['login'])) {
                          exit();

                      } else {
                          $loginCheck = $_GET['login'];


                          if($loginCheck == "empty"){
                            echo "<p class='danger' style='text-align: center;'>You did not fill in all the fields!</p>";
                            exit();
                        }
                        elseif($loginCheck == "error"){
                            echo "<p class='danger' style='text-align: center;'>Wrong username or password</p>";
                            exit();
                        } 

                    }


                    ?>      
        </div>
    </div>
</section>

</div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->

<!-- BEGIN VENDOR JS-->
<script src="app-assets/js/core/libraries/jquery.min.js"></script>
<script src="app-assets/vendors/js/ui/tether.min.js"></script>
<script src="app-assets/js/core/libraries/bootstrap.min.js"></script>
<script src="app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js"></script>
<script src="app-assets/vendors/js/ui/unison.min.js"></script>
<script src="app-assets/vendors/js/ui/blockUI.min.js"></script>
<script src="app-assets/vendors/js/ui/jquery.matchHeight-min.js"></script>
<script src="app-assets/vendors/js/ui/screenfull.min.js"></script>
<script src="app-assets/vendors/js/extensions/pace.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<!-- END PAGE LEVEL JS-->
</body>
</html>
