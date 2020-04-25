<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$address= $_POST['address'];

$email_form = 'debopriyodjghosh@gmail.com';
$email_subject = "covid form submission";
$email_body = " User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Loc: $address.\n";

$to="debopriyodjghosh@gmail.com";
$headers = "Form: $email_form\r\n";
$headers .= "Replay-To: $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: index.html");




?>