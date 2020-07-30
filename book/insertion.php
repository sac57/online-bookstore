<?php
session_start();
if(isset($_SESSION['user']))
{
	$email = $_SESSION['user'];
}
else
{
	header("Location:http://localhost:8080/sagar1/index.html");
}
$title = $_POST['title'];
$price = $_POST['price'];
$author = $_POST['author'];
$con = mysqli_connect("localhost","root","","demo");
$q = "insert into book ( title,price,author) values('$title','$price',$'author')";
$sql1 = "INSERT INTO `book`(`title`, `price`, `author`,`Email`) VALUES ('$title','$price','$author','$email')";
$status = mysqli_query($con,$sql1);
mysqli_close($con);
?>
<html>
<head>
<link rel='stylesheet' href='./css/view.css' />
<title>Insertion</title>
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
<h2><?php if($status == 1) echo "Record Inserted Successfully"; else "Insertion Failed"; ?></h2>
<span>Do you want to insert more records <a href="insertForm.php">Click Here</a><span>
</div>
</body>
</html>