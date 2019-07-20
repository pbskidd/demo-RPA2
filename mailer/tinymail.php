<?php

require("PHPMailerAutoload.php");
//header("location:javascript://history.go(-1)");
header ("location: http://rpa-cna.org/thank-you.php");  
 
$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "localhost"; // SMTP server
 
$mail->setFrom("bskidd@collinsfh.com", "RPA-CNA: ".$_POST["name"]); //show as the sent from
//$mail->setFrom($_POST["emailn"], $_POST["name"]); //show as the sent from
$mail->AddAddress ("margaretskidd@gmail.com");  //send to

$mail->Subject  = "RPA-CNA Contact Us from: ".$_POST["name"];
$mail->Body     = $_POST["message"]." -- From: ".$_POST["name"]."  ".$_POST["emailn"];
$mail->WordWrap = 50;

//$message = "Thank you for contacting us.";
//echo "<script type='text/javascript'>alert('$message');</script>";
 
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}



?>