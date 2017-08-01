<?php
	if(isset($_POST['delete'])){
		$pekerja->delete_by_id($_POST['delete']);
		$script->redirect('pekerja');
	}
?>