<?php 

	$path = explode("/", "$_SERVER[REQUEST_URI]");
	$file = $path[count($path)-2];

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
			global $file;
			echo $file;
			if($file=='admin'){
				header('location: ../');
			}else{
				header('location: ../../');	
			}			
			
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