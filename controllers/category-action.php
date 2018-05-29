<?php
require_once "../models/db_project.php";
	// print_r($_POST);
	// pre($_POST);

	if(!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9 ]+[a-zA-Z0-9]$/",$_POST['ca_name'])){
		echo "Enter Category Name";
	}
	else{

		$name=($_POST['ca_name']);
	$result= $obj->check_category_count($name);
		// pre($result);
		if($result[0]['cnt']>0){
			echo "Category exists";
		}
		else{
			if($obj->category_insert($name)){
				echo "Category added";
			}
	}
}
?>