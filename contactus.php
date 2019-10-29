<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Project CSS File Link Starts -->
  <link rel="stylesheet" href="css2.css" type="text/css"/>
  <!-- Project CSS File Link Ends -->
  
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Header Starts-->
      <?php include('header.php'); ?>
    <!-- Header Ends -->

    <!-- Contact Container Starts -->
    <div class="contact-container">
    <div class="col-md-12 col-sm-12">
      <div class="col-md-6 col-sm-6" id="contact-one">
        <div class="contact-quote">
          <h1 style="line-height: 1.6; letter-spacing: 2px; color: orangered; font-size: 4rem;">CONTACT US</h1>
          <p style="color: white; line-height: 1.6; letter-spacing: 1px; font-size: 2rem;"><b>Need an expert?</b> 
            you are more then welcome to leave your contact info and we will be in touch shortly
          </p>
        </div>
      </div>
      <div class="col-md-6 col-sm-6" id="contact-two">
        <!-- <img src="../../Wissen/Images/contact-us.svg" alt="Image" style="width: 100%; height: 100%;"> -->
        <form id="contact-form">
          <p>First Name</p>
          <input type="text" placeholder="Enter First Name" name="fname"/><br><br>
          <p>Last Name</p>
          <input type="text" placeholder="Enter Last Name" name="lname"/><br><br>
          <p>Email Address</p>
          <input type="text" placeholder="Enter Email" name="email"/><br><br>
          <p>Comment/Question</p>
          <textarea type="text" placeholder="Your Words" name="words"></textarea><br><br>
          <button type="button" class="btn btn-warning" style="font-size: 1.6rem; letter-spacing: 1px; color: black; width: 100%;"><b>Submit</b></button>
        </form>
      </div>
    </div>
    </div>
    <!-- Contact Container Ends -->

    <!-- Contact Ways Starts -->
    <div class="contact-ways">
      <div class="col-md-12 col-sm-12">
        <div class="col-md-4 col-sm-4">
        <div class="col-md-12 col-sm-12" id="contact-logo">
          <i class="fa fa-home"></i>
        </div>
        <div class="col-md-12 col-sm-12" id="contact-desc">
          <h3>VISIT US</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p style="color: orangered;"><b>LPU NH-1, Jalandhar, India</b></p>
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <div class="col-md-12 col-sm-12" id="contact-logo">
          <i class="fa fa-phone"></i>
        </div>
        <div class="col-md-12 col-sm-12" id="contact-desc">
          <h3>CALL US</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p style="color: orangered;"><b>(+91)-8787292169</b></p>
        </div>
        </div>
        <div class="col-md-4 col-sm-4">
        <div class="col-md-12 col-sm-12" id="contact-logo">
          <i class="fa fa-envelope"></i>
        </div>
        <div class="col-md-12 col-sm-12" id="contact-desc">
          <h3>MESSAGE US</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <p style="color: orangered; text-decoration: underline;"><b>clubwissenedu@gmail.com</b></p>
        </div>
        </div>
      </div>
    </div>
    <!-- Contact Ways Starts -->

    <!-- Footer Starts -->
    <div style="padding-top: 50px;">
      <?php include('footer.php'); ?>
    </div>
    <!-- Footer Ends -->

</body>
</html>