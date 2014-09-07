<?php
ob_start();
session_start();
$user_id = $_SESSION['user_id'];
include('config.php');
$query = "SELECT * from user where user_id=$user_id;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$name = $result['name'];
$event_name = $_POST['event_name'];
$contact = $result['contact'];
$college_name = $result['college_name'];
$email = $result['email'];
$query = "SELECT max(single_event_id) AS max FROM single_event;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$single_event_id = $result['max'] + 1;
$query = "INSERT INTO single_event(single_event_id,user_id,name,college_name,email,contact,event_name) values($single_event_id,$user_id,'$name','$college_name','$email','$contact','$event_name');";
if($result = mysqli_query($connect,$query))
{
	$_SESSION[$event_name] = 1;
}
header('Location:../#/events');
?>