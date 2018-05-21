<?php
	// print_r($_POST);
	$productid =$_POST['x'];
	// echo $productid;

	if(!isset($_COOKIE["cookie_product_id"])){
		// echo 1;
		$newproduct=$productid;
		setcookie("cookie_product_id",$newproduct,time()+36000,"/");
	}
	else{
		// echo 2;
		$getcookiedata=$_COOKIE['cookie_product_id'];
		// echo $getcookiedata;
		$newproduct=$getcookiedata.",".$productid;
		// echo $newproduct;
		setcookie("cookie_product_id",$newproduct,time()+36000,"/");
	}
	// echo "product updated in cart";
	$ans =explode(",",$newproduct);
	// print_r($ans);
	$result=array_unique($ans);
	// print_r($result);
	echo count($result);
?>