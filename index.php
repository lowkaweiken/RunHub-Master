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
  <title>RunHub - The Hub for Runners</title>
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
  <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <!-- END Custom CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">

  <!-- navbar-fixed-top-->
  <nav class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav">
          <li class="nav-item mobile-menu hidden-md-up float-xs-left"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5 font-large-1"></i></a></li>
          <li class="nav-item"><a href="index.php" class="navbar-brand nav-link"><img alt="branding logo" src="app-assets/images/squarelogos/white32x32-01.png" data-expand="app-assets/images/squarelogos/white135x45-01.png" data-collapse="app-assets/images/squarelogos/white32x32-01.png" class="brand-logo"></a></li>
          <li class="nav-item hidden-md-up float-xs-right"><a data-toggle="collapse" data-target="#navbar-mobile" class="nav-link open-navbar-container"><i class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a></li>
        </ul>
      </div>
      <div class="navbar-container content container-fluid">
        <div id="navbar-mobile" class="collapse navbar-toggleable-sm">
          <ul class="nav navbar-nav">
            <li class="nav-item hidden-sm-down"><a class="nav-link nav-menu-main menu-toggle hidden-xs"><i class="icon-menu5">         </i></a></li>
            <li class="nav-item hidden-sm-down"><a href="#" class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-xs-right">
            <li class="dropdown dropdown-user nav-item">
             
              <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link"><span class="avatar avatar-online"><img src="includes/<?php
              if(isset($_SESSION['u_id'])){
               echo $_SESSION['u_profile'];}?>" alt="avatar"><i></i></span>
               <span class="user-name">  
                <?php
                if(isset($_SESSION['u_id'])){
                 echo $_SESSION['u_uid'];}?>
               </span></a>
               <div class="dropdown-menu dropdown-menu-right"><a href="includes/logout-inc.php" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
               </div>
             </li>
           </ul>
         </div>
       </div>
     </div>
   </nav>

   <!-- ////////////////////////////////////////////////////////////////////////////-->


   <!-- main menu-->
   <div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">

    <!-- main menu content-->
    <div class="main-menu-content">
      <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">


        <li class=" nav-item"><a href="#"><span data-i18n="nav.page_layouts.main" class="menu-title">
          <img class="media-object avatar avatar-sm rounded-circle" 
          src="includes/<?php
          if(isset($_SESSION['u_id'])){
           echo $_SESSION['u_profile'];}?>
           " alt="Generic placeholder image" style="height:150px; width:150px; margin-top: 10px; margin-left: 20px;">
         </span></a></li>
         <li class=" nav-item"><a href="#"><i class="icon-user"></i><span data-i18n="nav.page_layouts.main" class="menu-title">Account Settings</span></a></li>
       </ul>
     </div>
   </div>

   <!-- / main menu-->

   <div class="app-content content container-fluid">
    <div class="content-wrapper">
      <div class="content-body"> 

        <!-- PUT EVERYTHING INSIDE THIS DIV -->
        
        <!-- Health Statistics -->
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                      <div class="float-left pl-2 my-1 ">
                        <span class="grey darken-1 block">Age</span>
                        <h3 class="font-large-2 text-bold-200">
                         <?php
                         if(isset($_SESSION['u_id'])){
                          echo $_SESSION['u_age'];}?>
                          <span class="font-medium-1 grey darken-1 text-bold-400"> years</span></h3>
                        </div>
                      </div>
                      
                      <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                        <div class="float-left pl-2 my-1">
                          <span class="grey darken-1 block">Height</span>
                          <h3 class="font-large-2 text-bold-200">
                           <?php
                           if(isset($_SESSION['u_id'])){
                            echo $_SESSION['u_height'];}?>
                            <span class="font-medium-1 grey darken-1 text-bold-400"> cm</span></h3>
                          </div>
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-grey border-right-lighten-3 clearfix">
                          <div class="float-left pl-2 my-1">
                            <span class="grey darken-1 block">Weight</span>
                            <h3 class="font-large-2 text-bold-200">
                             <?php
                             if(isset($_SESSION['u_id'])){
                              echo $_SESSION['u_weight'];}?>
                              <span class="font-medium-1 grey darken-1 text-bold-400"> kg</span></h3>
                            </div>
                          </div>
                          
                          <div class="col-xl-3 col-lg-6 col-md-12 clearfix">
                            <div class="float-left pl-2 my-1">
                              <span class="grey darken-1 block">Body Mass Index</span>
                              <h3 class="font-large-2 text-bold-200">
                               <?php
                               if(isset($_SESSION['u_id'])){
                                echo $_SESSION['u_bmi'];}?>
                                <span class="font-medium-1 grey darken-1 text-bold-400"> kg/m</span></h3>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>   
                
                <!-- Activity Chart + Friends -->
                <div class="row">
                  <!-- activity charts -->
                  <div class="col-xl-8 col-lg-12">
                    <div class="card" style="height: 380px; zoom: 1;">
                      <div class="card-header no-border-bottom">
                        <h4 class="card-title">Activity Chart <span class="text-muted text-bold-400">Weekly</span></h4>
                        <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                        <div class="heading-elements">
                          <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                            <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-content">
                        <div class="card-body px-2 pt-1">
                          <!-- PUT STUFF INSIDE CARD IN THIS DIV -->
                          <canvas id="area-chart" width="800" height="300"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-4 col-lg-12">
                    <div class="card" style="height: 380px;">
                     <div class="card-header no-border-bottom">
                      <h4 class="card-title">Friends</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body media-list">

                       <!-- PUT STUFF INSIDE CARD IN THIS DIV -->
                       
                       <a href="#" class="media active">
                        <div class="media-left">
                          <img class="media-object avatar avatar-sm rounded-circle" src="img/profile.PNG" alt="Generic placeholder image">
                        </div>
                        <div class="media-body">
                          <h5 class="font-medium-1 grey darken-1 text-bold-400">Lim Chin Soon </h5>
                          <div class="media-left">		  
                           <button type="button" class="btn btn-success btn-sm">The Legend of League</button>
                           <button type="button" class="btn btn-danger btn-sm">Hot Stuff</button>
                         </div>
                       </div>
                     </a>  
                     
                     <a href="#" class="media active">
                      <div class="media-left">
                        <img class="media-object avatar avatar-sm rounded-circle" src="img/suheil.png" alt="Generic placeholder image">
                      </div>
                      <div class="media-body">
                        <h5 class="font-medium-1 grey darken-1 text-bold-400">Suheil Makrani </h5>
                        <div class="media-left">
                          <button type="button" class="btn btn-info btn-sm">Mombasa's Casanova</button>
                        </div>
                      </div>
                    </a>  
                    
                    <a href="#" class="media active">
                      <div class="media-left">
                        <img class="media-object avatar avatar-sm rounded-circle" src="img/clement.png" alt="Generic placeholder image">
                      </div>
                      <div class="media-body">
                        <h5 class="font-medium-1 grey darken-1 text-bold-400">Clement Ung Shan Loong </h5>
                        <div class="media-left">
                          <button type="button" class="btn btn-warning btn-sm">Savior From Sri Rampai</button>
                        </div>
                      </div>
                    </a>  
                    
                    <a href="#" class="media active">
                      <div class="media-left">
                        <img class="media-object avatar avatar-sm rounded-circle" src="img/ken.png" alt="Generic placeholder image">
                      </div>
                      <div class="media-body">
                        <h5 class="font-medium-1 grey darken-1 text-bold-400">Ken Low </h5>
                        <div class="media-left">
                          <button type="button" class="btn btn-success btn-sm">The Godfather</button>
                        </div>
                      </div>
                    </a>  
                    
                    <a href="#" class="media active">
                      <div class="media-left">
                        <img class="media-object avatar avatar-sm rounded-circle" src="img/profile.png" alt="Generic placeholder image">
                      </div>
                      <div class="media-body">
                        <h5 class="font-medium-1 grey darken-1 text-bold-400">Lim Chin Soon </h5>
                        <div class="media-left">
                          <button type="button" class="btn btn-danger btn-sm">Too Soon</button>
                        </div>
                      </div>
                    </a>  



                  </div>
                </div>
              </div>
            </div>    
          </div> 

          <!-- Daily Goals -->   
          <div class="row">
           <div class="col-xl-12 col-lg-12">
            <div class="card">

             <div class="card-header no-border-bottom">
              <h4 class="card-title">Daily Goals</h4>
            </div>

            <div class="card-content">
              <div class="row">

                <!-- Steps --> 
                <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                  <div class="my-1 text-center ">
                    <div class="card-header no-border-bottom mb-1 pt-0 ml-3">
                      <span class="info pl-3">Steps</span>
                      <h3 class="font-large-2 text-bold-200">3,261<span class="font-medium-1 grey darken-1 text-bold-400"> steps</span></h3>
                    </div>
                    <div class="card-content">

                     <!-- Put Circle Progress Bar Here --> 
                     <div id="steps" style="margin-left: 70px; margin-bottom: 40px; width: 150px; height: 150px; position: relative;"></div>



                   </div>
                 </div>
               </div>

               <!-- Distance --> 
               <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                <div class="my-1 text-center">
                  <div class="card-header no-border-bottom mb-1 pt-0 pl-3">
                    <span class="deep-orange pl-3" style="margin-left: 20px;">Distance</span>
                    <h3 class="font-large-2 text-bold-200" style="margin-left: 50px;">10<span class="font-medium-1 grey darken-1 text-bold-400"> miles</span></h3>
                  </div>
                  <div class="card-content">

                   <!-- Put Circle Progress Bar Here -->    
                   <div id="distance" style="margin-left: 70px; margin-bottom: 40px; width: 150px; height: 150px; position: relative;"></div>

                 </div>
               </div>
             </div>

             <!-- Calories --> 
             <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
              <div class="my-1 text-center">
                <div class="card-header no-border-bottom mb-2 pt-0" >
                  <span class="success" style="margin-left: 90px;">Calories</span>
                  <h3 class="font-large-2 text-bold-200" style="margin-left: 50px;">3,000<span class="font-medium-1 grey darken-1 text-bold-400"> kcal</span></h3>
                </div>
                <div class="card-content">

                 <!-- Put Circle Progress Bar Here -->  
                 <div id="calories" style="margin-left: 70px; margin-bottom: 40px; width: 150px; height: 150px; position: relative;"></div>


               </div>
             </div>
           </div>

           <!-- Heart Rate --> 
           <div class="col-xl-3 col-lg-6 col-md-12">
            <div class="my-1 text-center">
              <div class="card-header no-border-bottom mb-2 pt-0 pl-3">
                <span class="danger" style="margin-left: 70px;">Heart Rate</span>
                <h3 class="font-large-2 text-bold-200" style="margin-left: 30px;">120<span class="font-small-2 grey darken-1 text-bold-400"> BPM (Highest)</span></h3>
              </div>
              <div class="card-content">

               <!-- Put Circle Progress Bar Here -->  
               <div id="heartrate" style="margin-left: 70px; margin-bottom: 40px; width: 150px; height: 150px; position: relative;"></div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>




