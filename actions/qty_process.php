<?php

require_once("../controllers/cartController.php");
require('../database/core.php');


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


if(isset($_POST['update'])){
    // if(isset($_POST['customer_id'])){
    //     $customer_id = $_POST['customer_id'];
    // }
    // else{
    //     $customer_id = null;
    // }


    $qty = $_POST['qty'];
    $product_id = $_POST['p_id'];
    $customer_id = $_SESSION['user_id'];
    // $ip_address = getIPAddress();
    $result = update_qty_controller($product_id, $customer_id, $qty);
    if($result === true){
        header("Location: ../views/cart.php");
    }
    else{
        echo "Database error";
        die();
    }
}
?>