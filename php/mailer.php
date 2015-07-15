<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
  
// create email body and send it  
$to = 'hello@clarkben.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
          "Here are the details:\n \nName: $name \n ".
          "Email: $email_address\n Phone: $phone\n Message: \n $message";
$headers = "From: contact_form@clarkben.com\n";
$headers .= "Reply-To: $email_address"; 
mail($to,$email_subject,$email_body,$headers);
return true;      
?>