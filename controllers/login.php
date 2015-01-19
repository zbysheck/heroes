<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class login {
	function __construct(){
		$this->view=new view();
	}

	public function register(){
		$this->view->render('register');
	}

	public function login(){
		$this->view->render('login');
	}
} // END class login 