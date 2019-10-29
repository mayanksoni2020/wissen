<!DOCTYPE html>
<html lang="en">
<head>
<title>Events</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Project CSS File Link Starts -->
  <link rel="stylesheet" href="css2.css" type="text/css"/>
  <!-- Project CSS File Link Ends -->
  
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">


<!-- Project Javascript Starts -->
<script type="text/javascript">
var end = 0 // change this to stop the counter at a higher value
var refresh=1000; // Refresh rate in milli seconds

function display_c(start){
window.start = parseFloat(start);

if(window.start >= end ){
mytime=setTimeout('display_ct()',refresh)
}
else {alert("Time Over ");}
}

function display_ct() {
// Calculate the number of days left
var days=Math.floor(window.start / 86400);

// After deducting the days calculate the number of hours left
var hours = Math.floor((window.start - (days * 86400 ))/3600);

// After days and hours , how many minutes are left 
var minutes = Math.floor((window.start - (days * 86400 ) - (hours *3600 ))/60);

// Finally how many seconds left after removing days, hours and minutes. 
var secs = Math.floor((window.start - (days * 86400 ) - (hours *3600 ) - (minutes*60)));

var x = window.start  + "(" + days + " Days " + hours + " Hours "  + minutes + " Minutes and "  + secs + " Secondes " + ")";
// document.getElementById('ct').innerHTML = x;
document.getElementById('time1').innerHTML=days;
document.getElementById('time2').innerHTML=hours;
document.getElementById('time3').innerHTML=minutes;
document.getElementById('time4').innerHTML=secs;

window.start= window.start- 1;

tt=display_c(window.start);
}
</script>
<!-- Project Javascript Ends -->

</head>
<body onload=display_c(97601);>
    <!-- partial:index.partial.html -->
<html ng-app="modalTest">
  <head>
    <link rel="stylesheet" href="css2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
    <script src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js" type="text/javascript"></script>
    <script src="./dialogs.min.js" type="text/javascript"></script>
  </head>
  <body ng-controller="dialogServiceTest">

    <!-- <div class="row">
      <div class="col-md-12">
        <button class="btn btn-danger" ng-click="launch('error')">Error Dialog</button>
    
      </div>
    </div>     -->

    <!-- Header Starts-->
    <?php include('header.php'); ?>
    <!-- Header Ends -->

    <!-- Events Container Starts -->
    <header>
    <div class="container">
        <div class="header-content">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div style="margin-top: 150px;"></div>
                    <h3 style="color: white;">Presents</h3>
                    <h1 style="letter-spacing: 2px; text-decoration: underline;">HACK 4 SAFETY</h1>
                    <p style="opacity: 0.8;">
                    Hack 4 Safety is a one-day Hackathon where the focus is on prevention of domestic violence,
                     specifically a phone app for early detection of domestic violence for teens.
                    </p>
                    <p><b>Oct 30 - Oct 31, Lovely Professional University, Jalandhar, India</b></p>
                    <a href="#" class="theme-btn" ng-click="launch('hack4safety')">Know More</a>
                    <a href="https://docs.google.com/forms/d/1-GpoSKqBXqtg3Qxd97XrcGaAb29fcnkn6SE4JkweJ9c/edit" class="theme-btn">Register Now</a>
                    <div class="go-about"></div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div style="margin-top: 110px; margin-left: 100px;">
                    <img src="./Images/brain.svg" class="img-responsive" alt="image"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </header>
    <!-- Events Container Starts -->

    <!-- Counter Starts -->
    <div class="main_counter">
        <div class="counter" style="background-color: rgb(38, 157, 248);">
            <p id="time1"></p>
            <p>Days</p>
        </div>
        <div class="counter" style="background-color: rgb(255, 157, 0);">
            <p id="time2"></p>
            <p>Hours</p>
        </div>
        <div class="counter" style="background-color: rgb(243, 53, 69);">
            <p id="time3"></p>
            <p>Minutes</p>
        </div>
        <div class="counter" style="background-color: #314DC9;">
            <p id="time4"></p>
            <p>Seconds</p>
        </div>
    </div>
    <!-- Counter Ends -->

    <!-- All Events Starts -->
    <div class="events-container">
        <div class="row">
            <div class="event-header">
                <h1>Featured In-Person Hackathons</h1>
            </div>
            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/tech" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Hack 4 Safety</h2>
                    </div>
                    <div class="event-desc">
                        <p>Hack 4 Safety is a one-day Hackathon where the focus is on prevention of domestic violence,
                        specifically a phone app for early detection of domestic violence for teens.
                        
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 25.5%;"><span><i class="fa fa-trophy"></i></span> $1,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 101 participants</p>
                        <p style="margin-right: 15%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Oct 30 - Oct 31, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>San Diego ZooHackathon</h2>
                    </div>
                    <div class="event-desc">
                        <p>Coding to End Wildlife Trafficking. It is a two day hackathon, organised to decrease the wildlife trafficking using today's technology.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 25.5%;"><span><i class="fa fa-trophy"></i></span> $6,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 80 participants</p>
                        <p style="margin-right: 15%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Nov 8 - Nov 10, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Capitol Royale Hackathon</h2>
                    </div>
                    <div class="event-desc">
                        <p>Join the legends of the last 75-years, and take your place in music history at our next Hackathon at Capitol Records.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 22.5%;"><span><i class="fa fa-trophy"></i></span> $21,500 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 53 participants</p>
                        <p style="margin-right: 12%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Nov 15 - Nov 17, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Abbey Road Hack-Power</h2>
                    </div>
                    <div class="event-desc">
                        <p>Spend 24 hours in the legendary recording studio playing with Facebook Spark, Unity and Spatial audio to generate multidimensional musical experiences.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 22.5%;"><span><i class="fa fa-trophy"></i></span> $11,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 27 participants</p>
                        <p style="margin-right: 12%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Dec 21 - Dec 22, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

        </div>
