<?php
ob_start();
session_start();
include('config.php');
$date_temp = $_POST['date'];
$date9 = 0;
$date10 = 0;
$date11 = 0;
$days = 0;
foreach($date_temp as $date)
{
	if($date == 9)
	{
		$date9 = 1;
		$days = $days + 1;
	}
	elseif($date == 10)
	{
		$date10 = 1;
		$days = $days + 1;
	}
	elseif($date == 11)
	{
		$date11 = 1;
		$days = $days + 1;
	}
}
//find if to be newly created or updated
$type = $_POST['type'];
if($type === 'accomodate')
{
	$user_id = $_SESSION['user_id'];
	$query = "SELECT * FROM user WHERE user_id=$user_id;";
	$res = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($res);
	$contact = $result['contact'];
	$name = $result['name'];
	$college = $result['college_name'];
	$gender = $_POST['gender'];
	$email = $result['email'];
	$query = "SELECT max(accomodation_id) AS max FROM accomodation;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$accomodation_id = $result['max'] + 1;
	$query = "INSERT INTO accomodation(accomodation_id,user_id,name,date9,date10,date11,days,gender,contact,college_name,email) values($accomodation_id,$user_id,'$name',$date9,$date10,$date11,$days,'$gender','$contact','$college','$email');";
	echo $query;
	$result = mysqli_query($connect,$query);
	$_SESSION['accomodation'] = 1;
	header('Location:../#/');
}
elseif($type === 'update' && $_POST['action'] === 'delete')
{
	//delete accomodation data
	$user_id = $_SESSION['user_id'];
	$query = "DELETE FROM accomodation WHERE user_id=$user_id;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$result = mysqli_query($connect,$query);
	$_SESSION['accomodation'] = 0;
	unset($_SESSION['accomodation']);
	header('Location:../#/');
}
elseif($type === 'update')
{
	//update operation
	$user_id = $_SESSION['user_id'];
	$query = "SELECT * FROM user WHERE user_id=$user_id;";
	$res = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($res);
	$contact = $result['contact'];
	$name = $result['name'];
	$college = $result['college_name'];
	$query = "SELECT accomodation_id FROM accomodation WHERE user_id=$user_id;";
	$result = mysqli_query($connect,$query);
	$result = mysqli_fetch_array($result);
	$accomodation_id = $result['accomodation_id'];
	$query = "UPDATE accomodation SET name='$name',date9=$date9,date10=$date10,date11=$date11,days=$days WHERE accomodation_id=$accomodation_id;";
	$result = mysqli_query($connect,$query);
	header('Location:../#/');
}