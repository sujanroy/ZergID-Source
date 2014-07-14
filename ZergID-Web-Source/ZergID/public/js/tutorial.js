/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/** Tutorial Profile Image Block function **/

function profileImageBlock() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
    $("#next").removeClass().addClass('tut-button');
    $("#next").fadeIn(1000);
    $("#next").css({ 
        'margin-top':-187,
        'display':'inline'
    });
    $("#skip").removeClass().addClass('tut-button');
    $("#skip").fadeIn(1000);
    $("#skip").css({
        'margin-left':190, 
        'margin-top':-75
    });
    $("#image_instruction").removeClass().addClass('instruction');
    $("#image_instruction").fadeIn(1000);
    $("#image_block").removeClass().addClass('box');          
    $("#image_block").fadeIn(1000); 
    $("#image_block").css({'top': 30});
    $("#profile_instruction").hide();
    $("#profile_block").removeClass();
    $("#back").hide();
    $("#save").hide();
    $("#prof_skip").hide();
    tutorialheader()      
}

/** Tutorial Profile Info Block function **/

function profileInfoBlock(){
    $("#image_block").removeClass(); 
    $("#image_instruction").hide();
    $("#next").hide();
    $("#skip").hide();
    $("#back").removeClass().addClass('tut-button');
    $("#back").fadeIn(1000);
    $("#back").css({
        'margin-top':-75
    });
    $("#save").removeClass().addClass('tut-button');
    $("#save").fadeIn(1000);
    $("#save").css({
        'margin-top':-187, 
        'display':'inline', 
        'cursor':'pointer'
    });
    $("#prof_skip").removeClass().addClass('tut-button');
    $("#prof_skip").fadeIn(1000);
    $("#prof_skip").css({
        'margin-top':-184, 
        'display':'inline', 
        'cursor':'pointer',
        'left': -131
    });
    $("#profile_instruction").removeClass().addClass('instruction');
    $("#profile_instruction").fadeIn(1000);
    $("#profile_block").removeClass().addClass('box');          
    $("#profile_block").fadeIn(1000);
    $("#profile_block").css({
        'height':250
    });
    $("#social_instruction").hide();
    $("#social_block").removeClass();
    $("#character_next").hide();
    $('.img-error').css('display', 'none');
//    $('.alpha_login_popup').css({'top':'-30px','height':'215px','position':'absolute'});	
     $('.alpha_login_popup').css({'top':'50px','height':'215px','position':'absolute','margin-left':'-103px'});
     tutorialheader()
}

/** Tutorial Profile Socialnetwork Block function **/

function socialNetworkBlock(){     
    $("#profile_instruction").hide();
    $("#save").hide();
    $("#profile_block").removeClass();
    $("#character_next").removeClass().addClass('tut-button');
    $("#character_next").fadeIn(1000);
    $("#character_next").css({
        'display':'inline', 
        'margin-top':-187
    });
    $("#social_instruction").removeClass().addClass('instruction');
    $("#social_instruction").fadeIn(1000);
    $("#social_block").removeClass().addClass('box');          
    $("#social_block").fadeIn(1000); 
    $("#social_block").css({
        'height':120, 
        'margin-top':55,
        'padding-top':55
    });
    $("#skip").fadeIn(1000);
    $("#prof_skip").hide();
    $("#character_instruction").hide();
    $("#charcter_block").removeClass('character-block');
    $("#charcter_block").hide();
    $("#character").fadeIn(1000);
    tutorialheader()
}
  
/** Tutorial Profile Character Block function **/  
  
function characterBlock() {
    $("#social_block").removeClass(); 
    $("#social_instruction").hide();
    $("#charcter_block").removeClass().addClass('character-block');          
    $("#character_block").fadeIn(1000);
    $("#charcter_block").css({'display':'inline-block'});
    $('#char_full_list').css({'margin-left':'87px'});
    $("#character_instruction").removeClass().addClass('instruction character-title');
    $("#character_instruction").fadeIn(1000);
    $("#character_next").hide();
    $("#skip").hide();
    $("#character").hide();
    tutorialheader()
}

