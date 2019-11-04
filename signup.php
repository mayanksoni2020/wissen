<?php
 
include('config.php');
session_start();
 
if (isset($_POST['reg_user'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM logindata WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p><a href="Signup.html">Back to signup</a>';
    }
 
    if ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO logindata(password,email) VALUES (:password,:email)");
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            header("Location:login.php");
        } else {
            echo '<p class="error">Something went wrong!</p><a href="Signup.html">Back to signup</a>';
        }
    }
}
 
?>