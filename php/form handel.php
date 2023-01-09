<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'info@yourwebsite.com';

$email_subject = 'New form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "User subject: $subject.\n".
               "User message: $message.\n";

$to = 'ma7modgalliy@gmail.com';
$header = "From: $email_from \r\n";

$header .= "Replay-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");

?>