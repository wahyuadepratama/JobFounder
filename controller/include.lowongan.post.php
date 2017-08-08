<?php 

			if(isset($_REQUEST['page'])){
				$page = $_REQUEST['page'];
			}else{
				$page = 1;
			}


	if(isset($_REQUEST['tipe'])){

		if($_REQUEST['tipe']=='tetap'){

			if(isset($_POST['cari']) && isset($_POST['kategori'])){

				$data = $postingan->select_by_kategori($_POST['kategori'],'Karyawan');		

			}else{

				$data = $postingan->select_tipe_active('Karyawan');		

			}
			
		}elseif($_REQUEST['tipe']=='kontrak'){

			if(isset($_POST['cari']) && isset($_POST['kategori'])){

				$data = $postingan->select_by_kategori($_POST['kategori'],'kontrak');	

			}else{

				$data = $postingan->select_tipe_active('kontrak');		

			}

		}else{

			$script->redirect('lowongan');

		}
	}elseif(isset($_POST['cari']) && isset($_POST['kategori'])){

		$data = $postingan->select_by_kategori($_POST['kategori'],'');

	}else{

		$data = $postingan->select_active();

	}

 ?>