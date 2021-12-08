<?php
include('../templates/header.php');
require(dirname(__FILE__).'/../controllers/productController.php');

$products = select_all_products_controller();
$categories = select_all_categories_controller();
$product = get_product_controller($_GET['id']);


?>




<!-- Main Menu Section -->
<?php include('../templates/navbar.php'); ?>

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li class="active">Single Product</li>
				</ol>
			</div>
		</div>
		<?php
                 echo "
							<div class='row mt-20'>
								<div class='col-md-5'>
									<div class='single-product-slider'>
										<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
											<div class='carousel-outer'>
												<div class='carousel-inner '>
													<div class='item active'>
														<img src='../images/products/{$product['product_image']}' alt='' data-zoom-image='images/shop/single-products/product-1.jpg' />
													</div>
													
												</div>
												
												</li>
										</div>
									</div> 
								</div>
							</div>
								<div class='col-md-7'>
									<div class='single-product-details'>
										<h2>{$product['product_title']}</h2>
										<p class='product-price'>{$product['product_price']}</p>
										
										<p class='product-description mt-20'>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum ipsum dicta quod, quia doloremque aut deserunt commodi quis. Totam a consequatur beatae nostrum, earum consequuntur? Eveniet consequatur ipsum dicta recusandae.
										</p>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, velit, sunt temporibus, nulla accusamus similique sapiente tempora, at atque cumque assumenda minus asperiores est esse sequi dolore magnam. Debitis, explicabo.</p>
										<form method = 'POST' action='../actions/cart_process.php'>
										<input type = 'hidden' value= {$product['product_id']} name='product_id'>
										<button class='btn btn-main mt-20' name='cartAdd' type='submit'>  Add To Cart</button>

										</form>

										
								</div>
							</div>
							<div class='row'>
								<div class='col-xs-12>
									<div class='tabCommon mt-20'>
										<ul class='nav nav-tabs'>
											<li class='active'><a data-toggle='tab' href='#details' aria-expanded='true'>Details</a></li>
										</ul>
										<div class='tab-content patternbg'>
											<div id='details' class='tab-pane fade active in'>
												<h4>Product Description</h4>
												<p>'{$product['product_desc']}'</p>
											</div>
											
										</div>
									</div>
									<div class='product-category'>
						<span>Keyword(s):</span>
						<ul>
							<li><a href=''>{$product['product_keywords']}</a></li>
						</ul>
					</div>
								</div>
							</div>
";
		?>
	</div>
</section>



<!-- Modal -->
<!-- <div class="modal product-modal fade" id="product-modal">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
  	<div class="modal-dialog " role="document">
    	<div class="modal-content">
	      	<div class="modal-body">
	        	<div class="row">
	        		<div class="col-md-8">
	        			<div class="modal-image">
		        			<img class="img-responsive" src="images/shop/products/modal-product.jpg" />
	        			</div>
	        		</div>
	        		<div class="col-md-3">
	        			<div class="product-short-details">
	        				<h2 class="product-title">GM Pendant, Basalt Grey</h2>
	        				<p class="product-price">$200</p>
	        				<p class="product-short-description">
	        					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem iusto nihil cum. Illo laborum numquam rem aut officia dicta cumque.
	        				</p>
	        				<a href="#!" class="btn btn-main">Add To Cart</a>
	        				<a href="#!" class="btn btn-transparent">View Product Details</a>
	        			</div>
	        		</div>
	        	</div>
	        </div>
    	</div>
  	</div>
</div> -->

    


  </body>
  </html>

  <?php
include('../templates/footer.php')
?>