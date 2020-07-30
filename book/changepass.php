<?php
session_start();
if(isset($_SESSION['user']))
{
}
else
{
	header("Location:http://localhost:8080/sagar1/index.html");
}
?>
<html>
<head>
<title>Chage Password</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:#AED6F1;
}
#wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;	
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#1B4F72;
}
#wrapper h1 p
{
 font-size:18px;
}
#contact_form_div
{
 width:400px;
 height:240px;
 margin-left:320px;
  margin-top:200px;
 padding:15px;
 background-color:#1B4F72;
}
#contact_form_div #contact_label
{
 margin:15px;
 margin-bottom:30px;
 font-size:25px;
 font-weight:bold;
 color:white;
}
#contact_form_div input[type="text"]
{
 width:300px;
 height:40px;
 border-radius:2px;
 font-size:17px;
 padding-left:5px;
 border:none;
}
#contact_form_div input[type="button"]
{
 width:300px;
 height:40px;
 border:none;
 border-radius:2px;
 font-size:17px;
 background-color:#85C1E9;
 border-bottom:3px solid #3498DB;
 color:#1B4F72;
 font-weight:bold;
}

@media only screen and (min-width:700px) and (max-width:995px)
{
 #wrapper
 {
  width:100%;
 }
 #wrapper h1
 {
  font-size:30px;
 }
 #contact_form_div
 {
  width:50%;
  margin-left:25%;
  padding-left:0px;
  padding-right:0px;
 }
 #contact_form_div input[type="text"]
 {
  width:80%;
 }
 #contact_form_div input[type="button"]
 {
  width:80%;
 }
}
@media only screen and (min-width:400px) and (max-width:699px)
{
 #wrapper
 {
  width:100%;
 }
 #wrapper h1
 {
  font-size:30px;
 }
 #contact_form_div
 {
  width:60%;
  margin-left:20%;
 }
 #contact_form_div input[type="text"]
 {
  width:80%;
 }
 #contact_form_div input[type="button"]
 {
  width:80%;
 }
}
@media only screen and (min-width:100px) and (max-width:399px)
{
 #wrapper
 {
  width:100%;
 }
 #wrapper h1
 {
  font-size:25px;
 }
 #contact_form_div
 {
  width:90%;
  margin-left:5%;
  padding-left:0px;
  padding-right:0px;
 }
}
</style>

<script>
function change()
	{
		var old=document.getElementById("old").value;
		var newp =document.getElementById("newp").value;
		if(document.getElementById("old").value=="" || document.getElementById("newp").value=="" )
			{
				document.getElementById("err").innerHTML="**please fill the Fields";
				return;
			}
		
		var xhttp;
		xhttp = new XMLHttpRequest();
		xhttp.open("GET", "chpass.php?old="+old+"&newp="+newp, true);
		xhttp.send();
		xhttp.onreadystatechange = function() 
		{
			if (this.readyState == 4 && this.status == 200) 
			{
				document.getElementById("err").innerHTML=this.responseText;
			}
		}
	}
</script>

</head>
<body>
<div id="wrapper">
<div id="contact_form_div">
 <p id="contact_label">Change Your Password...</p>
 <form action="chpass.php">
  <p><input type="text" id="old" placeholder="Current Password" required></p>
    <p><input type="text" id="newp" placeholder="New Password" required></p>
  <p><input type="button" value="CHANGE PASSWORD" onclick="change()"></p><br /><br />
  <div id="err" style="font-weight:bold" class='text-danger' ></div>
 </form>
</div>
</div>
</body>
</html>