
<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$subject= $_POST['subject']
$message= $_POST['message'];


$to = "techyhems@gmail.com";
$subject = "Mail From Hemanta Phuyal";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ".\r\n  Subject = " . $subject . "\r\n  Phone = " . $phone . ";

$headers = "From: noreply@hemantaphuyal.com.np" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>