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

<!-- 
 function cekPass()
3
{
4
    p1 = document.frm.pass1.value;
5
    p2 = document.frm.pass2.value;
6
    if(p1==p2)
7
    {
8
        document.frm.btn.disabled=false;
9
        document.frm.nama.disabled=false;
10
        document.frm.alamat.disabled=false;
11
        document.frm.tanggal.disabled=false;
12
    }
13
    else
14
    {
15
        document.frm.btn.disabled=true;
16
        document.frm.nama.disabled=true;
17
        document.frm.alamat.disabled=true;
18
        document.frm.tanggal.disabled=true;
19
    }
20
}
21
</script>
22
<fieldset>
23
<legend>Pendaftaran Member</legend>
24
<form name="frm" method="post">
25
<table>
26
<tr><td>Password </td><td>: <input type="password" name="pass1" onChange="cekPass();"></td></tr>
27
<tr><td>Ulangi Password </td><td>: <input type="password" name="pass2" onChange="cekPass();"></td></tr>
28
<tr><td>Nama </td><td>: <input type="text" name="nama" disabled="true"></td></tr>
29
<tr><td>Alamat </td><td>: <input type="text" name="alamat" disabled="true"></td></tr>
30
<tr><td>Tanggal </td><td>: <input type="text" name="tanggal" disabled="true"></td></tr>
31
<tr><td colspan=2><input type="submit" name="btn" disabled="true" value="Kirim Inputan"></td></tr>
32
</form>
 -->