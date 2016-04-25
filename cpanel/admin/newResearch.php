<?php


?>
<html>
<head>
<title>
Admin Home</title>
</head>
<body bgcolor="#ffefd5">
<?php
//include("checker.php");
include("../commonHeader.php");
include("adminHeader.php");
$con=mysqli_connect("localhost","root","toor","fpd");
?>
<h1 style='color:#000080'>New Research</h1>
<form method=post action="newResearchScript.php">
<table >
<tr>
	<td>Name Of Research Topic:</td><td><input Type=text name="nm" required></td>
</tr>

<tr>
	<td>Publisher Associated:</td>
<td>
	<?php
	$query="select * from publisher";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_assoc($result))
	{
	echo "<input type=radio name='publisher' value=".$row['id']." required>".$row['name']."(".$row['email'].")<br>";
	
	}
	?>
</td>
</tr>
</table>
<input type=submit>


</form>




</body>
</html>
