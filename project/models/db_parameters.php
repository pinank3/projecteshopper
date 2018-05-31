<?php
	if(session_id()==""){
		session_start();
		// echo session_id();

	}

		require_once "db_functions.php";
	

	interface db_parameters{
		const HOSTNAME="localhost";
		const USER="root";
		const PASSWORD="";
		const DATABASE="pinank";
	}
	interface db_general_function{
		function insert($table,$columns,$values);
		function select($cols,$tables,$conditions);
		function delete($table,$condition);
		function update($tables,$records,$condition);
	}
?>