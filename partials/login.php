<?php
ob_start();
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
include('config.php');
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
			$_SESSION['user_id'] = $result['user_id'];
			$query = "SELECT event_name FROM literary_events WHERE email='$email';";
			$res = mysqli_query($connect,$query);
			while($result = mysqli_fetch_array($res))
			{
				$event_name = $result['event_name'];
				$_SESSION[$event_name] = 1;
			}
			$query = "SELECT event_name FROM team_events WHERE email='$email';";
			$res = mysqli_query($connect,$query);
			while($result = mysqli_fetch_array($res))
			{
				$event_name = $result['event_name'];
				$_SESSION[$event_name] = 1;
			}
			$query = "SELECT event_name,participants FROM duet_events WHERE email='$email';";
			$res = mysqli_query($connect,$query);
			while($result = mysqli_fetch_array($res))
			{
				$event_name = $result['event_name'];
				$participants = $result['participants'];
				$_SESSION[$event_name.$participants] = 1;
			}
			$query = "SELECT single_event_id,event_name FROM single_event WHERE email='$email';";
			$res = mysqli_query($connect,$query);
			while($result = mysqli_fetch_array($res))
			{
				$event_name = $result['event_name'];
				$_SESSION[$event_name] = 1;
			}
			$query = "SELECT technical_event_id,event_name FROM technical_events WHERE email='$email';";
			$res = mysqli_query($connect,$query);
			while($result = mysqli_fetch_array($res))
			{
				$event_name = $result['event_name'];
				$_SESSION[$event_name] = 1;
			}
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
