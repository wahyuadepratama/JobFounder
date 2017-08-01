<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../model/class.pengiklan.php';

  $session = new function_session();
  $pengiklan = new pengiklan();

  $session->pengiklan();
?>

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
<div class="container" >
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
      <a class="navbar-brand"><img class="img-responsive" src="../../assets/images/coin-small.png"></a><a class="coin"><?php echo $pengiklan->get_koin($_SESSION['user']['id_pengiklan']) ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right" id="menu">
        <li role="presentation" class="active"><a href="new-posting.php">New Posting</a></li>
        <li role="presentation"  class="noac"><a href="list-posting.php">List Posting</a></li>
        <li role="presentation" class="noac"><a href="profile.php">Profile</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<!-- end Menu -->

<br>
<center>
	<div class="container content-ku">
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
		        <p>Dapatkan tambahan fitur download CV dan upload poster. 1 koin = 1 hari</p>
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

<!-- FOOTER -->
	<?php include '../../view/footer2.php'; ?>

<!-- javascript -->
	<?php include '../../view/script.php'; ?>

</body>
</html>