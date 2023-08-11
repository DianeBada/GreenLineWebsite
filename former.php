<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$note = $_POST['note'];
$mobile = $_POST['mobile'];
$to = "ogediane20@gmail.com";
$subject = "New Green Line Energy Enquiry";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Mobile number =". $mobile . "\r\n Note =". $note;
$headers = "From: noreply@greenlineenergy.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:404.html");
?>