<?php
// require("../classes/customerClass.php");
require_once(dirname(__FILE__).'/../classes/customerClass.php');


function add_customer_controller($fname, $lname, $address, $email, $pass, $country, $city, $number, $role){
    $customer_instance = new Customer();
    return $customer_instance->addCustomer($fname, $lname, $address, $email, $pass, $country, $city, $number, $role);
}

function delete_customer_controller($id){
    $customer_instance = new Customer();
    return $customer_instance->deleteCustomer($id);
}

function update_customer_controller($id, $fname, $lname, $address, $email, $pass, $country, $city, $number){
    $customer_instance = new Customer();
    return $customer_instance->editCustomer($id, $fname, $lname, $address, $email, $pass, $country, $city, $number);
}

function find_customer_controller($email){
    $customer_instance = new Customer();
    return $customer_instance->findCustomer($email);
}

function find_email($email) {
    $customer_instance = new Customer();
    return $customer_instance->findEmail($email);
}

function find_customer_id($email) {
    $customer_instance = new Customer();
    return $customer_instance->findID($email);
}

// function find_customer_role($email){
//     $customer_instance = new Customer();
//     return $customer_instance->find_role($email);
// }

// function get_customer_controller($id){
//     $customer_instance = new Customer();
//     return $customer_instance->get_customer($id);
// }

// function get_user_service_controller($id) {
//     $customer_instance = new Customer();
//     return $customer_instance->get_user_service($id);
// }














?>