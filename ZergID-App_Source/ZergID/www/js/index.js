// login page script

// db declaretion

var db;

// current userid declaretion

var currendUserId;

// clear the text in login page

function onpause()
{
$("#Username").val("");
$("#Password").val("");
$("#Message").val("");
}

// device initialition
document.addEventListener("deviceready", onDeviceReady, false);
function init() {
document.addEventListener("pause", onpause, false);
//delete init;
}

// scroll bar value declaretion

var storePosition = {
topCoordinate : null
}

//function will be called when an error occurred

function errorCB(err) {
// alert("Error processing SQL: "+err.code);
}

// css class attribute value change

function applyDynamicStyle(css) {
var styleTag = document.createElement('style');
var dynamicStyleCss = document.createTextNode(css);
styleTag.appendChild(dynamicStyleCss);
var header = document.getElementsByTagName('head')[0];
header.appendChild(styleTag);
};

// ondeviceready function and create db

function onDeviceReady() {
//StatusBar.overlaysWebView(false);
setTimeout(function(){
           navigator.splashscreen.hide();}, 1000);
//if(window.localStorage.getItem("remember") == null)
  //  {
db = window.openDatabase("zergId","0.1","ZergID DB", 5000000);
db.transaction(createDB, errorDB, txSuccess);
    //}

}

// db create funcation

function createDB(tx) {
//tx.executeSql("DROP TABLE IF EXISTS zergId");
tx.executeSql("CREATE TABLE IF NOT EXISTS zergId(message_id INTEGER, user_id INTEGER, sender_id INTEGER, sender_name, receiver_id INTEGER, receiver_name, event_id INTEGER, subject, character_id , character_name, game_id , game_name, parent_message_id INTEGER , is_message_viewed ,is_message_parent, is_garbage_message, is_message_deleted, message, created_date)");
}

function errorDB(error) {
/*console.log(error);
console.log("Database error: " + error.code); */
}

function txSuccess() {
/* console.log("Success");*/
}


function checkPreAuth() {
/* console.log("checkPreAuth");*/
if(window.localStorage.getItem("remember") == "true")
{
if(window.localStorage.getItem("username") != undefined && window.localStorage.getItem("password") != undefined) {
    
 /*   var form = $("#loginForm");
    $("#Username", form).val(window.localStorage.getItem("username"));
    $("#Password", form).val(window.localStorage.getItem("password"));
    $("#remember_me", form).attr('checked', true).checkboxradio("refresh");
    handleLogin(); */
    var userid = window.localStorage.getItem("userId");
    if(userid != undefined)
    {
        $.ajax("http://dev.zergid.com/RestAPI/get_all_messages?UserId="+ userid).done(function(data)
         {
           var i, response;
           $.each(data.messages, function (i, response)
            {
             inboxMessageItmerStop();
             insertMessages(response, i);
             inboxMessageItmerStart();
            });
          });
    }
    $.mobile.changePage("Inbox.html");
}
}
else
    {
        $("#Username").val("");
        $("#Password").val("");
    }
}


// android back button function
$(document).on('pagebeforeshow', '#loginPage', function(){
               $('#remember').removeClass('ui-btn'); checkPreAuth();});

$(document).on('pagebeforeshow', '#messageList, #loginPage, #reposDetail, #replyMessage', function(){
           document.addEventListener("backbutton", function(e){
                                      if(($('.ui-page-active').attr('id'))== "messageList")
                                     {
                                     navigator.app.exitApp();
                                     //e.preventDefault();showConfirm();
                                     }
                                     else if(($('.ui-page-active').attr('id'))== "loginPage")
                                     {
                                     navigator.app.exitApp();
                                     }
                                     else
                                     {
                                     e.preventDefault();
                                     history.back();
                                     }
                                     }, false);
           });

