<?php

use \Geova\Page;
use \Geova\Model\User;
use \Geova\Model\Post;

//PÁGINA INICIAL
$app->get('/',function(){

	if(isset($_SESSION[User::SESSION])){
		$posts = new Post;

		$user = new User;

		User::verify_login();

		$page = new Page();

		$user->setData($_SESSION[User::SESSION]);

		$user->checkPhoto();

		$page->setTpl("site/newsfeed",[
			"user"	=>	$user->getValues(),
			"posts"	=> $posts->getPostsFollowing(),
			"notfollows"=>	$user->getnotFollow()
		]);
	}else{
		define('GET', (isset($_GET['r'])?$_GET['r']:0));

		$page = new Page(["header"	=>true],"/views/");

		$page->setTpl("index");	
	}


});

//PÁGINA DE CADASTRO
$app->post("/register",function(){

	$data = array();

	parse_str($_POST['data'], $data);

	$data['password'] = md5($data['password']);

	$user = new User;

	$user->setData($data);


	if(!$user->verify_register()){
		$user->save();
		exit;
	}else{
		echo json_encode($user->verify_register());
	}
	
});

//PÁGINA DE LOGIN
$app->post("/login",function(){


	$user = new User;

	$user->login($_POST['email'], md5($_POST['password']));

	header("Location: /".$_SESSION[User::SESSION]['username']);
	exit;

});

//DESLOGA DO SISTEMA
$app->get("/logout",function(){

	User::logout();

	header("Location: /me");
	exit;
});