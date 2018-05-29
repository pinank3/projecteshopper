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
						<h2>ADD Product</h2>
						<form id="product_form">
							<input type="text" name="pro_name" placeholder="mens wear" />
							<input type="text" name="pro_price" placeholder="2000" />
							<input type="text" name="pro_discount" placeholder="20 in %" />
							<select name="pro_caid">
								<option value="">Please Select Category</option>
								<?php
								$res=$obj->show_categories();
								pre($res);
								if(is_array($res)){
									foreach ($res as $key => $val) {
										$id =$val['ca_id'];
										echo "<option value='$id'>".$val['ca_name']."</option>";
									}
								}
								?>
							</select><br>

							<select name="pro_brid">
								<option value="">Please Select Brand</option>
								<?php
								$res=$obj->show_brands();
								pre($res);
								if(is_array($res)){
									foreach ($res as $key => $val) {
										$id =$val['br_id'];
										echo "<option value='$id'>".$val['br_name']."</option>";
									}
								}
								?>
							</select>
							<br><br>
							<input type="file" name="pro_path">
							<input type="text_area" name="pro_description" placeholder="add description">

							<button type="button" class="btn btn-default btn-product">Add product</button>
						</form>
						<div class="msg_product"></div>
					</div><!--/login form-->
				</div>
				</div>
			</div>
		</div>
	</section><!--/form-->
<?php
	require_once "footer.php";
?>