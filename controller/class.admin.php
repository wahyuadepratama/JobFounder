<?php 

class admin
 {

 	public $id_admin;
 	public $username;
 	public $password;


 	function __construct(){}

 	function insert(){
 		global $pdo;
 		$query = $pdo->prepare("INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES (NULL, ?, ?)");
		$query->execute(array($this->username,$this->password));
 	}

 	function select(){
 		global $pdo;
 		$query = $pdo->prepare("SELECT * FROM `admin`");
 		$query->execute();
		if($query->rowCount() > 0 ){
			$i = 0;
			while ($r = $query->fetch()) {                                    
				$data[$i]['id_admin']=$r['id_admin'];
				$data[$i]['username']=$r['username'];
				$data[$i]['password']=$r['password'];
				$i++;								                            	
			}
		}
		return $data;
 	}

 	function update(){
 		global $pdo;
 		$query = $pdo->prepare("UPDATE `admin` SET `username` = ?, `password` = ? WHERE `admin`.`id_admin` = ?");
		$query->execute(array($this->username,$this->password,$this->id_admin));
 	}

 	function delete(){
 		global $pdo;
 		$query = $pdo->prepare("DELETE FROM `admin` WHERE `admin`.`id_admin` = ?");
		$query->execute(array($this->id_admin));
 	}

 }



?>



