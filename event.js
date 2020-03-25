var app=angular.module("myModule",["ui.bootstrap","dialogs"]);
app.controller("eventController",function($scope,$dialogs){
    //$scope.myname = "Mayank Soni"
    // Events Starts
    $scope.event1 = [{
        eName: 'Hack 4 Safety',
        eDesc: 'Hack 4 Safety is a one-day Hackathon where the focus is on prevention of domestic violence, specifically a phone app for early detection of domestic violence for teens.',
        ePrize: '1,000',
        eParticipants: '101',
        eDate: 'May 12 - May 13, 2020'
    }]
    $scope.event2 = [{
        eName: 'San Diego ZooHackathon',
        eDesc: 'Coding to End Wildlife Trafficking. It is a two day hackathon, organised to decrease the wildlife trafficking using todays technology.',
        ePrize: '6,000',
        eParticipants: '80',
        eDate: 'May 14 - May 15, 2020'
    }]
    $scope.event3 = [{
        eName: 'Capitol Royale Hackathon',
        eDesc: 'Join the legends of the last 75-years, and take your place in music history at our next Hackathon at Capitol Records.',
        ePrize: '21,500',
        eParticipants: '53',
        eDate: 'Jun 15 - Jun 17, 2020'
    }]
    $scope.event4 = [{
        eName: 'Abbey Road Hack-Power',
        eDesc: 'Spend 24 hours in the legendary recording studio playing with Facebook Spark, Unity and Spatial audio to generate multidimensional musical experiences.',
        ePrize: '11,000',
        eParticipants: '27',
        eDate: 'Jun 21 - Jun 22, 2020'
    }]
    $scope.event5 = [{
        eName: 'Kyber Virtual Hackathon',
        eDesc: 'Build the future of #DeFi with Kyber Network! It is a 24 hours online hackathon, you can participate from home and earn alot from it by showing your skills.',
        ePrize: '42,500',
        eParticipants: '300',
        eDate: 'Jul 30, 2020'
    }]
    $scope.event6 = [{
        eName: 'Red Hat Hackathon',
        eDesc: 'ReBoot Customer Experience with Open Source platformand show some creativity and technical skills to the world and get perks from the Red Hat Enterprises.',
        ePrize: '30,000',
        eParticipants: '285',
        eDate: 'Aug 5, 2020'
    }]
    $scope.event7 = [{
        eName: 'Building PermaWeb',
        eDesc: 'Sick of 404s? Help revolutionize the web by developing decentralized applications and get rid of such errors forever.',
        ePrize: '5,000',
        eParticipants: '93',
        eDate: 'Aug 25, 2020'
    }]
    $scope.event8 = [{
        eName: 'Alexa Skills Challenge',
        eDesc: 'Invent the future of premium voice content by developing the Alexa skills. It is an online Hackathon so you must get enrolled and check your position among all.',
        ePrize: '126,000',
        eParticipants: '1137',
        eDate: 'Sep 30, 2020'
    }]
    // Events Ends

    // Modal Details Starts

    // Modal Details Ends

    // Modal Starts
    $scope.launch = function(which){
            var dlg = null;
            switch(which){
                
              // Events Dialog
                case 'hack4safety':
                dlg = $dialogs.error(
                    // `<?php include('singleevent.php'); ?>`
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/tech" alt="event-image"/><h2 style="color: #133E54;">Hack 4 Safety</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>May 12 - May 13, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$1,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;
            
                case 'sandiego':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/arch" alt="event-image"/><h2 style="color: #133E54;">San Diego Hackathon</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>May 14 - May 15, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$6,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;

                case 'capitol':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/nature" alt="event-image"/><h2 style="color: #133E54;">Capitol Royale Hackathon</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Jun 15 - Jun 17, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$21,500 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;

                case 'abbey':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/people" alt="event-image"/><h2 style="color: #133E54;">Abbey Road Hack-Power</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Jun 21 - Jun 22, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$11,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;

                case 'kyber':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/animals" alt="event-image"/><h2 style="color: #133E54;">Kyber Virtual Hackathon</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Jul 30, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$42,500 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;

                case 'redhat':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/tech" alt="event-image"/><h2 style="color: #133E54;">Red Hat Hackathon</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Aug 5, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$30,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;
                    
                case 'premaweb':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/arch" alt="event-image"/><h2 style="color: #133E54;">Building Premaweb</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Aug 25, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$5,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;

                case 'alexa':
                dlg = $dialogs.error(
                    `<div class="modal-container"><div class="row"><div class="col-md-8" id="modal-left"> <img src="https://placeimg.com/750/300/people" alt="event-image"/><h2 style="color: #133E54;">Alexa Skills Challenge</h2><p style="letter-spacing: 1px;"> The Future of Animals Depends on Us. Do you have programming or design skills? Would you like to make the world safer for endangered species, and win over $1000 value in local prizes and possible support from the US State Department to implement your idea? Join us for the fourth annual Zoohackathon— sponsored by the U.S. State Department— to create solutions to international wildlife trafficking. You'll form teams to address illegal animal capture and trade. This year, in addition to our event, another 15 Zoohackathon events will take place across the globe, in all regions of the world.</p><h3 style="color: #133E54;">Themes</h3> <button type="button" class="btn btn-success" style="padding: 5px 15px; font-size: 18px;">Machine Learning/AI</button> <button type="button" class="btn btn-info" style="padding: 5px 15px; font-size: 18px;">Communication</button> <button type="button" class="btn btn-danger" style="padding: 5px 15px; font-size: 18px;">Social Good</button></div><div class="col-md-4" id="modal-right"><div id="modal-right-one"> <a href="eventregistration.php"><button type="button" class="btn btn-success" style="padding: 15px 25px; font-size: 18px; width: 100%;">Register for this Hackathon</button></a> <br><br><p style="letter-spacing: 1px;">Register to receive hackathon updates, find teammates, and submit your entry.</p><hr><h4 style="color: #133E54;">Submissions open soon</h4><p>Sep 30, 2020</p><hr><p style="color: #575553;">Lovely Professional University</p><p style="color: #55AEBE;">144411-Jalandhar, Punjab, India</p><hr><p><b>Questions? Email us at</b> <span style="color: #55AEBE; text-decoration: underline; cursor: pointer;"> clubwissenedu@gmail.com</span></p></div><div id="modal-right-two"><h4 style="color: #133E54;">$126,000 in prizes</h4><hr><p><b>First place prize</b></p><p>We will be awarding winners with behind-the-scenes safari park tours with retail value over $1000.</p></div></div></div></div>`
                    );
                    break;
            }; // end switch
          }; // end launch
    // Modal Ends
})

// var app=angular.module('modalTest',['ui.bootstrap','dialogs']);
//   app.controller('dialogServiceTest',function($scope,$dialogs){
  
//   $scope.launch = function(which){
//     var dlg = null;
//     switch(which){
        
//       // Events Dialog
//       case 'hack4safety':
//       dlg = $dialogs.error(
//         `<?php include('singleevent.php'); ?>`
//         );
//         break;
       
//     }; // end switch
//   }; // end launch
// }) // end dialogsServiceTest