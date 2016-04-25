<?php
include("checker.php");
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from user where id=".$_COOKIE['usr345faculty'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<h3>Hello<font color=blue> ".$row['name']."</font></h3>You are logged in as a FACULTY";

?>

<table border=1>
<tr >
<td><a href="avReTopic.php">Available Research Topics</a></td>
<td><a href="uploaded.php">Uploaded Research Topics</a></td>
<td><a href="chpwdform.php">Change Password</a></td>
<td><a href="conPubFrm.php">Connect to Publisher</a></td>
<td><a href="connectedPub.php">Connected Publishers</a></td>
<td><a href="../logout.php">Logout</a></td>
</tr>
</table>




