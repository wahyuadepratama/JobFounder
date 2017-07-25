<?php 

class function_session{

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

	function admin(){

		if(!isset($_SESSION['admin'])){
			header('location: ../');
		}

		$this->logout();
	}

}

 ?>