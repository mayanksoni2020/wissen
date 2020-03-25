<?php
//session_start();

// initializing variables
$inputfname = "";
$inputlname = "";
$inputemail = "";
$inputreg = "";
$inputphone = "";
$inputteam = "";
$inputgender = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'wissen');

// Register User
if (isset($_POST['proceed_pay'])) {
    // recieve all input values from the form
    $inputfname = mysqli_real_escape_string($db, $_POST['inputfname']);
    $inputlname = mysqli_real_escape_string($db, $_POST['inputlname']);
    $inputemail = mysqli_real_escape_string($db, $_POST['inputemail']);
    $inputreg = mysqli_real_escape_string($db, $_POST['inputreg']);
    $inputphone = mysqli_real_escape_string($db, $_POST['inputphone']);
    $inputteam = mysqli_real_escape_string($db, $_POST['inputteam']);
    $inputgender = mysqli_real_escape_string($db, $_POST['inputgender']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($inputfname)) { array_push($errors, "Firstname is required"); }
    if (empty($inputlname)) { array_push($errors, "Lastname is required"); }
    if (empty($inputemail)) { array_push($errors, "Email is required"); }
    if (empty($inputreg)) { array_push($errors, "Registration Number is required"); }
    if (empty($inputphone)) { array_push($errors, "Phone Number is required"); }

    // Proceed if no errors
    if (count($errors) == 0) {
        $_SESSION['inputfname'] = $inputfname;
        $_SESSION['inputlname'] = $inputlname;
        $_SESSION['inputemail'] = $inputemail;
        $_SESSION['inputreg'] = $inputreg;
        $_SESSION['inputphone'] = $inputphone;
        $_SESSION['inputteam'] = $inputteam;
        $_SESSION['inputgender'] = $inputgender;

        // $query = "INSERT INTO hacksafety (firstname, lastname, gender, email, registration_no, phone_no, team_name, payment) 
  		// 	  VALUES ('$inputfname', '$inputlname', '$inputgender', '$inputemail', '$inputreg', '$inputphone', '$inputteam', 'failed')";
        // mysqli_query($db, $query);
        
        header('location: payment.php');
    }
}

?>