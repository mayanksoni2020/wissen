<?php
require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['message']))
{
    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $message = $_POST['message'];

    // a new instance of the library

    $mpdf = new \Mpdf\Mpdf();

    $data = "";

    $data .= "<h1>Your Details</h1>";

    $data .= "<strong>First Name</strong> " . $fname . "<br>";

    $data .= "<strong>Last Name</strong> " . $lname . "<br>";

    $data .= "<strong>Email</strong> " . $email . "<br>";

    $data .= "<strong>Message</strong> " . $message . "<br>";

    $mpdf->WriteHtml($data);

    $mpdf->output("myfile.pdf","D");   
    

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Generating PDF from HTML fORM using MPDF Library</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">

    <h1>Send PDF as Attachement</h1>

    <p>Fill out the Details to generate the pdf</p>

    <form action="demo.php" method="post">
    
        <input type="text" placeholder="First Name" name="fname" class="form-control" required>
        <input type="text" placeholder="Last Name" name="lname" class="form-control" required>
        <input type="email" placeholder="Email" name="email" class="form-control" required>

        <textarea name="message" placeholder="Message" class="form-control" required>

        </textarea>

        <button class="btn btn-success" type="submit">Send</button>

    </form>

</div>
</body>
</html>