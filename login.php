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
        header("Location: index.php");
    }
}
else
{ 
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
input[type=submit]{

    background-color: grey;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 90px;
    cursor: pointer;
    outline: none;
}
input[type=text]{
 // padding: 12px 20px;
    margin: 24px 40px;
    border: none;
    border-bottom: 2px solid grey;
    background: transparent;
    //border-radius: 4px; 
    //background-color: black;
    outline: none;
    font-size: 16px;
    color: white;
}
input[type=password]{
   //padding: 12px 20px;
    margin: 24px 44px;
    border: none;
    border-bottom: 2px solid grey;
    background: transparent;
    //border-radius: 4px;  
    //background-color: black;
    outline: none;
    font-size: 16px;
    color: white;
}
a:link {
    color: pink; 
    background-color: transparent; 
}

a:visited {
    color: blue;
    background-color: transparent;
}

a:hover {
    color: aquamarine;
    background-color: transparent;
    text-decoration: underline;
}
form{
    text-align:center;
    display:inline-block;
    white-space:nowrap;
    margin:auto;
}
}
</style>
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
<body background="m.jpg">
    <?php include('header.php'); ?>
<p id="result" style="margin-top: 200px;"></p>
<form name="new1" action="login.php" onsubmit="return validatefrg()" method="post" style="background-image: url('black.jpg');width:40%;border:6px solid white;margin-left:27%;font-family:aerial;font-weight:bold;color:white;font-size:24px;padding-top:30px;padding-bottom:30px;padding-left:50px;padding-right:50px;">
<h3>Enter your user id/email and password</h3><br>
<h4><?=$qwe?></h4>
User Email<input style="font-family:aerial;font-weight:bold;color:white;" type="text" name="email"/><br>
&nbsp;&nbsp;&nbsp;Password<input style="font-family:aerial;font-weight:bold;color:white;" type="password" name="password"/><br>


<input style=";margin-top:2%"; type="submit" name="try" value="LOGIN" readonly> 
<br><br>
No account yet?<a href="Sign.php">SIGN UP</a>


</form>
</body>
</html>
 <?php
}
 ?>