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
						<h2>New Password!</h2>
						<form id="update_form" ">
							
							<input type="password" name="cpass" placeholder="Enter current password" />
							<input type="password" name="npass" placeholder="Enter new  Password"/>
							<input type="password" name="cnpass" placeholder="Enter CPassword"/>
							<button type="button" class="btn btn-default btn-update">Update</button>
						</form>
						<div class="msg_update"></div>
					</div><!--/sign up form -->
				</div>
</div>
<?php
require_once "footer.php";
?>