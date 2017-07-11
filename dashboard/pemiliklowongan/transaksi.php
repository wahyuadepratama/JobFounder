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
<!-- MAKAN BANG -->
	<nav class="navbar navbar-default transbg">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin">0</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right" id="menu">
        <li role="presentation" class="active"><a href="lowonganbaru.php">New Upload</a></li>
        <li role="presentation"  class="noac"><a href="employee.php">Employee</a></li>
        <li role="presentation" class="noac"><a href="profile.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!-- end Menu -->
<!-- Dashboard -->
<br>
<div class="container-fluid">
	<div class="container trans">
		<div class="panel panel-default">
		  <div class="panel-body">
		  	<h1 class="text-center"><img src="../../assets/images/coin.png"> JobUs Koin </h1><br>
		    <ul class="list-group">
		  <li class="list-group-item">
		    <div class="container-fluid">
		    	<div class="col-sm-6 text-center">
		    		<p class="koinp">200</span><img src="../../assets/images/coin.png"></p>
		    	</div>
		    	
		    	<div class="col-sm-6 text-center"><p>
             		<button class="btn btn-default buy" data-toggle="collapse" data-target="#satu">Rp 10,000,-</button></p>
             </div>
		    </div>
		   
		  </li>
		  <li class="list-group-item">
	  		<div class="container-fluid">
		    	<div class="col-sm-6 text-center">
		    		<p class="koinp">1100</span><img src="../../assets/images/coin.png"></p>
		    	</div>
		    	
		    	<div class="col-sm-6 text-center"><p>
             		<button class="btn btn-default buy" data-toggle="collapse" data-target="#satu">Rp 50,000,-</button></p>
             </div>
		    </div>
		  </li>
		</ul>
		  </div>
		</div>
	</div>
</div>

<div class="container panel panel-default collapse" id="satu">
  <br>
  <p class="text-center">DISINI TRANSAKSI PEMBAYARAN KOIN JOBUS</p>
  <br>
</div>
<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>