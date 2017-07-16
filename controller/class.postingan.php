<?php 

class postingan
 {

 	public $id_postingan;
 	public $id_pengiklan;
 	public $judul;
 	public $deskripsi;
 	public $kategori;
 	public $gaji;
 	public $keterangan;
 	public $tipe;
 	public $pamflet;
 	public $durasi;
 	public $status;
 	public $tanggal;

 	function __construct(){}

 	function insert_data(){
 		global $pdo;
 		$query = $pdo->prepare("
 			INSERT INTO `postingan` (
 			`id_postingan`, 
 			`id_pengiklan`, 
 			`judul`, 
 			`deskripsi`, 
 			`kategori`, 
 			`gaji`, 
 			`keterangan`, 
 			`tipe`, 
 			`pamflet`, 
 			`durasi`, 
 			`status`, 
 			`tanggal`) 
 			VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
		$query->execute(array(
			$this->id_pengiklan,
			$this->judul,
			$this->deskripsi,
			$this->kategori,
			$this->gaji,
			$this->keterangan,
			$this->tipe,
			$this->pamflet,
			$this->durasi,
			$this->status,

			));
 	}

 	function set_all_property(){
 		$this->id_postingan = $_POST['foto_profile'];
		$this->id_pengiklan = $_SESSION['user']['id_pengiklan'];
		$this->judul = $_POST['judul'];
		$this->deskripsi = $_POST['deskripsi'];
		$this->kategori = $_POST['kategori'];
		$this->gaji = $_POST['gaji'];
		$this->keterangan = $_POST['keterangan'];
		$this->tipe = $_POST['tipe'];
		$this->pamflet = $_POST['pamflet'];
		$this->durasi = $_POST['durasi'];
		$this->status = $_POST['status'];
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `postingan` SET 
 			`judul`			=?, 
 			`deskripsi`		=?, 
 			`kategori`		=?, 
 			`gaji`			=?, 
 			`keterangan`	=?, 
 			`tipe`			=?, 
 			`pamflet`		=?, 
 			`durasi`		=? 
 			WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array(
			$this->judul,
			$this->deskripsi,
			$this->kategori,
			$this->gaji,
			$this->keterangan,
			$this->tipe,
			$this->pamflet,
			$this->durasi,
			$this->id_postingan
			));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `postingan` WHERE `postingan`.`id_postingan` = ?");
		$query->execute(array($this->id_postingan));
 		}
 } 

 ?>