<html>
<head>
<title>Uploaded file</title>
</head>
<body>
<?php

include("../commonHeader.php");
include("adminHeader.php");
$con=mysqli_connect("localhost","root","toor","fpd");
?>
<h3> You Graded with the following Details </h3>
<?php
$query="insert into grading(admin_id,user_id,score,file_id)  values(".$_COOKIE['usr345admin'].",".$_COOKIE['file345user'].",".$_POST['score'].",".$_COOKIE['file345id'].")";
mysqli_query($con,$query);
//echo $query;
$query="insert into online_published(file_id) values(".$_COOKIE['file345id'].")";
mysqli_query($con,$query);
//echo $query;

$query = "select * from user where id=".$_COOKIE['file345user'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<br>Faculty Name: ".$row['name'];

$query = "select * from report where id=".$_COOKIE['file345rep'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<br>Report Name: ".$row['name'];
echo "<br>Grade Point: ".$_POST['score'];
?>
</body>
</html>
