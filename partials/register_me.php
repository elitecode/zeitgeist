<?php
ob_start();
session_start();
?>

<?php
function test_input($data) 
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
function RandomString($length)
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randstring = '';
    for ($i = 0; $i < $length; $i++) 
	{
		$rand = rand(0,strlen($characters)-1);
        $randstring .= $characters[$rand];
    }
    return $randstring;
}
$name = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$college_name = $_POST['college_name'];
$nameError = "";
$emailError = "";
$contactError = "";
if (empty($name)) 
{
$nameError = "Name is required";
} 
else 
{
$name = test_input($name);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
$nameError = "Only letters and white space allowed in name";
}
}
 
if (empty($email)) 
{
$emailError = "Email is required";
} 
else 
{
$email = test_input($email);
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) 
{
$emailError = "Invalid email format";
}
}
 
if (empty($contact)) 
{
$contactError = "Contact number is required";
}
else
{
$contact = test_input($contact);
if (!preg_match("/^[0-9]+$/",$contact))
{
$contactError = "Only numbers are allowed in contact";
}
}
 
 


if(strlen($nameError) != 0 || strlen($emailError) != 0 || strlen($contactError) != 0)
{
	
	$_SESSION['registration_error'] = $nameError."<br/>".$emailError."<br/>".$contactError;
	header('Location:../#/register');
	die();
}

include ('config.php');
$query = "SELECT max(user_id) as max from user;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$user_id = $result['max'] + 1;
$query = "SELECT count(*) AS already FROM user WHERE email='$email';";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
if($result['already'] == 1)		//email already exists
{
	$_SESSION['registration_error'] = "Already registered with this Email<br/>";
	header('Location:../#/register');
	die();
}
$query = "INSERT INTO user(user_id,name,email,password,contact,college_name)  values($user_id,'$name','$email','$password','$contact','$college_name');";
$result = mysqli_query($connect,$query);
//also generate a random string for email verification
$length = 20;
$str = RandomString($length);
$query = "INSERT INTO verf_text(user_id,text) values($user_id,'$str');";
$result = mysqli_query($connect,$query);



require_once('mail/class.phpmailer.php');

define('SMTP_HOST','p3plcpnl0400.prod.phx3.secureserver.net');
define('SMTP_PORT',25);
define('SMTP_USERNAME','info@zeitgeist.org.in');
define('SMTP_PASSWORD','Z14domain');
define('SMTP_AUTH',true);

$mail             = new PHPMailer();
echo "hi";
$mail->IsSMTP();
$mail->SMTPDebug                      = 1;                  
$mail->SMTPAuth                           = SMTP_AUTH;                $mail->Host                                   = SMTP_HOST;
$mail->Port                                    = SMTP_PORT;
$mail->Username                           =  SMTP_USERNAME;
$mail->Password                            = SMTP_PASSWORD;
$mail->IsHTML(true);
$mail->SetFrom(SMTP_USERNAME);
$mail->AddReplyTo(SMTP_USERNAME);

$mail->Subject = "Confirmation Link";
$mail->Body = "Thank You for registering at zeitgeist.org.in!<br>Login to your account by using this activation key : ".$str."<br>If this wasnt you, please ignore this mail.<br><br>Regards,<br>Team Zeitgeist";
$mail->AddAddress($email);
 if(!$mail->Send())
    {
    echo "Mailer Error: " . $mail->ErrorInfo;
    }
    else
    {
    $_SESSION['login_error'] = "Activation Key sent to mail.<br/> Check your inbox and type the key below :";
	header('Location:../#/register');
    } 
?>
?>