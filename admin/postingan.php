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
  		<li><a href="../admin/pengiklanan.php">Pengiklanan</a></li>
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
				<th>Action</th>
			</thead>
			<tbody>
			<tr>
				<td>1</td>
				<td>makan bang</td>
				<td>12-12-2012</td>
				<td>Yoga</td>
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