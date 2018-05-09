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
		function show_products(){
			// echo "hello";
			return $this->select(
				"*","products","1 order by pro_id desc"
			);
		}
		function show_categorywise_products($id){
			// echo "hello";
			return $this->select(
				"*","products","pro_caid='$id' order by pro_id desc"
			);
		}
	}
	$obj = new  db_project();
?>