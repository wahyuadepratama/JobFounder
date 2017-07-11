<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Dashboard </title>
	<?php include '../../view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include '../../view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- Menu -->
<br>
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation" class="active"><a href="lowonganbaru.php" >New Upload</a></li>
	  	<li role="presentation"><a href="employee.php">Employee</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<!-- end Menu -->

<br>
<center>
	<div class="container">
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <a href="free.php">
		      <img src="/JobFounder/assets/images/free.png" height="70%" width="70%">
		      <div class="caption">
		        <h3>Upload Lowongan Gratis</h3>
		        <p>Iklan Lowongan Anda Akan Bertahan Selama 1 minggu</p><br>
		      </div>
		      </a>
		    </div>
		  </div>
		
		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <a href="pro.php">
		      <img src="/JobFounder/assets/images/coin.png" height="40%" width="40%">
		      <div class="caption">
		        <h3>Gunakan Koin JobUs</h3>
		        <p>Dapatkan tambahan fitur download CV dan upload poster. 1 koin = 1 hari</p><br>
		      </div>
		      </a>
		    </div>
		  </div>

		  <div class="col-sm-6 col-md-4">
		    <div class="thumbnail">
		      <a href="transaksi.php">
		      <img src="/JobFounder/assets/images/money.png" height="40%" width="40%">
		      <div class="caption">
		        <h3>Dapatkan Koin JobUs</h3>
		        <p>Dapatkan koin JobUs hanya dengan Rp.50/koin.</p>
		      </div>
		      </a>
		    </div>
		  </div>
	</div>
</center>
<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>