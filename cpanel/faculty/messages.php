
<?php
$con=mysqli_connect("localhost","root","toor","fpd");
$query = "select * from user where id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$faculty=$row['name'];
//echo $query;

$query = "select * from user where id=".$_COOKIE['file345admin'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
$admin=$row['name'];
//echo $admin."<br>".$faculty;
$query="select * from message where (from_id=".$_COOKIE['usr345faculty']." and to_id= ".$_COOKIE['file345admin']." ) or (to_id=".$_COOKIE['usr345faculty']." and from_id= ".$_COOKIE['file345admin'].") ";
//echo $query;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
	echo $row['moment']." ";
	if($row['from_id']==$_COOKIE['usr345faculty'])
	{
		echo $faculty."<br>";
	}
	else
	{
		echo $admin."<br>";
	}
	echo $row['content']."<br>";	

}

?>



