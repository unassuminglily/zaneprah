<?php
// require_once("../database/core.php");
require_once("../controllers/cartController.php");
include('../templates/header.php');
include('../templates/navbar.php');

$amount = total_amount_controller($_SESSION['user_id']);
//var_dump($_SESSION['user_id']);
// $_SESSION['order_id'] = $_GET['order_id'];



?>


<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
        	<i class="tf-ion-android-checkmark-circle"></i>
          <h2 class="text-center">Thank you! For your payment</h2>
          <p>You'll be reached out to soon on the details of your order. In the meantime, you can keep shopping or check out our braiding services</p>
          <a href="shop.php" class="btn btn-main mt-20">Continue Shopping</a>
        </div>
      </div>
    </div>
  </div>
</section><!-- /.page-warpper -->

<?php
include('../templates/footer.php')
    ?>