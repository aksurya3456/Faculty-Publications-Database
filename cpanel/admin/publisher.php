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
   
   
   <h2 style='color:#000080' allign="center">Publisher Registration</h2>
        <hr>
<form action="regpub.php" method="post">
<table>

	<tr><td>Name:</td><td><input type="text" name="name" size=30 maxlength=40 required></td></tr>
        
         
  <tr><td>Phone:</td><td><input type="text" name="phone" size=30 maxlength=40 required></td></tr>
         <tr><td>Email:</td><td><input type="email" name="email" size=30 maxlength=40 required></td></tr>
 <tr><td>Address:</td><td> <textarea rows="4" cols="50" name="address" required></textarea></td></tr>
 <tr><td><input type="submit"  align="right" name="Submit"></td></tr></table>
        
        
   
</form>
 
</body>
</html>
