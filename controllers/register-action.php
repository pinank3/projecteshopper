<?php
	require_once "../models/db_project.php";
	// print_r($_POST);
	// pre($_POST);
	
	if(!preg_match("/^[a-zA-Z][a-zA-Z ]+[a-zA-Z]$/",$_POST['username'])){
		echo "Invalid Name";
	}
	elseif(!preg_match("/^[1-9][0-9]{9}$/",$_POST['usermobile'])){
		echo "Invalid Mobile No.";	
	}
	elseif(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail'])){
		echo "Invalid Emailid";
	}
	elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['userpassword'])){
		echo "Invalid Password";
	}
	elseif($_POST['userpassword']!=$_POST['cpassword']){
		echo "Invalid CPassword";
	}
	else {
		// echo "ok";
		$name=($_POST['username']);
		$mobile=($_POST['usermobile']);
		$email=($_POST['useremail']);
		$password=sha1($_POST['userpassword']);
		// echo $password;
		$result= $obj->check_email_count($email);
		// pre($result);
		if($result[0]['cnt']>0){
			echo "Emailid exists";
		}
		else{
			if($obj->user_insert($name,$mobile,$email,$password)){
				echo "user added";
			}
		}
	}	

?>