<?php 
	session_start();
	include '../../controller/koneksi.php';
	include '../../model/class.pengiklan.php';
	include '../../controller/class.script.php';

	$pengiklan = new pengiklan();
	$script = new function_script();

	$data = $pengiklan->get_all_profile();
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
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li role="presentation" class="active"><a href="../admin/pengiklan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>
	<!-- Main content -->
	<div class="container">
		<table  class="table table-condensed table-responsive">
			<thead>
				<th>No </th>
				<th>Nama Akun</th>
				<th>Tanggal Terdaftar</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php include '../../controller/include.admin.pengiklan.table.php'; ?>			
			</tbody>
		</table>

		<?php include '../../controller/include.admin.pengiklan.modal.php'; ?>

	</div>
	<!-- end main content -->
</body>
<?php if(isset($_POST['delete'])){
		$pengiklan->delete_by_id($_POST['delete']);
		$script->redirect('pengiklan');
	} ?>
</html>