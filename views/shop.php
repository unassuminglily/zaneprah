<?php
include('../templates/header.php');
include('../templates/navbar.php');
require(dirname(__FILE__).'/../controllers/productController.php');

$products = select_all_products_controller();
$categories = select_all_categories_controller();

?>

<!-- Main Menu Section -->
<? include('../templates/navbar.php');

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Shop</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">shop</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="products section">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="widget">
					<h4 class="widget-title">Search By</h4>
			
					<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
					
	            </div>
				<div class="widget product-category">
					<h4 class="widget-title">Categories</h4>
					<div class="panel-group commonAccordion" id="accordion" role="tablist" aria-multiselectable="true">
					  	<div class="panel panel-default">
						    <div class="panel-heading" role="tab" id="headingOne">
							
						      	<h4 class="panel-title">
						        	<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          	Choose Category
						        	</a>
						      	</h4>
						    </div>
					    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
							<?php
                                            foreach($categories as $category){
                                                echo"
												<ul>
													<li>
														<a href=''>{$category["cat_name"]}</a>
													</li>
												</ul>
                                    

                                                ";
                                            }?> 

							</div>
					    </div>
					  </div>
											</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					

							
								<?php
                                            foreach($products as $product){
                                                echo"
												<div class='col-md-4'>
												<div class='product-item'>
												<div class='product-thumb'>
												<span class='bage'>Sale</span>
													<img class='img-responsive' src='../images/products/{$product['product_image']}' alt='product-img' width='200px' heigth='200px' />
													<div class='preview-meta'>
														<ul>
															<li>
																<span  data-toggle='modal' data-target='#product-modal'>
																<a href='product-single.php?id={$product['product_id']}'><i class='tf-ion-ios-search-strong'></i></a>
																</span>
															</li>
															<li>
																<a href='cart.php'><i class='tf-ion-android-cart'></i></a>
															</li>
														</ul>
													</div>
												</div>
												<div class='product-content'>
													<h4><a href='product-single.php?id={$product['product_id']}> {$product['product_title']}</a></h4>
													<p class='price'>{$product['product_price']}</p>
												</div>
											
											</div>				
											</div>
			
                                    

                                                ";
                                            }
								?> 
								
						</div>				
					</div>
		</div>
	</div>
</section>



<?php
include('../templates/footer.php')
?>

  </body>

