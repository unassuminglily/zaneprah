<?php
include('templates/aheader.php');
// require('../database/core.php');
include_once('../controllers/cartController.php');
include_once('../controllers/paymentController.php');
include_once('../controllers/productController.php');



$orders = get_orders_controller();
$sales = get_sales_controller();
$customers = active_customers_controller();
$products = count_product_controller();
$pendings = pending_orders_controller();
// $selOrder = select_one_order_controller();

?>

<body>

<?php include("templates/sidebar.php");?>



    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome </span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
<!-- put dash-items here -->
                        <?php include('templates/dash-items.php');
?>
                        
                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Orders</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Customer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Image</th>
                                                <th>Order ID</th>
                                                <th>Qty</th>
                                                <th>Invoice Number</th>
                                                <th>Order Data</th>
                                                <th>Order Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($orders as $order){
                                                echo"
                                                <tr>
                                                    <td>{$order['customer_id']}</td>
                                                    <td>{$order['first_name']}</td>
                                                    <td>{$order['last_name']}</td>
                                                    <td>{$order['product_id']}</td>
                                                    <td>{$order['product_title']}</td>
                                                    <td>{$order['product_price']}</td>
                                                    <td><img src='../images/products/{$order['product_image']}' height='100px' width='100px'></td>
                                                    <td>{$order['order_id']}</td>
                                                    <td>{$order['qty']}</td>
                                                    <td>{$order['invoice_no']}</td>
                                                    <td>{$order['order_date']}</td>
                                                    <td>{$order['order_status']}</td>


                                                </tr>

                                                ";
                                            }?> 
                                        
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                                <th>Customer ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Image</th>
                                                <th>Order ID</th>
                                                <th>Qty</th>
                                                <th>Invoice Number</th>
                                                <th>Order Data</th>
                                                <th>Order Status</th>

                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2021 © Zaneprah. - <a href="https://zaneprah.com/">zaneprah.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <?php
include('./templates/afooter.php')
    ?>
</body>

</html>