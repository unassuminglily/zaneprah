<?php

include('templates/aheader.php');
// require('../database/core.php');
include_once('../controllers/cartController.php');
include_once('../controllers/paymentController.php');
include_once('../controllers/productController.php');


$categories = select_all_categories_controller();
$orders = get_orders_controller();
$sales = get_sales_controller();
$customers = active_customers_controller();
$products = count_product_controller();
$pendings = pending_orders_controller();

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
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                <?php include('templates/dash-items.php');
?>
                        

                    <div class="row">
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add a New Category Here</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="horizontal-form">
                                        <form class="form-horizontal" action="../actions/category_process.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Category Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="category_name" class="form-control" placeholder="Enter name here">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-10">
                                                            <button name="addCategory" type="submit" class="btn btn-default">Add Category</button>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
               
                    
<?php
// foreach($products as $product){
//     echo"

                    
                            
//                                     <tbody>
//                                         <tr>
//                                             <td class='border px-4 py-2'>{$product["product_name"]}</td>
//                                             <td class='border px-4 py-2'>{$product["product_desc"]}</td>
//                                             <td class='border px-4 py-2'>{$product["product_category"]}</td>
                                            
//                                             <td class='border px-4 py-2'>
//                                                 <a href='update_service.php?serviceID={$service['service_id']}'class='bg-teal-300 cursor-pointer rounded p-1 mx-1 text-white'>
//                                                         <i class='fas fa-edit'></i></a>
//                                                 <a href='../actions/service_process.php?deleteservice={$service['service_id']}' class='bg-teal-300 cursor-pointer rounded p-1 mx-1 text-red-500'>
//                                                         <i class='fas fa-trash'></i>
//                                                 </a>
//                                             </td>
//                                         </tr>
                                        
//                                     </tbody>
                                
                        
//         ";
//     }  
?>    
 


                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Categories</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>   
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($categories as $category){
                                                echo"
                                                <tr>
                                                    <td>{$category["cat_id"]}</td>
                                                    <td>{$category["cat_name"]}</td>
                                                    <td><span><a href='updatecategory.php?id={$category['cat_id']}' class='mr-4' data-toggle='tooltip'
                                                    data-placement='top' title='Edit'>
                                                    <i class='fa fa-pencil color-muted'></i> 
                                                        </a>
                                                        <a
                                                    href='../actions/category_process.php?id={$category['cat_id']}' data-toggle='tooltip'
                                                    data-placement='top' title='Delete' name='delete' ><i
                                                        class='fa fa-close color-danger'></i></a></span>
                                                     </td>
                                                </tr>

                                                ";
                                            }?> 
                                        </tbody>
                                        
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
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