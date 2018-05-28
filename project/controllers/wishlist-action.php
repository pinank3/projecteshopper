<?php
	require_once '../models/db_project.php';
	// print_r($_POST);
	$pid=$_POST['x'];

	print_r($_SESSION);
	if(!isset($_SESSION['project_uid'])){
		echo "please do login";
	}
	else{
		$uid=$_SESSION['project_uid'];
		// echo "$uid";
		$total=$obj->check_count_wishlist($pid,$uid);
		// pre($total);
		if($total[0]['cnt']>0){
			echo "Record exist in wishlist";
		}
		else{
			if($obj->wishlist_insert($pid,$uid)){
				echo "Product added in Wishlist";
			}
		}
	}


?>