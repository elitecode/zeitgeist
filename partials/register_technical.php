<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Dekode</title>
<?php
ob_start();
session_start();
?>
</head>

<body>
<?php
$user_id = $_SESSION['user_id'];
include('config.php');
$query = "SELECT * from user where user_id=$user_id;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$name = $_POST['name1'];
$name2 = $_POST['name2'];
$name3 = $_POST['name3'];
$contact = $result['contact'];
$college_name = $result['college_name'];
$team_name = $_POST['team_name'];
$email = $result['email'];
$event_name = $_POST['event_name'];
if(strlen($name) == 0 || strlen($team_name) == 0)
{
	//echo "Fields are not complete<br/>";
	header('Location:../#/events');
}
else
{
	$query = "SELECT max(technical_event_id) AS max FROM technical_events;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$technical_event_id = $result['max'] + 1;
	$query = "INSERT INTO technical_events(technical_event_id,user_id,name,name2,name3,team_name,college_name,contact,email,event_name) values($technical_event_id,$user_id,'$name','$name2','$name3','$team_name','$college_name','$contact','$email','$event_name');";
	if($result = mysqli_query($connect,$query))
	{
		$_SESSION[$event_name] = 1;
	}
//	echo"choo khokhar";
	header('Location:../#/events');
}
?>

</body>
</html>