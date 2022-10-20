<?php
require_once('Conexion.php');

class Login extends Conexion{

	private $id;
	private $password;

    public function __construct(){
		$this->db=parent::__construct();
	}

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}


}

    


?>