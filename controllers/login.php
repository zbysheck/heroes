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
		echo "heeeeeeeeeere";
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
		return (translatePassword($password)==1);
	}

	public function register($name, $password)
	{
		global $db;
		$query=$db->query("SELECT password FROM players WHERE name='$name'");
		if($query){
			return "Konto o podanym loginie już istnieje";
		}else{

			return "konto utworzono";
		}
	}

	public function login($name, $password)
	{
		global $db;
		$query=$db->query("SELECT password FROM players WHERE name='$name'");
		return $query?$query->fetch():null;
	}

	public function logout()
	{
		session_destroy();
	}

	public function submitForm()
	{
		if (isset($_POST["login"])){
			unset($_POST['login']);
			if($result=login($_POST['name'],translatePassword($_POST['password']))){
				header('Location: google.pl');
			}else{
				if($result){
					echo "złe hasło";
				}else{
					echo "nie ma takiego loginu";
				}
			}
		}elseif (isset($_POST['register'])) {
			unset($_POST['register']);
			
		}
	}


} // END class login 