<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Duet</title>
<?php
ob_start();
session_start();
?>

</head>

<body>
<?php
$event_name = $_POST['event_name'];
$user_id = $_SESSION['user_id'];
$participants = $_POST['participants'];
include('config.php');
$query = "SELECT * from user where user_id=$user_id;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$error = "";
if($participants == 1)
{
	$contact = $result['contact'];
	$name1 = $result['name'];
	$name2 = " ";
}
else if($participants == 2)
{
	$name1 = $_POST['name1'];
	$name2 = $_POST['name2'];
	$contact = $_POST['contact'];
	if(strlen($name1) == 0)
		$error = $error."Name is not provided<br/>";
	if(strlen($name2) == 0)
		$error = $error."Name of participant 2 not provided<br/>";
	if(strlen($contact) == 0)
		$error = $error."Contact not provided<br/>";
}
$college_name = $result['college_name'];
$email = $result['email'];
$query = "SELECT max(duet_events_id) AS max FROM duet_events;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$duet_events_id = $result['max'] + 1;
if(strlen($error) > 0)
{
	echo "Correct the following error<br/>".$error;
	header('Location:../#/events');
}
else
{
	$query = "INSERT INTO duet_events(duet_events_id,user_id,event_name,name1,name2,participants,contact,email) values($duet_events_id,$user_id,'$event_name','$name1','$name2',$participants,'$contact','$email');";
if($result = mysqli_query($connect,$query))
{
	$_SESSION[$event_name.$participants] = 1;
}
header('Location:../#/events');
}
?>
</body>
</body>
</html>