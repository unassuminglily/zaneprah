<?php
require_once("../database/connection.php");

class Customer extends Connection{
    function addCustomer($fname, $lname, $address, $email, $pass, $country, $city, $number, $role){
        return $this->query("INSERT INTO customer(first_name, last_name, customer_address, customer_email, customer_password, country, city, user_role, customer_number)
                                                    values ('$fname', '$lname', '$address', '$email', '$pass', '$country', '$city',
                                                    '$role', '$number')");
    }

    function editCustomer($id, $fname, $lname, $address, $email, $pass, $country, $city, $number ){
        return $this->query("UPDATE customer
                            SET fname = '$fname', lname='$lname', customer_address='$address', customer_email = '$email', customer_password= '$pass', country = '$country',
                            city='$city', customer_number = '$number'
                            WHERE id = '$id'");
    }

    function deleteCustomer($id){
        return $this->query("DELETE FROM customer WHERE customer_id = '$id'");
    }

    function findCustomer($email){
        return $this->fetchOne("SELECT customer_id, customer_email, customer_password, user_role from customer WHERE customer_email = '$email'");
    }

    function findEmail($email){
        return $this->fetchOne("SELECT customer_email from customer WHERE customer_email = '$email'");
    }

    function findID($email){
        return $this->fetchOne("SELECT customer_id FROM customer WHERE customer_email = '$email'");
    }
}