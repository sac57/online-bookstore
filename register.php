<?php
$full_name =$_GET['full_name'];
$email =$_GET['email'];
$mob_no =$_GET['mobile'];
$password= $_GET['password'];	
$con=mysqli_connect("localhost","root","","demo");
if(!$con)
{
	echo "Connection not established";
	exit(0);
}
$sq = "SELECT * FROM `sagar1` WHERE Email='$email' AND Mobile='$mob_no' AND Verified=1";
 if ($result=mysqli_query($con,$sq))
   {
    if(mysqli_num_rows($result) > 0)
     {
       echo "**This email ID and Mobile number is already registered.";
	   exit(0);
     }
 }
 
 $sql5 = "SELECT * FROM `sagar1` WHERE Email='$email' AND Verified=1";
 if ($result=mysqli_query($con,$sql5))
   {
    if(mysqli_num_rows($result) > 0)
     {
       echo "**This email ID is already registered.";
	   exit(0);
     }
 }
	$sql1 = "SELECT * FROM `sagar1` WHERE Mobile='$mob_no' AND Verified=1";
 if ($result=mysqli_query($con,$sql1))
   {
   if(mysqli_num_rows($result) > 0)
     {
       echo "**This mobile number is already registered.";
   exit(2);
     }
  }
  
   $sql44 = "SELECT * FROM `sagar1` WHERE Email='$email' AND Mobile='$mob_no' AND Verified=0";
 if ($result=mysqli_query($con,$sql44))
   {
    if(mysqli_num_rows($result) > 0)
     {
       echo "<div style='color:red'; class='text-danger'>This email ID and Mobile number is already registered but Account not verified,please verify your account first.</div>";
	   exit(0);
     }
 }   
 
	 $sql22 = "SELECT * FROM `sagar1` WHERE Email='$email' AND Verified=0";
 if ($result=mysqli_query($con,$sql22))
   {
    if(mysqli_num_rows($result) > 0)
     {
       echo "<div style='color:red'; class='text-danger'>This email ID is already registered but Account not verified,please verify your account first.</div>";
	   exit(0);
     }
 }
	$sql33 = "SELECT * FROM `sagar1` WHERE Mobile='$mob_no' AND Verified=0";
 if ($result=mysqli_query($con,$sql33))
   {
   if(mysqli_num_rows($result) > 0)
     {
       echo "<div style='color:red'; class='text-danger'>This mobile number is already registered but Account not verified,please verify your account first.</div>";
   exit(2);
     }
  }
  

	// require('textlocal.class.php');
	// $textlocal = new Textlocal('sonarsagarvat@gmail.com', 'Sachin@123');
	// $numbers = array(9518976940);
	// $sender = 'TXTLCL';
	
	$otp=""; 
	 for($i=0;$i<6;$i++)
	 {
		 
		 $otp=$otp.rand(0,9);
	 }
	 
	//$message = 'This is your otp :' . $otp;
$to = $email; 
$subject = "Register using given OTP";
$message = "<html><body>";
$message .= "<h1 style='color:#0366fc;'>Verify Your Email Address.</h1>";
$message .= "<p style='text:muted'>To finish setting up your account, we just need to make sure this email address is yours.</p>";
$message .= "<p style='text:muted'>To verify your email address use this OTP: <b>$otp</b></p>";
$message .= "<p style='text:muted'>If you didn't request this code, you can safely ignore this email. Someone else might have typed your email address by mistake.</p>";
$message .= "<p style='text:muted'>Thanks,<br>Sagar Sonar</p>";
$message .= "<table rules='all' style=border-color: #666;' cellpadding='10' width='100%'>";
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . $full_name . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . $email . "</td></tr>";
$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . $mob_no . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";
$headers = "Reply-To: ". 'misolanke57@gmail.com' . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if(mail($to,$subject,$message,$headers)){
			$sql2 = "INSERT INTO `sagar1`(`Full_Name`, `Email`, `Mobile`, `Password`, `Time`, `otp`) VALUES ('$full_name','$email','$mob_no','$password',CURRENT_TIMESTAMP(),'$otp')";
			if($result=mysqli_query($con,$sql2)){
				echo "OTP -> $otp .<br>This otp is also Mailed to you, now varify your account";
			}
			else
				echo "!!Error in registering your data,please contact administrator.";
			
			setcookie('otp',$otp);
	}
	else{
		echo 'Message not sent';
	}
	// try {
    // $result = $textlocal->sendSms($numbers, $message, $sender);
	// setcookie('otp',$otp);
	// echo "Plz check your Email and Enter the OTP to varify your account";
	// } catch (Exception $e) {
    // die('Error: ' . $e->getMessage());
	// }
?>