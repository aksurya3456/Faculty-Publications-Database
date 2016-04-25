<html>
<head>
<title>Create A New Research
</title>
</head>
<body>

<?php

include("../commonHeader.php");
include("adminHeader.php");
echo "<H1>Research Topic Created</h1><p>";
$name=$_POST["nm"];
$pub=$_POST["publisher"];

$admin=$_COOKIE['usr345admin'];
//print_r($_POST);
$con=mysqli_connect("localhost","root","toor","fpd");

//redundancy check
$rquery="select * from report where name like '".$name."'";
$rresult=mysqli_query($con,$rquery);

if(mysqli_num_rows($rresult)!=0)
{
	echo "A report with name <b> ".$name."</b> is already registered with system.";

}


else
{
$query="insert into report(name,admin_id,publisher_id) values('".$name."',".$admin.",".$pub.")";
//echo "<br>";echo "<br>";
//print_r($con);

$result=mysqli_query($con,$query);
//echo "<br>";echo "<br>";
//print_r($result);

//get id of newly added user
$query="select * from report order by id desc limit 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

print "<br><br>Newly Generated ID for ". $name ." is:".$row['id'];
}
?>


</body>
</html>
