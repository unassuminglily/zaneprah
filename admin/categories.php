<?php
include('templates/aheader.php');
// require('../database/core.php');
include('../controllers/productController.php');

$categories = select_all_categories_controller();

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