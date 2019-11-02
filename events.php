<!DOCTYPE html>
<html ng-app="myModule" lang="en">
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
<!-- <script type="text/javascript">
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
</script> -->

<script type="text/javascript">
var startDateTime = new Date(2019,10,12,9,1,0,0); // YYYY (M-1) D H m s (start time and date from DB)
var startStamp = startDateTime.getTime();

var newDate = new Date();
var newStamp = newDate.getTime();

var timer;

function updateClock() {
    newDate = new Date();
    newStamp = newDate.getTime();
    var diff = Math.round((startStamp-newStamp)/1000);
    
    var d = Math.floor(diff/(24*60*60));
    diff = diff-(d*24*60*60);
    var h = Math.floor(diff/(60*60));
    diff = diff-(h*60*60);
    var m = Math.floor(diff/(60));
    diff = diff-(m*60);
    var s = diff;
    
    //document.getElementById("time-elapsed").innerHTML = d+" day(s), "+h+" hour(s), "+m+" minute(s), "+s+" second(s) working";
document.getElementById('time1').innerHTML=d;
document.getElementById('time2').innerHTML=h;
document.getElementById('time3').innerHTML=m;
document.getElementById('time4').innerHTML=s;
}

setInterval(updateClock, 1000);
</script>

<!-- Project Javascript Ends -->

</head>
<!-- <body onload=display_c(97601);> -->
<body onload="updateClock()">
    <!-- partial:index.partial.html -->
<html>
  <head>
    <link rel="stylesheet" href="css2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.1.5/angular.min.js"></script>
    <script src="https://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js" type="text/javascript"></script>
    <script src="./dialogs.min.js" type="text/javascript"></script>
    <script src="event.js"></script>
  </head>
  <body>

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
    <div class="container" ng-controller="eventController">
        <div class="header-content">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div style="margin-top: 120px;"></div>
                    <h3 style="color: white;">Presents</h3>
                    <h1 style="letter-spacing: 2px; text-decoration: underline;">HACK 4 SAFETY</h1>
                    <p style="opacity: 0.8;">
                    Hack 4 Safety is a one-day Hackathon where the focus is on prevention of domestic violence,
                     specifically a phone app for early detection of domestic violence for teens.
                    </p>
                    <p><b>Nov 12 - Nov 13, Lovely Professional University, Jalandhar, India</b></p>
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
    <div class="events-container" ng-controller="eventController">
        <div class="row">
            <div class="event-header">
                <h1>Featured In-Person Hackathons</h1>
            </div>
            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e1 in event1" ng-click="launch('hack4safety')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/tech" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e1.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e1.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 25%;"><span><i class="fa fa-trophy"></i></span> ${{e1.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e1.eParticipants}} participants</p>
                        <p style="margin-right: 12.5%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e1.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e2 in event2" ng-click="launch('sandiego')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e2.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e2.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 25%;"><span><i class="fa fa-trophy"></i></span> ${{e2.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e2.eParticipants}} participants</p>
                        <p style="margin-right: 12.5%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e2.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e3 in event3" ng-click="launch('capitol')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e3.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e3.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 22.5%;"><span><i class="fa fa-trophy"></i></span> ${{e3.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e3.eParticipants}} participants</p>
                        <p style="margin-right: 12%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e3.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e4 in event4" ng-click="launch('abbey')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e4.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e4.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 22.5%;"><span><i class="fa fa-trophy"></i></span> ${{e4.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e4.eParticipants}} participants</p>
                        <p style="margin-right: 12%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e4.eDate}}</p>
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
            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e5 in event5" ng-click="launch('kyber')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/tech" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e5.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e5.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 21.5%;"><span><i class="fa fa-trophy"></i></span> ${{e5.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e5.eParticipants}} participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e5.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e6 in event6" ng-click="launch('redhat')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e6.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e6.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 20.5%;"><span><i class="fa fa-trophy"></i></span> ${{e6.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e6.eParticipants}} participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e6.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e7 in event7" ng-click="launch('premaweb')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e7.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e7.eDesc}}</p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 24.5%;"><span><i class="fa fa-trophy"></i></span> ${{e7.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e7.eParticipants}} participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e7.eDate}}</p>
                        <p><span><i class="glyphicon glyphicon-map-marker"></i></span> LPU NH-1, Jalandhar</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-sm-5" id="events-main" ng-repeat="e8 in event8" ng-click="launch('alexa')">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="event-title">
                        <h2>{{e8.eName}}</h2>
                    </div>
                    <div class="event-desc">
                        <p>{{e8.eDesc}}
                        </p>
                    </div>
                    <hr>
                    <div class="event-more">
                        <p style="margin-right: 20.5%;"><span><i class="fa fa-trophy"></i></span> ${{e8.ePrize}} in prizes</p>
                        <p><span><i class="glyphicon glyphicon-user"></i></span> {{e8.eParticipants}} participants</p>
                        <p style="margin-right: 28%;"><span><i class="glyphicon glyphicon-calendar"></i></span> {{e8.eDate}}</p>
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
  <!-- <script>
  var app=angular.module('modalTest',['ui.bootstrap','dialogs']);
  app.controller('dialogServiceTest',function($scope,$dialogs){
  
  $scope.launch = function(which){
    var dlg = null;
    switch(which){
        
      // Events Dialog
      case 'hack4safety':
      dlg = $dialogs.error(
        ``
        );
        break;
       
    }; // end switch
  }; // end launch
}) // end dialogsServiceTest
  </script> -->
</body>
</html>