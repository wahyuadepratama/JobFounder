<?php 	
			    		if($postingan['data']['status']=='pro'){
			    			echo "
								<div class='form-group'>
			    				<label for='exampleInputFile'>Upload CV</label><br><br>
			    				<input type='file' id='cv' name='cv'>
			    				<p class='help-block'>nb : ekstensi yang diterima hanya berupa doc/docx/pdf</p>
								</div>
			    			";
			    					
			    		}
			    		if(isset($_SESSION['pekerja'])){

			    			$cek =$lowongan->cek_apply($_SESSION['user']['id_pekerja'],$id_postingan);
			    			if($cek['status']){
			    				echo "<button type='submit' class='btn btn-primary' name='apply' disabled='true'>Apply</button>";
			    			}else{
			    				echo "<button type='submit' class='btn btn-primary' name='apply'>Apply</button>";
			    			}
			    		}else{
			    			echo "<button type='submit' class='btn btn-primary' name='apply'>Apply</button>";
			    		}
			    	 ?>