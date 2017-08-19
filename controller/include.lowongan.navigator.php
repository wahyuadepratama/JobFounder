<nav>
			  <ul class="pager">
			  <?php 	
			  	if($page>1){
			  		$prev = $page-1;
					if(isset($_REQUEST)){
			    		$ur_l = '?';
			    		unset($_REQUEST['cari'],$_REQUEST['page']);

			    		foreach ($_REQUEST as $key => $value) {
			    			$ur_l = $ur_l.$key."=".$value."&";
			    		}

			    		$ur_l = $ur_l.'page='.$prev;
			    	}			    	
			  		echo "
					<li class='previous'><a href='".$ur_l."'><span aria-hidden='true'><div class='glyphicon glyphicon-hand-left'> PREVIOUS</div></span></a></li>
			  		";
			  	}
			  	if($page<$n_page){
			  		$next = $page+1;
					if(isset($_REQUEST)){
			    		$ur_l = '?';
			    		unset($_REQUEST['cari'],$_REQUEST['page']);

			    		foreach ($_REQUEST as $key => $value) {
			    			$ur_l = $ur_l.$key."=".$value."&";
			    		}
			    		$ur_l = $ur_l.'page='.$next;
			    	}
			  		echo "
					<li class='next'><a href='".$ur_l."'>NEXT  <span aria-hidden='true'><div class='glyphicon glyphicon-hand-right'></div></span></a></li>
			  		";
			  	}
			  ?>			 	
			 	
			  </ul>
			</nav>