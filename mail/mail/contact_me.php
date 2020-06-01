<?php
// Check for empty fields


if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'manuelh0170g@gmail.com'; // Add your email
$email_subject = "Mensaje Recibido de:  $name";
$email_body = "Ha recibido un mensaje desde el sitio web\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMemsaje Enviado:\n$message";
//$headers = "From: noreply@cootraembuga.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@cootraembuga.com
$headers = "De: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;    
    
?> 

