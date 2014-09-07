<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<?php
ob_start();
session_start();
?>
</head>

<body>
<?php
$event_name = $_POST['event_name'];
$user_id = $_SESSION['user_id'];
$team_name = $_POST['team_name'];
$leader_name = $_POST['leader_name'];
$contact = $_POST['contact'];
$college_name = $_POST['college_name'];
$team_size = $_POST['team_size'];
include('config.php');
$email = $_SESSION['email'];
$error = "";
if($team_name === "" || $leader_name === "" || $contact === "" || $college_name === "" || $team_size === "")
{
	header('Location:../#/events');
}
else
{
	$query = "SELECT max(team_events_id) AS max FROM team_events;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$team_events_id = $result['max'] + 1;
	$query = "INSERT INTO team_events(team_events_id,user_id,event_name,team_name,team_size,contact,college_name,leader_name,email) values($team_events_id,$user_id,'$event_name','$team_name',$team_size,'$contact','$college_name','$leader_name','$email');";
	if($result = mysqli_query($connect,$query))
	{
		$_SESSION[$event_name] = 1;
	}
	header('Location:../#/events');
}
?>
</body>
</html>