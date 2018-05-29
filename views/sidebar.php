<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<?php
								$categories=$obj->show_categories();
								if(is_array($categories)):
								foreach ($categories as $val):
							?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="filter_category.php?id=<?php echo $val['ca_id']; ?>">
										<?php echo $val['ca_name'] ?></a></h4>
								</div>
							</div>
								<?php
									endforeach;
									endif;	
								?>

							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<?php
									//sidebar->index.php->header.php->model/db_project.php->$obj
										$brands=$obj->show_brands();
										// echo "<pre>";
										// print_r($brands);
										// echo "</pre>";
										if(is_array($brands)):
										foreach ($brands as $val):
									?>
									<li><a href="#"> <span class="pull-right">(4)</span>
										<?php
											echo $val['br_name'];
										?>
									</a></li>
									<?php
									endforeach;
									endif;	
									?>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="../assets/images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					
					</div>