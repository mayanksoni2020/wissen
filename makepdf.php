<?php
session_start();
require_once __DIR__ . '/vendor/autoload.php';

// initializing variables
// $inputfname = $_SESSION['inputfname'];
// $inputlname = $_SESSION['inputlname'];
// $inputemail = $_SESSION['inputemail'];
// $inputreg = $_SESSION['inputreg'];
// $inputphone = $_SESSION['inputphone'];
// $inputteam = $_SESSION['inputteam'];
// $inputgender = $_SESSION['inputgender'];
// $razorpay_payment_id = $_SESSION['razorpay_payment_id'];
// $inputstatus = 'Successfull';
// $inputmessage = 'Be ready to showcase your skills and knowledge to the world';

// Create new PDF Instance
$mpdf = new \Mpdf\Mpdf();

// // Create our PDF
// $data = '';

// $data .= '<h1>Your Details</h1>';

// // Add data
// $data .= '<strong>First Name</strong>' . $inputfname . '<br>';
// $data .= '<strong>Last Name</strong>' . $inputlname . '<br>';
// $data .= '<strong>Gender</strong>' . $inputgender . '<br>';
// $data .= '<strong>Email Name</strong>' . $inputemail . '<br>';
// $data .= '<strong>Registration Number</strong>' . $inputreg . '<br>';
// $data .= '<strong>Phone Number</strong>' . $inputphone . '<br>';
// $data .= '<strong>Team Name</strong>' . $inputteam . '<br>';
// $data .= '<strong>Razorpay Payment Id</strong>' . $razorpay_payment_id . '<br>';
// $data .= '<strong>Payment Status</strong>' . $inputstatus . '<br>';

// // Write PDF
// $mpdf->WriteHTML($data);

$mpdf->WriteHTML('<h1>Hello world!</h1>');


// Output to Browser
$mpdf->Output('HallTicket.pdf', 'D');

?>