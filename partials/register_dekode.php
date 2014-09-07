<?php
ob_start();
session_start();
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
if(strlen($name) == 0 || strlen($team_name) == 0)
{
	header('Location:../#/events');
}
else
{
	$query = "SELECT max(dekode_event_id) AS max FROM dekode_event;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$dekode_event_id = $result['max'] + 1;
	$query = "INSERT INTO dekode_event(dekode_event_id,user_id,name,name2,name3,team_name,college_name,contact,email) values($dekode_event_id,$user_id,'$name','$name2','$name3','$team_name','$college_name','$contact','$email');";
	if($result = mysqli_query($connect,$query))
	{
		$_SESSION['dekode'] = 1;
	}
	header('Location:../#/events');
}
?>