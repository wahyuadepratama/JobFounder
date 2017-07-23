<!DOCTYPE html>
<?php
	// NB:SWEETALERT BELUM TERPASANG 
	session_start();
	include '../controller/class.admin.php';
	include '../controller/class.script.php';
	include '../controller/koneksi.php';	
	

 ?>
<html>
<head>
	<title>Control Panel Admin</title>
	<?php include '../view/source3.php'; ?>
</head>
<body style="background-color: #D9D9D9;">
	<div class="container-fluid bg-admin" style="padding:0px;">
		<div class="panel panel-default center-block admin-panel">
		  <div class="panel-heading panel-heading-admin">
			  	<div class="pull-left">
			  		<img src="../assets/images/logofix.png" width="50" style="padding-top:10px;">
			  	</div>
			  	<div class="pull-right">
			  		<p class="login-title">Control Panel Admin</p>
			  	</div>
		  </div>
		  <form method="post">
		  <div class="panel-body">
		    	<div class="form-group">
		    	  <p class="text-center"><i>Masukkan username dan password Admin</i></p>
				  <input type="text" class="form-control inputtext center-block" name="lusername" placeholder="Username">
				  <input type="password" class="form-control inputtext center-block" name="lpassword" placeholder="Password">
				</div>
				
		  </div>
		  <div class="panel-footer admin-foot">
		  <button class="btn btn-primary center-block admin-btn" name="login">Login</button> 
		  </div>
		</div>
		</form>
	</div>

	
</body>
<?php 
	include '../controller/validator.php';
 ?>
</html>