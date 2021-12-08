<?php

require('../controllers/customerController.php');
session_start();

if(isset($_POST['loginButton'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $result = find_customer_controller($email);

    
    // die();

    if(isset($result)){
        if(password_verify($password, $result['customer_password'])){
        
            $customer = find_customer_controller($email);
            $_SESSION['user_id'] = $customer['customer_id'];
            $role = $customer['user_role'];
            //var_dump($role);
            if($role === '1' ){
                 header("Location: ../index.php");
            }else if ($role === '0'){
                $_SESSION['user_role'] = 0;
                
                header("Location: ../admin/index.php?role=".$role);
            }

            

        }else{
            $_SESSION['errors'] = 'Email or password is incorrect'; 
            
             header("Location: login.php");
        }
    }else{
        
        $_SESSION['errors'] = 'Email or password is incorrect'; 
        header("Location: login.php");
    }

}

















?>