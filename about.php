<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | About </title>
	<?php include 'view/source2.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header2.php'; ?>

		</div>
	</div>
<!-- banner -->

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
<center><h1>Tentang Kami</h1>
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

<!-- footer -->
	<?php include 'view/footer.php'; ?>
<!-- //footer -->

<!-- javascript -->
	<?php include 'view/script2.php'; ?>
<!-- javascript -->

</body>
</html>