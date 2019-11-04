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
	<title>Chat theme example</title>
	<script src="jquery.min.js"></script>
    <script src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="navbar">
	<a href="logout.php">LOGOUT</a>
	</div>
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