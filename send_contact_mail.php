<?php
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	if (!preg_match(
		"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
		$email))
		{
			$errors .= "\n Error: Invalid email address";
		}


	$toEmail = "kristinalabayova@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-form-thank-you.html";
// ?>
