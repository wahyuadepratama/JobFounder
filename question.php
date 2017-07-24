<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | FAQ </title>
	<?php 
	session_start();
	include 'view/source2.php'; ?>

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
					<li><i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>Frequently asked questions</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- faq -->
<br><br><br>
<center><h1>No Content !</h1></center>
<br><br><br>
<!-- //faq -->

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