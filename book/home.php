<?php
session_start(); 
if(isset($_SESSION['user']))
{
	$con = mysqli_connect("localhost","root","","demo");
	if(!$con)
	{
		echo "Connection not established";
		exit(0);
	}
	$lastlogin = $_SESSION['user'];		
	$sql2 = "SELECT LastLogin FROM `sagar1` WHERE Email='$lastlogin'";
	$result = mysqli_query($con,$sql2);
	while ($row = $result->fetch_assoc()) {
		$last = $row['LastLogin'];
	}
	mysqli_close($con);
}
else
{
	header("Location:http://localhost:8080/sagar1/index.html");
}
?>
<html>
<head>
<script language="javascript" type="text/javascript">
		window.onbeforeunload = function() { return ""; };
</script>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
@import url(https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700);
* {
	margin: 0;
	padding: 0;
	font-family: 'Alegreya Sans', Arial, sans-serif;
}
html {
	font-size: 62.5%;
}
body {
	color: black;
	letter-spacing: .18em;
}
a {
	text-decoration: none;
	color:#000099;
}
ul, li {
	list-style-type: none;
}
.clearfix:before,
.clearfix:after {
  content: "";
  display: table;
}
.clearfix:after {
  clear: both;
}
.l-left {
	float: left;
	

}

.l-right {
	float: right;
}

 button {
    border-radius: 20px;
    border: 1px solid #35F02F;
    background-color:#35F02F;
    font-size: 12px;
	color:#ff0000;
    font-weight: bold;
    padding: 12px 42px;
    letter-spacing: 1px;
    text-transform: uppercase;
	cursor:pointer;
}

.clock {
    position: absolute;
	top: 27%;
	left:20%;
    transform: translateX(-50%) translateY(-50%);
    color: #ffffff;
    font-size: 20px;
    font-family: 'Righteous', cursive;
    letter-spacing: 4px;
}

.end {
	margin-top: 30px;
	font-size: 3em;
	font-weight: bold;
	opacity: 0;
	-webkit-transform: translateY(300px);
	        transform: translateY(300px);
	transition: opacity, -webkit-transform 1s;
	transition: opacity, transform 1s;
	transition: opacity, transform 1s, -webkit-transform 1s;
	transition-delay: 1s;
}
.header-top {
	background: rgba(0, 47, 77, .3);
	height: 70px;
	padding: 0 10px;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 12;
	box-sizing: border-box;
}
h1 {
	line-height: 70px;
	height: 70px;
}
h1 a {
	display: block;
	padding: 0 10px;
}
.toggle-menu {
	width: 50px;
	height: 50px;
	display: inline-block;
	position: relative;
	top:-10;
}
.toggle-menu i {
	position: absolute;
	display: block;
	height: 2px;
	background: white;
	width: 30px;
	left: 10px;
	transition: all .3s;
}
.toggle-menu i:nth-child(1) {
	top: 16px;
}
.toggle-menu i:nth-child(2) {
	top: 24px;
}
.toggle-menu i:nth-child(3) {
	top: 32px;
}
.open-menu i:nth-child(1) {
	top: 25px;
	-webkit-transform: rotateZ(45deg);
	        transform: rotateZ(45deg);
}
.open-menu i:nth-child(2) {
	background: transparent;
}
.open-menu i:nth-child(3) {
	top: 25px;
	-webkit-transform: rotateZ(-45deg);
	        transform: rotateZ(-45deg);
}
nav {
 	height: 0;
	opacity: 0;
  box-sizing: border-box;
	background: rgba(0, 47, 77, .25);
	position: fixed;
	top: 70px;
	width: 100%;
  transition: all 1s;
}
.open-menu ~ nav {
	opacity: 1;
 	padding: 80px 0;
	z-index: 15;
	height: calc(90vh - 70px);
}
nav ul {
	padding: 0 10px;
	display: flex;
}
nav li {
	flex: 1;
}
nav li a {
	font-size: 2em;
	display: block;
	padding: 30px;
	text-align: center;
	transition: background .3s;
}
nav li a {
	background: #ff4b4b;
	margin-left: 20px;
}
nav li a:hover {
	background: #212121;
}
section { 
	text-align: center;
}
h2 {
	font-size: 4em;
	margin-bottom: 20px;
}
h3 {
	font-weight: 300;
	font-size: 2.8em;
}
#fp-nav ul li a span, 
.fp-slidesNav ul li a span {
	background: white;
	width: 8px;
	height: 8px;
	margin: -4px 0 0 -4px;
}
#fp-nav ul li a.active span, 
.fp-slidesNav ul li a.active span, 
#fp-nav ul li:hover a.active span, 
.fp-slidesNav ul li:hover a.active span {
	width: 16px;
	height: 16px;
	margin: -8px 0 0 -8px;
	background: transparent;
	box-sizing: border-box;
	border: 2px solid #212121;
}

