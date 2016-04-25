<html>
<head>
<title>
Faculty Home</title>

</head>
<body>
<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h3>Report Details</h3>
<?php
$report_id=$_POST['rep'];
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from report where id=".$report_id;
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "Report Name: <b>".$row['name']."</b><br>";
echo "Files Uploaded:<br>"; 
$query="select * from file where admin_id=".$_COOKIE['file345admin']." and user_id=".$_COOKIE['usr345faculty']." and report_id=".$report_id;
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($result))
{
echo "<a href='../uploads/".$row['name']."' target='_blank'>_".$row['name']."</a><br>";
}
$query="select * from file where admin_id=".$_COOKIE['file345admin']." and user_id=".$_COOKIE['usr345faculty']." and report_id=".$report_id;
$result=mysqli_query($con,$query);
//echo $query;
//print_r($result);
$row=mysqli_fetch_assoc($result);
//echo "<BR>".$row['id'];
$query="select * from grading where file_id=".$row['id'];
$result=mysqli_query($con,$query);
//print_r($result);
if(mysqli_num_rows($result)==0)
{
	echo "<h4 style='color:red'>Your submission is not graded till now</h4>";
}
else
{
	$row=mysqli_fetch_assoc($result);
	echo "<h4 style='color:blue'>Your Score is : ".$row['score']."</h4>";
}
if($_SERVER['REQUEST_METHOD']=='POST'){	
setcookie("file345rep",$_POST['rep'],time()+3600,"/");
//setcookie("file345admin",$row['admin_id'],time()+(24*3600),"/");
//echo $row['admin_id'];
}
	echo "<form method=post enctype='multipart/form-data' action='fileUploaded.php'>";
	
	echo "Upload Your New File (Maximum Size 10MB, This will overwrite your old submission.): <input type='file' name='fileToUpload' id='fileToUpload'>";
	
	echo "<input type=submit value='Upload Your File'></form>";
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
