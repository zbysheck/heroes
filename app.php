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
	}


	public function getUrl(){
		$url=isset($_GET['url'])?$_GET['url']:null;
		$url=rtrim($url, '/');
		$url=explode('/', $url);
		//var_dump($url);
		$this->url=$url;
	}




} // END class app
