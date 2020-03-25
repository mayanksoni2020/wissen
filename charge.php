<?php
session_start();
// require_once __DIR__ . '/vendor/autoload.php';

// initializing variables
$inputfname = $_SESSION['inputfname'];
$inputlname = $_SESSION['inputlname'];
$inputemail = $_SESSION['inputemail'];
$inputreg = $_SESSION['inputreg'];
$inputphone = $_SESSION['inputphone'];
$inputteam = $_SESSION['inputteam'];
$inputgender = $_SESSION['inputgender'];
// $inputstatus = 'Successfull';
// $inputmessage = 'Be ready to showcase your skills and knowledge to the world';

// inserting data into datbase and fetching payment id
if ($_POST) {
	$razorpay_payment_id = $_POST['razorpay_payment_id'];
	$_SESSION['razorpay_payment_id'] = $razorpay_payment_id;
	$db = mysqli_connect('localhost', 'root', '', 'wissen');
	$query = "INSERT INTO `hacksafety` (`firstname`, `lastname`, `gender`, `email`, `registration_no`, `phone_no`, `team_name`, `payment`, `razorpay_payment_id`) 
  			  VALUES ('$inputfname', '$inputlname', '$inputgender', '$inputemail', '$inputreg', '$inputphone', '$inputteam', 'success', '$razorpay_payment_id')";
	  mysqli_query($db, $query);
	  
	//echo "Razorpay success ID: ". $razorpay_payment_id;
}


// // Create new PDF Instance
// $mpdf = new \Mpdf\Mpdf();

// // generating pdf file
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

// // Output to Browser
// $mpdf->Output('HallTicket.pdf', 'D');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hall Ticket</title>

    <link rel="stylesheet" href="css3.css" type="text/css"/>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #547945;
        border-color: #547945;
        font-size: 14px;
        padding: 10px;
      }
      #paymentContainer{
          margin: 12% 36.5%;
          box-shadow: rgb(29, 29, 29) -0px 25px 50px -6px;
          width: 390px;
          border-radius: 5px;
      }
      .paymentOneContainer{
          color: white;
          background-color: #5918D0;
          text-align: center;
          padding: 10px;
          border-top-left-radius: 5px;
          border-top-right-radius: 5px;
      }
      .paymentTwoContainer{
          padding: 20px;
          border-radius: 5px;
      }
      .row{
          width: 390px;
      }
    </style>

</head>
  <body>
      
      <div class="container" id="paymentContainer">
          <div class="row">
              <div class="col-md-12 paymentOneContainer">
                    <h4>Hall Ticket</h4>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 paymentTwoContainer">
				  <form action="makepdf.php" method="post">
				  	<div class="form-group col-md-6">
                        <label for="paymentid">Razorpay Payment Id</label><br>
                        <?php echo $razorpay_payment_id; ?>
					</div>
					<div class="form-group col-md-6">
                        <label for="inputfname">Payment Status</label><br>
                        <?php echo "Successfull" ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputfname">First Name</label><br>
                        <?php echo $_SESSION['inputfname']; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputlname">Last Name</label><br>
                        <?php echo $_SESSION['inputlname']; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputphone">Phone Number</label><br>
                        <?php echo $_SESSION['inputphone']; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputreg">Registration Number</label><br>
                        <?php echo $_SESSION['inputreg']; ?>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="inputemail">Email</label><br>
                        <?php echo $_SESSION['inputemail']; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputteam">Team Name</label><br>
                        <?php echo $_SESSION['inputteam']; ?>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputgender">Gender</label><br>
                        <?php echo $_SESSION['inputgender']; ?>
                    </div>
                    <div class="form-group col-md-6">
						<button type="submit" class="btn btn-primary">Download Hall Ticket</button>
					    <!-- <a class="btn btn-primary" href="http://localhost/Wissen/payment.php">Download Hall Ticket</a> -->
					</div>
					<div class="form-group col-md-6">
						<!-- <button type="submit" class="btn btn-danger">Go to Homepage</button> -->
                        <a class="btn btn-danger" href="http://localhost/Wissen/index.php">Go to Homepage</a>
					</div>
				  </form>
                </div>
          </div>
      </div>
   
  </body>
</html>