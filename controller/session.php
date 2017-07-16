<?php 

	function session_cek(){

		if(!isset($_SESSION['user']))
		{
			header('location: ../../');	
		}

		if (isset($_POST['logout']))
		{
			session_destroy();
			header('location: ../../');
		}

	}

 ?>