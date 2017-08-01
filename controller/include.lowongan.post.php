<?php 

	if(isset($_REQUEST['tipe'])){

		if($_REQUEST['tipe']=='tetap'){

			if(isset($_POST['cari']) && isset($_POST['kategori'])){

				$data = $postingan->select_by_kategori($_POST['kategori'],'Karyawan');		

			}else{

				$data = $postingan->select_tipe_active('Karyawan');		

			}
			
		}elseif($_REQUEST['tipe']=='paruh_waktu'){

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