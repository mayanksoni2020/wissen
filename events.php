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
                    <a href="#" class="theme-btn">Know More</a>
                    <a href="#" class="theme-btn">Register Now</a>
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
                <h1>Upcoming Events</h1>
            </div>
            <div class="col-md-5 col-sm-5" id="events-main">
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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

        </div>
<br><br>
        <div class="row">
            <div class="event-header">
                <h1>Past Events</h1>
            </div>
            <div class="col-md-5 col-sm-5" id="events-main">
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/arch" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/people" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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

            <div class="col-md-5 col-sm-5" id="events-main">
                <div class="col-md-3 col-sm-3">
                    <img src="https://placeimg.com/100/200/nature" alt="image" style="width: 100%; height: 200px; margin-top: 10%;"/>
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