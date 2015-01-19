<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class view{
	public function render($name){
		$smarty=new Smarty();
		$smarty->display('views/'.$name.'.tpl');
	}
} // END class view