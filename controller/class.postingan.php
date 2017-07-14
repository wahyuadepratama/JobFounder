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

 	function insert(){
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

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `postingan`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_postingan']=$r['id_postingan'];
				$data[$i]['id_pengiklan']=$r['id_pengiklan'];
				$data[$i]['judul']=$r['judul'];
				$data[$i]['deskripsi']=$r['deskripsi'];
				$data[$i]['kategori']=$r['kategori'];
				$data[$i]['gaji']=$r['gaji'];
				$data[$i]['keterangan']=$r['keterangan'];
				$data[$i]['tipe']=$r['tipe'];
				$data[$i]['pamflet']=$r['pamflet'];
				$data[$i]['durasi']=$r['durasi'];
				$data[$i]['status']=$r['status'];
				$data[$i]['tanggal']=$r['tanggal'];
				$i++;								                            	
			}
		}
		return $data;
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