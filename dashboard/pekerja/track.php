<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/class.session.php';
  require_once '../../controller/class.script.php';
  require_once '../../model/class.pekerja.php';
  require_once '../../model/class.pengiklan.php';
  require_once '../../model/class.lowongan.php';

  $pengiklan = new pengiklan();
  $lowongan = new lowongan();
  $session = new function_session();
  $pekerja = new pekerja();
  $script = new function_script();

  $session->pekerja();

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
<div class="container">
	<ul class="nav nav-pills">
		<li role="presentation" class="active"><a href="track.php">Tracking</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<br>
<!-- end Menu -->

<!-- Dashboard -->
<div class="container content-ku">
	<h4>Ini nantinya berisi <i>Tracking</i> dari pekerja. Apa saja job yang pernah diambil dan diselesaikannya. Sehingga menjadi pertimbangan orang yang butuh pekerjaan nantinya.</h4>

	<div class="container table-responsive" >
    <table class="table">
    	<th>No</th>
    	<th>Judul</th>
    	<th>Date Submitted</th>
    	<th>Perusahaan</th>

      <?php include '../../controller/include.pekerja.track.table.php'; ?>

    </table>
    </div>
</div>

<!-- //Dashboard -->

<!-- FOOTER -->
  <?php include '../../view/footer2.php'; ?>

<!-- javascript -->
	<?php include '../../view/script.php'; ?>

</body>
</html>