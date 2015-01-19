<?php
if(!@include 'config.php'){
	echo "zrobic generator config.php!";//zrobic, serio
}else{
	$db=new PDO(DB_ENGINE.':dbname='.DB_NAME.";host=".DB_HOST, DB_USER, DB_PASSWORD);

require 'app.php';
$app=new app();
$app->init();

	require '../libs/Smarty.class.php';
	require 'view.php';
	require '/controllers/battle.php';
	require '/model.php';
	require '/models/player.php';
	$p=new player();
	$battle=new battle();
	$view=new view();
	$view->render('header');
	$view->render('login');
	$view->render('footer');
	include 'database-generator.php';
}