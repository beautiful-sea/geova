<?php
use \Geova\Page;
use \Geova\Model\User;
use \Geova\Model\Post;


//EDITA INFORMAÇÕES DO USUÁRIO LOGADO
$app->post('/me_edit',function(){
	User::verify_login();
	$user = new User;

	$user->edit_about($_POST['name'], $_POST['value']);

	$_SESSION[User::SESSION][$_POST['name']] = $_POST['value'];
	echo $_POST['value'];
});

//EDITA IMAGEM DE PERFIL/CAPA DO USUÁRIO LOGADO
$app->post("/editImg", function(){
	User::verify_login();

	$files = (isset($_FILES["cover"])?$_FILES["cover"]:$_FILES["img_profile"]);

	$name = (isset($_FILES["cover"])?"cover":"profile");

	$user = new User;

	$user->setData($_SESSION[User::SESSION]);

	$user->setPhoto($files, $name);

	echo json_encode($user->{"getimg_".$name}());

});

//SEGUIR PESSOA
$app->post("/follow",function(){

	$user = new User;

	$user->follow($_POST['id']);

});

$app->post("/getfollowing",function(){
	$user = new User;

	echo json_encode($user->getFollowing());
});	

//PÁGINA DE PERFIL DO USUÁRIO LOGADO
$app->get('/:name',function($args){

	$posts = new Post;

	$user = new User;

	User::verify_login();
	
	define('GET', (isset($_GET['r'])?$_GET['r']:0));

	$page = new Page();


	if($args == $_SESSION[User::SESSION]['username']){
		$user->setData($_SESSION[User::SESSION]);
		$posts->setData($_SESSION[User::SESSION]);
		$user->checkPhoto();

		$page->setTpl("profilepage",[
			"user"	=>	$user->getValues(),
			"percent" => round($user->getPPC(),0),
			"posts"	=> $posts->getAllPostsUser(),
			"notfollows"=>	$user->getnotFollow(),
			"following"=>$user->getFollowing()
		]);
	}else{
		$user->setData($user->getUsernameRoute($args));

		$page->setTpl("profilepage",[
			"user"	=>	$user->getValues(),
			"percent" => round($user->getPPC(),0),
			"posts"	=> $posts->getAllPostsUser(),
			"notfollows"=>	$user->getnotFollow(),
			"following"=>$user->getFollowing()
		]);
	}

});