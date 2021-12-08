<?php
require("../controllers/productController.php");
// require('../Settings/core.php');
// check_login();

if(isset($_POST['addCategory'])){

    //get brand name from form
    $categoryname = $_POST['category_name'];
    

    $result = add_category_controller($categoryname);
    // var_dump($result); 

    header("Location: ../admin/categories.php");

}


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $goaway = delete_one_category_contoller($id);
    if($goaway === true){
        header("Location: ../admin/categories.php"); 
      }
      else{
          echo "deleting failed";
      }
    }

?>