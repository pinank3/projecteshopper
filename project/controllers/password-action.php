<?php
	session_start();
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
	require_once "../models/db_project.php";
	// pre($_POST);

	if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['cpass'])){
		echo "Invalid Current Password";
	}
	else if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#\-\$_]).{4,12}$/",$_POST['npass'])){
		echo "Invalid New Password";
	}
	else if($_POST['npass']!=$_POST['cnpass']){
		echo "new pass does not match with confirm new password";
	}
	else if($_POST['npass']==$_POST['cpass']){
		echo "new pass should be different from current password";
	}
	else {
		echo "ok";
		// print_r($_SESSION);
		// echo $_SESSION['project_email'];
		$dbpass=$obj->get_password_userwise($_SESSION['project_email']);
		// pre($dbpass);
		// echo $dbpass[0]['us_password'];
		echo "<br>";
		// echo sha1($_POST['cpass']);

		
		if(sha1($_POST['cpass'])==$dbpass[0]['us_password']){
			echo "ok";
			$newpass=sha1($_POST['npass']);
			// echo $newpass;
			$email=$_SESSION['project_email'];
			$fans=$obj->update_password($newpass,$email);
			var_dump($fans);
			/***********************/
			$to ="pinank3@gmail.com";

			$subject= "Test Mail";
			$txt="Hello World! ";
			$headers ="From:<vishal@php-training.in>";

			$result= mail($to,$subject,$txt,$headers);
			var_dump($result);
			/*************************/
			$username ="pinank3@gmail.com";
			$hash="ad35f41e8e906d6d9a96ac68fea4b000e78e2f9938bab2cac6f4dd98e91421e6";

			$test="0";
			$sender="TXTLCL";
			$numbers="919920669547";
			$message=urldecode("Hello 123 TEST from Php code");

			$url ="http://api.textlocal.in/send/?username=$username&hash=$hash&message=$message&sender=$sender&numbers=$numbers&test=$test";
			//	echo $url;

			$result=file($url);
			var_dump($result);
		}
		else {
			echo "curent pasword mismatch";
		}
	}
?>