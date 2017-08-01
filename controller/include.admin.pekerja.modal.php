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
            <img src='../../assets/images/yola-small.jpg' class='img-responsive center-block'>
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