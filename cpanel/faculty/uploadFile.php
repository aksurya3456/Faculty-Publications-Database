<html>
<head>
<title>Upload File
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h1>Upload File</h1>
<?php
$con=mysqli_connect("localhost","root","toor","fpd") or die("unable to connect");
$query="select * from file where report_id=".$_POST['rep']." and user_id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
 $rowcount=mysqli_num_rows($result);

if($rowcount!=0)
{
	echo "You have already uploaded a report file for this topic.";
}
else
{
	setcookie("file345rep",$_POST['rep'],time()+3600,"/");
	echo "<form method=post enctype='multipart/form-data' action='fileUploaded.php'>";
	
	echo "Upload Your File (Maximum Size 10MB): <input type='file' name='fileToUpload' id='fileToUpload' required>";
	
	echo "<input type=submit value='Upload Your File'></form>";
	
	
}
?>

</body>
</html>
