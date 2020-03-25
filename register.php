<?php include('signupuser.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

</head>
<body>
	<img class="wave" src="./Images/wave.png">
	<div class="container">
		<div class="img">
			<img src="./Images/mobile.svg">
		</div>
		<div class="login-content">
			<form action="register.php" method="post">

				<img src="./Images/avatar.svg">
                <h2 class="title">Welcome</h2>

           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
                </div>
                   <?php include('errors.php'); ?>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="signup.php">Not an account yet? SIGN UP</a>
            	<input type="submit" class="btn" value="Login" name="login_user">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>

</html>