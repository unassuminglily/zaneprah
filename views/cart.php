<?php
include('../templates/header.php');
include('../templates/navbar.php');

require_once('../controllers/cartController.php');
require_once('../controllers/productController.php');

function getIPAddress() {  
	//whether ip is from the share internet  
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
		$ip = $_SERVER['HTTP_CLIENT_IP'];  
	}  
	//whether ip is from the proxy  
	elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
	}  
	//whether ip is from the remote address  
	else{  
		$ip = $_SERVER['REMOTE_ADDR'];  
	}  
	 return $ip;  
  } 
  $ip_add = getIPAddress();
  
  
//   if($cart_total === NULL){
// 	$cart_total = guest_qty_controller($ip_add);
//   }
  //var_dump($cart_total);
  if(isset($_SESSION['user_id'])){
	$user = $_SESSION['user_id'];
  }else{
  header("Location: ../logins/login.php");
  }
  $result = select_all_cart_products_contoller($user);

  $cart_total = total_amount_controller($user);
//   var_dump($cart_total);


// $products = select_all_products_controller();
// $categories = select_all_categories_controller();
// $product = get_product_controller($_GET['id']);


?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="../index.php">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>



<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
			<a class='product-add' href='javascript:history.go(-1)'>Go back to shop</a>

                <table class="table">
                  <thead>
                    <tr>
                      <th class=''>Item Name</th>
                      <th class=''>Item Price</th>
					  <th class=''>Quantity</th>
                      <th class=''>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
				<?php
				  if($result !== false){
                            foreach($result as $cart){
                            //   $total = $cart_total + ($cart['product_price'] * $cart['qty']); 
                                echo"
							<tr class=''>
							<td class=''>
								<div class='product-info'>
								<img width='80px' src='../images/products/{$cart['product_image']}' alt='' />
								<a href=''>{$cart['product_title']}</a>
								</div>
							</td>
							<td class=''>{$cart['product_price']}</td>
							<td class=''>
								<form class='form-group' method='POST' action='../actions/qty_process.php'>
									<input class='search' class='form-control' value='{$cart['qty']}' name='qty'>
									<input type='hidden' class='form-control' value='{$cart['product_id']}' name='p_id'>										
									<button  type='submit' name='update' style='width:24px'>
									<span class='iconify' data-icon='akar-icons:edit' style='color: #234;' data-width='12'></span>
									</button>
								</form>
							</td>

							<td class=''>
								<a class='product-remove' href='../actions/cart_process.php?id={$cart['product_id']}' title='delete' name='name'>Remove</a>
							</td>

							</tr>

				";
							}
						}else{
							header("Location: empty-cart.php");
						}
				?>
				<tfoot>
                    <tr>
                      <th class=''></th>
                      <th class=''></th>
                      <th class=''></th>
					  <th class=''></th>
					  <th class=''>Total: <?php echo $cart_total['Amount'] ?></th>

                    </tr>
                  </tfoot>
                  </tbody>
                </table>
                <a href="checkout.php" class="btn btn-main pull-right">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include('../templates/footer.php');
?>