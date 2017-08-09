<?php 
	session_start();
	include '../../model/class.pekerja.php';
	include '../../controller/koneksi.php';
	include '../../controller/class.script.php';

	$pekerja 	= new pekerja();
	$script 	= new function_script();

	$data 		= $pekerja->get_all_profile();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Admin</title>
	<?php include '../../view/head-user.php'; ?>

</head>
<body>

	<?php include('../../view/navbar.php'); ?>
 
	<ul class="nav nav-tabs nav-justified">
  		<li><a href="../admin/dashboard.php">Home</a></li>
  		<li role="presentation" class="active"><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>

	<!-- Main content -->
	<div class="container">
		<table  class="table table-condensed table-responsive">
			<thead>
				<th>No </th>
				<th>Nama Pekerja</th>
				<th>Tanggal Daftar</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php include '../../controller/include.admin.pekerja.table.php'; ?>
			</tbody>
		</table>	

		<?php include '../../controller/include.admin.pekerja.modal.php'; ?>

	</div>
	<!-- end main content -->

</body>
</html>

<?php include '../../controller/include.admin.pekerja.post.php'; ?>