<html>
<head>
<title>
Faculty Publications DataBase
</title>
<?php
//include "header.php";
?>

</head>
<body bgcolor="#ffefd5">
<h1>Faculty Publication Database</h1>
<h5><a href="./cpanel/">Login As Faculty/Admin</a><h5>
<h3>Published Reports</h3>

<?php
//include "header.php";
$con=mysqli_connect("localhost","root","toor","fpd") or die("Unable to connect to database");
$query="select * from file inner join online_published  where online_published.file_id=file.id;";
//echo $query;
$result=mysqli_query($con,$query);
//echo $query;
//print_r($result);
if(mysqli_num_rows($result)==0)
{
	echo "No reports published yet";
}
else
{
	$total=mysqli_num_rows($result);
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		$llim=($_POST['indx']*20)-20;
	}
	else
	{
		$llim=0;
	}
	$ulim=$llim+20;
	$i=0;
	for($i=1;$i<=$llim;$i=$i+1)
	{
		$row=mysqli_fetch_assoc($result);
	}
		

	echo "<table border=1 >
<tr><td><b>Report Topic</b></td><td><b>Faculty</b></td><td><b>Admin Of Faculty</b></td><td><b>Publisher Associated</b></td><td><b>Filename</b></td></tr>";
	for(;$i<=$ulim;$i=$i+1){
	if($row=mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		//reprt name
		$query1="select * from report where id=".$row['report_id'];
		$result1=mysqli_query($con,$query1);
		$row1=mysqli_fetch_assoc($result1);
		echo "<td>".$row1['name']."</td>";
		
		//user name
		$query2="select * from user where id=".$row['user_id'];
		$result2=mysqli_query($con,$query2);
		$row2=mysqli_fetch_assoc($result2);
		echo "<td>".$row2['name']."</td>";
		
		//admin name
		$query3="select * from user where id=".$row['admin_id'];
		$result3=mysqli_query($con,$query3);
		$row3=mysqli_fetch_assoc($result3);
		echo "<td>".$row3['name']."</td>";
		
		//publisher name
		$query4="select * from publisher where id=".$row1['publisher_id'];
		$result4=mysqli_query($con,$query4);
		//print_r($result4);
		$row4=mysqli_fetch_assoc($result4);
		echo "<td>".$row4['name']."</td>";
		
		echo "<td><a target='_blank' href='./cpanel/uploads/".$row['name']."'>".$row['name']."</a></td>";
	
		echo "</tr>";
	
	}}
	echo "</table>";
	$numsubmit=$total/20;
	echo "<form action='#' method=post>";
	for($j=0;$j<=$numsubmit;$j=$j+1)
	{
		echo "<input type=submit name='indx' value=".($j+1).">";
	}
	echo "</form>";
}

//include "footer.php";
?>


</body>
</html>
