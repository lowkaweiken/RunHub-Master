<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page - RunHub</title>
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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <!--<div class="header-overlay" style="  
        height:100vh;
        position: absolute;
        width:100vw;
        background:#37BC9B;
        opacity:0.5;"></div>-->
        <div class="content-body" style="background-image: url(img/tabur.jpg);"><section class="flexbox-container">
            <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
               <div class="card-header no-border">
                <div class="card-title text-xs-center">
                 <a href="landingPage.php">
                    <img src="app-assets/images/squarelogos/white135x45-01-fixed.png" alt="branding logo">

                </a>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Create a RunHub account</span></h6>
        </div>
        <div class="card-body collapse in"> 
            <div class="card-block">
             <form class="form-horizontal form-simple" action="includes/register-inc.php" method="POST" novalidate>
         <fieldset class="form-group position-relative has-icon-left mb-1">
           <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="uid" placeholder="User Name">
           <div class="form-control-position">
             <i class="icon-head"></i>
           </div>
         </fieldset>
         <fieldset class="form-group position-relative has-icon-left mb-1">
           <input type="email" class="form-control form-control-lg input-lg" id="user-email" name="email" placeholder="Your Email Address" required>
           <div class="form-control-position">
             <i class="icon-mail6"></i>
           </div>
         </fieldset>
         <fieldset class="form-group position-relative has-icon-left">
           <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="pwd" placeholder="Enter Password" required>
           <div class="form-control-position">
             <i class="icon-key3"></i>
           </div>
         </fieldset>
         <button type="submit" class="btn btn-success btn-lg btn-block" style="border-radius: 30px;" name="submit"><i class="icon-unlock2"></i> Register</button>
       </form>
     </div>
     <p class="text-xs-center">Already have an account ? <a href="login.php" class="card-link success">Login</a></p>
    <?php

       if(!isset($_GET['signup'])) {
        exit();

      } else {
        $signupCheck = $_GET['signup'];


        if($signupCheck == "empty"){
          echo "<p class='danger' style='text-align: center;'>You did not fill in all the fields!</p>";
          exit();
        }
        elseif($signupCheck == "email"){
          echo "<p class='danger' style='text-align: center;'>You did not fill in a valid email</p>";
          exit();
        } elseif($signupCheck == "usertaken"){
          echo "<p class='danger' style='text-align: center;'>Username has already been taken</p>";
          exit();
        }

      }


      ?>

</div>
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
