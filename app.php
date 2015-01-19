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
		$this->url=$url;
	}

	public function redirect()
	{
		$url=$this->url;
		echo count($url);
		switch (count($url)) {
			case '2':
				require('controllers/'.$url[0].'.php');
				echo 'lalabu';
				$controller=new $url[0];
echo 'lalabu';
				$controller->{$url[1]}();
				break;
			
			default:
				# code...
				break;
		}
	}




} // END class app
