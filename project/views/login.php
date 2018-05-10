<?php 
	require_once "header.php";
?>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="../controllers/login-action.php">
							<input type="email" name="useremail" placeholder="Enter User Email Address" />
							<input type="password" name="userpassword" placeholder="Enter User Password"/>
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				 <div class="col-sm-4">
					<div class="signup-form">
						<h2>New User Signup!</h2>
						<form method="post" action="../controllers/register-action.php">
							<input type="text" name="username" placeholder="Name" />
							<input type="text" name="usermobile" placeholder="Mobile No."/>
							<input type="email" name="useremail" placeholder="Enter User Email Address" />
							<input type="password" name="userpassword" placeholder="Enter User Password"/>
							<input type="password" name="cpassword" placeholder="Enter User CPassword"/>
							<button type="submit" class="btn btn-default">Register</button>
						</form>
					</div><!--/sign up form -->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	<?php
	require_once "footer.php";
	?>