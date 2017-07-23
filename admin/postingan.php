<!DOCTYPE html>
<?php session_start();
	include '../controller/koneksi.php';
	include '../controller/class.postingan.php';
	include '../controller/class.pengiklan.php';
	include '../controller/class.script.php';

	$postingan = new postingan();
	$pengiklan = new pengiklan();
	$script = new function_script();

	$data = $postingan->select_all_postingan();
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
			<?php 
			if(count($data) > 0){
				$i = 1;
				foreach ($data as $rows ) {
					echo "
			<tr>
				<td>".$i."</td>
				<td>".$rows['judul']."</td>
				<td>".$rows['tanggal']."</td>
				<td>".$pengiklan->get_profile_id($rows['id_pengiklan'])['data']['nama']."</td>
				<td>".$rows['approved']."</td>
				<td>
					<form method='post'>
						<button type='button' class='btn btn-default' data-toggle='modal' data-target='#".$rows['id_postingan']."'>Detail</button>
						<button class='btn btn-default' name='approve' value='".$rows['id_postingan']."'>Approve</button>
						<button class='btn btn-default' name='delete' value='".$rows['id_postingan']."'>Hapus</button>
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
    <div id='".$row['id_postingan']."' class='modal fade' role='dialog'>
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
	            		<td class='text-left'>Judul </td>
	            		<td style='width:20px'> : </td>
	            		<td class='text-left'>".$row['judul']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Sender </td>
	            		<td> : </td>
	            		<td class='text-left'>".$pengiklan->get_profile_id($row['id_pengiklan'])['data']['nama']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Tipe </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['tipe']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Durasi </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['durasi']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Status </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['status']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Approved </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['approved']."</td>
            		</tr>
            		<tr>
	            		<td class='text-left'>Tanggal Approve </td>
	            		<td> : </td>
	            		<td class='text-left'>".$row['tgl_approved']."</td>
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
<?php 
	if(isset($_POST['delete'])){
		$postingan->delete_by_id($_POST['delete']);
		$script->redirect('postingan');
	}

	if (isset($_POST['approve'])) {
		$postingan->approve($_POST['approve']);
		$script->redirect('postingan');
	}

		 ?>
</html>