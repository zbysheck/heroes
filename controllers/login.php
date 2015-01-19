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
        return ($this->translatePassword($password)==1);
    }

    public function register($name, $password)
    {
        global $db;
        $query=$db->query("SELECT password FROM players WHERE name='$name'");
        if($query->fetch()){
            echo "Konto o podanym loginie już istnieje";
        }else{
            $player=new player();
            $player->init($name, $this->translatePassword($password));
            echo "konto utworzono, można się zalogować";
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
        var_dump($_POST);
        if (isset($_POST["login"])){
            unset($_POST['login']);
            if($result=$this->login($_POST['name'],$this->translatePassword($_POST['password']))){
                $_SESSION['name']=$_POST['name'];
            }else{
                if($result){
                    echo "złe hasło";
                }else{
                    echo "nie ma takiego loginu";
                }
            }
        }elseif (isset($_POST['register'])) {
            unset($_POST['register']);
            echo $this->register($_POST['name'],$_POST['password']);
            
        }
    }


} // END class login 