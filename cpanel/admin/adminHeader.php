
<?php
include("checker.php");
$con=mysqli_connect("localhost","root","toor","fpd");
$query="select * from user where id=".$_COOKIE['usr345admin'];
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
echo "<h3>Hello<font color=blue> ".$row['name']."</font></h3>You are logged in as an ADMIN";

?>
<table border=1>
<tr >
<td><a href="availableResearchTopics.php">Available Research Topics</a></td>
<td><a href="uploadedTopics.php">Uploaded Reaserch Topics</a></td>
<td><a href="newResearch.php">Create New Research Topic</a></td>
<td><a href="addUser.php">Add New User</a></td>
<td><a href="publisher.php">Add New Publisher</a></td>
<td><a href=userList.php>Users Registered by Me</a></td>
<td><a href="chpwdform.php">Change Password</a></td>
<td><a href="../logout.php">Logout</a></td>
</tr>
</table>


