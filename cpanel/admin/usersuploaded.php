<html>
<head>
<title>
Admin Home</title>
</head>
<body>
<?php

include("../commonHeader.php");
include("adminHeader.php");
$con=mysqli_connect("localhost","root","toor","fpd");
?>
<h3>For the selected topic following users has uploaded files</h3>
<?php
$query="select distinct user_id from file where report_id=".$_POST['report']." and admin_id=".$_COOKIE['usr345admin'];
$result=mysqli_query($con,$query);
setcookie('file345rep',$_POST['report'],time()+3600,"/");
echo "<form action='uploadedfiles.php' method=post>";	
while($row=mysqli_fetch_assoc($result))
{
	$query1="select * from user where id=".$row['user_id'];
	$result1=mysqli_query($con,$query1);
	$row1=mysqli_fetch_assoc($result1);
	echo "<br><input type=radio name='user' value=".$row1['id']." required >".$row1['name'];
}	
echo "<br> <input type='submit' name='submit' value='submit'></form>";
?>


</body>
</html>

