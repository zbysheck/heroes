<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class login {
	function __construct()
	{
		$this->view=new view();
	}

	public function registerForm()
	{
		$this->view->render('register');
	}

	public function loginForm()
	{
		$this->view->render('login');
	}

	private function translatePassword($password)
	{
		$password.=DB_SALT;
		return md5($password);
	}

	private function validatePassword($value='')
	{
		return (translatePassword($password)==);
	}

	private function register($name, $password)
	{
		# code...
	}


} // END class login 