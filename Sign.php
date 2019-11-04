<!DOCTYPE html>
<html>

<head>
<title>Signup</title>
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
input[type=radio]{
margin: 24px 20px;
}
input[type=checkbox]{
margin: 24px 20px;
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

form#frm1 {
    text-align: center;
    display: inline-block;
    white-space: nowrap;
}

label {
    display: inline-block;
    width:50%;
    }
</style>


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
<body background="m.jpg">
    <?php include('header.php'); ?>
    <br><br>
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
</form>
</body>
</html>