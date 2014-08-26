<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Check Email</title>
</head>

<body>
<?php
$email = $_GET['email'];
include ('config.php');
$query = "SELECT count(*) as num FROM user WHERE email='$email';";
$result = mysqli_query($connect,$query);
$result = mysqli_fetch_array($result);
if($result['num'] != 0)
echo "Email already exists";
else
echo "Ok";
?>
</body>
</html>