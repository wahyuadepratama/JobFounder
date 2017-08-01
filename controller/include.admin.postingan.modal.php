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
		            <img src='../../assets/images/yola-small.jpg' class='img-responsive center-block'>
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