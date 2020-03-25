<?php include('signupuser.php'); ?>

<!DOCTYPE html>
<html>

<head>
<title>Signup</title>
<link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
<link rel="stylesheet" href="css3.css" type="text/css"/>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style>
    body{
        background: url('./Images/wave.png');
        background-repeat: no-repeat;
    }
    #signupDesign{
        padding: 90px 40px;
    }
    input[type=text], input[type=password] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 15px 0;
      display: inline-block;
      border: none;
      background: #f1f1f1;
    }
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }
</style>

</head>
<body>
    <?php include('header.php'); ?>

    <div class="container" id="signupDesign">
        <div class="row">
            
            <div class="col-md-6 col-sm-6">
                <h3 style="font-size: 48px;">Get Started With Your Account</h3>
                <p style="font-size: 24px; color: #572991;">Let's explore our organisation. It's more than what you think.</p>

                <form method="post" action="signup.php">
                <?php include('errors.php'); ?>

                    <label for="email">Email <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Email" name="email">

                    <label for="usrname">Username <span style="color: red;">*</span></label>
                    <input type="text" placeholder="Enter Username" name="username">

                    <label for="psw">Password <span style="color: red;">*</span></label></label>
                    <input type="password" placeholder="Enter Password" name="psw">

                    <label for="psw-confirm">Confirm Password <span style="color: red;">*</span></label></label>
                    <input type="password" placeholder="Confirm Password" name="psw_confirm"><br><br>

                    <div class="col-md-4 col-sm-4" style="padding: 0px;">
                        <button type="submit" class="btn btn-danger" name="reg_user" style="font-size: 2rem; color: white; width: 90%;"><b>Get Started</b></button>
                    </div>
                    <div class="col-md-8 col-sm-8" style="padding: 0px;">
                        <p>By creating an account you agree to our <a href="#" style="color: dodgerblue">Terms & Privacy</a>.</p>
                        <p>Already have an account? <span><a href="register.php" style="color: black; text-decoration: none; font-weight: bold;">LOGIN</a></span></p>
                    </div>
                    
          </form>
            </div>

            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-12" style="padding: 70px 20px;">
                    <img src="./Images/reg1.jpg" alt="image"/>
                </div>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>