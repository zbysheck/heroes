<?php
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class player extends model{
    private $table='players';
    private $id;
    private $name;
    private $password;
    public $xp;
    public $combo;
    public $unlocked;
    public $hpp;


    function __construct()
    {
        echo $this->tableName();
    }

    public function init($name, $password)
    {
        $this->name=$name;
        $this->password=$password;
        $this->xp=0;
        $this->combo=0;
        $this->unlocked=4;
        $this->hpp=0;
        $this->newPlayer();echo "yup";
    }

    private function newPlayer()
    {echo "yup";
        global $db;
        $res=$db->exec("INSERT INTO `players`(`name`, `password`, `hp_max`, `xp`, `combo`, `unlocked`, `hpp`) 
            VALUES ('$this->name','$this->password',100,$this->xp,$this->combo,$this->unlocked,$this->hpp)");
        var_dump($res)or die(print_r($db->errorInfo(), true));
        echo "yup";
    }






    public function save()
    {
        # code...
    }

} // END class 