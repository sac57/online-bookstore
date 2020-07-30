<?php
session_start();
if(isset($_SESSION['user']))
{
}
else
{
	header("Location:http://localhost:8080/sagar1/index.html");
}
$size = sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
	$index='a'.$j;
	if(isset($_POST[$index]))
	$b_id[$i] = $_POST[$index];
	else
	$i--; 
}
$con = mysqli_connect("localhost","root","","demo");
for($k=1;$k<=$size;$k++)
{
$q = "DELETE FROM `book` WHERE bookid =" .$b_id[$k];
mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
<head>
<link rel='stylesheet' href='./css/view.css' />
<title>Deletion</title>
</head>
<body style="text-align:center;">
<div class="bg-wrap">
<video id="vid-ele" preload="auto" autoplay="true" loop="loop" muted="muted">
<source src="video1.mp4" type="video/mp4">
<source src="video1.ogg" type="video/ogg">
</video>
</div>
<div class="content">
<h1 style="padding-top:0px;">Book Record Management</h1>
<h2><?php echo $size." Record Deleted Successfully"; ?></h2>
<span>To Delete more Records <a href="deleteForm.php">Click Here</a><span>
</div>
</body> 
</html>