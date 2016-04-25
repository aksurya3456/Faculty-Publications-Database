<html>
<head>
<title>Register A New User
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("adminHeader.php");
echo "<H1 style='color:#000080'>Available Research Topics</h1><p>";

$admin=$_COOKIE['usr345admin'];
//print_r($_POST);
$con=mysqli_connect("localhost","root","toor","fpd");

$query="select * from report  where admin_id=".$admin;
$result=mysqli_query($con,$query);

echo "<table border=1><tr><td>Name</td><td>Publisher Associated</td></tr>";


while($row=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$row['name']."</td><td>".$row['publisher_id']."</td></tr>";

}
echo "</table>";
?>



</body>
</html>
