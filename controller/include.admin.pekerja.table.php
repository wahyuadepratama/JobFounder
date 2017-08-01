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
						<form method='post'>
							<button type='button' class='btn btn-default' data-toggle='modal' data-target='#".$row['id_pekerja']."'>Detail</button>
							<button class='btn btn-default'>Akun</button>
							<button class='btn btn-default' name='delete' value='".$row['id_pekerja']."'>Hapus</button>
						</form>
						
					</td>
				</tr>

				    ";
				    $i++;
				}} 
			?>