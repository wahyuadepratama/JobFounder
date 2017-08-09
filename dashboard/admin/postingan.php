<?php 
	session_start();
	include '../../controller/koneksi.php';
	include '../../model/class.postingan.php';
	include '../../model/class.pengiklan.php';
	include '../../controller/class.script.php';

	$postingan = new postingan();
	$pengiklan = new pengiklan();
	$script = new function_script();

	$data = $postingan->select_all_postingan();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include '../../view/head-user.php'; ?>
</head>
<body>
 <?php include('../../view/navbar.php'); ?>
 
	<ul class="nav nav-tabs nav-justified">
  		<li><a href="../admin/dashboard.php">Home</a></li>
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklan.php">Pengiklanan</a></li>
  		<li role="presentation" class="active"><a href="postingan.php">Postingan</a></li>
  		<li><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>
	<!-- Main content -->
	<div class="container">
		<table  class="table table-condensed table-responsive">
			<thead>
				<th>No </th>
				<th>Judul Postingan</th>
				<th>Tanggal Post</th>
				<th>Sender</th>
				<th>Status</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php include '../../controller/include.admin.postingan.table.php'; ?>				
			</tbody>

		</table>
		
		<?php include '../../controller/include.admin.postingan.modal.php'; ?>

	</div>
	<!-- end main content -->
</body>
</html>

<?php include '../../controller/include.admin.postingan.post.php'; ?>