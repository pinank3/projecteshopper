<?php
	session_start();
	if(!isset($_SESSION['project_name'])){
		header("location:index.php");
	}
	require_once "header.php";
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>ADD Brand</h2>
						<form id="brand_form">
							<input type="email" name="br_name" placeholder="Nike" />
							<button type="button" class="btn btn-default btn-brand">Login</button>
						</form>
						<div class="msg_brand"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				 <div class="col-sm-4">
					<h2>Show brand</h2>
					<?php
					$result = $obj->show_brands();
					// pre($result);
					if(isset($result)):
						foreach($result as $val):

					 ?>
					 <li><?php echo $val['br_name'] ?></li>
					 <?php
					 	endforeach;
					 endif;
					 ?>
					</div><!--/sign up form -->
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
	require_once "footer.php";
?>