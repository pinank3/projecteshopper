<?php
	require_once "../models/db_project.php";
	// print_r($_POST);
	if(!preg_match("/^([a-zA-Z0-9][a-zA-Z0-9_\.]+[a-zA-Z0-9])@([a-zA-Z0-9][a-zA-Z0-9]+[a-zA-Z0-9])\.([a-z]{2,})(\.[a-z]{2,})?$/",$_POST['useremail'])){
		echo "Invalid Emailid";
	}
	elseif(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['userpassword'])){
		echo "Invalid Password";
	}
	else{
		$result =$obj->get_user_data($_POST['useremail']);
		// pre($result);
		if(is_array($result)){
			$txtpass=sha1($_POST['useremail']);
			// echo $txtpass;
			if($txtpass!=$result[0]['us_password']){
				echo "Password does not match";
			}
			else{
				echo "ok";
			}
		}
		else{
			echo "given Emailid does not exists";
		}
	}
?>