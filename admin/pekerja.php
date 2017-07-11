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
  		<li role="presentation" class="active"><a href="../admin/pekerja.php">Pekerja</a></li>
  		<li><a href="../admin/pengiklanan.php">Pengiklanan</a></li>
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
			<tr>
				<td>1</td>
				<td>Yoga</td>
				<td>12-12-2012</td>
				<td>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Detail</button>
					<button class="btn btn-default">Akun</button>
					<button class="btn btn-default">Hapus</button>
				</td>
			</tr>
			<tr>
				<td>2</td>
				<td>Yola</td>
				<td>12-12-2012</td>
				<td>
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Detail</button>
					<button class="btn btn-default">Akun</button>
					<button class="btn btn-default">Hapus</button>
				</td>
			</tr>
			</tbody>

		</table>

     <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
            <h4 class="modal-title">Detail Akun</h4>
          </div>
          <div class="modal-body">
          <!-- Photo Profile -->
           <div class="container-fluid">
            <div class="col-sm-4">
            <img src="../assets/images/yola-small.jpg" class="img-responsive center-block">
            <br>
            </div>
            <div class="col-sm-8">
            	<table align="center">
            		<tr>
	            		<td class="text-left">Nama </td>
	            		<td style="width:20px"> : </td>
	            		<td class="text-left">Yolanda Parawita</td>
            		</tr>
            		<tr>
	            		<td class="text-left">e-mail </td>
	            		<td> : </td>
	            		<td class="text-left">parawitayolanda@gmail.com</td>
            		</tr>
            		<tr>
	            		<td class="text-left">Telephone </td>
	            		<td> : </td>
	            		<td class="text-left">081267866712</td>
            		</tr>
            		<tr>
	            		<td class="text-left">Social Media </td>
	            		<td> : </td>
	            		<td class="text-left">nabang97</td>
            		</tr>
            		<tr>
	            		<td class="text-left">Alamat </td>
	            		<td> : </td>
	            		<td class="text-left">Sumatera Barat</td>
            		</tr>
            		<tr>
	            		<td class="text-left">Keahlian </td>
	            		<td> : </td>
	            		<td class="text-left">blablabalabla</td>
            		</tr>
            	</table>
            </div>
            
           </div>
            
          <!-- Deskripsi -->

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->
	</div>
	<!-- end main content -->
</body>
</html>