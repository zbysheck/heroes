<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class battle
{
	public function __construct($max='4')	{
		$a=rand(2,$max);
		$b=rand(2,$max);
		$sol= array($a*$b, ($a+pow(-1,rand(0,1)))*$b,($b+pow(-1,rand(0,1)))*$a);
		var_dump($sol);
		$view=new view();
		$view->assign('a',$a);
		$view->assign('b',$b);
		$view->assign('sol',$sol);

		$view->render('battle');
	}
} // END class 