<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Accomodation reserver and update</title>
<?php
ob_start();
session_start();
?>
</head>

<body>
<?php
include('config.php');
if(isset($_SESSION['user_id']))		//checking if the user is logged in, only then the form is visible
{
	if(!isset($_SESSION['accomodation']))
	{
	?>
    <form action="accomodate.php" method="post"/>
    Gender:<br>

    <select name="gender">
    <option value="male">Male</option><br>

    <option value="female">Female</option><br>

    </select><br>
    Check the dates you require to stay:<br>

	9 <input type="checkbox" name="date[]" value="9"><br>

	10 <input type="checkbox" name="date[]" value="10"><br>

	11 <input type="checkbox" name="date[]" value="11"><br>
    <input type="hidden" name="type" value="accomodate"/>
    <input type="submit" value="Get Accomodation"/><br>

    <?php
    }
    else		//for updating the accomodation
    {
		$user_id = $_SESSION['user_id'];
	    $query = "SELECT * FROM accomodation WHERE user_id=$user_id;";
		$res = mysqli_query($connect,$query);
		$result = mysqli_fetch_array($res);
		?>
        <form action="accomodate.php" method="post"/>
    Update the dates:
	9 <input type="checkbox" name="date[]" value="9" <?php if($result['date9']) { ?> checked <?php } ?>>
	10 <input type="checkbox" name="date[]" value="10" <?php if($result['date10']) { ?> checked <?php } ?>>
	11 <input type="checkbox" name="date[]" value="11" <?php if($result['date11']) { ?> checked <?php } ?>><br>
    <input type="hidden" name="type" value="update"/>
    <input type="submit" name="action" value="Update"/> <input type="submit" name="action" value="delete"/>
    <?php
}
}
?>
</body>
</html>