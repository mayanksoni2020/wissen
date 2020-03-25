<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Wissen</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Project CSS File Link Starts -->
  <link rel="stylesheet" href="css3.css" type="text/css"/>
  <!-- Project CSS File Link Ends -->

  <!--animated-css-->
  <link href="animate.css" rel="stylesheet" type="text/css" media="all">
  <script src="wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
  <!--/animated-css-->

  <!-- Google Font Style Link Starts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noticia+Text&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Khula:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <!-- Project CSS File Link Ends -->

  <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</head>
<body>
  <!-- Header Starts-->
    <?php include('header.php'); ?>
  <!-- Header Ends -->

  <!-- Container Starts -->
    <?php include('container.php'); ?>
  <!-- Container Ends -->

  <!-- Our Expertise Starts -->
  <div class="clearfix wow slideInUp">
    <?php include('expertise.php'); ?>
  </div>
  <!-- Our Expertise Ends -->

  <!-- Our Services Starts -->
  <div class="clearfix wow slideInLeft">
    <?php include('services.php'); ?>
  </div>
  <!-- Our Services Ends -->

  <!-- Registration Steps Starts -->
    <?php include('steps.php'); ?>
  <!-- Registration Steps Starts -->

  <!-- Counter Starts -->
    <?php include('counter.php'); ?>
  <!-- Counter Ends -->

  <!-- Feedback Starts -->
    <?php include('feedback.php'); ?>
  <!-- Feedback Ends -->

  <!-- Footer Starts -->
    <?php include('footer.php'); ?>
  <!-- Footer Ends -->

</body>
</html>