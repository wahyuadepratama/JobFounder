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
	<?php include '../../view/head-user.php'; ?>
	<link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">

</head>
	
<body>
<?php include('../../view/header-company.php') ?>
	<div class="container main-content" id="startchange">
   	  <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="free.php">
            <img src="../../assets/images/free.png" height="70%" width="70%"><br>
            <div class="caption">
              <h4>Upload Lowongan Gratis</h4>
              <p>Iklan Lowongan Anda Akan Bertahan Selama 1 minggu</p>
            </div>
            </a>
          </div>
        </div>
      
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="pro.php">
            <img src="../../assets/images/coin.png" height="40%" width="40%">
            <div class="caption">
              <h4>Gunakan Koin JobUs</h4>
              <p>Dapatkan tambahan fitur download CV dan upload poster. 1 koin = 1 hari</p>
            </div>
            </a>
          </div>
        </div>

        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="transaksi.php">
            <img src="../../assets/images/money.png" height="40%" width="40%">
            <div class="caption">
              <h4>Dapatkan Koin JobUs</h4>
              <p>Dapatkan koin JobUs hanya dengan Rp.50/koin.</p>
            </div>
            </a>
          </div>
        </div>
   </div>

   	<?php include('../../view/footer.php') ?>

<!-- ==================================================================================================================== -->


</body>
</html>