<?php 
	if(isset($_POST['delete'])){
		$postingan->delete_by_id($_POST['delete']);
		$script->redirect('postingan');
	}

	if (isset($_POST['approve'])) {
		$postingan->approve($_POST['approve']);
		$script->redirect('postingan');
	}

?>