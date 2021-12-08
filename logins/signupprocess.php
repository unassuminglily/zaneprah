<?php

require('../controllers/customerController.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['passwd'];
    $address = $_POST['address'];
    $confirmPass = $_POST['confPasswd'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $role = 1;

    if(find_email($email) === true){
        header("Location: signup.php?error=Email already exists!");
        die;
    }
    else if($pass !== $confirmPass){
        header("Location: signup.php?error=Passwords do not match!");
        die;
    }
    else{
        $pass = password_hash($pass, PASSWORD_DEFAULT);
        // echo $email ."<br>";
        // echo $fname ."<br>";
        // echo $lname ."<br>";
        // echo $pass ."<br>";
        // echo $address ."<br>";
        // echo $confirmPass ."<br>";
        // echo $country ."<br>";
        // echo $city ."<br>";
        // echo $contact ."<br>";
        // var_dump(add_customer_controller($fname, $lname, $address, $email, $pass, $country, $city, $contact, $role));
        // die;
        if(add_customer_controller($fname, $lname, $address, $email, $pass, $country, $city, $contact, $role) !== true) 
            header('Location: register.php?error=Data could not be inserted');
        $_SESSION['user_id'] = find_customer_id($email);
            header("Location: ./login.php?role=".$role);
        
    }   
   
    
    
}
die("ERROR: Could not execute");
    

?>
