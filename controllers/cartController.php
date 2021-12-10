<?php 

require_once('../classes/cartClass.php');


function add_to_cart_controller($p_id, $ip_add, $c_id, $qty) {
    //create an instance of the cart class
    $cart_instance = new Cart();
    // call a method from the cart class
    return $cart_instance->add_to_cart($p_id, $ip_add, $c_id, $qty);
}


function remove_from_cart_controller($p_id, $c_id){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call a method from the cart class
    return $cart_instance->remove_from_cart($p_id, $c_id);

}

function select_all_cart_products_contoller($c_id){
     //create an instance of the cart class
     $cart_instance = new Cart();
     //call a method from the cart class
     return $cart_instance->select_all_cart_products($c_id);

}

function select_one_cart_product_controller($c_id, $p_id){
      //create an instance of the cart class
      $cart_instance = new Cart();
      //call a method from the cart class
      return $cart_instance->select_one_cart_product($c_id, $p_id);
}

//update the quantity of one product 
function  update_qty_controller($p_id, $c_id, $qty){
     //create an instance of the cart class
     $cart_instance = new Cart();
     //call a method from the cart class
     return $cart_instance->manage_qty($p_id, $c_id, $qty);
}


// function guest_qty_controller($ip_add){
//     $cart_instance = new Cart();
//     return $cart_instance->guest_qty($ip_add);
// }

// orders
function  total_amount_controller($c_id){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call a method from the cart class
    return $cart_instance->total_amount ($c_id);
}


function  add_order_controller($customer_id, $invoice_no, $order_date, $order_status){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call a method from the cart class
    return $cart_instance->add_order($customer_id, $invoice_no, $order_date, $order_status);

}


function add_order_details_controller($order_id, $product_id, $qty){
    //create an instance of the cart class
    $cart_instance = new Cart();
    //call a method from the cart class
    return $cart_instance->add_order_details($order_id, $product_id, $qty);

}


function get_last_order_controller(){
      //create an instance of the cart class
      $cart_instance = new Cart();
      //call a method from the cart class
      return $cart_instance->get_last_order();

}

function get_orders_controller(){
    $cart_instance = new Cart();
    return $cart_instance->get_all_orders();
}



function add_payment_controller($amount, $c_id, $order_id, $currency, $payment_date){
      //create an instance of the cart class
    $payment_instance = new Cart();
     //call a method from the cart class
    return $payment_instance-> add_payment($amount, $c_id, $order_id, $currency, $payment_date);
}

function get_sales_controller(){
    $payment_instance = new Cart();
    return $payment_instance->get_sales();
}

function pending_orders_controller(){
    $payment_instance = new Cart();
    return $payment_instance->pending_orders();
}

function active_customers_controller(){
    $payment_instance = new Cart();
    return $payment_instance->active_customers();
}

?>