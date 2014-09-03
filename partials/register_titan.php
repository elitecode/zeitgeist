<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Register Titan</title>
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
$name = $result['name'];
$contact = $result['contact'];
$college_name = $result['college_name'];
$email = $result['email'];
$query = "SELECT max(titan_event_id) AS max FROM titan_event;";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
$titan_event_id = $result['max'] + 1;
echo $titan_event_id;
$query = "INSERT INTO titan_event(titan_event_id,user_id,name,college_name,email,contact) values($titan_event_id,$user_id,'$name','$college_name','$email','$contact');";
if($result = mysqli_query($connect,$query))
{
	$_SESSION['titan'] = 1;
}
header('Location:../#/events');
?>

</body>
</html>