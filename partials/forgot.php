<?php
ob_start();
session_start();
include ('config.php');
$email=$_POST['email_forgot'];
$query = "SELECT count(*) AS already FROM user WHERE email='$email';";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);

if($result['already'] == 1)
{
		$query1 = "SELECT * FROM user WHERE email='$email';";
		$result1 = mysqli_query($connect,$query1);
		$result1 = mysqli_fetch_array($result1);


		require_once('mail/class.phpmailer.php');
                define('SMTP_HOST','ssl://p3plcpnl0400.prod.phx3.secureserver.net');
define('SMTP_PORT',465);
define('SMTP_USERNAME','info@zeitgeist.org.in');
define('SMTP_PASSWORD','Z14domain');
define('SMTP_AUTH',true);
		$mail=new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug                      = 1;                  
$mail->SMTPAuth                           = SMTP_AUTH;                $mail->Host                                   = SMTP_HOST;
$mail->Port                                    = 465;
$mail->IsHTML(true);
$mail->Username                           =  SMTP_USERNAME;
$mail->Password                            = SMTP_PASSWORD;
$mail->SetFrom(SMTP_USERNAME);
$mail->AddReplyTo(SMTP_USERNAME);
		$mail->Subject = "Forgot Password";
		$mail->Body = "This mail is in response to your Forgot password query.<br>Your password is :".$result1['password']."<br/>If this was not you, please ignore this mail.<br><br>Regards,<br>Team Zeitgeist.";
		$mail->AddAddress($email);
		 if(!$mail->Send())
		    {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		    }
		    else
		    {
		    $_SESSION['registration_error']="Your Password has been sent to your mail.";
			//echo " kahan??";
			header('Location:../#/register');
		    } 




}
else
{
		$_SESSION['registration_error']="Sorry! this email is not registered with us.";
		//echo " yahan??";
		header('Location:../#/register');
}

?>