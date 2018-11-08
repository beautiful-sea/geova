<?php
use \Geova\Page;
use \Geova\Model\User;
use \Geova\Model\Post;


$app->post("/comment",function(){

	$post = new Post;

	$post->setData($_POST);

	$post->comment();
});

$app->post("/delcomment",function(){

	$post = new Post;

	$post->setData($_POST);

	$post->delcomment();

});

//PUBLICA UMA POSTAGEM
$app->post("/publish",function(){

	$post = new Post;

	$post->setdescription($_POST['publish']);
	if (!empty($_FILES['file']['name'])) {
		$files = (isset($_FILES["file"])?$_FILES["file"]:NULL);
		$post->setPhoto($files);
		header("Location: /me");
		exit;
	}else{
		$post->publish();

		header("Location: /me");
		exit;
	}
});

//BUSCA TODOS OS POSTS QUE O USUÁRIO DA SESSÃO PUBLICOU
$app->post("/getmyposts",function(){

	$post = new Post;

	$posts = $post->getAllPostsUser();

	echo json_encode($posts);

});


//BUSCA TODOS OS POSTS DO USUÁRIO DA SESSÃO E DE SEUS SEGUIDORES
$app->post("/getpostsfollowing",function(){

	$post = new Post;

	$posts = $post->getPostsFollowing();

	echo json_encode($posts);

});

//TRAZ UM POST ESPECÍFICO DO USUÁRIO PELO ID
$app->post("/getmypost",function(){

	$post = new Post;

	if(isset($_POST['id'])){
		echo json_encode($post->getPostById($_POST['id']));
		exit;
	}
});

//TRAZ TODOS COMENTÁRIOS DO POST PELO ID
$app->post("/getCBIP",function(){

	$post = new Post;

	if(isset($_POST['id'])){
		echo json_encode($post->getCommentsByIdPost($_POST['id']));
		exit;
	}
});

//APAGA POST DO USUÁRIO PELO ID
$app->post("/delpost",function(){

	$post = new Post;

	if(isset($_POST['id'])){
		$post->deletePost($_POST['id']);
		exit;
	}
});

//APAGA COMENTARIO DO POST PELO ID
$app->post("/delcomment",function(){

	$post = new Post;

	$post->delcomment($_POST['idcomment']);
});