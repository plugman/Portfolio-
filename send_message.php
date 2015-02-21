<?php
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['message']) && !empty($_POST['message']) && isset($_POST['name']) && !empty($_POST['name'])){
	$to      = 'plugman@imranqadir.me';
$subject = 'Contact{'.$_POST['name'].'}';
$message = $_POST['message'];
$headers = 'From: '.$_POST['email']. "\r\n" .
    'Reply-To: '.$_POST['email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo 1;
}
}
?>