<?php 

class pengiklan
 {

 	public $id_pengiklan;
 	public $username;
 	public $email;
 	public $no_hp;
 	public $password;
 	public $foto_profile;
 	public $nama;
 	public $sosmed;
 	public $provinsi;
 	public $kota;
 	public $kecamatan;
 	public $alamat;
 	public $lokasi;
 	public $koin;
 	public $tanggal;
 	public $deskripsi;

 	function __construct(){}

 	function get_data($query, $param){
			try{
				global $pdo;
				$req = $pdo->prepare($query);
				if($param == ''){
					$req->execute();
				}else{
					$req->execute($param);
				}

				$rows = $req->rowCount();
				$status = false;

				if($rows > 0){
					$status = true;
				}

				$data = $req->fetch(PDO::FETCH_NAMED);

				return array('status' => $status, 'rows' => $rows, 'data' => $data);
			}catch(PDOException $e){
				echo "Error! gagal mengambil data: ".$e->getMessage();
			}
	}

 	function insert_data_signup(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `pengiklan` (`id_pengiklan`, `username`, `email`, `no_hp`, `password`, `koin`, `tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, '0', CURRENT_TIMESTAMP)");
		$query->execute(array($_POST['username'],$_POST['email'],$_POST['no_handphone'],md5($_POST['password'])));
 	}

  	function cek_login($data_post){
			$query = "SELECT * FROM pengiklan WHERE username=:lusername AND password=:lpassword";
			$param = array(
					':lusername' => strtoupper($data_post['lusername']),
					':lpassword' => md5($data_post['lpassword'])
				);

			return $this->get_data($query, $param);
	}

 	function set_all_property($data_array){
 		$this->id_pengiklan = $data_array['id_pengiklan'];
 		$this->username = $data_array['username'];
 		$this->email = $data_array['email'];
 		$this->no_hp = $data_array['no_hp'];
 		$this->password = $data_array['password'];
 		$this->foto_profile = $data_array['foto_profile'];
 		$this->nama = $data_array['nama'];
 		$this->sosmed = $data_array['sosmed'];
 		$this->provinsi = $data_array['provinsi'];
 		$this->kota = $data_array['kota'];
 		$this->kecamatan = $data_array['kecamatan'];
 		$this->alamat = $data_array['alamat'];
 		$this->lokasi = $data_array['lokasi'];
 		$this->koin = $data_array['koin'];
 		$this->tanggal = $data_array['tanggal'];
 		$this->deskripsi = $data_array['deskripsi'];
 	}

 	function profile_picture(){
			$ekstensi_diperbolehkan	= array('png','jpg');
			$nama = $_FILES['foto_profile']['name'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['foto_profile']['size'];
			$file_tmp = $_FILES['foto_profile']['tmp_name'];	
 
			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					move_uploaded_file($file_tmp, 'picture/'.$this->username.".".$ekstensi);
				}
				return $this->username.".".$ekstensi;
			}else{
				return NULL;
			} 		
 	}

 	function set_profile_post(){
 		$file = $this->profile_picture();
 		$this->foto_profile = $file;
		$this->nama = $_POST['nama'];
		$this->deskripsi = $_POST['deskripsi'];
		$this->email = $_POST['email'];
		$this->no_hp = $_POST['no_hp'];
		$this->sosmed = $_POST['sosmed'];
		$this->provinsi = $_POST['provinsi'];
		$this->kota = $_POST['kota'];
		$this->kecamatan = $_POST['kecamatan'];
		$this->alamat = $_POST['alamat'];
		$this->lokasi = $_POST['lokasi'];

		$this->update_profile_set();
 	}

 	function update_profile_set(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `pengiklan` SET 
 			`foto_profile` 	= ?,
 			`nama` 			= ?,
 			`deskripsi`		= ?,
 			`sosmed` 		= ?,
 			`provinsi` 		= ?,
 			`kota` 			= ?,
 			`kecamatan` 	= ?,
 			`alamat` 		= ?,
 			`lokasi` 		= ?
 			WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array(
			$this->foto_profile,
			$this->nama,
			$this->deskripsi,
			$this->sosmed,
			$this->provinsi,
			$this->kota,
			$this->kecamatan,
			$this->alamat,
			$this->lokasi,
			$this->id_pengiklan
			));
 	}

  	function get_profile_id($id){
		$query = "SELECT * FROM `pengiklan` WHERE `pengiklan`.`id_pengiklan` = ?";
		$param = array($id);
		return $this->get_data($query, $param);
	}

	function get_koin($id){
		$koin = $this->get_profile_id($id);
		$this->koin = $koin['data']['koin'];
		return $this->koin;
	}

	function cek_koin($durasi,$id){
		$this->koin = $this->koin - $durasi;
		$this->update_koin_id($id);
	}

 	function update_koin_id($id){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `pengiklan` SET 
 			`koin` 		= ?
 			WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array(
			$this->koin,
			$id
			));
 	}

 	function delete_by_id($id){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `pengiklan` WHERE `pengiklan`.`id_pengiklan` = ?");
		$query->execute(array($id));
 	}

 	function get_all_rows($query, $param){
			try{
				global $pdo;
				$req = $pdo->prepare($query);
				if($param == ''){
					$req->execute();
				}else{
					$req->execute($param);
				}

				if($req->rowCount() > 0){
					$result = $req->fetchAll();
					return $result;
				}

				
			}catch(PDOException $e){
				echo "Error! gagal mengambil data: ".$e->getMessage();
			}
	}

	function get_daerah(){
			$a = $this->provinsi.'.00.00.0000';
			$b = $this->provinsi.'.'.$this->kota.'.00.0000';
			$c = $this->provinsi.'.'.$this->kota.'.'.$this->kecamatan.'.0000';

			$query = "select lokasi_nama from inf_lokasi where lokasi_kode='".$a."' or lokasi_kode= '".$b."' or lokasi_kode= '".$c."'";
			$result = $this->get_all_rows($query,'');

			return $result;
	}

	function get_all_profile(){
			$query = "SELECT * FROM `pengiklan`";
			return $this->get_all_rows($query, '');
	}	
 }


 ?>