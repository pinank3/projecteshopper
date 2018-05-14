<?php
session_start();
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
require_once "header.php";
?>
<h2>Change password</h2>
<div class="container">
	<div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form id="register_form" ">
							
							<input type="email" name="useremail" placeholder="Enter User Email Address" />
							<input type="password" name="userpassword" placeholder="Enter User Password"/>
							<input type="password" name="cpassword" placeholder="Enter User CPassword"/>
							<button type="button" class="btn btn-default btn-register">Register</button>
						</form>
						<div class="msg_register"></div>
					</div><!--/sign up form -->
				</div>
</div>
<?php
require_once "footer.php";
?>