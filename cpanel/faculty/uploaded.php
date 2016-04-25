<html>
<head>
<title>Uploaded File
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h3>You Have Uploaded These Files </h3>
<?php
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select distinct report_id from file where admin_id=".$_COOKIE['file345admin']." and user_id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0)
{
	echo "You have not uploaded any files till now.";
}
else
{
	echo "<form method=post action='reportDetails.php'><table border=1><tr><td></td><td>Report Name</td></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
		$query1="select * from report where id=".$row['report_id'];
		$result1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_assoc($result1);
		echo "<tr><td><input type=radio name='rep' value=".$row1['id']." required></td><td>".$row1['name']."</td></tr>";
	}
	
	echo "</table><input type=submit value='Select And Click here to see details'></form>";
}


?>


</body>
</html>
