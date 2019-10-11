<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Project CSS File Link Starts -->
  <link rel="stylesheet" href="index.css" type="text/css"/>
  <link rel="stylesheet" href="css2.css" type="text/css"/>
  <!-- Project CSS File Link Ends -->

  <!-- Google Font Style Link Starts -->
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noticia+Text&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Khula:700&display=swap" rel="stylesheet">
  <!-- Project CSS File Link Ends -->
  
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- Header Starts-->
    <?php include('header.php'); ?>
  <!-- Header Ends -->

  <!-- Container Starts -->
    <!-- <div class="main-container">
      <div class="col-md-4 col-sm-5" id="container-one">
        <div class="container-quote">
          <h1 style="line-height: 1.6; letter-spacing: 2px;">Better Education Develops the Nation !!!</h1>
        </div>
      </div>
      <div class="col-md-7 col-sm-6" id="container-two">
        <img src="../../Wissen/Images/project-management.svg" alt="Image" style="width: 100%; height: 80%;">
      </div>
    </div> -->
    <?php include('container.php'); ?>
  <!-- Container Ends -->

  <!-- Our Expertise Starts -->
    <?php include('expertise.php'); ?>
  <!-- Our Expertise Ends -->

  <!-- Our Services Starts -->
    <?php include('services.php'); ?>
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
</body>
</html>