<?
//index of faculty
?>

<html>
<head>
<title>
Faculty Home</title>
</head>
<body bgcolor="#ffefd5">
<?php

include("../commonHeader.php");
include("facultyHeader.php");
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from user where id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
setcookie("file345admin",$row['admin_id'],time()+3600,"/");
?>
</body>
</html>
