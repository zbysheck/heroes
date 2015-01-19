<?php
if(!@include 'config.php'){
	echo "zrobic generator config.php!";//zrobic, serio
}else{
	$db=new PDO(DB_ENGINE.':dbname='.DB_NAME.";host=".DB_HOST, DB_USER, DB_PASSWORD);


	require '../libs/Smarty.class.php';
	require 'view.php';
	require '/model.php';
require 'app.php';
$app=new app();
$app->init();
	require '/controllers/battle.php';
	require '/models/player.php';
	$p=new player();
	$battle=new battle();

	$l=new login();
	echo 'la';
	$result=$l->login('zbynioo',34);
	var_dump($result);
	echo 'la';
	$view=new view();
	$view->render('header');
	$view->render('login');
	$view->render('footer');
	include 'database-generator.php';
}