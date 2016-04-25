<html>
<head>
<title>Change Password
</title>
</head>
<body>

<?php

include("../commonHeader.php");
include("facultyHeader.php");
echo "<H1>Change Password</h1><p>";


$con=mysqli_connect("localhost","root","toor","fpd");
$old=$_POST['old'];
$new=$_POST['new'];
$id=$_COOKIE['usr345faculty'];
$query="select * from login where id=".$id;
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
if(strcmp($old,$row['passwd'])!=0)
{
	echo "Please Retry with correct password";
}
else
{
	$query="update login set passwd='".$new."' where id=".$id;
	mysqli_query($con,$query);
	echo "Password Updated Successfully";
}






?>

</body>
</html>
