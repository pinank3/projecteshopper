<?php
	require_once "db_functions.php";

	interface db_parameters{
		const HOSTNAME="localhost";
		const USER="root";
		const PASSWORD="";
		const DATABASE="pinank";
	}
	interface db_general_function{
		function insert();
		function select();
		function delete();
		function update();
	}
?>