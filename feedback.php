<!-- Feedback Starts -->
    <div class="feedback-main">
        <div class="col-md-12 col-sm-12">
            <div class="col-md-6 col-sm-6">
                <div class="col-md-12 col-sm-12" id="feedback-left">
                    <div class="feedback-desc">
                        <h1>Help us<br>improve<br>with your<br>suggestions</h1>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" style="padding: 15px 25px; font-size: 18px;">Give Your Feedback</button>

<!-- Modal Started -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #359DF7; color: white; text-align: center;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 class="modal-title">Feedback helps us to improve</h3>
        </div>
        <div class="modal-body" style="padding: none;">

        <form action="index.php" method="post" id="feed-form">
          <p>First Name</p>
          <input type="text" placeholder="Enter First Name" name="firstname" required="required"/><br><br>
          <p>Last Name</p>
          <input type="text" placeholder="Enter Last Name" name="lastname" required="required"/><br><br>
          <p>Email Address</p>
          <input type="email" placeholder="Enter Email" name="email" required="required"/><br><br>
          <p>Feedback</p>
          <textarea type="text" placeholder="Your Words" name="feedback" required="required" style="color: black;"></textarea><br><br>
          <!-- <button type="button" class="btn btn-warning" name="submit" style="font-size: 1.6rem; letter-spacing: 1px; color: black; width: 100%;"><b>Submit</b></button> -->
          <input id="btn" type="submit" name="submit" value="SUBMIT" style="font-size: 1.6rem; letter-spacing: 1px; background-color: #FFAE42; font-weight: bold;"/>
        </form>

<!-- Form Connection Starts -->
<?php
if(isset($_POST['submit'])){
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

$cn = mysqli_connect('localhost', 'root', '', 'wissen');

$query = "INSERT INTO `Feedback`(`FirstName`, `LastName`, `Email`, `Feedbacks`) VALUES ('$fname', '$lname', '$email', '$feedback')";

$run = mysqli_query($cn, $query);

}
?>
<script>
        btn.addEventListener("click",alertMessage)
        if($fname && $lname && $email && $feedback){
        function alertMessage(){
            alert("Thanks for your Feedback!")
        }
        }
        function remove(){
            btn.removeEventListener("click",alertMessage)
        }
</script>
<!-- Form Connection Ends -->

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #337AB7; color: white;">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<!-- Modal Ended -->

                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6" id="feedback-right">
                <div class="col-md-12 col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
              
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="./Images/background-cover.jpg" alt="Chania">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>LA is always so much fun!</p>
                    </div>
                  </div>
              
                  <div class="item">
                    <img src="./Images/background-cover1.jpg" alt="Chicago">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>
                  </div>
              
                  <div class="item">
                    <img src="./Images/background-cover3.jpg" alt="New York">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>
                  </div>
                </div>
              
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
                </div>
            </div>
        </div>
    </div>
<!-- Feedback Ends -->