<br><br>
        <div class="row">
            <div class="event-header">
                <h1>Featured Online Hackathons</h1>
            </div>
            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/tech" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Kyber Virtual Hackathon</h2>
                    </div>
                    <div class="event-desc">
                        <p>Build the future of #DeFi with Kyber Network! It is a 24 hours online hackathon, you can participate from home and earn alot from it by showing your skills. 
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 21.5%;"><span><i class="fa fa-trophy"></i></span> $42,500 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 300 participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Oct 30, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Red Hat Hackathon</h2>
                    </div>
                    <div class="event-desc">
                        <p>ReBoot Customer Experience with Open Source platformand show some creativity and technical skills to the world and get perks from the Red Hat Enterprises.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 20.5%;"><span><i class="fa fa-trophy"></i></span> $30,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 285 participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Nov 5, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Building PermaWeb</h2>
                    </div>
                    <div class="event-desc">
                        <p>Sick of 404s? Help revolutionize the web by developing decentralized applications and get rid of such errors forever.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 24.5%;"><span><i class="fa fa-trophy"></i></span> $5,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 93 participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Nov 25, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>Alexa Skills Challenge</h2>
                    </div>
                    <div class="event-desc">
                        <p>Invent the future of premium voice content by developing the Alexa skills. It is an online Hackathon so you must get enrolled and check your position among all.
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 20.5%;"><span><i class="fa fa-trophy"></i></span> $126,000 in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> 1137 participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> Nov 30, 2019</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>
<!-- <script>
    $(document).ready(function(){
        $("#events-main").hover(function(){
            $("#events-main").animate({bottom: '20px'});
        }, function(){
            $("#events-main").animate({top: '0px'});
        });
    });
</script> -->
        </div>

    </div>
    <!-- All Events Ends -->

    

    <!-- Our Sponsors Starts -->
    <div class="sponsors-container">
        <div class="col-md-12 col-sm-12">
            <div class="sponsors-image">
                <img src="https://devpost-challengepost.netdna-ssl.com/assets/home/homepage/homepage_partner_logos-8336b7efa2625741b68a4696e5f1f933.png" alt="sponsors image" style="width: 100%;"/>
            </div>
        </div>
    </div>
    <!-- Our Sponsors Ends -->

    <!-- Footer Starts -->
      <?php include('footer.php'); ?>
    <!-- Footer Ends -->
    
  </body>
</html>
<!-- partial -->
  <script>
  var app=angular.module('modalTest',['ui.bootstrap','dialogs']);
  app.controller('dialogServiceTest',function($scope,$dialogs){
  
  $scope.launch = function(which){
    var dlg = null;
    switch(which){
        
      // Events Dialog
      case 'hack4safety':
      dlg = $dialogs.error(
        `<?php include('singleevent.php'); ?>`
        );
        break;
       
    }; // end switch
  }; // end launch
}) // end dialogsServiceTest
  </script>
</body>
</html>