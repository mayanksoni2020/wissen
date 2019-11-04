<?php
session_start();
if(!isset($_SESSION['success']))
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ChatApp</title>
	<script src="jquery.min.js"></script>
    <script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<link rel="stylesheet" type="text/css" href="css2.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="chatapp-body">
	<!-- <div class="navbar">
	<a href="logout.php">LOGOUT</a>
	</div> -->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="top">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php" id="website-name"><span class="glyphicon glyphicon-education"></span> WISSEN</a>
    </div>
    
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" id="span-hover"></span> Home</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span> About Us</a></li>
      <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
      <li><a href="events.php"><span class="glyphicon glyphicon-calendar"></span> Events</a></li>
      <li style="background-color: #3BABFD;"><a href="logout.php" style="color: white"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
   </div>
  </div>
</nav>

	<div class="chatbox">
		<div class="chatlogs">
		</div>
		<div class="ajaxForm">
		<input type="text" id="chatInput"/>
			<input type="button" id="btnSend" value="➥"/>
		</div>
	</div>
</body>
</html>