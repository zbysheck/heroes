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

	function __construct()
	{
		echo $this->tableName();
	}







	public function save()
	{
		# code...
	}

} // END class 