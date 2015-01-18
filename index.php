<?php
if(!@include 'config.php'){
	echo "zrobic generator config.php!";//zrobic, serio
}else{
	$db=new PDO(DB_ENGINE.':dbname='.DB_NAME.";host=".DB_HOST, DB_USER, DB_PASSWORD);
	var_dump($db);

}