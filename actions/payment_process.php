<?php
// session_start();
require_once('../database/core.php');
require_once('../controllers/cartController.php');

// initialize a client url which we will use to send the reference to the paystack server for verification
$curl = curl_init();

// set options for the curl session insluding the url, headers, timeout, etc
curl_setopt_array($curl, array(
CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['reference']}",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_f756fb5a2e909c42e14bc68e48cfc93bee61974b",
    "Cache-Control: no-cache",
),
));

// get the response and store
$response = curl_exec($curl);
// if there are any errors
$err = curl_error($curl);
// close the session
curl_close($curl);

// convert the response to PHP object
$decodedResponse = json_decode($response);
// check if the object has a status property and if its equal to 'success' ie. if verification was successful
if(isset($decodedResponse->data->status) && $decodedResponse->data->status === 'success'){
    // get form values
    $email = $_GET['email'];
    $amount = $_GET['amount'];
    $currency = "GHC";
    $c_id = $_SESSION['user_id'];
    $order_status = "Pending";
    $order_date = "2021/12/08";
    $invoice_no = mt_rand(50, 500);
    // $order_id = $_SESSION['order_id'];
    // var_dump($order_id);

    // $payment = add_payment_controller($amount, $c_id, $order_id, $currency, $payment_date);
    // var_dump($payment);

    // $_SESSION['errors'] = $payment;

    
// if($payment){
             $addOrder = add_order_controller($c_id, $invoice_no, $order_date, $order_status);
             var_dump($addOrder);

    // get the most recent order id
    if($addOrder){
        $lastorder = get_last_order_controller();

        // call a function that stores an array of the customer's details
        $products = select_all_cart_products_contoller($c_id);

        foreach($products as $product){ 	
            $addOrderDetails = add_order_details_controller($lastorder['last_order'], $product['p_id'], $product['qty']);
        }


    }
         
    
             $amount = total_amount_controller($c_id);
            // call controller function to insert into the payment table
            $result = add_payment_controller($amount['Amount'], $c_id, $lastorder['last_order'], $currency, $order_date);
    
            if($result) {
                echo "Payment Complete. ";
                $cart = select_all_cart_products_contoller($c_id);
                // var_dump($cart);
    
                foreach ($cart as $c) {
                    remove_from_cart_controller($c['p_id'], $c_id);
                }
                header('location: ../views/confirmation.php');
    
          
    
            }else {
                echo "Insertion failed, try again";
            }
    
        
    
        }else{
        // if verification failed
            echo $response;
     }



?>