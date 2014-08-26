<?php
ob_start();
session_start();

$email = $_POST['ver_email'];
$text = $_POST['text'];
$text = str_replace(' ','',$text);
include ('config.php');
$query = "SELECT * from user WHERE email='$email';";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$user_id = $result['user_id'];
$query = "SELECT * from verf_text WHERE user_id=$user_id;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);

if($result['text'] === $text)
{
	$verify = true;
	$query = "UPDATE user SET VERIFIED=1 WHERE user_id=$user_id;";
	$result = mysqli_query($connect,$query);
	$_SESSION['email'] = $email;
	$query = "SELECT * from user WHERE user_id=$user_id;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$_SESSION['name'] = $result['name'];
	header('Location:../');
}
else
{
        $verify = false;
	$_SESSION['login_error'] = "Wrong activation key";
	header('Location:../#/register');
}
?>
