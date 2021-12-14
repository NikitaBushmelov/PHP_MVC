<?php

class database{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "vols_mvc";

	public function connect(){
		$con = mysqli_connect($this->host, $this->user, $this->pass, $this->dbname);
		if(!$con){
			die("Connection failed: ".mysqli_connect_error());
		}
		return $con;
	}
	public function close($con){
		mysqli_close($con);
	}

	public function __construct(){
		$this->connect();
	}
	
		

}
?>