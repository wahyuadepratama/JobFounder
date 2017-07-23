<!DOCTYPE html>
<?php session_start();
include '../controller/class.pekerja.php';
include '../controller/koneksi.php';

$pekerja = new pekerja();
$data = $pekerja->get_all_profile();

 ?>
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
			<?php 
				if(count($data) > 0){
					$i = 1;
				  foreach ($data as $row) {
				    echo "
				<tr>
				<td>$i</td>
				<td>".$row['nama']."</td>
				<td>".$row['tanggal']."</td>
				<td>
					<button type='button' class='btn btn-default' data-toggle='modal' data-target='#".$row['id_pekerja']."'>Detail</button>
					<button class='btn btn-default'>Akun</button>
					<button class='btn btn-default'>Hapus</button>
				</td>
			</tr>

				    ";
				    $i++;
				}} 
			?>		
		</table>
		<?php 
		if(count($data)>0){
			foreach ($data as $row) {
				echo "
	<!-- Modal -->
    <div id='".$row['id_pekerja']."' class='modal fade' role='dialog'>
      <div class='modal-dialog'>

        <!-- Modal content-->
        <div class='modal-content'>
          <div class='modal-header'>
            <!-- <button type='button' class='close' data-dismiss='modal'>&times;</button> -->
            <h4 class='modal-title'>Detail Akun</h4>
          </div>
          <div class='modal-body'>
          <!-- Photo Profile -->
           <div class='container-fluid'>
            <div class='col-sm-4'>
            <img src='../assets/images/yola-small.jpg' class='img-responsive center-block'>
            <br>
            </div>
            <div class='col-sm-8'>
            	<table align='center'>
            		<tr>
	            		<td class='text-left'>Nama </td>
	            		<td style='width:20px'> : </td>
	            		<td class='text-left'>".$row['nama']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>e-mail </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['email']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Telephone </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['no_hp']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Social Media </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['sosmed']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Alamat </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['alamat']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Keahlian </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['keahlian']."</td>
            		</tr>
            	</table>
            </div>
            
           </div>
            
          <!-- Deskripsi -->

          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- End modal -->";
			}
		}

		 ?>
	</div>
	<!-- end main content -->
</body>
</html>