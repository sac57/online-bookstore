<?php
session_start();
$username = $_GET['user_email'];
$password = $_GET['user_password'];
$_SESSION['user'] = $username;
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	echo "Connection not established";
	exit(0);
}
		$sql3 = "SELECT `Full_Name` FROM `sagar1` WHERE Email='$username'";
		$res = mysqli_query($con,$sql3);
		while ($row = $res->fetch_assoc()) {
		$_SESSION['name'] = $row['Full_Name'];
		}
		$ans="dj";
		$sql1 = "SELECT * FROM `sagar1` WHERE Email='$username' AND Password ='$password' AND Verified=1";
		if ($result=mysqli_query($con,$sql1))
	   {	
	   if(mysqli_num_rows($result) > 0)
		 {
		    $ans=1;
		 }
		 else
		 {
			$ans=0;
		 }
		}
		echo $ans;
?>
