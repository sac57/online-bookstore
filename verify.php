<?php
$otp =$_GET['otp'];
$email =$_GET['email'];
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	echo "Connection not established";
	exit(0);
}
	 $sql1 = "SELECT * FROM `sagar1` WHERE Email='$email' AND otp='$otp'";
 if ($result=mysqli_query($con,$sql1))
   {
	   $sss = "";
   if(mysqli_num_rows($result) > 0)
     {
		 if($_COOKIE['otp'] == $otp){
       $sss="<div style='color:green' class='text-success'><b>**your account is verified, Now you can login!!</b></div>";
	 $sql2="UPDATE `sagar1` SET `Verified`=1 WHERE Email='$email'";
	 mysqli_query($con,$sql2);
		 }
     }
	 else
	 {
	 $sss="<div style='color:red'; class='text-danger'> <b>**this otp is not valid , please enter valid OTP!!</b> </div>";
	}
	 }
 echo $sss;
?>