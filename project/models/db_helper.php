<?php 
	require_once 'db_connect.php';
	abstract class db_helper extends db_connect implements db_general_function{
		function insert(){}
		function select(){}
		function delete(){}
		function update(){}
	}
?>