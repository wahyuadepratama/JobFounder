<!DOCTYPE html>
<html lang="en">
<head>

	<title> JobUs | Employee </title>
	<?php include 'view/source.php'; ?>

</head>
	
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			
			<?php include 'view/header.php'; ?>

		</div>
	</div>
<!-- banner -->

<!-- dashboard -->
<br>
<div class="container">
<!-- MAKAN BANG -->
	<ul class="nav nav-pills">
		<li role="presentation"><a href="perusahaan.php">Job Vacancies</a></li>
	  	<li role="presentation" class="active"><a href="employee.php">Employee</a></li>
	  	<li role="presentation"><a href="profile.php">Profile</a></li>
	</ul>
	<ul class="">
		
	</ul>
</div>
<!-- //dashboard -->
<br><br>
<div class="container">
	<h4>Lihat pekerja yang telah mensubmit lowongan perusahaanmu disini. Lihat CV mereka, terima jika memenuhi persyaratan, dan kontak mereka untuk melakukan wawancara.</h4>
</div>

<br><br><br>
<div class="container">
	<p>Judul        : Lowongan PT Freeport</p>
	<p>Waktu upload : Senin, 21 Juni 2017, 14.32</p>
</div>

<div class="container table-responsive">
    <table width="100%" class="table">
    	<th>No</th>
    	<th>Employee Name</th>
    	<th>CV</th>
    	<th>Date Submitted</th>
    	<th>Detail Employee</th>
    	<th>Status</th>
    	<th>Action</th>
    <tbody>
    	<td> 1 </td>
    	<td> Wahyu Ade Pratama </td>
    	<td>
    		<button class="btn btn-default">Download CV</button>
    	</td>
    	<td>12-12-2012</td>
    	<td>
    		<button class="btn btn-default">Show Detail</button>
    	</td>
    	<td>Waiting</td>
    	<td>
    		<button class="btn btn-default">Terima</button>
    		<button class="btn btn-default">Tolak</button>
    	</td>
    </tbody>
    <tbody>
    	<td> 2 </td>
    	<td> Toni Saputro </td>
    	<td>
    		<button class="btn btn-default">Download CV</button>
    	</td>
    	<td>12-12-2012</td>
    	<td>
    		<button class="btn btn-default">Show Detail</button>
    	</td>
    	<td>Accept</td>
    	<td>
    		<button class="btn btn-default" disabled="">Terima</button>
    		<button class="btn btn-default" disabled="">Tolak</button>
    	</td>
    </tbody>

    </table>
	
	<br><br>
</div>
<!-- javascript -->
	<?php include 'view/script.php'; ?>
<!-- javascript -->

</body>
</html>