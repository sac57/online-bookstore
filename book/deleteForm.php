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
$con = mysqli_connect("localhost","root","","demo");
$sql2 = "SELECT * FROM `book` WHERE Email='$email'";
$result = mysqli_query($con,$sql2);
$num = mysqli_num_rows($result);
mysqli_close($con);
?>

<html>
<head>
<title>Delete Record</title>
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
<form action="deletion.php" method="post" >
<table id='tbl' align="center">
	<tr>
		<th>BookID</th>
		<th>Title</th>
		<th>Price</th>
		<th>Author</th>
		<th>Select to Delete</th>
	</tr>
	<?php
	for($i = 1;$i<=$num;$i++)
	{
		$row = mysqli_fetch_array($result);
	?>
	<tr>
		<td><?php echo $row['bookid']; ?></td>
		<td><?php echo $row['title']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['author']; ?></td>
		<td><input type="checkbox" value="<?php echo $row['bookid']; ?>" name="a<?php echo $i; ?>"/></td>
	</tr>
	
	<?php } ?>
	
</table><br>
	<button type="submit">Delete Records</button>
</form>
<br>
<span>Go back to Home Page <a href="home.php">Click Here</a></span>
</div>
</body>
</html>