<?php 

	class function_script
	{
		function alert_success($title, $content){
			echo '
				<script type="text/javascript">swal("'.$title.'", "'.$content.'", "success")</script>
			';
		}

		function alert_warning($title, $content){
			echo '
				<script type="text/javascript">sweetAlert("'.$title.'", "'.$content.'", "error");</script>
			';
		}

		function message($title, $content){
			echo '
				<script type="text/javascript">	 swal("'.$title.'", "'.$content.'");</script>
			';
		}

		function alert_timer($title, $content, $timer){
			echo '
				<script type="text/javascript">	

					swal({
					  title: "'.$title.'",
					  text: "'.$content.'",
					  timer: '.$timer.',
					  showConfirmButton: false
					});

				</script>
			';
		}

		function redirect($path){
			echo '
				<script type="text/javascript">
					document.location.href="'.$path.'";
				</script>
			';
		}
	}

 ?>