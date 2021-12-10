<?php

require_once("../controllers/cartController.php");
require('../database/core.php');

// session_start();
// require("../controllers/CartController.php");

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





if(isset($_POST['cartAdd'])){
    $product_id = $_POST['product_id'];
    $ip_address = getIPAddress();

    // if(isset($_SESSION['user_id'])){
    //     $user = $_SESSION['user_id'];
    //   }else{
    //   header("Location: ../logins/login.php");
    //   }
    if(isset($_SESSION['user_id'])){
        $customer_id = $_SESSION['user_id'];
        
    }else{
        header("Location: ../logins/login.php");
        }
    var_dump($customer_id);
    
    $qty = 1;
    // $product = select_one_cart_product_controller($customer_id, $product_id);
    // var_dump($product);
    
    // //die;
    // if($product){
    //     $_SESSION['errors'] = 'Product already in cart';
    //     header("Location: ../views/products.php");
    // }
  
    
    $result = add_to_cart_controller($product_id, $ip_address, $customer_id,  $qty);
    var_dump($result);
    if($result === true){
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error";
        die();
    }
}

if(isset($_GET['id'])){
    $p_id = $_GET['id'];
    $c_id = $_SESSION['user_id'];
    
    // if(!isset($customer_id) || $customer_id === NULL || $customer_id === ""){
    //     $_SESSION['errors'] = "You have to log in to update the cart";
    //     header("Location: ../views/cart.php");
    // }
    $result = remove_from_cart_controller($p_id, $c_id);

    if($result === true){
        $_SESSION['errors'] = "Product Deleted";
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error. Item was not deleted";
        die();
    }
}




?>