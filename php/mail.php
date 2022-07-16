<?php
//get data from form
$name = $_POST{"name"};
$email= $_POST{"email"};
$message=$_POST{"message"};

$_POST= "gsimcompany@gmail.com";

$subject = "Mail From codeconia";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n message =" . $message;

$headers = "Form: noreply@codeconia.com" . "\r\n" .
"cc: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//REDIRECT
HEADER("Location:thankyou.html");
?>
