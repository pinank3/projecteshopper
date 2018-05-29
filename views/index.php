<?php 
	require_once "header.php";
	require_once "slider.php";

?>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php
					require_once "sidebar.php";
					?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php
						$result=$obj->show_products();
						// pre($result);
						if(is_array($result)):
						foreach ($result as $val):
						?>
						<div class="col-sm-4">
							<div class="product-../assets/images-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="../assets/uploads/<?php echo $val['pro_path']; ?>" alt="" />
											<h2>
												<del><?php echo $val['pro_price'] ?></del>
												<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?>
												
											</h2>
											<p><?php echo $val['pro_name'];  ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2><del><?php echo $val['pro_price'] ?></del>
												<?php echo ($val['pro_price'])-($val['pro_price']*$val['pro_discount']/100);?></h2>
												<p><?php echo $val['pro_name'];  ?></p>
												<a href="#" for="<?php echo $val['pro_id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#" for="<?php echo $val['pro_id'];?>" class="add-to-wishlist"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						<?php
						endforeach;
						endif;
						?>
						
					</div><!--features_items-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	
	<?php
	require_once "footer.php"
	?>