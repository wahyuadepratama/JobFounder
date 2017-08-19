<?php 

			if(isset($_REQUEST['page'])){
				$page = $_REQUEST['page'];
			}else{
				$page = 1;
			}

		if(isset($_POST['cari'])){

			if(isset($_REQUEST)){
			    		$ur_l = 'lowongan.php?';			    		
			    		unset($_REQUEST['kategori'],$_REQUEST['cari'],$_REQUEST['page']);			    				

			    		$i=1;
			    		$n=count($_REQUEST);

			    			foreach ($_REQUEST as $key => $value) {
					    		$ur_l = $ur_l.$key."=".$value;
					    		if($i<$n){
					    			$ur_l=$ur_l.'&';
					    		}
					    		$i++;
			    			}
			    		if(array_key_exists('kategori', $_POST)){
				    		if(isset($_POST['kategori'])){
				    			$kategori = serialize($_POST['kategori']);
				    			$ur_l = $ur_l.'&kategori='.$kategori;


				    		}	
			    		}						


			}
			header('Location: '.$ur_l);
		}		

		if(isset($_REQUEST['tipe'])||isset($_REQUEST['kategori'])){
			$data = $postingan->select_in_lowongan();	
		}else{
			$data = null;
		}
		

	// if(isset($_REQUEST['tipe'])){

	// 	if($_REQUEST['tipe']=='tetap'){

	// 		if(isset($_POST['cari']) && isset($_POST['kategori'])){

	// 			$data = $postingan->select_by_kategori($_POST['kategori'],'Karyawan');		

	// 		}else{

	// 			$data = $postingan->select_tipe_active('Karyawan');		

	// 		}
			
	// 	}elseif($_REQUEST['tipe']=='kontrak'){

	// 		if(isset($_POST['cari']) && isset($_POST['kategori'])){

	// 			$data = $postingan->select_by_kategori($_POST['kategori'],'kontrak');	

	// 		}else{

	// 			$data = $postingan->select_tipe_active('kontrak');		

	// 		}

	// 	}else{

	// 		$script->redirect('lowongan');

	// 	}
	// }elseif(isset($_POST['cari']) && isset($_POST['kategori'])){

	// 	$data = $postingan->select_by_kategori($_POST['kategori'],'');

	// }else{

	// 	$data = $postingan->select_active();

	// }

 ?>