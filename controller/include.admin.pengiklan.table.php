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
			} 
		?>