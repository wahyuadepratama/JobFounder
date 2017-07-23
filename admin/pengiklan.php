<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
		include '../view/source3.php'; 
		include '../controller/koneksi.php';
		include '../controller/class.pengiklan.php';
		include '../controller/class.script.php';

		$pengiklan = new pengiklan();
		$script = new function_script();

		$data = $pengiklan->get_all_profile();
	?>
</head>
<body>
 <?php include('../view/navbar.php'); ?>
 
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
			<?php 
			if(count($data) > 0){
				$i = 1;
				foreach ($data as $rows ) {
					echo "
			<tr>
				<td>".$i."</td>
				<td>".$rows['nama']."</td>
				<td>".$rows['tanggal']."</td>
				<td>
					<form method='post'>
						<button type='button' class='btn btn-default' data-toggle='modal' data-target='#".$rows['id_pengiklan']."'>Detail</button>
						<button class='btn btn-default'>Akun</button>
						<button class='btn btn-default' name='delete' value='".$rows['id_pengiklan']."'>Hapus</button>
					</form>					
				</td>
			</tr>

					";
					$i++;
				}
			} ?>			
			</tbody>
		</table>
		<?php 
		if(count($data)>0){
			foreach ($data as $row) {
				echo "
	<!-- Modal -->
    <div id='".$row['id_pengiklan']."' class='modal fade' role='dialog'>
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
	            		<td class='text-left'>Koin </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['koin']."</td>
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
<?php if(isset($_POST['delete'])){
		$pengiklan->delete_by_id($_POST['delete']);
		$script->redirect('pengiklan');
	} ?>
</html>