function handleLogin()
{
var form = $("#loginForm");
$("#submitButton",form).attr("disabled","disabled");
var u = $("#Username", form).val();
var p = $("#Password", form).val();
if(u != '' && p!= '')
{
    NProgress.start();
    $.ajax({
           url: 'http://dev.zergid.com/RestAPI/login_api',
           type: 'post',
           dataType: 'json',
           data: $('form#loginForm').serialize(),
           crossDomain: 'true',
           success: function(data)
           {
           if(data)
           {
           //window.localStorage.setItem("key", "value");
           // var keyname = window.localStorage.key(i);
           if($("#remember_me").is(':checked'))
           {
           window.localStorage.setItem("remember", "true");
           }
           window.localStorage.setItem("userId", data.id);
           window.localStorage.setItem("username", u);
           window.localStorage.setItem("password", p);
           var i, res;
           $.each(data.messages, function (i, res)
                  {
                  insertMessages(res, i);
                  });
           $.mobile.changePage("Inbox.html");
           }
           else
           {
           navigator.notification.alert("Your login failed", function() {});
           NProgress.done();
           }
           
           $("#submitButton").removeAttr("disabled");
           NProgress.done();
           },error: function (xhr, ajaxOptions, thrownError) {
           NProgress.done();
           $("#submitButton").removeAttr("disabled");
           navigator.notification.alert("Your login failed",null);
           }
           
           });
}
else
{
    navigator.notification.alert("You must enter a username and password", function() {},"");
    $("#submitButton").removeAttr("disabled");
    NProgress.done();
}
return false;
NProgress.done();
}
// login form post ajax funcation

$(document).on('pageinit', '#loginPage', function(){
           //getTimezoneName();
            $('#submitButton').click(function(e){
                                     e.preventDefault();
                                     var u = $("#Username").val();
                                     var p = $("#Password").val();
        if(u =="")
        {
          navigator.notification.alert('Please Enter the Username',null,"");
         return false;
        }
        else if(p == "")
       {
        navigator.notification.alert('Please enter the Password',null,"");
         return false;
        }
        else if(p.length < 8)
        {
        navigator.notification.alert('Password must be minimum 8',null,"");
         return false;
        }
        else
        {

                       // $(document).on('click', '#submitButton', function() {
                                     handleLogin();
                      }
               });
                               //      });
           });

currentUserId = window.localStorage.getItem("userId");

// insert message in database function

function insertMessages(messageResponse, i) {

db = window.openDatabase("zergId","0.1","ZergID DB", 5000000);
/*  console.log("Service Length : " + messageResponse.message + " i : " + i); */

var selectQuery = "SELECT message_id,is_message_viewed, is_message_parent FROM zergId WHERE message_id= " + messageResponse.message_id ;

db.transaction(function selectQueryDB(tx){tx.executeSql(selectQuery,[],function txSuccessResult(tx,results) {
     /*console.log("Save success"); */
                                                        
try{
                                                       
    var updateQuery;
    var messageid = results.rows.item(0)['message_id'];
                                                     
    if(messageid == messageResponse.message_id)
    {
    tx.executeSql("update zergId set is_message_viewed=?, is_message_parent=? where message_id=?",[messageResponse.is_message_viewed,messageResponse.is_message_parent,messageid], errorDB)                                                                  ;
    }
    }catch(error)
    {
    currentUserId = window.localStorage.getItem("userId");
                                                      
    var insertQuery = "INSERT INTO zergId(message_id, user_id, sender_id, sender_name, receiver_id, receiver_name, event_id, subject, character_id, character_name, game_id, game_name, parent_message_id, is_message_viewed, is_message_parent, is_garbage_message, is_message_deleted, message, created_date) VALUES (" + messageResponse.message_id + "," + currentUserId + "," + messageResponse.user_id + ", '"+ messageResponse.username +"'," + messageResponse.receiver_id + ", '" + messageResponse.username + "', " + messageResponse.event_id + ", '" + messageResponse.subject + "', '" + messageResponse.character_detail_id + "', '" + messageResponse.character_name + "', '" + messageResponse.game_id + "', '" + messageResponse.game_name + "', " + messageResponse.parent_message_id + ", '" + messageResponse.is_message_viewed + "', '" + messageResponse.is_message_parent + "', '" + messageResponse.is_garbage_message + "', '" + messageResponse.is_message_deleted + "','" + messageResponse.message + "', '" + messageResponse.created_date + "')";
                                                        
        tx.executeSql(insertQuery);
     }
    },errorCB);  }, errorDB);
}



