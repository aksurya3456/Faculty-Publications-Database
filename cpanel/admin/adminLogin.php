<?php

if($_SERVER[REQUEST_METHOD]=="POST")
{
	$id=$_POST[id];
	$passwd=$_POST[pwd];
	
	$con=mysqli_connect("localhost","root","toor","fpd");
	//include("../db.php");
	$query="select * from login where id = ".$id.";";
	$result=mysqli_query($con,$query);
	//print_r($result);
	
	echo "<br>";
	echo mysqli_num_rows($result);
	$row=mysqli_fetch_assoc($result);
	//echo "<br>";
	//print_r($row);
	if(strcmp($row[passwd],$passwd)==0)
	{
		setcookie("usr345admin",$id,time()+(24*3600),"/");
		setcookie("usr345faculty","admin",time()-(24*3600),"/");
		//setcookie("usr345id",$id,time()+(24*3600),"/");
		//echo "cookie created<br>";
		//echo $_COOKIE["usr345type"]."<BR>".$_COOKIE["usr345id"]."<BR>";
		header("location: index.php");
	}
	else
	{
		header("location: ../index.php");
	}
}
?>
