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
					document.location.href="'.$path.'.php'.'";
				</script>
			';
		}

		function get_docs($date,$username,$dir){
			$tgl = date('Y-m-d H-i-s',strtotime($date));
			$name = '['.$tgl.']'.$username;
			// Open a directory, and read its contents
			if (is_dir($dir)){
			  if ($dh = opendir($dir)){
			    while (($file = readdir($dh)) !== false){
			      	if (strpos($file,$name) !== false) {
					    return $file;					    
					}
			    }
			    closedir($dh);
			  }
			}
		}

		function download($file){
			if (file_exists($file)) {
			    header('Content-Description: File Transfer');
			    header('Content-Type: application/octet-stream');
			    header('Content-Disposition: attachment; filename="'.basename($file).'"');
			    header('Expires: 0');
			    header('Cache-Control: must-revalidate');
			    header('Pragma: public');
			    header('Content-Length: ' . filesize($file));
			    readfile($file);
			    exit;
			}
		}

	}

 ?>
