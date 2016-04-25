<?php

$servername = "localhost";
$username = "root";
$password = "toor";

// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else
	echo "Connected successfully<br>";

?>
