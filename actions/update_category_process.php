<?php
require("../controllers/productController.php");
// require('../database/core.php');
// check_login();
// // update category

if(isset($_POST['updateCategory'])){
 
    // retreive the data
    $id = $_POST['cat_id'];
    $categoryname = $_POST['cat_name'];
   
    
    $result = update_one_category_contoller($id, $categoryname);
    // var_dump($result);

    if($result) {

        header('Location: ../admin/categories.php');

    }
    else{
        echo "Could not update category";
    }
        

}