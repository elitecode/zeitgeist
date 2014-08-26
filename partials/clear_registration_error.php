<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clear Registration Errors</title>
<?php
ob_start();
session_start();
?>
</head>
<body>
<?php
if(isset($_SESSION['registration_error']) && strlen($_SESSION['registration_error']) != 0)
{
	$_SESSION['registration_error'] = "";
	unset($_SESSION['registration_error']);
}
else if(isset($_SESSION['registration_successful']) && strlen($_SESSION['registration_successful']) != 0)
{
	$_SESSION['registration_successful'] = "";
	unset($_SESSION['registration_successful']);
}
else if(isset($_SESSION['login_error']) && strlen($_SESSION['login_error']) != 0)
{
	$_SESSION['login_error'] = "";
	unset($_SESSION['login_error']);
}
header('Location:../#/register');
?>
</body>
</html>