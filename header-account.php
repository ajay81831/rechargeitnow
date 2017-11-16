<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![ENDif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![ENDif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![ENDif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![ENDif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Page Title -->
    <title>Recharge it now</title>
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Responsive Viewport Support -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style-dd.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
<!--BEGIN PAGE WRAPPER-->
  <div class="wrapper">
  <!--BEGIN HEADER-->
    <div id="header" class="account_header">
      <div class="container">
        <nav class="navbar navbar-inverse">
          <div class="">
            <div class="navbar-header">
              <button id="nav-icon3" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>
              <a class="navbar-brand" href="index.php"><img src="assets/img/logo/logo.png"></a>
              <!-- <ul class="nav navbar-nav navbar-right hidden-sm hidden-md hidden-lg">
                <li><a href="#" data-toggle="modal" data-target="#myModal">login</a></li>
              </ul> -->

              <div class="user hidden-sm hidden-md hidden-lg">
                <div class="user_info">
                  <!-- <span class="avtar">P</span> -->
                  <i class="userName">Pawan Mishra</i>
                  <a href="javascript:void(0)" class="userDrop"><img src="assets/img/down-arrow.png"></a>
                </div>
                <ul class="profileDropDown">
                  <li><a href="account.php">Account</a></li>
                  <li><a href="index.php">Logout</a></li>
                </ul>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav mobDropDown">
                <li><a href="awards.php"><i><img src="assets/img/menu-icons/awards.png"></i><span>awards</span></a></li>
                <li><a href="#"><i><img src="assets/img/menu-icons/services.png"></i><span>services</span></a></li>
                <li><a href="plans-schemes.php"><i><img src="assets/img/menu-icons/plans.png"></i><span>plans</span></a></li> 
                <li><a href="about.php"><i><img src="assets/img/menu-icons/about-us.png"></i><span>about us</span></a></li> 
                <li><a href="contactus.php"><i><img src="assets/img/menu-icons/contact.png"></i><span>contact us</span></a></li> 
              </ul>
              <div class="user hidden-sm hidden-xs">
                <div class="user_info">
                  <span class="avtar">P</span>
                  <i class="userName">Pawan</i>
                  <a href="javascript:void(0)" class="userDrop"><img src="assets/img/down-arrow.png"></a>
                </div>
                <ul class="profileDropDown">
                  <li><a href="account.php">Account</a></li>
                  <li><a href="index.php">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>



    <!-- single Login Modal -->
  <div class="modal fade" id="single_loginModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div id="loginDiv" class="modal-content loginScreen animated fadeIn">
        <div class="modal-header customerLoginModal">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img class="logo" src="assets/img/logo/logo.png">
          <ul class="nav nav-pills modalNav">
            <li class="active"><a data-toggle="pill" href="#login">login</a></li>
          </ul>
        </div>
        <div class="modal-body">
        
          <div class="tab-content">
            <?php include_once 'login.php'; ?>
         </div>
        </div>
      </div>
    </div>
  </div>