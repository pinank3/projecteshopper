<?php
require_once "../models/db_project.php";
	// print_r($_POST);
	// pre($_POST);

	if(!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/",$_POST['br_name'])){
		echo "Enter Brand Name";
	}
	else{

		$name=($_POST['br_name']);
	$result= $obj->check_brand_count($name);
		pre($result);
		if($result[0]['cnt']>0){
			echo "Brand exists";
		}
		else{
			if($obj->brand_insert($name)){
				echo "Brand added";
			}
	}
}
?>