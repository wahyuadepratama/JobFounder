<?php 

	$path = explode("/", "$_SERVER[REQUEST_URI]");
	$file = $path[count($path)-1];
	$script = new function_script();

	if($file=='daftar.php'){

		$pengiklan = new pengiklan();
		$pekerja = new pekerja();

	}elseif($file=='admin.php'){

		$admin = new admin();

	}	
	
	

// SIGNUP

	if(isset($_POST['sign'])) {
		if($_POST['opsi1']==0) {
			$script->alert_warning('Gagal Mendaftar','Anda tidak mengisi data dengan lengkap!');
		}
		else {
		//cek opsi yang dipilih apakah pengiklan atau pekerja
			try {
				if($_POST['opsi1']==1) {
					$objek = $pengiklan;
				}
				elseif ($_POST['opsi1']==2) {
					$objek = $pekerja;
				}
					$objek->insert_data_signup();
					echo 'here';
					$script->alert_success('Sukses Mendaftar','Silahkan login');
				
			} catch (Exception $e) {
				$script->alert_warning('Gagal Mendaftar',' Email atau No Handphone sudah pernah digunakan');
			}

		}
		
	}


// LOGIN

	if(isset($_POST['login'])) {
		if($file == 'daftar.php'){
			if($_POST['opsi2']==0) {
			$script->alert_warning('Gagal Login','Anda tidak mengisi pilihan dengan benar!');
			}
			else {
				//cek opsi yang dipilih apakah pengiklan atau pekerja
				if($_POST['opsi2']==1) {
					$result = $pengiklan->cek_login($_POST);
					$_SESSION['pengiklan'] = $result['status'];
					$lokasi = 'dashboard/pengiklan/profile';
				}
				elseif ($_POST['opsi2']==2) {
					$result = $pekerja->cek_login($_POST);
					$_SESSION['pekerja'] = $result['status'];
					$lokasi = 'dashboard/pekerja/profile';
				}
			} 	
		}elseif($file == 'admin.php'){
			$result = $admin->cek_login($_POST);
			$_SESSION['admin'] = $result['status'];
			$lokasi = 'dashboard';
		}
		
		if(isset($result)){
			if(!$result['status']) { 
				$script->alert_warning('Gagal Login','Username atau Password Anda Salah'); 
			}
			else {					
				$_SESSION['user'] = $result['data'];
				// $script->redirect($lokasi);
			}	
		}		
	}

// CEK SESSION
	$session = new function_session();
	if(isset($_SESSION)){
		foreach ($_SESSION as $key => $value) {
			if($key != 'user'){
				if($key == 'admin'){
					$location = 'dashboard/'.$key.'/dashboard';
				}				
				else{				
					$location = 'dashboard/'.$key.'/profile';
				}
			}elseif($key == 'user'){
				if($file == 'admin.php'){
					$script->redirect('../../'.$location);	
				}else{
					$script->redirect($location);	
				}
				
			}						
		}
	}
 ?>