</div>

<!-- Daily Goals -->   
<div class="row match-height">
  <div class="col-xl-6 col-lg-12">
    <div class="card">
      <div class="card-header no-border-bottom">
        <h4 class="card-title">Running Routes</h4>
        <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
        <div class="heading-elements">
        </div>
      </div>
      <div class="card-content">
        <div class="card-body">
         <!-- Put Google Maps in Here -->   
         <div id="map" class="height-400" style="position: relative; overflow: hidden;"></div>			
       </div>
     </div>
   </div>
 </div>
 <div class="col-xl-6 col-lg-12">
  <div class="card">
    <div class="card-header no-border-bottom">
      <h4 class="card-title">Daily Activity</h4>
      <a class="heading-elements-toggle"><i class="ft-more-horizontal font-medium-3"></i></a>
      <div class="heading-elements">
        <ul class="list-inline mb-0">
          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="card-content">
      <div id="daily-activity" class="table-responsive height-350 ps-container ps-theme-default ps-active-y" data-ps-id="4e15e027-faf8-5d72-9307-ace751c82304">
        <table class="table table-hover mb-0">
          <thead>
            <tr>
              <th></th>
              <th>Time</th>
              <th>Activity</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">5.00 A.M</td>
              <td class="text-truncate">Bricks Walking</td>
              <td class="text-truncate"><button type="button" class="btn btn-success btn-sm">Done</button></td>
            </tr>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">5.30 A.M</td>
              <td class="text-truncate">Morning Exercise</td>
              <td class="text-truncate"><button type="button" class="btn btn-success btn-sm">Done</button></td>
            </tr>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">6.30 A.M</td>
              <td class="text-truncate">Yoga</td>
              <td class="text-truncate"><button type="button" class="btn btn-danger btn-sm">Missed</button></td>
            </tr>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">7.00 A.M</td>
              <td class="text-truncate">Gym</td>
              <td class="text-truncate"><button type="button" class="btn btn-success btn-sm">Done</button></td>
            </tr>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">8.00 A.M</td>
              <td class="text-truncate">Steam Bath</td>
              <td class="text-truncate"><button type="button" class="btn btn-success btn-sm">Done</button></td>
            </tr>
            <tr>
              <td class="text-truncate"><input type="checkbox" name="#" value="#"></td>
              <td class="text-truncate">9.00 A.M</td>
              <td class="text-truncate">Meditation</td>
              <td class="text-truncate"><button type="button" class="btn btn-danger btn-sm">Missed</button></td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>




</div> 
</div>
</div>



<footer class="footer footer-static footer-light navbar-border">
  <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  © 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">RUNHUB </a>, All rights reserved. </span></p>
</footer>




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
<script src="app-assets/vendors/js/charts/chart.min.js"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN ROBUST JS-->
<script src="app-assets/js/core/app-menu.js"></script>
<script src="app-assets/js/core/app.js"></script>
<!-- END ROBUST JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="app-assets/js/scripts/pages/dashboard-lite.js"></script>
<!-- END PAGE LEVEL JS-->

<script src="app-assets/js/activity-chart.js"></script>
<script src="app-assets/js/progressbar.js"></script>
<script src="assets/js/steps.js"></script>
<script src="assets/js/distance.js"></script>
<script src="assets/js/calories.js"></script>
<script src="assets/js/heartrate.js"></script>
<script src="assets/js/googlemaps.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA45yNM-UHmZojyJ4InFnZcYlcx5FOlCg4&callback=myMap"></script>

</body>
</html>