function txSuccessFave(tx,results) {
/* console.log("Save success"); */
}

// select the db value for display the all message

function queryDB(tx){
var userid = window.localStorage.getItem("userId");
tx.executeSql('SELECT * FROM zergId where user_id='+ userid +' ORDER BY message_id DESC',[],querySuccess,errorCB);
}

// selected value result function.

function querySuccess(tx,results){
var i, response, d, curr_date, curr_month, curr_year, yester_date, today_date;

d = new Date();
curr_date = d.getDate();
curr_month = d.getMonth()+1;
curr_year = d.getFullYear();

yester_date =((curr_date -1)  + "/" + curr_month + "/" + curr_year);
today_date = (curr_date + "/" + curr_month + "/" + curr_year);

$("#allRepos").empty();

var unread_msg_listItems = [];
var readed_msg_listItems = [];

$.each(results.rows,function(index)
       {
        var row = results.rows.item(index);
        var displayDate, repo_emty, characterName, newdate, zergIDDate, monthArray, month, newDate, year, newMonth, validatemonth, message_date, message_view, replyImage, message, parentmessageId, message_Str, messageTrim, timeformated,garbage, is_garbage, addtxt, dateconvert, datetimespilt;
              
              message_view="";
              replyImage="";
              message="";
              parentmessageId="";
 var userid = window.localStorage.getItem("userId");
       garbage = [row['is_garbage_message']];
       if($.inArray(userid , garbage) > -1)
       {
       is_garbage = true;
       }
       else
       {
       is_garbage = false;
       }
       
if(row['event_id'] == "null" && row['subject'] != "Send Friend Request" && row['is_message_parent']==1 && row['is_message_deleted'] != userid && is_garbage == false && row['sender_id']!= userid )
{
              newdate = row['created_date'].replace(/-/g,"/");
              addtxt = AddText(newdate);
      
              dateconvert = TimeZoneConvert(addtxt);
      
              datetimespilt = dateconvert.split(' ');
              timeformated = datetimespilt[1] +" "+ datetimespilt[2];
      
              zergIDDate =  new Date(dateconvert);
       
              displayDate = displayDateFormat(zergIDDate);
              
              message_date = dateValidation(zergIDDate);
       
              if(today_date == message_date)
              {
              displayDate = ("Today" + " " + " at " + " " + timeformated)
              }
              else if(yester_date == message_date)
              {
              displayDate = ("Yesterday")
              }
              if(row['character_id'] != "null")
              {
              characterName = row['character_name'] +"-"+ row['game_name'];
              }
              else
              {
              characterName = "";
              }
              
             if(row['parent_message_id'] != null)
              {
              parentmessageId=row['parent_message_id'];
              replyImage="<img src='img/icon-reply-small.png' style='margin-top:50px; margin-left:5px;'>";
              }
              else
              {
              parentmessageId=row['message_id'];
              }
       
              message_Str = row['message'];
              
              len=message_Str.length;
       
              if(len > 40)
              {
              messageTrim = (message_Str.substr(0,40));
              messageTrim = messageTrim + "..." ;
              }
              else
              {
              messageTrim = message_Str;
              }
       
     if (row['is_message_viewed'] == 0 )
      {
          if(row['sender_id']!= userid)
            {
            message_view="<div id='unr_msg" + row['message_id'] + "' class='msg-unread'><img src='img/msg-unread.png' style='background-size:100%;'></div>";
            }
            else
            {
             message_view = "";
            }
       
     unread_msg_listItems.push("<li><a href='ViewMessage.html?MessageId=" + row['message_id'] + "&ParentMessageId=" + parentmessageId + "'><div id='div" + row['message_id'] + "' class='msg-div'><div class='msg-actions'>" + message_view + ""+ replyImage +"</div><span class='msg-date'>" + displayDate + "</span><br\><span class='msg-sender-name'>" + firstToUpperCase(row['sender_name']) + "</span><br\><span class='msg-game'>" + characterName + "</span><br\><span class='msg-game' style='color:#FFFFFF; padding-left:5px' id='msg_game" + row['message_id'] + "'>" + messageTrim + "</span></div></a></li>");
      }
      else
      {
      readed_msg_listItems.push("<li><a href='ViewMessage.html?MessageId=" + row['message_id'] + "&ParentMessageId=" + parentmessageId + "'><div id='div" + row['message_id'] + "' class='msg-div'><div class='msg-actions'>"+ replyImage +"</div><span class='msg-date'>" + displayDate + "</span><br\><span class='msg-sender-name' style='padding-left:5px;'>" + firstToUpperCase(row['sender_name']) + "</span><br\><span style='padding-left:5px;' class='msg-game'>" + characterName + "</span><br\><span class='msg-game' style='color:#BEBEBE; padding-left:5px;' id='msg_game" + row['message_id'] + "'>" + messageTrim + "</span></div></a></li>");
       }
    }
 });

if(unread_msg_listItems.length !=0 || readed_msg_listItems.length !=0)
{
$("#allRepos").append(unread_msg_listItems.join(' '));
$("#allRepos").append(readed_msg_listItems.join(' '));
}
if(unread_msg_listItems.length ==0 && readed_msg_listItems.length ==0)
{
    $("#allRepos").append("<div style='height:60%;width:100%; text-align:center; margin-top:50%; color:#fff'>No Messages Available</div>");
}

$('#allRepos').listview('refresh');

}

