			<div class="dropdown" >
			  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
			    Kategori
			    <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" name="kategori">
			  	<li role="presentation"><a role="menuitem" tabindex="-1" href='
			  	<?php 
					if(isset($_REQUEST)){
			    		echo '?';
			    		unset($_REQUEST['tipe'],$_REQUEST['cari'],$_REQUEST['page']);

			    		$i=1;
			    		$n=count($_REQUEST);
			    		foreach ($_REQUEST as $key => $value) {
			    			echo $key."=".$value;
			    			if($i<$n){
					    			echo '&';
					    	}
					    	$i++;
			    		}
			    	}

			  		 ?>

			  	'>Semua</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href='
			    <?php 
			    	if(isset($_REQUEST)){
			    		echo '?';
			    		unset($_REQUEST['tipe'],$_REQUEST['cari'],$_REQUEST['page']);

			    		foreach ($_REQUEST as $key => $value) {
			    			echo $key."=".$value."&";
			    		}
			    		echo 'tipe=tetap';
			    	}

			    	 ?>


			    '>Kerja Tetap</a></li>
			    <li role="presentation"><a role="menuitem" tabindex="-1" href='			    
			    <?php 
			    	if(isset($_REQUEST)){
			    		echo '?';
			    		unset($_REQUEST['tipe'],$_REQUEST['cari'],$_REQUEST['page']);

			    		foreach ($_REQUEST as $key => $value) {
			    			echo $key."=".$value."&";
			    		}
			    		echo 'tipe=kontrak';
			    	}

			    	 ?>'>Kerja Freelance</a></li>
			  </ul>
			</div>