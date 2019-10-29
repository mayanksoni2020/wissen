<?php

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$comments = $_POST['comments'];

$cn = mysqli_connect('localhost', 'root', '', 'wissen');

$query = "INSERT INTO `ContactUs`(`FirstName`, `LastName`, `Email`, `Comments`) VALUES ('$fname', '$lname', '$email', '$comments')";

$run = mysqli_query($cn, $query);

if($run == TRUE){
    echo "<script>alert('Record Save');</script>";
}
else{
    echo "Error!";
}

?>