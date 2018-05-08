<?php 
	require_once "db_helper.php";

	final class db_project extends db_helper{
		function show_brands(){
			// echo "hello";
			return $this->select(
				"br_id,br_name","brands","1"
			);
		}
		function show_categories(){
			// echo "hello";
			return $this->select(
				"ca_id,ca_name","categories","1"
			);
		}
	}
	$obj = new  db_project();
?>