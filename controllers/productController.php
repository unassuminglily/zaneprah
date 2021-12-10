<?php

// require('../classes/productClass.php');
require(dirname(__FILE__).'/../classes/productClass.php');


function add_product_controller( $product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords ){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->add_product($product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords );

}

function delete_product_controller($id){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->delete_one_product($id);

}

function update_product_controller($id, $product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->update_one_product($id, $product_category, $product_brand, $product_name, $product_price, $product_description, $product_img, $product_keywords );

}



function select_all_products_controller(){
    // create an instance of the product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->select_all_products();

}

function subscribe_controller($email){
    $product_instance = new product();

    return $product_instance->subscribe($email);
}

function count_product_controller(){
    $product_instance = new product();
    return $product_instance->count_products();
}


function get_product_controller($product_id){
    $product_instance = new product();
    return $product_instance->get_product($product_id);
}

//categories
function add_category_controller($categoryname){
    //create an instance of the Customer class
    $customer_instance = new Product();
    //call a method from the product class
    return $customer_instance->add_category($categoryname);
}

function select_all_categories_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_categories();

}

function select_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_category($id);

}

function update_one_category_controller($id, $categoryname){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_category($id, $categoryname);

}

function delete_one_category_controller($id){
    // create an instance of the Product class
    $product_instance = new product();
    // call the method from the class
    return $product_instance->delete_one_category($id);

}



//brands
function add_brand_controller($brandname){
    //create an instance of the Customer class
    $customer_instance = new Product();
    //call a method from the product class
    return $customer_instance->add_product_brand($brandname);
}

function select_all_brands_controller(){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_all_brands();

}

function select_one_brand_controller($id){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->select_one_brand($id);

}

function update_one_brand_controller($id,$brandname){
    // create an instance of the Product class
    $product_instance = new Product();
    // call the method from the class
    return $product_instance->update_one_brand($id,$brandname);

}

?>