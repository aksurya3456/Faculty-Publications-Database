
<html>
<head>
<title>Registered User
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("adminHeader.php");
echo "<H1>Users Registered By Me</h1><p>";

$admin=$_COOKIE['usr345admin'];
//print_r($_POST);
$con=mysqli_connect("localhost","root","toor","fpd");

$query="select * from user  where admin_id=".$admin;
$result=mysqli_query($con,$query);

echo "<table border=1><tr><td>Id</td><td>Name</td><td>Email ID</td><td>Phone</td><td>Address</td></tr>";


while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['phone']."</td><td>".$row['address']."</td></tr>";

}
echo "</table>";
?>



</body>
</html>
