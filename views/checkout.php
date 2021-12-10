<?php
// require_once("../database/core.php");
require_once("../controllers/cartController.php");
include('../templates/header.php');
include('../templates/navbar.php');

$amount = total_amount_controller($_SESSION['user_id']);
//var_dump($_SESSION['user_id']);
// $_SESSION['order_id'] = $_GET['order_id'];



?>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">checkout and pay</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
			   <a class='product-add' href='javascript:history.go(-1)'> Go back</a>

                  <h4 class="widget-title">Billing Details</h4>
                  <form class="checkout-form" id="paymentForm">
                     <div class="form-group">
                        <label for="full_name">Enter Full Name</label>
                        <input type="text" class="form-control" id="full_name" placeholder="Jane Doe">
                     </div>
                     <div class="form-group">
                        <label for="user_address"> Confirm Email Address</label>
                        <input type="email" name="email" class="form-control" id="email_address" placeholder="jdoe@zaneprah.com">
                     </div>
					 <div class="form-group">
                        <label for="amount"> Amount Due </label>
                        <input type="float" class="form-control" id="amount" value="<?php echo $amount['Amount']?>"  name="amount" readonly/>
                     </div>
                     
						<div class="form-submit">
						<button type="submit" class="btn btn-main" onclick="payWithPaystack()"> Pay Here </button>
						</div>
                     </div>
                  </form>
               </div>



 
            </div>


			<script src="https://js.paystack.co/v1/inline.js"></script>

<script> 

    var paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', payWithPaystack, false);

    function payWithPaystack(e) {
        e.preventDefault()
    var handler = PaystackPop.setup({
        key: 'pk_test_222dc9c5670d8dded97964d074e9e18925530fe8', 
        email: document.getElementById('email_address').value,
        amount: document.getElementById('amount').value * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit
        currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
        callback: function(response) {
            console.log(response);
        //this happens after the payment is completed successfully
        var reference = response.reference;
        var invoice = response.trxref;
        
        // Make an AJAX call to your server with the reference to verify the transaction
        window.location = `../actions/payment_process.php?email=${document.getElementById("email_address").value}&amount=${document.getElementById("amount").value * 100}&reference=${response.reference}`
        },
        onClose: function() {
        alert('Transaction was not completed, window closed.');
        },
    });
    handler.openIframe();
    }

</script> 

<?php
include('../templates/footer.php')
    ?>
  </body>
  </html>