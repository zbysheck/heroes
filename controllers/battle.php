<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class battle
{
    public function __construct($max='4'){
    }

    public function fight($level='4')
    {
        $view=new view();
        if(!empty($_POST) && $_POST['a']*$_POST['b']==$_POST['answer']){
            $view->assign('color','green');
            $view->assign('message',$this->success(rand(0,4)));
        }else{
            $view->assign('color','red');
            $view->assign('message',$this->failure(rand(0,4)));
        }
        $view->render('message');


        $a=rand(2,$level);
        $b=rand(2,$level);
        $sol= array($a*$b, ($a+pow(-1,rand(0,1)))*$b,($b+pow(-1,rand(0,1)))*$a);
        //var_dump($sol);
        $view->assign('a',$a);
        $view->assign('b',$b);
        shuffle($sol);
        $view->assign('sol',$sol);

        $view->render('battle');
    }

    private function success($value)
    {
        $msg=["A masz!", "Haha!", "Mało ci?", "Posmakuj mej stali!", "Giń, poczwaro!"];
        return $msg[$value];
    }

    private function Failure($value)
    {
        $msg=["Auć!", "Oberwałeś!", "Ała!", "Ojej!", "A niech to!"];
        return $msg[$value];
    }

    public function start(){
        $view=new view();
        $view->render('index');
    }




} // END class 