// view message page get all parameter value and call function

$('#reposDetail').live('pageshow', function(event) {
                   
                   var messageId = getUrlVars().MessageId;
                   var parentMessageId = getUrlVars().ParentMessageId;
                   
                   inboxMessageItmerStop();
                   itmerStop();
                   loadRepoDetail(messageId,parentMessageId);                                       //checkFave();
                   
             });

// inbox message page load time call the cron job function

$('#messageList').live('pageshow', function(event) {
                  //  applyDynamicStyle('.ui-btn { background-color: none; }');
                   var userid = window.localStorage.getItem("userId");
                   inboxMessageItmerStop();
                   itmerStop();
                   db.transaction(queryDB,errorCB);
                   if(storePosition.topCoordinate !== null) {
                   $.mobile.silentScroll(storePosition.topCoordinate);
                   }
                   inboxMessageItmerStart();
                   itmerStart();
                   //loadMessageList();
                   });
// reply message page load time call the function

$('#replyMessage').live('pageshow', function(event) {
                   
                    var messageId = getUrlVars().MessageId;
                    var parentMessageId = getUrlVars().ParentMessageId;
                    var receiverId=getUrlVars().ReceiverId;
                    var receivername=getUrlVars().ReceiverName;
                    var userid = window.localStorage.getItem("userId");
                    
                    
                    var selectQuery = "SELECT * FROM zergId WHERE message_id= "+ messageId;
                    
                    
                    db.transaction(function selectViewMessageQueryDB(tx){tx.executeSql(selectQuery,[],function txSuccessViewMessageResult(tx,result) {
                     /* console.log("Save success"); */
                                                                                       
                      $.each(result.rows,function(index){
                      var row = result.rows.item(index);
                            $('#MailReceiver').text(firstToUpperCase(row['receiver_name']));
                            document.getElementById("MessageId").value= row['message_id'];
                            document.getElementById("ParentMessageId").value= row['parent_message_id'];
                            document.getElementById("ReceiverId").value= row['sender_id'];
                            document.getElementById("SenderId").value= userid;
                                                                                              
                     });
                   });
               });
                                                                                       
             });

