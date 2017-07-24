<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	session_start();
	include '../view/source3.php'; ?>
</head>
<body>
 <?php include('../view/navbar.php'); ?>

	<ul class="nav nav-tabs nav-justified">
  		<li role="presentation" class="active"><a href="../admin/dashboard.php">Home</a></li>
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>
	<!-- Main content -->
	<div class="container">
		

	</div>
	<!-- end main content -->
</body>
</html>