<?php


$name = $_POST['name'];
$number= $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];


$formcontent="From: $name \n Message: $message";
$recipient = "sudharsansreenivasan@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
$string_exp = "/^[A-Za-z .'-]+$/";
        
        if(!preg_match($email_exp,$email)) 
        {
            $error_message .= 'The Email Address you entered does not appear to be valid. Please go back.<br />';
        }
         
         
        if(!preg_match($string_exp,$name)) 
        {
            $error_message .= 'The First Name you entered does not appear to be valid. Please go back.<br />';
        }
         
        if(strlen($number) < 10) 
        {
            $error_message .= 'Number cannot be less than 10. Please go back.<br />';
        }
         
        if(strlen($message) < 2) 
        {
            $error_message .= 'The Message length should atleast be 2. Please go back.<br />';
        }
         
        if(strlen($error_message) > 0) 
        {
            die($error_message);
        }


mail($recipient, $subject, $formcontent, $mailheader);
echo "Thank you. Mail has been sent. Please go back!";
header("Refresh:1,url:ContactMe.php");
?>