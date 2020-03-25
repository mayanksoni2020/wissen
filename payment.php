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
    <title>Payment</title>

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
          margin: 15% 36.5%;
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
                    <h4>Payment Summary</h4>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 paymentTwoContainer">
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
                    <div class="form-group col-md-12">
                        <form action="charge.php" method="POST">
                            <!-- Note that the amount is in paise = 50 INR -->
                            <script
                                src="https://checkout.razorpay.com/v1/checkout.js"
                                data-key="rzp_test_NznKTMRMbVgXgH"
                                data-amount="10000"
                                data-buttontext="Pay with Razorpay"
                                data-name="WISSEN"
                                data-description="You are paying amount for event"
                                data-image="https://img.icons8.com/nolan/64/000000/graduation-cap.png"
                                data-prefill.name="Mayank Soni"
                                data-prefill.email="mayanksoni2020@gmail.com"
                                data-theme.color="#F37254"
                            ></script>
                            <input type="hidden" value="Hidden Element" name="hidden">
                        </form>
                    </div>
                </div>
          </div>
      </div>
   
  </body>
</html>