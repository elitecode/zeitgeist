<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tesing</title>
<?php
ob_start();
session_start();
?>
</head>

<body>
<?php
echo $_SESSION['conclave'];
?>
</body>
</html>