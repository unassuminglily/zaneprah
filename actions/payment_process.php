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
    "Authorization: Bearer sk_live_497a3a223893acf3ff8ecfd4dce1158b2fc9b088",
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
    $payment_date = date("Y-m-d");
    $currency = "GHs";
    $c_id = $_SESSION['user_id'];
    $order_id = $_SESSION['order_id'];
    
    $payment = add_payment_controller($amount, $c_id, $order_id, $currency, $payment_date);
    $_SESSION['errors'] = $payment;

    // call controller function to insert into database
    //$result = add_payment_controller();
    // $result = get_user_order_details_controller($order_id);

    // $_SESSION['service_id'] = $result['service_id'];
    // $_SESSION['package_id'] = $result['package_id'];
    // check if insertion was successful
    
if($payment){
    // get the most recent order id
            $lastorder = get_last_order_controller();
         
    
            // call a function that stores an array of the customer's details
            $products = select_all_cart_products_contoller($c_id);
         
         
            foreach($products as $x){ 	
                $addOrderDetails = add_order_details_controller($lastorder['last_order'], $x['p_id'], $x['qty']);
            }
    
    
        
        }
    
    
    
             $amount = total_amount_controller($c_id);
            // call controller function to insert into the payment table
            $result = add_payment_controller($amount['Amount'], $c_id, $lastorder['last_order'], "GHC", $order_date);
    
            if($result) {
                echo "payment verified successfully and insertion complete";
                $cart = select_all_cart_products_contoller($c_id);
                // var_dump($cart);
    
                foreach ($cart as $x) {
                    remove_from_cart_controller($x['p_id'], $c_id);
                }
    
          
    
            }else {
                echo "insertion failed";
            }
    
        
    
        }else{
        // if verification failed
            echo $response;
    }



?>