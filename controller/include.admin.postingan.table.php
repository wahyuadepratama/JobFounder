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
			} 
		?>	