<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class view{

	function __construct(){
		$this->smarty=new Smarty();
		$this->smarty->assign('url', 'http://localhost/heroes/');//placeholder! zmienić!
	}

	public function render($name){
		$this->smarty->display('views/'.$name.'.tpl');
	}

	public function assign($name, $value)
	{
		$this->smarty->assign($name,$value);
	}
} // END class view