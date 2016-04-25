<html>
<head>
<style>
   
 </style>
<title>UserDetails</title>
<link type="text\css" rel="stylesheet" href="../Adbms/p3.css">
 
</head>
<body bgcolor="#ffefd5">
<?php
include("../commonHeader.php");
include("adminHeader.php");
?>
   
   <h1 style="color:red" align="center">Faculty Database Registration form</h1>
   <h2 style='color:#000080'" allign="center">Add User Details</h2>
        <hr>
<form action="reguser.php" method="post">
<table>

	<tr><td>Name:</td><td><input type="text" name="nm" size=30 maxlength=40 required></td></tr>
        
       <tr><td> Department:</td><td><input type="text" name="dept" size=30 maxlength=40 required></td></tr>
<tr><td>Qualifiaction:</td><td><input type="radio" name="qli" value="1" required>Graduate
<input type="radio" name="qli" value="2" required>Post Graduate
<input type="radio" name="qli" value="3" required>PhD
</td></tr>
        <tr><td>Gender:</td><td> <input type="radio" name="gender" value="Male" required>Male
            <input type="radio" name="gender" value="Female" required>Female</td></tr>
        <tr><td>Deputation:</td><td><input type="text" name="deput" size=30 maxlength=40 required></td></tr>
         <tr><td>DOB:</td><td><input type="date" name="dob" size=30 maxlength=40 required></td></tr>
  <tr><td>phone:</td><td><input type="text" name="phone" size=30 maxlength=40 required></td></tr>
         <tr><td>Email:</td><td><input type="email" name="email" size=30 maxlength=40 required></td></tr>
 <tr><td>Address:</td><td> <textarea rows="4" cols="50" name="address" required></textarea></td></tr>
 <tr><td><input type="submit"  align="right" name="Submit"></td></tr></table>
        
        
   
</form>
 
</body>
</html>
