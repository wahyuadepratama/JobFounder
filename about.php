<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title> JobUs | About </title>
	<?php include 'view/head.php'; ?>
	<link rel="stylesheet" type="text/css" href="assets/css/style-login.css">
</head>
	
<body>
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a href="index.php"><img class="img-responsive" src="assets/images/logo-lands.png"></a>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="home.php">home</a></li>
              <li><a href="lowongan.php">find jobs</a></li>
              <?php include '/controller/include.daftar.or.dashboard.php';?>
              <!-- <?php 

									/*	if(isset($_SESSION['pekerja'])){
											echo "<li><a href='../../dashboard/pekerja/profile.php'>dashboard</a></li>";	
										}elseif(isset($_SESSION['pengiklan'])){
											echo "<li><a href='../../dashboard/pengiklan/profile.php'>dashboard</a></li>";
										}else{
											echo "<li><a href='../../daftar.php'>sign in</a></li>";
										} */
										
									?> -->
              <li><a href="about.php">about</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="w3layouts_breadcrumbs_left">
				<ul>
					<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i><a href="home.php">Home</a><span>/</span></li>
					<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i>Kontak Kami</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- Kontak -->
<div class="container kami content-ku">
	<center>
		<h1>Tentang Kami</h1>
		<div class="row">
		  <div class="col-md-4">  	
		  		<img src="assets/images/wahyu.jpg" class="img-circle img-responsive" width="300">
		  		<h2>ciek</h2>
		  		<p>My name is wahyu lalalallalal</p>

		  </div>
			<div class="col-md-4">  
			    <img src="assets/images/yola.jpg" class="img-circle img-responsive" width="300">
			    <h2>duo</h2>
		  		<p>My name is yola	llallalalalal</p>
		  </div>
		  <div class="col-md-4"> 
		  		<img src="assets/images/yoga.jpg" class="img-circle img-responsive" width="300">
		  		<h2>tigo</h2>
		  		<p>May name is yoga blalalallalalalalalalal</p>
		  </div>
		</div>
	</center>
</div>
<!-- //Kontak -->

	<script src="view/js/lsb.min.js"></script>
	<script>
	$(window).load(function() {
		  $.fn.lightspeedBox();
		});
	</script>

<!-- FOOTER -->
    <div id="information" class="container-fluid">
       <ul class="list-inline" style="">
              <li><a href="#section1">Home</a></li>
              <li><a href="#section2">Find Jobs</a></li>
              <li><a href="#section3">Join</a></li>
              <li><a href="#section4">About</a></li>
        </ul>
        <ul class="list-inline" style="">
              <li><a href="#section1"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#section2"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#section3"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#section4"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        <p>Copyright © 2017</p>
    </div>
    <!-- ENDFOOTER -->

</body>
</html>