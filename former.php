<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$note = $_POST['note'];
$mobile = $_POST['mobile'];
$to = "ogediane20@gmail.com";
$subject = "New Green Line Energy Enquiry";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Mobile number =". $mobile . "\r\n Note =". $note;
$headers = "From: noreply@greenlineenergy.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:404.html");
?>
</body>
</html>