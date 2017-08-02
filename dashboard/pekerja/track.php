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
	 <?php include('../../view/head-user.php') ?>

  <link rel="stylesheet" type="text/css" href="../../assets/css/style-user.css">

</head>
	
<body>
<?php include('../../view/header-pekerja.php') ?>

<div class="container main-content" id="startchange">
  <p>Ini nantinya berisi <i>Tracking</i> dari pekerja. Apa saja job yang pernah diambil dan diselesaikannya. Sehingga menjadi pertimbangan orang yang butuh pekerjaan nantinya.</p>
  <table class="table">
      <th>No</th>
      <th>Judul</th>
      <th>Date Submitted</th>
      <th>Perusahaan</th>

      <?php include '../../controller/include.pekerja.track.table.php'; ?>

    </table>
   <?php include '../../view/footer.php'; ?>
</div>
<!-- ============================================================================================= -->

</body>
</html>