<!DOCTYPE html>
<html lang="en" class="no-js" >
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="" />
<meta name="author" content="" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<![endif]-->
<title>EDC-CBIT</title>
<!-- BOOTSTRAP CORE CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- ION ICONS STYLES -->
<link href="assets/css/ionicons.css" rel="stylesheet" />
<!-- FONT AWESOME ICONS STYLES -->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- FANCYBOX POPUP STYLES -->
<link href="assets/js/source/jquery.fancybox.css" rel="stylesheet" />
<!-- STYLES FOR VIEWPORT ANIMATION -->
<link href="assets/css/animations.min.css" rel="stylesheet" />
<!-- CUSTOM CSS -->
<link href="assets/css/style-green.css" rel="stylesheet" />

</head>
<body data-spy="scroll" data-target="#menu-section">
<?php
//If the user is logged, we log him out
if(isset($_SESSION['username']))
{
	//We log him out by deleting the username and userid sessions
	unset($_SESSION['username'], $_SESSION['userid']);}
?>
<!--MENU SECTION START-->
<div class="navbar navbar-inverse navbar-fixed-top scroll-me" id="menu-section" >
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">
</br>
Entrepreneurship Development Cell

</a>
</div>


</div>
</div>
<!--MENU SECTION END-->
<div style="width:480px;height:125px;position:relative;">
<div style="position:absolute; z-index:0;">
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"  width="480" height="125">
<param name="mov" value="preview.swf" />
<param name="quality" value="high" />
<param name="wmode" value="transparent">
<embed src="mov/preview.swf" quality="high"  type="application/x-shockwave-flash" width="1350" height="900"  />

</object>
</div>
<!--SERVICE SECTION START-->
<section id="services" >
<div class="container" align="center">
<div class="row text-center header">
<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 animate-in" data-anim-type="fade-in-up">
<h3>Entrepreneurship Developement Cell</h3>
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">

<i class="ion-home"></i>
<h3><a href="#" >HOME</a></h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-android-people"></i>
<h3><a href="about.html">About Us</h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-clipboard"></i>
<h3><a href="activities.html">Our Activities</a></h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-cash"></i>
<h3>Campus Comapny</h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-android-person"></i>
<h3><a href="login.php">Members Login</a></h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-monitor"></i>
<h3><a href="#team">Our Team</a></h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-ios-photos"></i>
<h3><a href="gal/index.html">Gallery</a></h3>

</div>
</div>
<div class="col-xs-9 col-sm-3 col-md-3 col-lg-3">
<div class="services-wrapper">
<i class="ion-email"></i>
<h3><a href="contact.html">Contact us</a></h3>
</div>
</div>

</div>
</div>
</section>
<!--SERVICE SECTION END-->

<!--TEAM SECTION START-->
<section id="team" >
<div class="container">
<div class="row text-center header animate-in" data-anim-type="fade-in-up">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h3>Team Members </h3>
<hr />
</div>
</div>
<div class="row animate-in" data-anim-type="fade-in-up">

<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/1.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3>VBS KRISHNA</h3>
<h5> <strong> Developer & Designer </strong></h5>
</div>
</div>
</div>
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
<div class="team-wrapper">
<div class="team-inner" style="background-image: url('assets/img/team/2.jpg')" >
<a href="#" target="_blank" > <i class="fa fa-twitter" ></i></a>
</div>
<div class="description">
<h3> A Naveen</h3>
<h5> <strong> Developer & Designer </strong></h5>

</div>
</div>
</div>

</section>
<!--TEAM SECTION END-->



<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME -->
<!-- CORE JQUERY -->
<script src="assets/js/jquery-1.11.1.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.js"></script>
<!-- EASING SCROLL SCRIPTS PLUGIN -->
<script src="assets/js/vegas/jquery.vegas.min.js"></script>
<!-- VEGAS SLIDESHOW SCRIPTS -->
<script src="assets/js/jquery.easing.min.js"></script>
<!-- FANCYBOX PLUGIN -->
<script src="assets/js/source/jquery.fancybox.js"></script>
<!-- ISOTOPE SCRIPTS -->
<script src="assets/js/jquery.isotope.js"></script>
<!-- VIEWPORT ANIMATION SCRIPTS   -->
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/animations.min.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>
</body>

</html>
