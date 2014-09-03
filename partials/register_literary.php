<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Literary Events Registration</title>
<?php
ob_start();
session_start();
?>
</head>

<body>
<?php
$event_name = $_POST['event_name'];
$user_id = $_SESSION['user_id'];
include('config.php');
$query = "SELECT * from user where user_id=$user_id;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$name = $result['name'];
$contact = $result['contact'];
$college_name = $result['college_name'];
$email = $result['email'];
$query = "SELECT max(literary_events_id) AS max FROM literary_events;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$literary_events_id = $result['max'] + 1;
echo $literary_events_id;
$query = "INSERT INTO literary_events(literary_events_id,user_id,event_name,name,college_name,email,contact) values($literary_events_id,$user_id,'$event_name','$name','$college_name','$email','$contact');";
if($result = mysqli_query($connect,$query))
{
	$_SESSION[$event_name] = 1;
}
header('Location:../#/events');
?>
</body>
</html>