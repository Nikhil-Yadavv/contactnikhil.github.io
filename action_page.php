<?php
$name  = $_POST['name'];
$email  = $_POST['email'];
$number  = $_POST['number'];
$message  = $_POST['comment'];

$to = "devil23042001@gmail.com";

$subject = "Mail From Website";
$txt ="Name =".$name . "\r\n Email = " . $email . "\r\n Mobile number =m" . $number . "\r\n Message =" . $message;

$headers = "From: noreply@yoursite.com" . "\r\n" . "CC: somebodyelse@example.com";
if($email!=NULL){
    .mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>