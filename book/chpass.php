<?php
session_start();
if(isset($_SESSION['user']))
{
}
else
{
	header("Location:http://localhost:8080/sagar1/index.html");
}
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	echo "Connection not established";
	exit(0);
}
 
	$old = $_GET['old'];
	$newp = $_GET['newp'];
	$email = $_SESSION['user'];
	
	$sq = "SELECT `Password` FROM `sagar1` WHERE Email='$email' ";
	$res=mysqli_query($con,$sq);
	while ($row = $res->fetch_assoc()) {
	if($old === $row['Password']){
	$sql="UPDATE `sagar1` SET `Password`='$newp' WHERE Email='$email'";
	mysqli_query($con,$sql);
	echo "<div style='color:green' class='text-success'><b> Your Password changed Successfully.</b></div>";
	}
	else{
		echo "<div style='color:red'; class='text-danger'> <b>Current password is wrong.</b> </div>";
	} 
	}
?>