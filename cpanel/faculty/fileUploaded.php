
<html>
<head>
<title>Upload File
</title>
</head>
<body>

<?php

include("../commonHeader.php");
include("facultyHeader.php");
?>
<h1>Upload File</h1>
<?php
$con=mysqli_connect("localhost","root","toor","fpd");
//print_r($_FILES);
echo "<BR>";
//print_r($_COOKIE);

//Check for pdf files
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$documentFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($documentFileType != "pdf"  ) {
    echo "<br>Sorry, only PDF files are allowed.";
    $uploadOk = 0;
}
else
{
$target_dir = "../uploads/";
$targetName="_". $_COOKIE['file345rep']."_".$_COOKIE['file345admin']."_".$_COOKIE['usr345faculty'].time().".pdf";
$target_file = $target_dir .$targetName;
// if everything is ok, try to upload file
 
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<br>The file \"". basename( $_FILES["fileToUpload"]["name"]). "\" has been uploaded as filename  \"".$targetName."\" in format(\"_reportId_adminId_userId".time().".pdf\").";
	$query="insert into file(name,report_id,user_id,admin_id) values('".$targetName."',".$_COOKIE['file345rep'].",".$_COOKIE['usr345faculty'].",".$_COOKIE['file345admin'].")";
	mysqli_query($con,$query);
    } else {
        echo "Sorry, there was an error uploading your file.";
   }

}
?>

</body>
</html>
