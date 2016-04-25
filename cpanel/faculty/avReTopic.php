<html>
<head>
<title>Available Topics
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h1>Available Research Topics</h1>
<?php
$con=mysqli_connect("localhost","root","toor","fpd");
//get admin id
$query="select * from user where id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
if($row['admin_id']==NULL)
{
	echo "<h3 style=color:blue>You are the super user. To view topics you have created, login again as admin.</h3>";
}
else
{
	//echo "Your Admin id is<h4>".$row['admin_id']."</h4>";
	//setcookie("file345admin",$row['admin_id'],time()+3600,"/");
	//retrieve all the reports which uploaded by admin
	$query2="select * from report where admin_id=".$row['admin_id'];
	$result=mysqli_query($con,$query2);
	//print_r($result);
	if(mysqli_num_rows($result)==0)
{
	echo "You have no pending reports.";
}
else{
	echo "<form method=post action='uploadFile.php'>";
	
	echo "<table border=1><tr><td></td><td>Name</td></tr>";
	while($row=mysqli_fetch_assoc($result))
	{
		//retrive publisher connected to user
		$query3="select * from publisher_user where user_id=".$_COOKIE['usr345faculty'];
		$result2=mysqli_query($con,$query3);
		$status=0;
		//match if publisher requird is there
		while($row2=mysqli_fetch_assoc($result2))
		{
			if($row['publisher_id']==$row2['publisher_id'])
			{
				$status=1;
			}
		}
		if($status==1)
		{
			echo "<tr><td><input type=radio name='rep' value=".$row['id']." required></td><td>".$row['name']."</td></tr>";
		}
	}
	echo "</table>";
	echo "<input type=submit value='Click to upload file'></form>";
}}
//echo "<h4>".mysqli_num_rows($result)."</h4>";

?>
</body>
</html>