// reply message form post ajax function

$(document).on('pageinit', '#replyMessage', function(){
          
           $(document).on('click', '#cancel', function() {
                           $.mobile.changePage("Inbox.html");
                          });
           $('#replySubmit').click(function(e){
                                    e.preventDefault();
          // $(document).on('click', '#replySubmit', function(e) {
                        //  e.preventDefault();
                          var form = $("#replyMessageForm");
                          $("#replySubmit",form).attr("disabled","disabled");
                          var message = document.getElementById("Message").value;
                          var validMessage = message.match(/^\s*$/g);
                          if(message != validMessage)
                          {
                          
                          $.ajax({
                                 url: 'http://dev.zergid.com/RestAPI/replymessage_api',
                                 type: 'post',
                                 dataType: 'json',
                                 data: $('form#replyMessageForm').serialize(),
                                 crossDomain: 'true',
                                 success: function(data) {
                                
                                 //navigator.notification.alert('Successfully sent',null);
                                 //alert("Success");
                                 var i, response;
                                 $.each(data.replymessage, function (i, response)
                                        {
                                        insertMessages(response, i);
                                        });
                                 $("#replySubmit" ,form).removeAttr("disabled");
                                 $.mobile.changePage("Inbox.html");
                                 
                                
                                 },
                                 error: function (xhr, ajaxOptions, thrownError) {
                                // alert(xhr.responseText);
                                 //navigator.notification.alert("Successfully Sent",null);
                                 $("#replySubmit", form).removeAttr("disabled");
                                 $.mobile.changePage("Inbox.html");

                                 // <- same here, your own div, p, span, whatever you wish to use
                                 }
                                 });
                          }
                          else
                          {
                          $("#replySubmit" ,form).removeAttr("disabled");
                          navigator.notification.alert("Please enter a message",null);
                          
                          return false;
                          }
                          // catch the form's submit event
                           // cancel original event to prevent form submitting
                          });    
           });

//window.setInterval(loadMessageListCron, 50000);
var timerId // current timer if started

// start cron job function for get the value from web server to local db

function itmerStart()
{
if (timerId) return
    var busy = false;
    timerId = setInterval(loadMessageListCron, 20000);

function loadMessageListCron()
{
    
    if(!busy)
    {
      busy = true;
    var userid = window.localStorage.getItem("userId");
    if(userid != undefined)
    {
        $.ajax("http://dev.zergid.com/RestAPI/get_all_messages?UserId="+ userid).done(function(data)
        {
          var i, response;
          $.each(data.messages, function (i, response)
            {
              inboxMessageItmerStop();
              insertMessages(response, i);
              inboxMessageItmerStart();
             });
         });
    }
     busy = false;
    }
}
}


// stop cron job function for get the value from web server to local db

function itmerStop() {
clearInterval(timerId)
timerId = null
}

// start cron job for display message from local db to inbox
var timersId;

function inboxMessageItmerStart()
{
if (timersId) return
    
    timersId = setInterval(loadInboxMessageList, 5000);
var busy = false;

function loadInboxMessageList()
{
    if(!busy)
    {
        busy = true;
    //inboxMessageItmerStop();
    var userid = window.localStorage.getItem("userId");
    if(userid != undefined)
    {
        db.transaction(queryDB,errorCB);
        //inboxMessageItmerStart();
    }
        busy =  false;
    }
}  // (*)
}

// stop cron job for display message from local db to inbox

function inboxMessageItmerStop() {
clearInterval(timersId)
timersId = null
}

