<html>
<head>
<title>Register A New Publisher
</title>
</head>
<body>

<?php
echo "<H1>Register Publisher</h1>";
include("../commonHeader.php");
include("adminHeader.php");
echo "<H1>Register Publisher</h1><p>";
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$add=$_POST["address"];
//print_r($_POST);
$con=mysqli_connect("localhost","root","toor","fpd");
//redundancy check
$rquery="select * from publisher where email like '".$email."'";
$rresult=mysqli_query($con,$rquery);

if(mysqli_num_rows($rresult)!=0)
{
	echo "The email id <b> ".$email."</b> is already registered for some publisher with system.";

}
else
{
$query="insert into publisher(name,phone,email,address) values('".$name."','".$phone."','".$email."','".$add."')";
//echo "<br>";echo "<br>";
//print_r($con);

$result=mysqli_query($con,$query);
//echo "<br>";echo "<br>";
//print_r($result);

//get id of newly added user
$query="select * from publisher order by id desc limit 1";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);

print "<br><br>Newly Generated ID for ". $name ." is:".$row['id'];

//echo "<p>Click <a href='mailto:".$email ."'>here</a> to send mail</p>"

}
?>


</body>
</html>
