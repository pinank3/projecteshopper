<?php
	require_once "db_parameters.php";

	abstract class db_connect implements db_parameters{
		public $conn="";

		function __construct(){
			$this->conn=new mysqli(self::HOSTNAME,self::USER,self::PASSWORD,self::DATABASE);
		// echo "<pre>";
		// print_r($this->conn);
		// echo "</pre>";
		}

		function __destruct(){
			$result=$this->conn->close();
			// var_dump($result);
		}

	}
?>