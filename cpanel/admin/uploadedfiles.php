<html>
<head>
<title>Uploaded file</title>
</head>
<body>
<?php

include("../commonHeader.php");
include("adminHeader.php");
$con=mysqli_connect("localhost","root","toor","fpd");
?>
<h3> Selected user for the selected topic has uploaded file which can be downloaded from the links provided below</h3>
<?php


$query="select * from file where report_id=".$_COOKIE['file345rep']." and admin_id=".$_COOKIE['usr345admin']." and user_id=".$_POST['user'] ;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
//echo "<br>".$row['id'];
echo "<a href='../uploads/".$row['name']."' target='_blank'>".$row['name']."</a><br>";
}
$query="select * from file where report_id=".$_COOKIE['file345rep']." and admin_id=".$_COOKIE['usr345admin']." and user_id=".$_POST['user'] ;
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
setcookie('file345user',$_POST['user'],time()+3600,"/");
setcookie('file345id',$row['id'],time()+3600,"/");
if($_SERVER['REQUEST_METHOD']=='post')
{

}
?>
<br>
<h4> If you want to provide grading to this report file and to publish it online, select grade below and submit.</h4>
<?php
$query1="select * from grading where admin_id=".$_COOKIE['usr345admin']." and file_id=".$row['id']." and user_id=".$_POST['user'];
$result1=mysqli_query($con,$query1);
if(mysqli_num_rows($result1)!=0)
{
	echo "You have already graded and published this report file";
}
else
{

echo "<form action='grader.php' method=post>
Select any one option of grading:
<br>
<input type=radio name='score' value='1' required> 1<!br>
<input type=radio name='score' value='2' required> 2<!br>
<input type=radio name='score' value='3' required> 3 
<input type=radio name='score' value='4' required> 4 
<input type=radio name='score' value='5' required> 5 <!br>
<br> <input type='submit' name='submit' value='submit'>
</form>";
}
?>
<br>
<br> Comments<br>

<iframe src="messages.php" style="border:5px dotted red" name='comments' id='comments'></iframe>
<br><br>New Comment<br>
<form action='messanger.php' method=post>

<br>
<textarea height=5 width=25 name=content></textarea>
<input type='submit' name='submit' value='submit'>
</form>


</body>
</html>



