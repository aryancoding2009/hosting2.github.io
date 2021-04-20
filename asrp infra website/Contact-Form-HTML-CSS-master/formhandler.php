<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['phone'];
$message = $_POST['message'];

$email_from = 'asrpinfra.com';

$email_subject = 'New Message'

$email_body = "User Name: $name\n".
               "User email: $visitor_email\n".
                "subject: $subject\n".
                "User message: $message \n";

$to = 'asrpinfra@gmail.com';

$headers = "From: $email_from \r\n";

$headers .="Reply-To: $visitor_email\r\n";


mail($to,$email_subject,$headers);

header("Location: asrpinfrawebsite/contact us.html")





?>