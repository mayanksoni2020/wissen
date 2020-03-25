<?php 
session_start();
include('registrationuser.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Registration</title>

    <link rel="stylesheet" href="css3.css" type="text/css"/>
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Khula:700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- Header Starts-->
        <?php include('header.php'); ?>
    <!-- Header Ends -->

<!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>1 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div> -->

    <!-- Registration Form Starts -->
        <div class="container" id="formContainer">
            <div class="row" style="background-color: #0070A0;">
                <div class="col-md-3 col-sm-3" style="background-color: #0070A0; padding: 146.5px 20px; opacity: 1">
                    <div class="formOneContainer">
                        <h2>Hello Friend!</h2>
                        <h3 style="margin-bottom: 0px;">Let's Get</h3>
                        <h1 style="margin: 0px;">Started</h1>
                        <br>
                        <p>Enter Your Personal Details And Start Your Journey With Us</p>
                    </div>
                </div>
                <div class="col-md-9 col-sm-9" style="background-color: #48BCD6; padding: 20px; color: black;">
                    <div class="formTwoContainer">
                        <h3 style="text-align: center;">REGISTER WITH YOUR WORKING EMAIL ADDRESS</h3><br>

                        <form method="post" action="eventregistration.php" style="padding: 0px 35px;">
                        <?php include('errors.php'); ?>

                            <div class="form-group col-md-6">
                              <label for="inputfname">First Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputfname" placeholder="First Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputlname">Last Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputlname" placeholder="Last Name">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputemail">Email<span style="color: red;"> *</span></label>
                              <input type="email" class="form-control" name="inputemail" placeholder="Email">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputreg">Registration Number<span style="color: red;"> *</span></label>
                              <input type="number" class="form-control" name="inputreg" placeholder="Registration Number">
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputphone">Phone Number<span style="color: red;"> *</span></label>
                              <input type="number" class="form-control" name="inputphone" placeholder="Phone Number">
                              <p style="margin: 0px;">Please provide a valid phone number, we will contact you through this number.</p>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputteam">Team Name<span style="color: red;"> *</span></label>
                              <input type="text" class="form-control" name="inputteam" placeholder="Team Name"><br>
                            </div>
                            <div class="form-group col-md-6" style="display: inline-block;">
                              <label style="display: block;" for="inputgender">Gender<span style="color: red;"> *</span></label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Male" checked>Male
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Female">Female
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="inputgender" value="Others">Others
                                </label>
                            </div>
                            <div class="form-group col-md-12" style="text-align: center;">
                              <button type="submit" class="btn btn-danger" name="proceed_pay">Proceed to Pay</button>
                              <!-- <a class="btn btn-danger" href="http://localhost/Wissen/payment.php" name="proceed_pay">Proceed to Pay</a> -->

        <!-- <script
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="rzp_test_NznKTMRMbVgXgH"
            data-amount="10000"
            data-buttontext="Proceed to Pay"
            data-name="WISSEN"
            data-description="Paying amount for an event"
            data-image="https://img.icons8.com/nolan/64/000000/graduation-cap.png"
            data-prefill.name="Mayank Soni"
            data-prefill.email="mayanksoni2020@gmail.com"
            data-theme.color="#F37254"
        ></script>
        <input type="hidden" value="Hidden Element" name="hidden"> -->

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Registration Form Ends -->
</body>
</html>