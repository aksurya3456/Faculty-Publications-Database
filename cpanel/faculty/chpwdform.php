
<html>
<head>
<title>Change Password
</title>
</head>
<body bgcolor="#ffefd5">

<?php

include("../commonHeader.php");
include("facultyHeader.php");
echo "<H1>Change Password</h1><p>";

?>

<form method=post action="chpwdscript.php">
<table>
<tr><td>Old Password:</td><td><input type=password name="old" required></td></tr> 
<tr><td>New Password:</td><td><input type=password name="new" required></td></tr>
</table>
<input type="Submit">
</form>

</body>
</html>
