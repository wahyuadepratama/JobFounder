<?php 
	if(isset($_POST['submit'])){
		
	//cek dan update jumlah koin
		$koin = $pengiklan->get_koin($_SESSION['user']['id_pengiklan']);
		echo $koin;

		if($koin < $_POST['durasi']){
			$script->alert_warning('Maaf!','Koin Anda Tidak Mencukupi !');
		}else{
			$pengiklan->cek_koin($_POST['durasi'],$_SESSION['user']['id_pengiklan']);
		// insert ke postingan
			$postingan->set_all_property('pro',$_POST['durasi'],'belum');
			$postingan->insert_data();	
			$script->alert_redirect('Berhasil !','Iklan anda akan di posting setelah disetujui admin. Silahkan cek List Posting','new-posting');
		}
	}
?>