@media screen and (max-width: 767px) {
	nav ul {
		flex-direction: column;
	}

	nav li {
		margin-top: 1px;
	}
  
  nav li a {
    font-size: 1.5em;
  }
  
  .scroll-icon {
    display: none;
  }
}

@media screen and (max-width: 400px) {
  html {
    font-size: 50%;
  }
  
  .open-menu ~ nav {
		padding: 20px 0;
	}

	nav li a {
		padding: 3px;
	}
}
</style>
<script>
$(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout')) {
            return true;
        }

        return false;
    });
});
</script>
</head>
<body>

<header>
  <div class="header-top clearfix">
    <h1 class="l-left"><a href="#firstSection" style="font-size:27px;">Hi<?php echo "  ".$_SESSION['name']; ?></a></h1>
	<h1 class="l-left" style="margin-left:90px;color:white;">BOOK RECORDS MANAGEMENT</h1><br><br>
	<button style="margin-left:20px;margin-top:-6px;color:#ff0000;float:right;"><a href="homelogout.php" id="logout">LOGOUT</a></button>
    <a class="l-right toggle-menu" href="#">
      <i></i>
      <i></i>
      <i></i>
    </a>
  </div>

  <nav class="hide">
    <ul id="menu">
      <li data-menuanchor="firstSection">
        <a href="#firstSection" >INSERT</a>
      </li>
      <li data-menuanchor="secondSection">
        <a href="#secondSection" >VIEW</a>
      </li>
      <li data-menuanchor="thirdSection">
        <a href="#thirdSection" >DELETE</a>
      </li>
      <li data-menuanchor="fourthSection">
        <a href="#fourthSection" >UPDATE</a>
      </li>
    </ul>
  </nav>
</header>

<div id="fullpage">
  <section class="vertical-scrolling">
	<button style="margin-bottom:400px;color:#ff0000;float:left;"><a href="changepass.php" >Change Password</a></button>
	<div class="clock">Last Logout Time: <?php echo $last ;?></div>
	<button><a href="insertForm.php" title="insert record"> Insert Books </a></button>
  </section>
  <section class="vertical-scrolling">
	<button><a href="view.php" title="view record"> View Books </a></button>
  </section>
  <section class="vertical-scrolling">
	<button><a href="deleteForm.php" title="delete record"> Delete Books </a></button>
  </section>
  <section class="vertical-scrolling">
	<button><a href="updateForm.php" title="Update record"> Update Books </a></button>
  </section>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'></script>
<script>
var $header_top = $('.header-top');
var $nav = $('nav');
$header_top.find('a').on('click', function() {
  $(this).parent().toggleClass('open-menu');
});
$('#fullpage').fullpage({
  sectionsColor: ['#3dcfa1', '#348899', '#ff8b20', '#ff5757', '#ffd03c'],
  sectionSelector: '.vertical-scrolling',
  navigation: true,
  slidesNavigation: true,
  controlArrows: false,
  anchors: ['firstSection', 'secondSection', 'thirdSection', 'fourthSection', 'fifthSection'],
  menu: '#menu',
  afterLoad: function(anchorLink, index) {
    $header_top.css('background', 'rgba(0, 47, 77, .3)');
    $nav.css('background', 'rgba(0, 47, 77, .25)');
    if (index == 5) {
        $('#fp-nav').hide();
      }
  },
  onLeave: function(index, nextIndex, direction) {
    if(index == 5) {
      $('#fp-nav').show();
    }
  },
});
</script>
</body>
</html>