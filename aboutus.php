<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <link rel="stylesheet" href="css3.css" type="text/css"/>
    <script src="main.js"></script>
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="./node_modules/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- <script src="./lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="./node_modules/jquery/dist/jquery.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
    <link rel="shortcut icon" href="https://img.icons8.com/nolan/64/000000/graduation-cap.png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js"></script>
    <script src="./node_modules/jquery.counterup/jquery.counterup.min.js"></script>

    <!--animated-css-->
    <link href="animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="wow.min.js"></script>
    <script>
    new WOW().init();
    </script>
    <!--/animated-css-->
</head>
<body>
    <?php include('header.php'); ?>

    <section id="intro" class="clearfix">
    <div class="container">

      <div class="intro-img">
        <img src="./Images/intro-img.svg" width="100%" alt="Intro image" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>#solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div>
    </section>


    <section id="about">
      <div class="container">

        <div class="col-md-12 wow fadeInUp" id="section-head">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
        </div>

        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 wow fadeInUp">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p><br>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
            <br><br>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
            <img src="./Images/about-img.svg" width="100%" class="img-fluid" alt="">
          </div>
        </div>

        <div class="row about-extra">
          <div class="col-lg-6 wow fadeInUp">
            <img src="./Images/about-extra-1.svg" width="100%" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4><br>
            <p>
              Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
            </p>
            <p>
              Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
            </p>
          </div>
        </div>

      </div>
    </section>

    <section id="services" class="section-bg">
      <div class="container">

        <div class="col-md-12 wow fadeInUp" id="section-head">
            <h3>Services</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>

        <div class="row" style="padding: 20px 60px;">

          <div class="col-md-6 col-lg-6 offset-lg-1 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 offset-lg-1 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-6 offset-lg-1 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-world-outline" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon"><i class="ion-ios-clock-outline" style="color: #4680ff;"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <section id="why-us" class="wow fadeIn">
      <div class="container">
        
        <div class="col-md-12 wow fadeInUp" id="section-head">
            <h3>Why Choose Us?</h3>
            <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
        </div>

        <div class="row row-eq-height justify-content-center">

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-diamond"></i>
              <div class="card-body">
                <h5 class="card-title">Corporis dolorem</h5>
                <p class="card-text">Deleniti optio et nisi dolorem debitis. Aliquam nobis est temporibus sunt ab inventore officiis aut voluptatibus.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-language"></i>
              <div class="card-body">
                <h5 class="card-title">Voluptates dolores</h5>
                <p class="card-text">Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur.</p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="card wow bounceInUp">
                <i class="fa fa-object-group"></i>
              <div class="card-body">
                <h5 class="card-title">Eum ut aspernatur</h5>
                <p class="card-text">Autem quod nesciunt eos ea aut amet laboriosam ab. Eos quis porro in non nemo ex. </p>
                <a href="#" class="readmore">Read more </a>
              </div>
            </div>
          </div>

        </div>
        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span class="count">274</span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span class="count">421</span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span class="count">1,364</span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span class="count">18</span>
            <p>Hard Workers</p>
          </div>

        </div>

<script>
$('.count').counterUp({
delay: 20,
time: 1000
});
</script>

      </div>
    </section>


  <section id="team">
      <div class="container">

        <div class="col-md-12 wow fadeInUp" id="section-head">
            <h3>Our Team</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img width="100%" src="./Images/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img width="100%" src="./Images/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img width="100%" src="./Images/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img width="100%" src="./Images/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>


<section id="clients" class="section-bg">

<div class="container">

  <div class="col-md-12 wow fadeInUp" id="section-head">
      <h3>Our Clients</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
  </div>

  <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-1.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-2.png" class="img-fluid" alt="">
      </div>
    </div>
  
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-3.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-4.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-5.png" class="img-fluid" alt="">
      </div>
    </div>
  
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-6.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-7.png" class="img-fluid" alt="">
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4 col-xs-6" style="padding: 0px;">
      <div class="client-logo">
        <img width="100%" src="./Images/clients/client-8.png" class="img-fluid" alt="">
      </div>
    </div>

  </div>

</div>
</section>

<?php include('footer.php'); ?>

</body>
</html>