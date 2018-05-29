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
						<h2>ADD Category</h2>
						<form id="category_form">
							<input type="email" name="ca_name" placeholder="mens wear" />
							<button type="button" class="btn btn-default btn-category">Add category</button>
						</form>
						<div class="msg_category"></div>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				 <div class="col-sm-4">
					<h2>Show Category</h2>
					<?php
					$result = $obj->show_categories();
					// pre($result);
					if(isset($result)):
						foreach($result as $val):

					 ?>
					 <li><?php echo $val['ca_name'];?></li>
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