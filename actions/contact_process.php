<?php


$errors = '';
$myemail = 'help@zaneprah.com';
if(empty($_POST['name']) ||
   empty($_POST['email']) ||
   empty($_POST['message']) ||
   empty($_POST['subject']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$subject = $_POST["subject"];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}


if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $subject";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: ../views/message_sent.php');

}

// if(!empty($_POST["submit"])) {
// 	$name = $_POST["name"];
// 	$email = $_POST["email"];
// 	$subject = $_POST["subject"];
// 	$message = $_POST["message"];

// 	$toEmail = "help@zaneprah.com";
// 	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
// 	if(mail($toEmail, $subject, $message, $mailHeaders)) {
// 	    $message = "Your contact information is received successfully.";
// 	    $type = "success";
// 	}
// }
// require_once "../views/message_sent.php";
?>