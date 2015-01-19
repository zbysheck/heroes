<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class app{

	public function init(){
		$this->getUrl();
		//var_dump($this->url);
		$this->redirect();

	}


	public function getUrl(){
		$url=isset($_GET['url'])?$_GET['url']:null;
		$url=rtrim($url, '/');
		$url=explode('/', $url);
		//var_dump($url);
		if($url==['']){
			$url=null;
		}		
		$this->url=$url;
	}


	public function redirect()
	{
		$url=$this->url;
		echo count($url);
		switch (count($url)) {
			case '2':
				if(file_exists('controllers/'.$url[0].'.php')){
					require_once('controllers/'.$url[0].'.php');;
					$controller=new $url[0];
					if(method_exists($controller,$url[1])){
						$controller->{$url[1]}();
					}else{
						$view=new view();
						$view->render('error');
					}
				}else{
					$view=new view();
					$view->render('error');
				}
				break;
			case '1':
				if(file_exists('controllers/'.$url[0].'.php')){
					require('controllers/'.$url[0].'.php');
					$controller=new $url[0];
				}else{
					$view=new view();
					$view->render('error');
				}
				//$controller->{$url[1]}();
				break;
			case '0':
				$v=new view();
				$v->render('index');
				break;
			default:
				$view=new view();
				$view->render('error');
		}
	}




} // END class app
