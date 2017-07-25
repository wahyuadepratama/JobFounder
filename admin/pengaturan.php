<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	session_start();
	include '../view/source3.php'; 
	include '../controller/class.session.php'; 

	$session = new function_session();

	$session->admin();

	?>
</head>
<body>

 <?php include('../view/navbar.php'); ?>

	<ul class="nav nav-tabs nav-justified">
  		<li><a href="../admin/dashboard.php">Home</a></li>
  		<li><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklan.php">Pengiklanan</a></li>
  		<li><a href="postingan.php">Postingan</a></li>
  		<li role="presentation" class="active"><a href="pengaturan.php"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Setting</a></li>
	</ul>

	<form method="post">	
		<button name="logout">logout</button>
	</form>
</body>
</html>