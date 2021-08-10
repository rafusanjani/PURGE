<?php
require('config.php');



$pName = $_POST['person_name'];

$pNumber = $_POST['phone_number'];

$emailAddress = $_POST['email_address'];



$user_password = md5($_POST['user_password']);

$confirm_user_password = md5($_POST['confirm_user_password']);

if($user_password != $confirm_user_password) {

	echo "Passwords did not match";

	exit();
	
}

$conn->query("INSERT INTO users(NAME,,PHONE_NUMBER,PASSWORD,EMAIL_ADDRESS)VALUES('$pName','$pNumber','$user_password','$emailAddress')");

$message = "Hello ".$pName.", Thank you for creating an account with Purge Transport and logistics You will login with your email and your password, Our team leader will contact you shortly for more information" ; 


header("Location:list_of_users.php");