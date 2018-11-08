<?php
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;
use \Rain\Tpl;
use \Geova\Page;
use \Geova\Model\User;
use \Geova\Model\Post;


$app = new Slim;

$app->config('debug',true);

require_once("site.php");

require_once("feed.php");

require_once("posts.php");

require_once("profile.php");




$app->run();

