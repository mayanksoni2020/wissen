<?php
 
include('config.php');
session_start();
$qwe='';
if(isset($_SESSION['ab'])){
    $qwe=$_SESSION['ab'];
    unset($_SESSION['ab']);
}
if (isset($_POST['try'])) {
 
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM logindata WHERE email=:email AND password=:password");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->bindParam("password", $password, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        $_SESSION['ab']='email password combination is wrong!';
        header("Location: login.php");
    } else {
        $_SESSION['id']=$result['ID'];
        $_SESSION['email']=$result['email'];
        $_SESSION['success']="done";
        header("Location: chat.php");
    }
}
else
{ 
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link rel="stylesheet" href="css2.css" type="text/css"/>
    <link rel="stylesheet" href="style2.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
function validatefrg() {
var d=document.forms["new1"]["password1"].value;
var e=document.forms["new1"]["email1"].value;


if(e==""){
alert("email must be filled out");
return false;
}
if(e.indexOf('@') <= 0){
alert("Please fill the email in proper format");
return false;
}
if((e.charAt(e.length-3)!='.')&&(e.charAt(e.length-4)!='.')){
alert("Please fill the email in proper format");
return false;
}
if(d==""){
alert("Password must be filled out");
return false;
}
return true;

}
</script>
</head>
<body style="background-color: #f1f1f1;">
    <?php include('header.php'); ?>
<!-- <p id="result" style="margin-top: 200px;"></p>
<form name="new1" action="login.php" onsubmit="return validatefrg()" method="post" style="background-image: url('black.jpg');width:40%;border:6px solid white;margin-left:27%;font-family:aerial;font-weight:bold;color:white;font-size:24px;padding-top:30px;padding-bottom:30px;padding-left:50px;padding-right:50px;">
<h3>Enter your user id/email and password</h3><br>
<h4><?=$qwe?></h4>
User Email<input style="font-family:aerial;font-weight:bold;color:white;" type="text" name="email"/><br>
&nbsp;&nbsp;&nbsp;Password<input style="font-family:aerial;font-weight:bold;color:white;" type="password" name="password"/><br>


<input style=";margin-top:2%"; type="submit" name="try" value="LOGIN" readonly> 
<br><br>
No account yet?<a href="Sign.php">SIGN UP</a>


</form> -->

    <div class="container">
        <div class="row" style="padding: 20% 35%;">
            <div class="col-md-12 col-sm-12" id="inside-login-container">
                <div class="login-container">
                    <h2>Login</h2>
                </div>

                <form class="form-container" name="new1" action="login.php" onsubmit="return validatefrg()" method="post">
                    <?=$qwe?>
                    <p>User Email</p>
                    <input type="text" name="email" placeholder="Your Email"/><br><br>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Your Password"/><br><br><br>
                    <input type="submit" name="try" value="LOGIN" readonly style="font-size: 1.6rem; letter-spacing: 1px; background-color: #34A853; font-weight: bold; color: white;"><br><br><br>
                    <p>No account yet? <a href="Sign.php" style="color: black; text-decoration: none;"><u>SIGN UP</u></a></p>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
 <?php
}
 ?>