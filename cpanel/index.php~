


<html>
<head>
<style>
    
 </style>
<title>Login page</title>
</head>
<body bgcolor="#ffefd5">
<?php
include("commonHeader.php");

?>



<?php
$fp=fopen("dbs.txt","r") or die("Unable to open");
$dblogin=fgets($fp);
$dbpasswd=fgets($fp);
$dbname=fgets($fp);

setcookie("fpd345id",$dblogin,time()+(24*3600),"/");
setcookie("fpd345passwd",$dbpasswd,time()+(24*3600),"/");
setcookie("fpd345name",$dbname,time()+(24*3600),"/");
//print ($dblogin."<br>".$dbpasswd."<br>".$dbname."<br>");
?>

<?php
//index of website
if(isset($_COOKIE["usr345admin"]))
{
	header("location: admin/index.php");
}
if(isset($_COOKIE["usr345faculty"]))
{
	header("location: faculty/index.php");
}
?>

<H3>Login Page</h3>
<table>
<tr>
<td>Admin</td>
<td>Faculty</td>
</tr>
<tr>
<td>
<form method="post" action="admin/adminLogin.php">
<table>
<tr>
<td>ID:</td><td><input type="number" name="id" size=30 maxlength=30 required></td>
</tr>
<tr>
<td>Pwd:</td><td><input type="password" name="pwd" size=30 maxlength=30 required></td>
</tr>
<tr>
<td colspan=2><input type="submit" name="login" value="LOGIN" ></td>
</tr>
</table>
</form>
</td>

<td>
<form method=post action="faculty/facultyLogin.php">
<table>
<tr>
<td>ID:</td><td><input type="number" name="id" size=30 maxlength=30 required></td>
</tr>
<tr>
<td>Pwd:</td><td><input type="password" name="pwd" size=30 maxlength=30 required></td>
</tr>
<tr>
<td colspan=2><input type="submit" name="login" value="LOGIN" ></td>
</tr>
</table>
</form>
</td>
</tr>
<table>
<p>
<a href='../'>Main Page</a>
</body>
</html>
