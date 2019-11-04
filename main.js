var ldt=1;
$(document).ready(function() {
  $('#btnSend').click( function() {
    $(this).attr("disabled", "disabled");
    sendChatText();
    $('#chatInput').val("");
    $(this).removeAttr("disabled");
  });
  startChat();
});

function startChat(){
  setInterval( function() { getChatText(); }, 2000);
}

function getChatText() {
  $.ajax({
    type: "GET",
    url: "connect.php?ldt="+ldt,
    dataType:"json",
  success:  function( data )
  {
    var jsonData = data;
    var jsonLength = jsonData.length-1;
    var html = "";
    for (var i = 0; i < jsonLength; i++) {
      var result = jsonData[i];
      var who="";
      var what="";
      if(result.bot==1)
      {
          who="chat friend";
          what="user-photo";
      }
      else
      {
          who="chat self";
          what="user-photo1";
      }
      //<div class="chat friend"><div class="user-photo"></div><p class="chat-message">Hello</p></div>;
     html+="<div class=\""+who+"\"><div class=\""+what+"\"></div><p class=\"chat-message\">"+result.chat+"</p></div>";
    }
    $('.chatlogs').append(html);
    if(jsonLength>1)
    {  
      $('.chatlogs').animate({scrollTop: $('.chatlogs').prop("scrollHeight")}, 500);
    }
    ldt=parseInt(jsonData[jsonLength],10);
  }
});
}

function sendChatText(){
  var chatInput = $('#chatInput').val();
  if(chatInput != ""){
    $.ajax({
      type: "GET",
      url: "submit.php?chat=" + encodeURIComponent( chatInput )
    });
  }
  getChatText();
}