// select the view message from local db along with thread message

function loadRepoDetail(messageId,parentMessageId) {

if(messageId == parentMessageId)
{
    //parentMessageId ="";
}
else
{
    messageId = parentMessageId;
}

var selectQuery = "SELECT * FROM zergId WHERE message_id= "+ messageId +" OR parent_message_id="+ parentMessageId +" ORDER BY message_id";


db.transaction(function selectViewMessageQueryDB(tx){tx.executeSql(selectQuery,[],function txSuccessViewMessageResult(tx,result) {
                                                       /* console.log("Save success"); */
       var receiverId, d, displayDate, curr_date, curr_month, curr_year, yester_date, today_date, newdate, splitTime, zergIDDate, monthArray, month, newDate, year, newMonth, validatemonth, message_date, ReplyImg, characterName, receivername,firstDisplyDate, replymessageid, firstDisplycharacterName, senderName , replyiconuserid ;
                                                                   
   $.each(result.rows,function(index){
      var row = result.rows.item(index);
          
          displayDate ="";
     d = new Date();
     curr_date = d.getDate();
     curr_month = d.getMonth()+1;
     curr_year = d.getFullYear();
                                                               
   yester_date =((curr_date -1)  + "/" + curr_month + "/" + curr_year);
   today_date = (curr_date + "/" + curr_month + "/" + curr_year);
                                                               
                                                               
   newdate = row['created_date'].replace(/-/g,"/");
     
         var addtxt = AddText(newdate);
          
        var dateconvert = TimeZoneConvert(addtxt);
          
          var datetimespilt = dateconvert.split(' ');
          timeformated = datetimespilt[1] +" "+ datetimespilt[2];
          
          zergIDDate =  new Date(dateconvert);
          displayDate = displayDateFormat(zergIDDate);
          message_date = dateValidation(zergIDDate);
          
                                                               
    if(today_date == message_date)
    {
    displayDate = ("Today" + " " + " at " + " " + timeformated)
    }
    else if(yester_date == message_date)
    {
    displayDate = ("Yesterday")
    }
   
    var userid = window.localStorage.getItem("userId");
          
     if(userid == row['receiver_id'])
      {
          receiverId =row['sender_id'];
          replymessageid = row['message_id'];
          ReplyImg ="<img src='img/icon-reply-empty.png' >";
      }
      else
      {
          if(row['parent_message_id'] == null)
          {
          ReplyImg ="<img src='img/icon-reply-empty.png' >";
          }
          else
          {
          ReplyImg ="<img src='img/icon-reply-big.png' >";
          }
      }
    
          
    if(row['character_id'] != "null")
    {
    characterName= row['character_name'] +"-"+ row['game_name'];
    }
                                                               
    if(row['parent_message_id'] == null)
    {
          replyiconuserid = row['receiver_id'];
          receivername = firstToUpperCase(row['sender_name']);
          if(row['character_id'] != "null")
          {
           firstDisplycharacterName= row['character_name'] +"-"+ row['game_name'];
          }
          else
          {
          firstDisplycharacterName ="";
          }
     senderName = "";
    firstDisplyDate = displayDate ;
    displayDate ="";
    characterName = "";
    }
    else{
          senderName = firstToUpperCase(row['sender_name']);
      }
          
   var viewmessagethread ="<li><div class='view_message' id='"+ row['message_id'] +"'><div style='float:left; width:85%;color:#000;margin-left:40px;'><div style='width:40px;float:left;margin-left:-40px;'><div style='width:30px;'>"+ ReplyImg +"</div></div><div style='line-height:15px;'><span class='msg-sender-name' style='color:#000000;'>"+ senderName +"</span> <br\><br\><span id='save_game_id' class='msg-game'>"+ characterName +"</span> <span class='msg-view-date' style='margin-top:-20px;'>"+ displayDate +"</span></div><div style='color:#000; word-wrap:break-word;' class='msg-text'>"+ row['message'] +"</div></div></div><hr class='line-hr'></li>";
                                                               
   $("#viewmessage").append(viewmessagethread);
          
     if(row['is_message_viewed']==0)
      {
         // alert(row['is_message_viewed'] +"-"+ messageId +"-"+ userid);
           $.ajax("http://dev.zergid.com/RestAPI/readmessage_api?MessageId="+ messageId +"&UserId="+ userid +"").done(function(data) {});
         tx.executeSql("update zergId set is_message_viewed=1 where message_id="+row['message_id'],[], errorDB)                                                                      ;
      }
                                                               
 });
                                                                   
$('#viewmessage').listview('refresh');
$("#DivReply").empty();
$('#ReplyUser').html("<a class='ui-btn-left' style='padding:10px 10px; margin-left:5px;'>" + receivername + "</a><span class='msg-view-date' style='margin:5px 20px 0px 20px;'>"+ firstDisplyDate +"</span><br/><span id='save_game_id' class='msg-game' style='margin-left:10px;'>"+firstDisplycharacterName +"</span> <hr size='1' class='line-hr'>");
$("#DivReply").append("<a id='Reply' href='ReplyMessage.html?MessageId=" + replymessageid + "&ParentMessageId=" + replymessageid + "&ReceiverId="+ receiverId +"&ReceiverName="+ receivername +"' class='ui-btn-right' style='width:50%;' >Reply</a>");
 $('#DivReply').listview('refresh');
                                                                   
},errorCB);               }, errorDB);
   

}
// googleAds

