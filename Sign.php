<!DOCTYPE html>
<html>

<head>
<title>Signup</title>
<link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
<link rel="stylesheet" href="css2.css" type="text/css"/>
<link rel="stylesheet" href="style2.css" type="text/css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<script>
function validate() {
var x=document.forms["new"]["first_name"].value;
var y=document.forms["new"]["last_name"].value;
var z=document.forms["new"]["password"].value;
var w=document.forms["new"]["email"].value;
var a=document.forms["new"]["gender"].value;



if(x==""){
alert("First name must be filled out");
return false;
}
else if(y==""){
alert("Last name must be filled out");
return false;
}
else if(z==""){
alert("Password must be filled out");
return false;
}
else if(w==""){
alert("email must be filled out");
return false;
}
else if(w.indexOf('@') <= 0){
alert("Please fill the email in proper format");
return false;
}
else if((w.charAt(w.length-3)!='.')&&(w.charAt(w.length-4)!='.')){
alert("Please fill the email in proper format");
return false;
}
else if(a==""){
alert("Gender has to be selected");
return false;
}
}
</script>

</head>
<body>
    <?php include('header.php'); ?>
    <!-- <br><br>
<marquee style="font-size:70px;color:black;background-color:white;"behavior=alternate>Welcome to Wissen</marquee>
<form id="frm1" name="new" action="signup.php" onsubmit="return validate()" method="post" style="background-color:black;width: 40%;border: 0.2em solid white;margin-left: 27%;font-family: aerial;font-weight: bold;color:white;font-size: 1.5em;padding-top: 1.7em;padding-bottom: 1.7em;padding-left: 2.5em;padding-right: 2.5em;">
<p>ENTER YOUR DETAILS</p><br>
<label for="first_name">First name:</label><input style="font-family:aerial;font-weight:bold;color:white;" type="text"name="first_name" id="first_name"/><br>
<label for="last_name">Last name:</label><input style="font-family:aerial;font-weight:bold;color:white;" type="text"name="last_name" id="last_name"/><br>
<label for="email">User Email:</label><input style="font-family:aerial;font-weight:bold;color:white;" type="text"name="email" id="email"/><br>
<label for="password">Password:</label><input style="font-family:aerial;font-weight:bold;color:white;" type="password"name="password" id="password"/><br>
<input type="radio"name="gender"value="male">Male
<input type="radio"name="gender"value="female">Female<br>
<input style="margin-top:2%"; type="submit" name="reg_user" id="reg_user" value="SIGN UP" readonly> <br>
<p>Have an account?<br><br><a href="Login.php" style="text-decoration:none;color:white; background-color:grey;padding:0.2em;margin:0.2em;">LOGIN</a></p>
</form> -->

<div class="container" id="sign-container">
    <div class="row" id="inside-sign-container">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                <h2 style="color: black;"><b>Signup</b></h2>
                <br><br>

            <form class="signup-form" id="frm1" name="new" action="signup.php" onsubmit="return validate()" method="post">
          <label for="first_name">First name</label>
          <input type="text" placeholder="Enter First Name" name="first_name" id="first_name" required="required"/><br><br>
          <label for="last_name">Last name</label>
          <input type="text" placeholder="Enter Last Name" name="last_name" id="last_name" required="required"/><br><br>
          <label for="email">User Email</label>
          <input type="email" placeholder="Enter Email" name="email" id="email" required="required"/><br><br>
          <label for="password">Password</label>
          <input type="password" placeholder="Your Words" name="password" id="password" required="required" style="color: black;"><br><br>
          <!-- <button type="button" class="btn btn-warning" name="submit" style="font-size: 1.6rem; letter-spacing: 1px; color: black; width: 100%;"><b>Submit</b></button> -->
          <input type="submit" name="reg_user" id="reg_user" value="SIGN UP" readonly style="font-size: 1.6rem; letter-spacing: 1px; background-color: #5CB85C; font-weight: bold;"/>
        <br><br><br>
        <p>Already have account? <a href="login.php" style="color: black; text-decoration: none;"><u>LOGIN</u></a></p>
        </form>
            </div>

            <div class="col-md-6 col-sm-6" style="text-align: center; margin: 6% 0%;">
                <img src="./Images/idea.svg" alt="image" class="sign-image"/>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>