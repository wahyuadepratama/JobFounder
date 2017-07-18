<?php 

class session{

	function pengiklan(){

		if(!isset($_SESSION['pengiklan'])) {
			header('location: ../../');	
		}

		$this->logout();
	}

	function pekerja(){

		if(!isset($_SESSION['pekerja'])){
			header('location: ../../');
		}

		$this->logout();
	}

	function logout(){

		if (isset($_POST['logout'])) {
			session_destroy();
			header('location: ../../');
		}
	}

	function login(){
		if(isset($_SESSION['pengiklan'])){
			header('location: dashboard/pemilik-lowongan/profile.php');
		}
		elseif(isset($_SESSION['pekerja'])){
			header('location: dashboard/pekerja/profile.php');
		}
	}
}

 ?>