<?php
// print_r($_POST);
$proid =$_POST['x'];
// echo $proid;
$cartdata=$_COOKIE['cookie_product_id'];
// echo $cartdata;
$arr= explode(",",$cartdata);
// print_r($arr);
foreach ($arr as $key => $val) {
	// echo $val;
	// echo $key;
	if($val==$proid){
		// echo $key;
		unset($arr[$key]);
		}
	}
	$newproduct=implode(",",$arr);
	// echo $newproduct;
	setcookie('cookie_product_id',$newproduct,time()+36000,"/");
	$ans=explode(",",$newproduct);
	// print_r($ans);
	$result=array_unique($ans);
	// print_r($result);
	echo count($result);
?>