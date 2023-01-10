<?php
$name = $_POST['name'];
$visitor_mail=$_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$websiteEmail_from = 'suhasra.com';
$email_sublect = 'New form submission';

$email_body = "User Name : $name.\n".
                "User Email : $visitor_mail.\n".
                "Subject : $subject.\n".
                "User Message : $message .\n";

$to ='vimukthishaminda871@gmail.com';
$headers = "From : $websiteEmail_from \r\n";
$headers .="Reply-To : $visitor_mail \r\n";
mail($to,$email_sublect,$email_body,$headers);
header("Location: contact.html");