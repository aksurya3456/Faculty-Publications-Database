<html>
<head>
<title>Connect To Publisher
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h1>Choose A Publisher To Connect With</h1>
<form method=post action="conPubScript.php">
<?php
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from publisher";

$result=mysqli_query($con,$query);
 
echo "<table border=1><tr><td></td><td>Name</td><td>Address</td><td>Phone</td><td>Email</td></tr>";
while($row=mysqli_fetch_assoc($result))
{

$query2="select * from publisher_user where user_id=".$_COOKIE['usr345faculty'];
$result2=mysqli_query($con,$query2);
$status=1;
while($row2=mysqli_fetch_assoc($result2))
{
if($row2['publisher_id']==$row['id']){
	$status=0;}
}
if($status==1){
	echo "<tr><td><input type=radio name='pub' value=".$row['id']." required></td><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['address']."</td><td>".$row['email']."</td></tr>";
}
}
echo "</table>";
echo "<input type=submit>";
?>


</form>
</body>
</html>
