<?php
session_start();
$con = mysqli_connect("localhost","root","","demo");
if(!$con)
{
	echo "Connection not established";
	exit(0);
}
$lastlogin = $_SESSION['user'];
$sql = "UPDATE `sagar1` SET LastLogin=now() WHERE Email='$lastlogin'";
mysqli_query($con,$sql); 
mysqli_close($con);

header("Location:http://localhost:8080/sagar1/index.html");
session_destroy();
?>