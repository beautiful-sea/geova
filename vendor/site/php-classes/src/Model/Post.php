<?php

namespace Geova\Model;

use \Geova\Model;
use \Geova\DB\Sql;

class Post extends Model{


	//PUBLICA UMA POSTAGEM
	public function publish(){

		$sql = new Sql;

		$sql->query("INSERT INTO user_has_post (iduser, description) VALUES (:iduser, :description)",[
			":iduser"	=>	$_SESSION[User::SESSION]["iduser"],
			":description"	=> $this->getdescription()
		]);
	}

	//BUSCA TODOS POSTS DO USUÁRIO
	public function getAllPostsUser(){

		$sql = new Sql;

		$results = $sql->select("SELECT uhp.id,uhp.iduser,uhp.description,uhp.dtpost,phi.id_post,(select count(*) from post_has_comment where id_post = uhp.id) as qtdComments
FROM user_has_post uhp  
            left JOIN post_has_img phi on(phi.id_post = uhp.id) WHERE uhp.iduser = :iduser ORDER BY dtpost desc",[
				":iduser"	=>	$this->getiduser()
			]);

		return $results;
	}

	//BUSCA POSTAGEM ÚNICA PELO ID DELA
	public function getPostById($idpost){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM user_has_post WHERE id = :idpost",[":idpost"	=>	$idpost]);

		return $results[0];
	}

	//BUSCA COMENTÁRIOSDO POST PELO ID
	public function getCommentsByIdPost($idpost){
		$sql = new Sql();

		$results = $sql->select("SELECT phc.id, phc.id_post,phc.id_user_comment,phc.comment,phc.dtcomment,u.username,u.name,u.img_profile,uhp.iduser,ub.username as 'usernameB' FROM post_has_comment phc
			INNER JOIN users u ON(u.iduser = phc.id_user_comment)
			INNER JOIN user_has_post as uhp ON(uhp.id = phc.id_post)
			INNER JOIN users ub ON(ub.iduser = uhp.iduser)
			WHERE phc.id_post = :idpost",[":idpost"	=>	$idpost]);

		return $results;
	}

	//APAGA A POSTAGEM PELO ID DELA
	public function deletePost($id){

		$sql = new Sql;
		$sql->query('DELETE FROM user_has_post WHERE id = :id',[":id"=>$id]);
		
		$pathImgPost = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
		"files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		$_SESSION[User::SESSION]['iduser'].DIRECTORY_SEPARATOR.
		"posts".DIRECTORY_SEPARATOR.
		"post_".$id.".jpg";
		(is_file($pathImgPost)?unlink($pathImgPost):null);

	}

	//BUSCAR POSTS DE SEGUIDORES
	public function getPostsFollowing(){

		$sql = new Sql;

		$results = $sql->select("SELECT uhp.id ,uhp.iduser, uhp.description,uhp.dtpost,u.username,u.name,phi.id_post,u.img_profile,(select count(*) from post_has_comment where id_post = uhp.id) as qtdComments FROM user_has_post uhp
			INNER JOIN users u ON(u.iduser = uhp.iduser)
			left JOIN post_has_img phi ON(phi.id_post = uhp.id )
			left JOIN user_follow uf ON( uf.idfollower = 4)
			where uhp.iduser = uf.idfollowing OR uhp.iduser = :iduser
			order by uhp.dtpost desc",[
				":iduser"	=>	$_SESSION[User::SESSION]['iduser']
			]);

		return $results;
	}

	//Faz upload de imagem da publicação.
	public function setPhoto($file,$name = "post"){

		$sql = new Sql();

		$this->checkDirectory();	
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
		$return = $sql->select("CALL post_img (:p_iduser,:p_description)",[
			":p_iduser"		=> $_SESSION[User::SESSION]['iduser'],
			":p_description"=> $this->getdescription()
		]);

		$post = $return[0];

		$dist = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
		"files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		$_SESSION[User::SESSION]['iduser'].DIRECTORY_SEPARATOR.
		"posts".DIRECTORY_SEPARATOR.
		"{$name}_".$post['id'].".jpg";

		


		imagejpeg($image,$dist);

		imagedestroy($image);

		$this->checkPhoto();

	}

	//Verifica se o usuário possui um diretório para postagens, caso não, cria um.
	public static function checkDirectory(){

		$user = new User;

		$userDirectory = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR.
		"files".DIRECTORY_SEPARATOR.
		"media".DIRECTORY_SEPARATOR.
		"users".DIRECTORY_SEPARATOR.
		"{$_SESSION[User::SESSION]['iduser']}".DIRECTORY_SEPARATOR.
		"posts";

		if(!is_dir($userDirectory)){
			mkdir($userDirectory);
		}
	}

	public function comment(){
		$sql = new Sql;

		$sql->query("INSERT INTO post_has_comment (id_post,id_user_comment,comment) VALUES (:id_post,:id_user_comment,:comment)",[
			":id_post"	=>	$this->getid_post(),
			":id_user_comment"	=>	$_SESSION[User::SESSION]['iduser'],
			":comment"	=>	$this->getcomment()
		]);
	}

	public function delcomment($idcomment){
		$sql = new Sql;

		$sql->query("DELETE FROM post_has_comment WHERE id = :idcomment",[
			":idcomment"	=>	$idcomment
		]);
	}
}