function GoogleAd()
{
(adsbygoogle = window.adsbygoogle || []).push({});


$('#footer').append("<ins class='adsbygoogle' style='display:inline-block;width:100%;height:50px'                        data-ad-client='ca-pub-2801466784240223' data-ad-slot='2882744924'></ins>");
}

// logout function

$(document).on('pageinit', '#messageList, #reposDetail', function(){
           
           $('.btnlogout').click(function(event){
                                 event.preventDefault();
                                // $(".btnlogout").attr("disabled","disabled");
                                 showConfirm();
                                 })
           
});

// confirm the logout function

function showConfirm() {
navigator.notification.confirm(
                               'Do you really want to exit?', // message
                               exitFromApp, // callback to invoke with index of button pressed
                               'Exit', // title
                               'Cancel,OK' // buttonLabels
                               );

}

//  get parameter value from the url

function getUrlVars() {
var vars = [], hash;
var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
for(var i = 0; i < hashes.length; i++)
{
    hash = hashes[i].split('=');
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
}
return vars;
}

// change the lower case to upper case

function firstToUpperCase( str ) {
return str.substr(0, 1).toUpperCase() + str.substr(1);
}


// offline alert message

document.addEventListener("offline",noInternetConnection,false);

function noInternetConnection(){
navigator.notification.alert("No Internet Connection, Check your connection and try again",null,null,"Dismiss Alert");
}

// scroll event function

function load_on_scroll(messageid)
{
   var userid = window.localStorage.getItem("userId");

    $.ajax("http://dev.zergid.com/RestAPI/load_more_messages?UserId="+ userid +"&LastMsgId="+ messageid).done(function(data)
 {
 var i, response;
 $.each(data.messages, function (i, response)
 {
  itmerStop();      //alert(response.message_id);
  insertMessages(response, i);
  itmerStart();
 });
 });
}

