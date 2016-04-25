<html>
<head>
<title>Connected Publishers
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h1>Connected Publishers</h1>

<?php
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from publisher inner join (select publisher_id as id from publisher_user where user_id=".$_COOKIE['usr345faculty'].") as new where publisher.id=new.id";
$result=mysqli_query($con,$query);
echo "<table border=1><tr><td>Name</td><td>Address</td><td>Phone</td><td>Email</td></tr>";
while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['email']."</td></tr>";
}
echo "</table>";
?>

</body>
</html>
