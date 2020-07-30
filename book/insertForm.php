<?php
session_start();
if(isset($_SESSION['user'])){ }
else{
	header("Location:http://localhost:8080/sagar1/index.html");
}
?>
<html>
<head>
<title>Insert Record</title>
<link rel='stylesheet' href='./css/view.css' />
</head>
<body style="text-align:center;">
<div class="bg-wrap">
<video id="vid-ele" preload="auto" autoplay="true" loop="loop" muted="muted">
<source src="video.mp4" type="video/mp4">
<source src="video.ogg" type="video/ogg">
</video>
</div>
<div class="content">
<h1>Book Record Management</h1>
<form action="insertion.php" method="post" >
 <table align="center">
	<tr>
		<th style="color:#fff;font-size:25px;">Title</th>
		<td><input type="text" name="title" required /><br /></td>
	</tr>
	<tr>
		<th style="color:#fff;font-size:25px;">Price</th>
		<td><input type="text" name="price" required /><br /></td>
	</tr>
	<tr>
		<th style="color:#fff;font-size:25px;">Author</th>
		<td><input type="text" name="author" required /><br /></td>
	</tr><br>
 </table><br>
 <button type="submit">Insert</button>
</form>
<br> 
<span>Go back to Home Page <a href="home.php">Click Here</a><span>
</div>
</body>
</html>