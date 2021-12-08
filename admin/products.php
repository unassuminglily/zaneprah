<?php
include('templates/aheader.php');
// require('../database/core.php');
include('../controllers/productController.php');

$products = select_all_products_controller();
$categories = select_all_categories_controller();
$brands = select_all_brands_controller();
// var_dump($brands);

?>

<body>

<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.php">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Zaneprah</span></a></div>
                    <!-- <li class="label">Main</li> -->
                    <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.php"> Website Dashboard</a></li>
                        </ul>
                    </li>

                    <li class="label">Main</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Shop Products <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="products.php">View Products</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Shop Categories <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="categories.php">View Categories</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-bar-chart-alt"></i> Shop Orders <span
                                class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="orders.php">View Orders</a></li>
                        </ul>
                    </li>
                    
            </div>
        </div>
    </div>
    <!-- /# sidebar -->
    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
               
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div>
                                        <ul>
                                            <li>
                                                <a href="../logins/logout.php">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Sales</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user color-primary border-primary"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Customers</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 color-pink border-pink"></i>
                                    </div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Available Products</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link color-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referral</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        

                    <div class="row">
                    <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Add a New Product Here</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="horizontal-form">
                                        <form class="form-horizontal" enctype="multipart/form-data" action="../actions/product_process.php" method="POST">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Product Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" class="form-control" placeholder="Enter name here">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Price</label>
                                                        <div class="col-sm-10">
                                                            <input type="float" name="price" class="form-control" placeholder="Price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Description</label>
                                                        <div class="col-sm-10">
                                                            <textarea name="desc" class="form-control" placeholder="Type a description of the product here"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Category</label>
                                                        <div class="form-row align-items-center">
                                                            <div class="col-auto my-1">
                                                                <!-- <label class="mr-sm-2">Choose Category</label> -->
                                                                <select name="category" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                <option name="category" selected>Choose...</option>
                                                                <?php
                                                                foreach($categories as $category){
                                                                    
                                                                
                                                                ?>
                                                    
                                                                <option value="<?php echo $category["cat_id"];?>"><?php echo $category["cat_name"]; ?></option>
                                                              <?php  } ?>
                                                            <!-- ?>  -->
                                                                    <!-- <option value="2">Two</option>
                                                                    <option value="3">Three</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Brand</label>
                                                        <div class="form-row align-items-center">
                                                            <div class="col-auto my-1">
                                                                <!-- <label class="mr-sm-2">Choose brand</label> -->
                                                                <select name="brand" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                                                <option name="brand" selected>Choose...</option>
                                                                <?php
                                                                foreach($brands as $brand){
                                                                    
                                                                
                                                                ?>
                                                    
                                                                <option value="<?php echo $brand["brand_id"];?>"><?php echo $brand["brand_name"]; ?></option>
                                                              <?php  } ?>
                                                            <!-- ?>  -->
                                                                    <!-- <option value="2">Two</option>
                                                                    <option value="3">Three</option> -->
                                                                </select>
                                                            </div>
                                                        </div>
                        
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Image</label>
                                                        <div class="col-sm-10">
                                                            <input name="picture" type="file" class="form-control" placeholder="Upload an image">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-4 control-label">Keywords</label>
                                                        <div class="col-sm-10">
                                                            <input name="keywords" type="text" class="form-control" placeholder="Separate with commas">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-4 col-sm-10">
                                                            <button name="addProduct" type="submit" class="btn btn-default">Add Product</button>
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
 
<?php
// foreach($products as $product){
//     echo"

//     ";
?> 

                    <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">All Products</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Keywords</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            foreach($products as $product){
                                                echo"
                                                <tr>
                                                    <td>{$product['product_id']}</td>
                                                    <td>{$product['product_title']}</td>
                                                    <td><img src='../images/products/{$product['product_image']}' height='200' width='200'></td>
                                                    <td>{$product['product_price']}</td>
                                                    <td>{$product['product_desc']}</td>
                                                    <td>{$product['product_keywords']}</td>
                                                    <td><span><a href='updateproduct.php?id={$product['product_id']}' class='mr-4' data-toggle='tooltip'
                                                    data-placement='top' title='Edit'>
                                                    <i class='fa fa-pencil color-muted'></i> 
                                                        </a>
                                                        <a
                                                    href='../actions/product_process.php?id={$product['product_id']}' data-toggle='tooltip'
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
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Description</th>
                                                <th>Keywords</th>
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
                                <p>2021 © Zaneprah. - <a href="#">example.com</a></p>
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