$(document).on('pageinit', '#messageList', function(){
           var x = 0;
              $(window).scroll(function(){
                               var WindowHeight = $(window).height();
                               if($(window).scrollTop() +1 >= $(document).height() - WindowHeight){
                               //$("#loader").html("<img src='loading_icon.gif' alt='loading'/>");
                               var LastDiv = $(".msg-div:last");
                               var str = $(".msg-div:last").attr("id");
                               var LastId = str.split("div");
                               var messageid = LastId[1];
                               //load_on_scroll(messageid);
//alert(messageid)
                               if(x == 0)
                               {
                                //alert(ValueToPass);
                               load_on_scroll(messageid);
                               x = messageid;
                               }
                               else
                               {
                                  if(x == messageid)
                                  {
                                    return false;
                                  }
                                  else
                                  {
                                    load_on_scroll(messageid);
                                    x = messageid;
                                  }
                              }
                               return false;
                               }
                               return false;
                               });
              });

// logout session clear function
function exitFromApp(buttonIndex) {
if (buttonIndex==2){
    itmerStop();
    inboxMessageItmerStop();
    db.transaction(deleteQueryDB,errorCB);
    window.localStorage.removeItem("remember");
    window.localStorage.removeItem("username");
    window.localStorage.removeItem("userid");
    window.localStorage.removeItem("password");
    window.localStorage.clear();
   // $(".btnlogout").removeAttr("disabled");
    //window.location="index.html";
    $("#Username").val("");
    $("#Password").val("");
    $.mobile.changePage("index.html");
    navigator.app.exitApp();
}
}

// logout time delete the message
function deleteQueryDB(tx){
var userid = window.localStorage.getItem("userId");
tx.executeSql('DELETE FROM zergId where user_id="'+ userid +'" AND message_id NOT IN(SELECT TOP 25 message_id FROM zergId ORDER BY message_id DESC)',[],errorCB);
}


function Test()
{
// var x;
db.transaction(function(t){t.executeSql('SELECT COUNT(*) AS c FROM zergId',[],
                                        function(t,r)
                                        {
                                        alert(r.rows[0].c + "rows");
                                        });
               });
//return x;
}

function addslash(iid)
{
var str;
//str=iid.replace(/"/g,'\"');
str=iid.replace(/'/g,"\\'");
return str;
}

// selected message position set
$(document).on('pagebeforeshow', '#messageList', function(){
   
    $(document).on('click', '#allRepos li', function() {
     $("#allRepos li").attr("disabled","disabled");
storePosition.topCoordinate =  $(this).offset().top;
      $("#allRepos li").removeAttr("disabled");
//$.mobile.changePage('#second');
});
});
                
function AddText(date)
{
    var d = new Date(date);
                
    var repalcement = (d.getFullYear() + "-" +("0" + (d.getMonth() + 1)).slice(-2) + "-" + ("0" + d.getDate()).slice(-2)) +"T"+ ("0" + (d.getHours())).slice(-2) +":"+ ("0" + (d.getMinutes())).slice(-2) +":"+ ("0" + (d.getSeconds())).slice(-2);
                
    return repalcement;
                
}
                
function TimeZoneConvert(date)
{
    var tz = jstz.determine();
    var timezone = tz.name();
                //alert(timezone);
    //var datetime = Date.parse(date);
    var current_time =  moment.tz(date ,"America/Chicago").tz(timezone).format('YYYY/MM/DD h:mm A');
   return current_time;
}
                
function displayDateFormat(zergIDDate)
{
  var monthArray = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
  var month = zergIDDate.getMonth();
  var newDate = zergIDDate.getDate();
  var year = zergIDDate.getFullYear();
  var newMonth = monthArray[month];
                
   return displayDate = newMonth + " " + newDate + " , "+ year;
}
                
function dateValidation(zergIDDate)
{
  var monthArray = new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
  var newDate = zergIDDate.getDate();
  var validatemonth = zergIDDate.getMonth()+1;
  var year = zergIDDate.getFullYear();
  return message_date = (newDate + "/" + validatemonth + "/" + year);
                
}

var initialScreenSize = window.innerHeight;
 window.addEventListener("resize", function() {
     if(window.innerHeight < initialScreenSize){
        $(".footerDiv").hide();
         } else{
         $(".footerDiv").show(); } });
                
              