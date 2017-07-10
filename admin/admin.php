<!DOCTYPE html>
<html>
<head>
	<title>Control Panel Admin</title>
	<?php include '../view/source3.php'; ?>
</head>
<body style="background-color: #D9D9D9;">
	<div class="container-fluid bg-admin">
		<div class="panel panel-default center-block admin-panel">
		  <div class="panel-heading">
			  	<div class="pull-left">
			  		<img src="../assets/images/logofix.png" width="50" style="padding-top:10px;">
			  	</div>
			  	<div class="pull-right">
			  		<p class="login-title">Control Panel Admin</p>
			  	</div>
		  </div>
		  <form>
		  <div class="panel-body">
		    	<div class="form-group">
		    	  <p class="text-center"><i>Masukkan username dan password Admin</i></p>
				  <input type="text" class="form-control inputtext center-block" name="username" placeholder="Username">
				  <input type="password" class="form-control inputtext center-block" name="pass" placeholder="Password">
				</div>
				
		  </div>
		  <div class="panel-footer admin-foot">
		  <button class="btn btn-primary center-block admin-btn">Login</button> 
		  </div>
		</div>
		</form>
	</div>
</body>
</html>