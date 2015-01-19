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
		var_dump($this->url);
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
				require('controllers/'.$url[0].'.php');
				$controller=new $url[0];
				$controller->{$url[1]}();
				break;
			case '1':
				require('controllers/'.$url[0].'.php');
				$controller=new $url[0];
				echo "sialala";
				//$controller->{$url[1]}();
				break;
			
			default:
				$v=new view();
				$v->render('index');
				break;
		}
	}




} // END class app