function charNameBlock() {
    var maskHeight = $(document).height()+150;
    $('.mask').css({
        'width':'100%',
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
    $("#char_skip").removeClass().addClass('tut-button');
    $("#char_skip").fadeIn(1000);
    $("#char_skip").css({
        'margin-left':190, 
        'margin-top':-75
    });
    $("#char_name_block").removeClass().addClass('box char-block');          
    $("#char_name_block").fadeIn(1000);
    $("#char_name_block").css({'height':135, 'margin-top':0, 'margin-bottom':-60});
    $("#skip").hide();
    $("#char_name_instruction_block").removeClass().addClass('instruction');  
    $("#char_name_instruction_block").fadeIn(1000);
    $("#char_name_instruction_block").css({'top':329});
    $("#char_next1").removeClass().addClass('tut-button');
    $("#char_next1").fadeIn(1000);
    $("#char_next1").css({
        'margin-left':510, 
        'margin-top':-95
    });
  
    $("#char_next").hide();
    $("#char_image_block").removeClass();
    $("#char_image_instruction").hide();
    $("#back").hide();
    $("#done").hide();
    $('.img-error').css('display', 'none');
     $('#character_name').val('');
    $('#level').val('');
    $('#game').val('');	
    tutorialheader()
}

function charImageBlock() {
    $("#char_name_block").removeClass();
    $("#char_name_instruction_block").hide();
    $("#char_image_instruction").removeClass().addClass('instruction');          
    $("#char_image_instruction").fadeIn(1000);
    $("#char_image_instruction").css({'margin-left':-20});
    $("#char_image_block").removeClass().addClass('box char-block');          
    $("#char_image_block").fadeIn(1000);
    $("#char_image_block").css({'padding-top':0, 'height':105});
    $("#char_next1").hide();
    $("#char_next").removeClass().addClass('tut-button');
    $("#char_next").fadeIn(1000);
    $("#char_next").css({
        'margin-left':830, 
        'margin-top':-75
    });
    $("#back").removeClass().addClass('tut-button');
    $("#back").fadeIn(1000);
    $("#back").css({
        'margin-top':-75
    });
    $("#char_info_block").removeClass();
    $("#char_info_instruction").hide();
    $("#char_info_save").hide();
    $("#char_skip").hide();
    $("#char_next").fadeIn(1000);
    tutorialheader()
}

function charInfoBlock() {
    $("#char_image_instruction").hide();
    $("#char_image_block").removeClass();
    $("#char_info_instruction").removeClass().addClass('instruction');          
    $("#char_info_instruction").fadeIn(1000);
    $("#char_info_instruction").css({'margin-left':-15});
    $("#char_info_block").removeClass().addClass('box char-block');          
    $("#char_info_block").fadeIn(1000);
    $("#char_info_block").css({'height':295});
    $("#char_save").hide();
    $("#char_next").hide();
    $("#char_info_save").removeClass().addClass('tut-button');
    $("#char_info_save").fadeIn(1000);
    $("#char_info_save").css({
        'margin-left':510, 
        'margin-top':-92
    });
    $("#profile_icon").removeClass();
    $("#profie_icon_instruction").hide();
    $('.img-error').css('display', 'none');
    tutorialheader()
}

function profileIconBlock() {
    $("#char_info_instruction").hide();
    $("#char_info_block").removeClass();
    $("#char_info_save").hide();
    $("#char_next").fadeIn(1000);
    $("#profile_icon").removeClass().addClass('icon-block icon-alt-block ');          
    $("#profile_icon").fadeIn(1000);
    $("#profie_icon_instruction").removeClass().addClass('instruction icon-instruction');          
    $("#profie_icon_instruction").fadeIn(1000);
    $("#calender_icon").removeClass();
    $("#calender_icon_instruction").hide();
    tutorialheader()
}

function calenderIconBlock() {
    $("#profile_icon").removeClass();
    $("#profie_icon_instruction").hide();
    $("#calender_icon").removeClass().addClass('icon-block');          
    $("#calender_icon").fadeIn(1000);
    $("#calender_icon_instruction").removeClass().addClass('instruction icon-instruction');          
    $("#calender_icon_instruction").fadeIn(1000);
    $("#message_icon").removeClass();
    $("#message_icon_instruction").hide();
    tutorialheader()
}

function messageIconBlock() {
    $("#calender_icon").removeClass();
    $("#calender_icon_instruction").hide();
    $("#message_icon").removeClass().addClass('icon-block icon-alt-block ');          
    $("#message_icon").fadeIn(1000);
    $("#message_icon_instruction").removeClass().addClass('instruction icon-instruction');          
    $("#message_icon_instruction").fadeIn(1000);
    $("#helmet_icon").removeClass();
    $("#helmet_icon_instruction").hide();
    tutorialheader()
}

function helmetIconBlock() {
    $("#message_icon").removeClass();
    $("#message_icon_instruction").hide();
    $("#helmet_icon").removeClass().addClass('icon-block icon-alt-block');          
    $("#helmet_icon").fadeIn(1000);
    $("#helmet_icon_instruction").removeClass().addClass('instruction icon-instruction');          
    $("#helmet_icon_instruction").fadeIn(1000);
    $("#sidebar_block").removeClass();
    $("#sidebar_instruction_block").hide();
    $("#done").hide();
    tutorialheader()
}

function sidebarBlock() {
    $("#helmet_icon").removeClass();
    $("#helmet_icon_instruction").hide();
    $("#char_next").hide();
    $("#char_back").hide();
    $("#done").removeClass().addClass('tut-button');
    $("#done").fadeIn(1000);
    $("#done").css({
        'margin-left':830, 
        'margin-top':-75
    });
    $("#sidebar_instruction_block").removeClass().addClass('instruction icon-instruction');          
    $("#sidebar_instruction_block").fadeIn(1000);
    $("#sidebar_instruction_block").css({'margin-top':180});
    $("#sidebar_block").removeClass().addClass('sidebar-block');          
    $("#sidebar_block").fadeIn(1000);
    tutorialheader()
    
}

/** Tutorial Profile Next, Skip Back button event function **/

$(document).ready(function() {
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
if(qstr == 'signup'){
    profileImageBlock();
}
    
    if(($('#char_name_instruction_block').css('display') == 'none') && (qstr == 'signup')){
     charNameBlock();
    }
                
    $("#next").click(function() {
        profileInfoBlock();
    });
    
     $("#char_skip").click(function() {
        $("#char_name_block").removeClass();
        $("#char_name_instruction_block").hide();
        $("#char_next1").hide();
        $("#char_next").removeClass().addClass('tut-button');
        $("#char_next").fadeIn(1000);
        $("#char_next").css({
        'margin-left':830, 
        'margin-top':-75
        });
        $('#char_skip').hide();
        $("#char_back").removeClass().addClass('tut-button');
        $("#char_back").fadeIn(1000);
        $("#char_back").css({
        'margin-top':-75
        });
       profileIconBlock();
       $('#character_name').val('');
       $('#level').val('');
       $('#game').val('');
       $('label.error').hide();
	$('.error_msg').hide();
    });
               
    $("#skip").click(function() {
        if(($('#profile_instruction').css('display') == 'none') && ($('#social_instruction').css('display') == 'none')){ 
            profileInfoBlock();
        }  
        else if($('#social_instruction').css('display') == 'none'){ 
            socialNetworkBlock();
        }
        else if($('#character_instruction').css('display') == 'none'){ 
            characterBlock();
        }        
    });
               
    $("#back").click(function() {
        if($('#profile_instruction').css('display') == 'block'){ 
            profileImageBlock();
        }  
        else if($('#social_instruction').css('display') == 'block'){ 
            profileInfoBlock();
        }
        else if($('#character_instruction').css('display') == 'block'){ 
            socialNetworkBlock();
        }
        else if($('#char_image_instruction').css('display') == 'block'){ 
            charNameBlock();
        }
        else if($('#char_info_instruction').css('display') == 'block'){ 
            charImageBlock();
        }
        else if($('#profie_icon_instruction').css('display') == 'block'){ 
            charInfoBlock();
            $("#char_info_save").removeAttr('alt').attr('alt', 'update');
        }
        else if($('#calender_icon_instruction').css('display') == 'block'){ 
            profileIconBlock();
        }
        else if($('#message_icon_instruction').css('display') == 'block'){ 
            calenderIconBlock();
        }
         else if($('#helmet_icon_instruction').css('display') == 'block'){ 
            messageIconBlock();
        }
        else if($('#sidebar_instruction_block').css('display') == 'block'){ 
            helmetIconBlock();
        }
    });
    
    $("#char_back").click(function() {
        if($('#profie_icon_instruction').css('display') == 'block'){ 
            charNameBlock();
              $("#profile_icon").removeClass();
              $("#profie_icon_instruction").hide();
              $("#char_back").hide();
            
        } 
         else if($('#calender_icon_instruction').css('display') == 'block'){ 
         profileIconBlock();
        }
         else if($('#message_icon_instruction').css('display') == 'block'){ 
            calenderIconBlock();
        }
         else if($('#helmet_icon_instruction').css('display') == 'block'){ 
            messageIconBlock();
        }
        else if($('#sidebar_instruction_block').css('display') == 'block'){ 
            helmetIconBlock();
        }
    });
               
    $("#character_next").click(function() {
        characterBlock();
    });
    
    $("#char_next").click(function() {
//      if(($('#char_image_instruction').css('display') == 'none') && ($('#char_name_instruction_block').css('display') == 'block')){ 
//        charImageBlock();
//      }
     if(($('#char_info_instruction').css('display') == 'none') && ($('#char_image_instruction').css('display') == 'block')){ 
        charInfoBlock();
      }
      else if(($('#calender_icon_instruction').css('display') == 'none') && ($('#profie_icon_instruction').css('display') == 'block')) {
        calenderIconBlock();
      }
      else if(($('#message_icon_instruction').css('display') == 'none') && ($('#calender_icon_instruction').css('display') == 'block')) {
        messageIconBlock();
      }
       else if(($('#helmet_icon_instruction').css('display') == 'none') && ($('#message_icon_instruction').css('display') == 'block')) {
        helmetIconBlock();
      }
      else if($('#sidebar_instruction_block').css('display') == 'none') {
         sidebarBlock(); 
      }
    });    
          
    
    $("#done").click(function() {
      $("#sidebar_instruction_block").hide();  
      $("#sidebar_block").removeClass();
      $("#done").hide();
      $("#back").hide();
      $('.mask').hide();
      window.location.replace('/feeds/index?done');
    });
    
//    function done() {
//       $("#sidebar_instruction_block").hide();  
//      $("#sidebar_block").removeClass();
//      $("#done").hide();
//      $("#back").hide();
//      $('.mask').hide();
//      window.location.replace('/feeds/index');
//    }
});

function tutorialheader(){
    $('.page-container').css({'height':'0px'});
    $('.header').css({'width':'104%','margin-left':'-21px'});
    $('.headericon').css({'margin-left':'120px'});
    $('#search').css({'margin-right':'24px'});
    $('.bugreport').css({'display':'none'});
}

$(document).ready(function(){
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
    if(qstr == 'signup'){
        $('.profile-input-shot').keypress(function(e) 
        {                    
            var char_name = $('#character_name').val(); 
            var game = $('#game').val();
            if (e.keyCode == '13') {
                //charImageBlock()
                 e.stopPropagation();
            }
        });
    }
});
                
    function gettutorialServerList(url, obj) {
    var gameId = $('#game').val();
    var char_name = $('#character_name').val();
    if ($('#character_name').val().trim() == '' && gameId == ''){
        setTimeout("finishAjax('charname_error', '"+escape('<span>Please enter your character name</span>')+"')", 5);
        setTimeout("finishAjax('gamemsg', '"+escape('<span>Please select your game</span>')+"')", 5);
        return false;
    } else if ($('#character_name').val().trim() == ''){
        setTimeout("finishAjax('charname_error', '"+escape('<span>Please enter your character name</span>')+"')", 5);
        return false;
    }
    else if (gameId == ''){
        setTimeout("finishAjax('gamemsg', '"+escape('<span>Please select your game</span>')+"')", 5);
        return false;
    }
    if(gameId != "Not Listed" && gameId !='') {
        $.post(url+"character/select_servers", {       
            game_id: gameId
        }, function(response){
            $('#server').empty();
            if(response != "[]") {
                var data = $.parseJSON(response);
                for(var item in data)
                {
                    $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#server');
                    $('#server_menu').css({
                        'display':'inline-block'
                    });
                }
            }
            else {
                $('#server_menu').css({
                    'display':'none'
                });
            
            }
          
            getFactionList(url, gameId, obj);
           
            
       
        });
    }
    else{
        $('#server_menu').css({
            'display':'block'
        });
        $('#server').html('<option selected="selected" value="">Select Game</option>');
        $('#faction_menu').css({
            'display':'block'
        });
        $('#faction').html('<option selected="selected" value="">Select Game</option>');
        $('#class_menu').css({
            'display':'block'
        });
        $('#classid').html('<option selected="selected" value="">Select Game</option>');
        $('#profession_select').css({
            'display':'block'
        });
        $('#profession1').html('<option selected="selected" value="">Select Game</option>');
        $('#profession2').html('<option selected="selected" value="">Select Game</option>');
        $('#profession3').html('<option selected="selected" value="">Select Game</option>');
        $('#characterlist').html('<option selected="selected" value="">Select Your Character</option>');
    //  $('#section_span lbl_span').css({'display':'block'});
    // $('select option:selected').removeAttr('selected');
    }
    charImageBlock()
                    
}

function Checkcharactername(){
 var char_name = $('#character_name').val();
  if ($('#character_name').val().trim() == ''){
        setTimeout("finishAjax('charname_error', '"+escape('<span>Please enter your character name</span>')+"')", 5);
        return false;
    }
    else{
       setTimeout("finishAjax('charname_error', '"+escape('')+"')", 5); 
    }
}
