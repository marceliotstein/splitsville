<?php

// Check for empty fields
// may be either wide or narrow set

/*
if (!empty($_POST['name-wide'])) {
  $name = $_POST['name-wide'];
} else {
  $name = $_POST['name-narrow'];
}

if (!empty($_POST['email-wide'])) {
  $email = $_POST['email-wide'];
} else {
  $email = $_POST['email-narrow'];
}

if (!empty($_POST['phone-wide'])) {
  $phone = $_POST['phone-wide'];
} else {
  $phone = $_POST['phone-narrow'];
}

if (!empty($_POST['message-wide'])) {
  $message = $_POST['message-wide'];
} else {
  $message = $_POST['message-narrow'];
}
*/

if (!empty($_POST['name-wide'])) {
  $name = $_POST['name'];
}
if (!empty($_POST['email'])) {
  $email = $_POST['email'];
}
if (!empty($_POST['phone'])) {
  $phone = $_POST['phone'];
}
if (!empty($_POST['message'])) {
  $message = $_POST['message'];
}

if (empty($name) 	||
   empty($phone) 	||
   empty($message)	||
   !filter_var($email,FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}

// Create the email and send the message
$to = 'marc.eliot.stein@gmail.com';
$email_subject = "LPGDivorce.com:  $name";
$email_body = "You have received a new message on LPGDivorce.com.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@lpgdivorce.com\n";
$headers .= "Reply-To: $email";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
