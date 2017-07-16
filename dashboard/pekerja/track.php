<?php 
  session_start();
  require_once '../../controller/koneksi.php';
  require_once '../../controller/session.php';
  require_once '../../controller/class.script.php';
  require_once '../../controller/class.pekerja.php';

  $pekerja = new pekerja();
  $script = new function_script();

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
<div class="container">
	<h4>Ini nantinya berisi <i>Tracking</i> dari pekerja. Apa saja job yang pernah diambil dan diselesaikannya. Sehingga menjadi pertimbangan orang yang butuh pekerjaan nantinya.</h4>

	<div class="container table-responsive" >
    <table class="table">
    	<th>No</th>
    	<th>Judul</th>
    	<th>Date Submitted</th>
    	<th>Perusahaan</th>

    <tbody>
    	<td> 1 </td>
    	<td> Cleaning Service </td>
    	<td>12-12-2012</td>
    	<td>PT. ikan-ikan</td>
    </tbody>
    
    </table>
    </div>
</div>

<!-- Dashboard -->
<!-- javascript -->
	<?php include '../../view/script.php'; ?>
<!-- javascript -->

</body>
</html>