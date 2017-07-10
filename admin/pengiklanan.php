<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include '../view/source3.php'; ?>
</head>
<body>
 <?php include('../view/navbar.php'); ?>
 
	<ul class="nav nav-tabs nav-justified">
  		<li><a href="../admin/dashboard.php">Home</a></li>
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li role="presentation" class="active"><a href="../admin/pengiklanan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>
	<!-- Main content -->
	<div class="container">
		<table  class="table table-condensed table-responsive">
			<thead>
				<th>No </th>
				<th>Nama Akun</th>
				<th>Type</th>
				<th>Tanggal Terdaftar</th>
				<th>Action</th>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>Yoga</td>
				<td>Gratis</td>
				<td>12-12-2012</td>
				<td>
					<button class="btn btn-default">Detail</button>
					<button class="btn btn-default">Akun</button>
					<button class="btn btn-default">Hapus</button>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Yola</td>
				<td>Berbayar</td>
				<td>12-12-2012</td>
				<td>
					<button class="btn btn-default">Detail</button>
					<button class="btn btn-default">Akun</button>
					<button class="btn btn-default">Hapus</button>
				</td>
			</tr>
			</tbody>

		</table>

	</div>
	<!-- end main content -->
</body>
</html>