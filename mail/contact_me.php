<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'dobriy_zhuk@bk.ru';
$email_subject = "Заявка с сайта: dobriyzhuk.tk";
$email_body = "You have received a new order from your website: dobriyzhuk.tk\n"."Here are the details:\nName: $name\nEmail: $email_address\nPhone: $phone\nMessage:\n$message";
$headers = "From: noreply@dobriyzhuk.tk\n"; 
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>