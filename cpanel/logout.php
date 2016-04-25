<html>
<head>
<title>Logout</title></head>
<body>

<?php

setcookie("usr345faculty","faculty",time()-(24*3600),"/");
setcookie("usr345admin","admin",time()-(24*3600),"/");
//setcookie("usr345id",$id,time()-(24*3600),"/");
//setcookie("usr345type",$id,time()-(24*3600),"/");

echo "You have successfully logged out. Please login again to continue<br>";
//sleep(3);
header("location: index.php");
//include("index.php");
?>

</body>
</html>
