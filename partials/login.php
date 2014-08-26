<?php
ob_start();
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
include ('config.php');
$query = "SELECT * from user WHERE email='$email';";
$result = mysqli_query($connect,$query);
if(mysqli_num_rows($result)==0)		//email id not found
{
		$_SESSION['login_error'] = "Invalid username and password";
		header('Location:../#/register');
}
else
{
	$result = mysqli_fetch_array($result);
	$pass = $result['password'];
	if($pass === $password)	//passwords match
	{
		if($result['verified'] == 0)
		{
			$_SESSION['login_error'] = "Account is not verified";
			header('Location:../#/register');
		}
		else
		{
			$_SESSION['email'] = $email;
			$_SESSION['name']=$result['name'];
			//echo "Access granted";
			header('Location:../index.php');
		}
	}
	else					//passwords do not match
	{
		$_SESSION['login_error'] = "Invalid email and password";
		header('Location:../#/register');
	}
}?>
