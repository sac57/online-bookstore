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
$records = $size/4;
for($i=1;$i<=$records;$i++)
{
	$index1 = "bookid".$i;
	$bookid[$i]=$_POST[$index1];
	$index2 = "title".$i;
	$title[$i]=$_POST[$index2]; 
	$index3 = "price".$i;
	$price[$i]=$_POST[$index3];
	$index4 = "author".$i;
	$author[$i]=$_POST[$index4];
	
}
$con = mysqli_connect("localhost","root","","demo");

for($i=1;$i<=$records;$i++)
{
	
	$sql4 = "UPDATE `book` SET `title`= '$title[$i]', `price`=$price[$i], `author`= '$author[$i]' WHERE `bookid`=$bookid[$i]";
	mysqli_query($con,$sql4);
}
mysqli_close($con);
?>
<html>
<head>
<title>Updation</title>
<link rel='stylesheet' href='./css/view.css' />
</head>
<body style="text-align:center;">
<div class="bg-wrap">
<video id="vid-ele" preload="auto" autoplay="true" loop="loop" muted="muted">
<source src="video1.mp4" type="video/mp4">
<source src="video1.ogg" type="video/ogg">
</video>
</div>
<div class="content">
<h1>Book Record Management</h1>
<h2><?php echo "Record Updated Successfully"; ?></h2>
<span>Edit more Records <a href="updateForm.php">Click Here</a><span>
</div>
</body> 
</html>