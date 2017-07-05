<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Profile Perusahaan </title>
	<?php include 'view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- profile -->
<br>
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation"><a href="dashboard.php">Dashboard</a></li>
	  	<li role="presentation"><a href="employee.php">Employee</a></li>
	  	<li role="presentation" class="active"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>

<div class="container">
	<center>
		<img src="assets/images/invest.png" class="img-circle img-responsive" width="200"><br>
		<input type="file" class="custom-file-input">
	</center>
	<br>
	<div class="form-group">
		  <label for="company">Company Name</label>
		  <input type="text" class="form-control" name="company" placeholder="">
	</div>
	<div class="form-group">
		  <label for="desc">Description</label>
		  <textarea class="form-control" rows="5" id="description"></textarea>
	</div>
	<div class="form-group">
		  <label for="email">Email Address</label>
		  <input type="text" class="form-control" name="email" placeholder="">
	</div>
	<div class="form-group">
		  <label for="fax">Telephone/Fax Number</label>
		  <input type="text" class="form-control" name="fax" placeholder="">
	</div>
	<div class="form-group">
		  <label for="Address">Company Address</label>
		  <textarea class="form-control" rows="5" id="address"></textarea>
	</div>

	<div class="form-group">
	<center>
		<button type="submit" class="btn btn-default">Edit</button>
		<button type="submit" class="btn btn-default">Save</button>
	</center>
	</div>
</div>
<!-- end profile -->

<!-- javascript -->
	<?php include 'view/script.php'; ?>
<!-- javascript -->

</body>
</html>