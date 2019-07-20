<?php





   $email;$comment;$captcha;$uname;
        if(isset($_POST['email'])){
          $email=$_POST['email'];
        }if(isset($_POST['uname'])){
          $email=$_POST['uname'];
        }if(isset($_POST['comment'])){
          $email=$_POST['comment'];
        }if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
		
		echo '<head>';
		echo '	<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css">';
		echo '	<link rel="stylesheet" href="../assets/css/style.css">';
		echo '	<link rel="stylesheet" href="../assets/css/themes/default.css" id="style_color">';
		echo '	</head>';
			
			


			
          echo '<div style="margin:50px"><h2>Please complete the reCAPTCHA form before submitting.</h2><br>
		  <button type="button" name="submit" class="btn-u" VALUE="Back" onClick="history.go(-1);return true;">BACK</button></div>';
          exit;
        }
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeFEQsTAAAAAIJtLXWN2Ate3pnaguAyguMlLa_B&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
        if($response.success==false)
        {
          echo '<div style="margin:50px"><h2>Anti-spam validation failed. Please try again.</h2><br>
		  <FORM><INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM></div>';
        }else
        {
			
require("PHPMailerAutoload.php");
header ("location: http://rpa-cna.org/thank-you.php");   //placed these down here to prevent false triggering.

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host     = "localhost"; // SMTP server
 
$mail->setFrom("rpacisacademy@optimum.net", "RPA-CNA: ".$_POST["uname"]); //show as the sent from
//$mail->setFrom($_POST["email"], $_POST["name"]); //show as the sent from
$mail->AddAddress ("rpacisacademy@optimum.net");  //send to, WILL NEED TO RE-VALIDATE THAT NOT SPAM ON NEW MAIL ACCOUNTS

$mail->Subject  = "RPA-CNA Contact Us from: ".$_POST["uname"];
$mail->Body     = $_POST["comment"]." -- from: ".$_POST["uname"]."  ".$_POST["email"];
$mail->WordWrap = 50;

//$message = "Thank you for contacting us.";
//echo "<script type='text/javascript'>alert('$message');</script>";
 
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
        } 
?> 
 
</div><!--/wrapper-->
</body>
</html>


