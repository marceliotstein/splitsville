<?php

// Check for empty fields
// may be either wide or narrow set

if (!empty($_POST['name-wide'])) {
  $in_name = $_POST['name-wide'];
} else {
  $in_name = $_POST['name-narrow'];
}

if (!empty($_POST['email-wide'])) {
  $in_email = $_POST['email-wide'];
} else {
  $in_email = $_POST['email-narrow'];
}

if (!empty($_POST['phone-wide'])) {
  $in_phone = $_POST['phone-wide'];
} else {
  $in_phone = $_POST['phone-narrow'];
}

if (!empty($_POST['message-wide'])) {
  $in_message = $_POST['message-wide'];
} else {
  $in_message = $_POST['message-narrow'];
}

if (empty($in_name) 	||
   empty($in_phone) 	||
   empty($in_message)	||
   !filter_var($in_email,FILTER_VALIDATE_EMAIL)) {
	echo "No arguments Provided!";
	return false;
}

// Create the email and send the message
$to = 'marc.eliot.stein@gmail.com';
$email_subject = "LPGDivorce.com:  $in_name";
$email_body = "You have received a new message on LPGDivorce.com.\n\n"."Here are the details:\n\nName: $in_name\n\nEmail: $in_email\n\nPhone: $in_phone\n\nMessage:\n$in_message";
$headers = "From: noreply@lpgdivorce.com\n";
$headers .= "Reply-To: $in_email";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
