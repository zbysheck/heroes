<?php
if(!@include 'config.php'){
    echo "zrobic generator config.php!";//zrobic, serio
}else{
    $db=new PDO(DB_ENGINE.':dbname='.DB_NAME.";host=".DB_HOST, DB_USER, DB_PASSWORD);

require '../libs/Smarty.class.php';
function __autoload($class_name) 
{
    # List all the class directories in the array.
    $folders = array(
        'models/', 
        'views/', 
        'controllers/',
        ''
    );

    foreach($folders as $path){
        $file = sprintf('%s%s.php',  $path, $class_name);
        if(is_file($file)){
            include_once $file;
        }
        //echo $file.'<br>';
    }
}

spl_autoload_register('__autoload');

    $view=new view();
    $view->render('header');
    session_start();
    $sname=isset($_SESSION['name'])?($_SESSION['name']):null;
    $view->assign('name',$sname);
    $view->render('panel');
    //var_dump($_SESSION);

    $app=new app();
    $app->init();

    //$l=new login();
    //$result=$l->login('zbynioo',34);
    //$view->render('login');
    $view->render('footer');
    //include 'database-generator.php';
}