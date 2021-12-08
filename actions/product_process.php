<?php
require('../controllers/productController.php');

if(isset($_POST['addProduct'])){
    $product_name = $_POST['name'];
    $product_price = $_POST['price'];
    $product_description = $_POST['desc'];
    $product_brand = $_POST['brand'];
    $product_category = $_POST['category'];
    // $product_img = $_POST['picture'];
    $product_img = $_FILES['picture']['name'];
    move_uploaded_file($_FILES["picture"]["tmp_name"],"../images/products/".$_FILES["picture"]["name"]);
    $product_keywords = $_POST['keywords'];
    echo $product_name;
    echo $product_price;
    echo $product_description;
    echo $product_category;
    echo $product_brand;
    echo $product_img;
    echo $product_keywords;
    
    $result = add_product_controller($product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords);
    
    if($result === true) header("Location: ../admin/products.php");
        else echo "insertion failed";
    
}


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $goaway = delete_product_controller($id);
    if($goaway === true){
        header("Location: ../admin/products.php"); 
      }
      else{
          echo "deleting failed";
      }
    
    // if(delete_product_controller($_GET['delete']) === true){


    //   //header("Location: ../admin/products.php"); 
    //   //echo "Deleted";
    // //   echo delete_product_controller($_GET['id']);
    // }
    // else{
    //     echo delete_product_controller($_GET['id']);
    // }
    
}
?>