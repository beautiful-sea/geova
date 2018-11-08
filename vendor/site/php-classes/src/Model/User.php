<?php

namespace Geova\Model;

use \Geova\DB\Sql;
use \Geova\Model;

class User extends Model{

	const SESSION = "User";


	public function save(){

		$sql = new sql;

		$sql->query("INSERT INTO `users`(`email`, `name`, `username`, `password`) VALUES (:email, :name, :username, :password)",[
			":email"	=>	$this->getemail(),
			":name"		=> 	$this->getname(),
			":username"	=>	$this->getusername(),
			":password"	=>	$this->getpassword()
		]);
	}

	public function verify_register(){

		$sql = new sql;

		$email = $sql->select("SELECT * FROM users WHERE email = :email ",[
			":email"	=> $this->getemail()
		]);

		$username = $sql->select("SELECT * FROM users WHERE username = :username",[
			":username"	=> $this->getusername()
		]);

		$error = ["email"	=>	false, "username"	=>	false];
		if(isset($email[0])){
			$error["email"] = true;
			return $error;
		}elseif(isset($username[0])){
			$error["username"] = true;
			return $error;
		}

		return false;
	}

	public function login($user, $password){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM users WHERE email = :user OR username = :user",[
			":user"	=> $user
		]);

		$data = $results[0];

		if(!isset($data)){

			throw new \Exception("Usuário ou senha inválida.");
		}

		if($data["password"] == $password){

			$user = new User;

			$user->setData($data);

			$_SESSION[User::SESSION] = $user->getValues();

			User::checkDirectory();

			return $user;
		}else{

			throw new \Exception("Usuário ou senha inválidos");	
		}
		
	}

	public static function verify_login(){

		if(!isset($_SESSION[User::SESSION]) || !$_SESSION[User::SESSION]){

			header("Location: /");
			exit;
		}
	}

	public static function logout(){
		$_SESSION[User::SESSION] = NULL;
	}

	public function edit_about($name, $value){

		$sql = new Sql;

		$sql->query("UPDATE users SET $name = :value where iduser = :iduser",[
			":value"=>	$value,
			":iduser"	=>	$_SESSION[User::SESSION]['iduser']
		]);

	}

//Verifica se o usuário possui um diretório, caso não, cria um.
	public static function checkDirectory(){

		$user = new User;

		$userDirectory = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
		"files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		"{$_SESSION[User::SESSION]['iduser']}";

		if(!is_dir($userDirectory)){
			mkdir($userDirectory);
		}
	}

	//Verifica se o usuário possui foto de perfil ou não.
	public function checkPhoto($name = "profile"){

		if(file_exists(
			$_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
			"files".DIRECTORY_SEPARATOR.
			"media".DIRECTORY_SEPARATOR.
			"users".DIRECTORY_SEPARATOR.
			"{$this->getiduser()}".DIRECTORY_SEPARATOR.
			"{$name}_".$this->getiduser().".jpg"))	
		{
			$url = "/files/media/users/{$this->getiduser()}/{$name}_". $this->getiduser().".jpg";
			
		}else{
			$url = "/files/media/users/{$name}_default.png";
		}

		return $this->setimg_profile($url);
	}

	//Faz upload da foto de perfil do usuário.
	public function setPhoto($file,$name = "profile"){

		$extension = explode('.', $file["name"]);
		$extension = end($extension);

		switch ($extension) {
			case 'jpg':
			case 'jpeg':
			$image = imagecreatefromjpeg($file['tmp_name']);
			break;

			case 'gif':
			$image = imagecreatefromgif($file['tmp_name']);
			break;

			case 'png':
			$image = imagecreatefrompng($file['tmp_name']);
			break;
		}

		$dist = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
		"files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		"{$this->getiduser()}".DIRECTORY_SEPARATOR.
		"{$name}_".$this->getiduser().".jpg";

		$path = "files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		"{$this->getiduser()}".DIRECTORY_SEPARATOR.
		"{$name}_".$this->getiduser().".jpg";

		User::checkDirectory();

		$sql = new Sql();

		$sql->query("UPDATE users SET img_{$name} = :img WHERE iduser = :iduser",[
			":img"		=> $path,
			":iduser"	=> $_SESSION[User::SESSION]['iduser']
		]);

		imagejpeg($image,$dist);

		imagedestroy($image);

		$this->checkPhoto();

	}

	//Trazers todos os dados da tabela users
	public function listAll(){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM users WHERE iduser = :iduser",[
			":iduser"	=>	$_SESSION[User::SESSION]['iduser']
		]);

		return $results[0];
	}

	//Pegar Campos preenchidos e não preenchidos do Perfil
	public function getNullData(){

		$nulls = array();
		$notNulls = array();
		foreach ($this->listAll() as $key => $value) {
			if ($value == null || $value == '') {
				$nulls[$key] = $value;
			}else{
				$notNulls[$key] = $value;
			}
		}

		$data["null"] = $nulls;
		$data["notNull"] = $notNulls;

		return $data;
	}

	//getPercentProfileCompete -> Obtém a porcentagem de dados preenchidos no perfil do usuário
	public function getPPC(){

		$nullOrNot 	= $this->getNullData();
		$null 		= count($nullOrNot["null"]);
		$notNull 	= count($nullOrNot["notNull"]);
		$tot		= $null + $notNull;
		$percent 	= (($notNull*100)/$tot);
		return $percent;
	}

	//trazer X pessoas que não sigo 
	public function getnotFollow($limit = 15){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM users WHERE iduser NOT IN (select idfollowing from user_follow where idfollower = :iduser) AND iduser != :iduser LIMIT ".$limit,[
			":iduser"	=>	$_SESSION[User::SESSION]['iduser']
		]);

		return (isset($results[0])?$results:null);
	}
	//trazer pessoas que sigo 
	public function getFollowing(){

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM users u
			INNER JOIN user_follow uf ON(uf.idfollower = :iduser)
			where u.iduser = uf.idfollowing ",[
			":iduser"	=>	$_SESSION[User::SESSION]['iduser']
		]);

		return (isset($results[0])?$results:null);
	}
	public function follow($following){

		$sql = new Sql;

		$sql->query("INSERT INTO user_follow (idfollower, idfollowing) VALUES (:iduser, :idfollowing);",[
			":iduser"	=>	$_SESSION[User::SESSION]['iduser'],
			":idfollowing"	=> $following
		]);
	}

	public function getUsernameRoute($username){

		$sql = new Sql;

		$result = $sql->select("SELECT * FROM users WHERE username = :username",[
			":username"	=> $username
		]);

		return $result[0];
	}



}