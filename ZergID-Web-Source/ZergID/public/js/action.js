/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/** SignUp form validation */

(function($,W,D)
{
    var ZERGIDSIGNUP = {};

    ZERGIDSIGNUP.UTIL =
    {
        setupFormValidation: function()
        {
            $.validator.addMethod("alphanumeric", function(value, element) {
                return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
            }, "Username must contain only letters, numbers, or dashes.");
            //form validation rules
            $("#signup").validate({
                rules: {
                    username: {
                        required: true,
                        alphanumeric: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    password_confirm: {
                        required: true,
                        equalTo: "#password",
                        minlength: 8
                    }
                    
                },
                messages: {
                    username: {
                        required: "Please enter your username",
                        alphanumeric:"Username should be alphanumeric characters"
                    }, 
                    password: {
                        required: "Please provide a password",
                        minlength: "Please provide at least eight characters"
                    },
                    password_confirm: {
                        required: "Please provide a confirm password",
                        equalTo: "Confirm Password does not match"
                    },
                    email: "Please enter a valid email address"
                    
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
              
        }
        
    }
    
    /** Login form validation function **/
    
    var ZERGIDLOGIN = {};

    ZERGIDLOGIN.UTIL =
    {
        setupFormValidation: function()
        {
            $("#login").validate({
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                   //     minlength: 8
                    }
                },
                messages: {
                    username: {
                        required: "Please enter your username"     
                    }, 
                    password: {
                        required: "Please provide a password"
                 //       minlength: "Password must be at least eight characters"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    
    /** Profile Info Validation function **/
  
    var ZERGIDPROFILEINFO = {};

    ZERGIDPROFILEINFO.UTIL =
    {
        setupFormValidation: function()
        {
            $.validator.addMethod("check_item_dropdown", function(value, element) {  
    return this.optional(element) || value != 0  ;   
    }, "Please select your birth year");

            $("#profileinfo").validate({
                rules: {
//                    email: {
//                        required: true,
//                        email: true
//                    }
//                    birthyear: {
//                        check_item_dropdown: true
//                    }
                },
                messages: {
                  //  email: "Please enter a valid email address"
             //       birthyear: "Please select your birth year"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    
    /** Character info validation **/   
    
    var ZERGIDCHARACTERINFO = {};

    ZERGIDCHARACTERINFO.UTIL =
    {
        setupFormValidation: function()
        {
            $("#characterinfo").validate({
               
                rules: {
                    character_name: {
                        required: true                      
                    },
                    game: {
                        required: true
                    }
                },
                messages: {
                    character_name: {
                        required: "Please enter your character name"  
                    }, 
                    game: "Please select your game"
                },
                submitHandler: function(form) {
                    //form.submit();
                        
                    var pathname = window.location.href;
                    var str = pathname.split("?");
                    var qstr = str[1];
                    if(qstr == 'signup'){
                        charImageBlock();
                    }else {
                        saveCharacterInfo(null, null, null);
                    }

                }
            });
        }
    }
    /** Character event validation **/ 
     var ZERGIDCHARACTEREVENTINFO = {};

    ZERGIDCHARACTEREVENTINFO.UTIL =
    {
        setupFormValidation: function()
        {
            $("#character_create_event").validate({
                    rules: {
                    event_name: {
                        required: true
                    },
                    event_date: {
                         required: true
                    },
		    char_event_name: {
                         required: true
                    }
                   
                },
                messages: {
                   event_name: "Please enter your event name",
                   event_date: "Please select event date",
                   char_event_name: "Please select character"
                  
                },
                submitHandler: function(form) {
                    //form.submit();
                }
            });
        }
    }
        
    /** Guild info validation **/    
  
    var ZERGIDGUILDINFO = {};

    ZERGIDGUILDINFO.UTIL =
    {
        setupFormValidation: function()
        {
            $("#guild_info").validate({
               
                rules: {
                    guild_name: {
                        required: true
                    },
                    game: {
                        required: true
                    },
                    character: {
                        required: true
                    }
                },
                messages: {
                    guild_name: {
                        required: "Please enter your guild name"
                    }, 
                    game: "Please select your game",
                    character: "Please select your character"
                },
                submitHandler: function(form) {
                    //form.submit();
                }
            });
        }
    }
        
    
    /** Profile Info Validation function **/
  
    var ZERGIDEVENTINFO = {};

    ZERGIDEVENTINFO.UTIL =
    {
        setupFormValidation: function()
        {
            $("#create_event").validate({
                rules: {
                    event_name: {
                        required: true
                    },
                    event_date: {
                         required: true
                    }
                },
                messages: {
                   event_name: "Please enter your event name",
                   event_date: "Please select event date"
                    },
                submitHandler: function(form) {
                    
                    return createEventValidation(form);
                }
            });
        }
    }
    
   
        
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        ZERGIDSIGNUP.UTIL.setupFormValidation();
        ZERGIDLOGIN.UTIL.setupFormValidation();
        ZERGIDPROFILEINFO.UTIL.setupFormValidation();
        ZERGIDCHARACTERINFO.UTIL.setupFormValidation();
        ZERGIDGUILDINFO.UTIL.setupFormValidation();
        ZERGIDEVENTINFO.UTIL.setupFormValidation();
        ZERGIDCHARACTEREVENTINFO.UTIL.setupFormValidation();
    });

})

(jQuery, window, document);

$(document).ready(function() {
    $('#loginname').attr('placeholder', 'Username'); //placeholder for ie 10
    $('#password').attr('placeholder', 'Password'); //placeholder for ie 10
    $('#loginpassword').attr('placeholder', 'Password'); //placeholder for ie 10
    $('#username').attr('placeholder', 'Username'); //placeholder in for 10
    $('#user_email').attr('placeholder', 'Email'); //placeholder in for 10
    $('#confirm_password').attr('placeholder', 'Confirm Password'); //placeholder for ie 10        
    $('#login').find('input').focus(function() {
        $('#signup')[0].reset();
        $('#signup').find('label.error').hide();
        $('.taken').hide();
        
    });
    
    $('#signup').find('input').focus(function() {
        $('#login')[0].reset();
        $('#login').find('label.error').hide();
        $('#available').hide();
    });
    
    $('#Loading').hide();
    
    $('#close_game_popup').click(function() {
        var pathname = window.location.href;
        var str = pathname.split("?");
        var qstr = str[1];
        $('#popup_box').hide();
        $('#char_save').attr('disabled', 'disabled');
        $('#btn_attach_media').attr('disabled', 'disabled');
        if(qstr != 'signup') {
        $('.mask').hide();
        }
        else {
            charNameBlock();
        }
       // $('select option:selected').removeAttr('selected');
        removeAttr();
    });
    
    $('#msg_close').click(function() {
        var pathname = window.location.href;
        var str = pathname.split("?");
        var qstr = str[1];
        $('#msg_box').hide();
        $('#char_save').attr('disabled', 'disabled');
        $('#btn_attach_media').attr('disabled', 'disabled');
        if(qstr != 'signup') {
        $('.mask').hide();
        }
        else {
            charNameBlock();
        }
        $('select option:selected').removeAttr('selected');
        removeAttr();
    });
});

/** Signup - Username already exists or not function **/

function check_username(url){
    var username = $("#username").val();
    var value = /^[0-9a-zA-Z]+$/;
    if(username.length > 0){
        if(username.match(value)){
            $('#Loading').show();
            $.post(url+"home/validate", {

                Username: $('#username').val()

            }, function(response){
                $('#Info').fadeOut();
                $('#Loading').hide();
                setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
            });
            return false;  
        }
    }
}

function check_email(url){

    var username = $("#user_email").val();
    if(username.length > 0){
        $.post(url+"home/emailvalidate", {
            Email: $("#user_email").val()

        }, function(response){
            $('#email_info').fadeOut();
            setTimeout("finishAjax('email_info', '"+escape(response)+"')", 450);
        });
        return false;  
    }
}
 
/** User Login ajax function **/
 
function check_login(url){
    var username = $("#loginname").val();
    var password = $("#loginpassword").val();
    if(document.getElementById("remember_me").checked==true)
        var remember_me = 1;
    else 
        remember_me = 0;
    
    //var value = /^[0-9a-zA-Z]+$/;
    if(username.length > 0 && password.length > 0){
        //event.preventDefault(); //to stop the default load
        $("#overlay").css('display','block'); // displaying the overlay
        $("#popup").css('display','block'); // displaying the popup
        $("#popup").fadeIn(500); // Displaying popup with fade in animation
			
        $.post(url+"home/login", {
            Username: username,
            Password: password,
            time_zone: $("#time_zone").val(),
            data: remember_me

        }, function(response){
            if(response == 'user'){
                window.location.replace(url+'feeds/index');
            }
            else if(response == 'admin'){
                window.location.replace(url+'admin/index');
            }
            else {
                $('#logInfo').fadeOut();
                $("#overlay").hide();
                $("#popup").hide();
                setTimeout("finishAjax('logInfo', '"+escape(response)+"')", 450);
            }
        });
        return false;  
    }
}

function finishAjax(id, response){

    $('#'+id).html(unescape(response));
    $('#'+id).fadeIn(500);
}


function checkBirthYear() {
    var birthyear = $("#birthyear").val();
    if(birthyear == 0) {
        setTimeout("finishAjax('birth_info', '"+escape('<span class="taken">Please select your birth year</span>')+"')", 5);
    }
    else {
        $('#birth_info').html('');
    }
}

/** Profile save Info function **/

function saveProfileInfo(url) {
    var email = $("#email").val();
    var birthyear = $("#birthyear").val();
    var unique_email = $('#unique_email').val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(birthyear == 0) {
        //setTimeout("finishAjax('birth_info', '"+escape('<span class="taken">Please select your birth year</span>')+"')", 5);
        checkBirthYear(); 
    }
    if(email.length == 0){
        check_profileemail(url);
    }
       if(email.length > 0 && emailReg.test(email) && birthyear !=0 && unique_email != 1){    
        $.post(url+"user/profile", {
            firstname: $("#firstname").val(),
            lastname: $("#lastname").val(),
            email: $("#email").val(),
            bio: $("#bio").val(),
            birthyear: $("#birthyear").val(),
            gender: $("#gender").val(),
            country: $("#country").val(),
            is_twitter_share: $("#is_twitter_share").val(),
            is_facebook_share: $("#is_facebook_share").val()
            
        }, function(response){
            var pathname = window.location.href;
            var str = pathname.split("?");
            var qstr = str[1];
            $('.img-error').css('display', 'none');
            if(response == 'save'){
                if(qstr == 'signup'){
                    socialNetworkBlock();
                }
                else {
                    $(".msg").show();
                    $(".msg").html("User information successfully added!");
                    $(".msg").fadeOut(2500);
                }
            }
            else {
                if(qstr == 'signup'){
                    socialNetworkBlock();
                }
                else {
                    $("#profile-bio-text").hide();
                    $("#bio-text").addClass('bio_text');
                    $("#bio-text").html('<pre>'+$("#bio").val()+'</pre>');
                    $(".msg").show();
                    $(".msg").html("User information successfully updated!");
                    $(".msg").fadeOut(2500);
                }
            }
        });
    }
     return false;  
}

/* Validate Email in Profile Edit Page */
function check_profileemail(url){

    var username = $("#email").val();
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(username.length == 0 || !emailReg.test(username)){
        setTimeout("finishAjax('email_info', 'Please enter a valid email address')", 5);
    }
    else
    {
        setTimeout("finishAjax('email_info', '')", 5); 
    }
    if(username.length > 0 && emailReg.test(username)){
        $.post(url+"user/profileemailvalidate", {
            Email: $("#email").val(),
            userid: $('#hidden_user_id').val()
        }, function(response){
            //alert(response);
           if(response == '')
               {
            $('#update').removeAttr('disabled');
            $('#update').removeClass().addClass('save-button');
            setTimeout("finishAjax('email_info', '')", 5);
            $('#unique_email').val(0);
               }           
           else {
            $('#update').removeClass().addClass('post-button-white');
            $('#update').attr('disabled','disabled');   
            $('#email_info').fadeOut();
            if(username.length > 0){
            $('#unique_email').val(1);
            setTimeout("finishAjax('email_info', '"+escape(response)+"')", 5);
            }
            
           }
        });
        return false;  
    }
}



function saveProfileImage(url, Id, obj) {
    $('#crop_save_load').css('display', 'inline-block');
    $("#crop_div").css('display', 'none');
    $.post(url+"user/profileimage", {
        profile_image: $("#profileimage").val(),
        x1: coordinates(one).x,
        y1: coordinates(one).y,
        w: coordinates(one).w,
        h: coordinates(one).h
    }, function(response){
        var pathname = window.location.href;
        var str = pathname.split("?");
        var qstr = str[1];
        var urlChunks = pathname.split('/');
        var screen = urlChunks[3];
        $('#crop_save_load').css('display', 'none');
        $('#crop_box').hide();
        $('.rounded_image').attr('src', url+'public/uploads/profile/'+response);
        if(qstr == 'signup'){
            if(screen == "user") {
                profileImageBlock();
            }
            if(screen == "character") {
                charImageBlock();
            }
        }
        else {
            $('.mask').hide();  
        }
    });             
    return false;
}


function saveCharacterInfo(url, obj, charId){
    var server = $("#server").val();
    var faction = $("#faction").val();
    var classid = $("#classid").val();
    var mini_bio = $("#enable_minibio").attr('checked') ? 1 : 0;
           if(($('#bio').val().trim() == '') && (mini_bio == 1)) {
           jAlert('Please enter mini bio');
           return false;
        }
        var char_name = $('#character_name').val();
            var game_id = $('#game').val();
            var server_id = $('#server').val();
            var faction_id = $('#faction').val();
            var char_id = $('#char_id').val();
            var char_name = $('#character_name').val();
            var url_name = '/';
            $.post(url_name+"character/edit_validate_char_name", {
            charname: char_name,
            gameid: game_id,
            serverid: server_id,
            char_id: char_id,
            charname : char_name,
            factionid: faction_id
            }, function(response){
              
            if(response)
            {
            jAlert('You have already added this character');
            return false;
            }
            else
                {
    if(obj != null) {
        var action= $(obj).attr('alt');
    }
    else {
        action = "Add";
    }
    if(url == null)
    {
        var tsr = 'save';
    }
    else {
        tsr= url+"character/save"
    }
    if(server == null || server == ""){
        server = null;
    }
    if(faction == null || faction == ""){
        faction = null;
    }
    if(classid == null || classid == ""){
        classid = null;
    }
    
    $.post(tsr, {
        character_name: $("#character_name").val(),
        game: $("#game").val(),
        level: $("#level").val(),
        server: server,
        faction: faction,
        classid: classid,
        character_icon: $('#profileimage').val(),
        character: $("#role").val(),
        bio: $("#bio").val(),
        enable_minibio: $("#enable_minibio").attr('checked') ? 1 : 0,
        profession1: $("#profession1").val(),
        profession2: $("#profession2").val(),
        profession3: $("#profession3").val(),
        pvp: $('#pvp').attr('checked') ? 1 : 0,
        pve: $("#pve").attr('checked') ? 1 : 0,
        rp: $("#rp").attr('checked') ? 1 : 0,
        submit: action,
        character_id: charId

    }, function(response){
        var pathname = window.location.href;
        var str = pathname.split("?");
        var qstr = str[1];
        //$('#char_id').val(response);
        if(response == 'update'){
                if(qstr != 'signup'){
                    $(".msg").show();
                    $(".msg").html("Character information successfully updated!");
                    $(".msg").fadeOut(2500);
                    location.reload(true);
                }
                else {
                    profileIconBlock();
		    $('#char_id').val($('$character_id').val());	
                }
        }
        else {
           if($("#media_icon").val() != "" || $("#youtube_url").val() != "" || $("#embed_url").val() != ""){
                charMediaSave(url, response);
            }
            else {
                if(qstr == 'signup'){
                    profileIconBlock();
		    $('#char_id').val(response);
                }
                else {
                    $(".msg").show();
                    $(".msg").html("Character information successfully added!");
                    $(".msg").fadeOut(2500);
                    window.location.replace('index');
                   
                }
            }
        }
    });
    return false; 
                }
                });
            return false;
}


function saveCharacterImage(url, charId) {  
    $('#crop_save_load').css('display', 'inline-block');
    $("#crop_div").css('display', 'none');
    $.post(url+"character/saveimage", {
        profile_image: $("#profileimage").val(),
        x1: coordinates(one).x,
        y1: coordinates(one).y,
        w: coordinates(one).w,
        h: coordinates(one).h,
        char_id: charId
    }, function(response){
        $('#crop_save_load').css('display', 'none');
        $('#crop_box').fadeOut("fast");
        $('.mask').hide();  
        $('#prof_img').attr('src', url+'public/uploads/character/'+response);
    });       

    return false;
}


function charMediaSave(url, charId)
{   
    unloadMediaUploadPopupBox();
    var fd = new FormData();
    fd.append( "media_icon", $("#media_icon")[0].files[0]);
    fd.append("youtube", $('#youtube_url').val());
    fd.append('embed_script', $('#embed_url').val());
    fd.append("char_id", charId);
    if(url == null){
        var tsr = 'savemedia';
    }
    else {
        tsr= url+"character/savemedia/";
    }
    
    $.ajax({
        url : tsr,
        type: 'POST',
        contentType:false,
        cache: false,
        data: fd,
        processData: false,
        beforeSend :function(){
            $("#popupbox").html('loading.gif');
        },
        success : function(data) {
             window.location.replace('/character/edit/'+charId);
        }
    });
  
    return false;
}

//function saveGuildInfo(url) {
//    var charid = $("#characterlist").val();
//    $.post(url+"guild/create", {
//        game: $("#game").val(),
//        server: $("#server").val(),
//        faction: $("#faction").val(),
//        guild_name: $("#guild_name").val(),
//        character: $("#characterlist").val(),
//        profileimage: $("#profileimage").val(),
//        guild_bio: $("#guild_bio").val(),
//        accept_applicant: $("#accept_applicant").val(),
//        pvp: $('#pvp').attr('checked') ? 1 : 0,
//        pve: $("#pve").attr('checked') ? 1 : 0,
//        rp: $("#rp").attr('checked') ? 1 : 0,
//        url: $("#url").val(),
//        password: $("#guild-password").val(),
//        service: $("#service").val(),
//        port: $("#port").val(),
//        second_url: $("#second_url").val(),
//        second_password: $("#second_password").val(),
//        second_service: $("#second_service").val(),
//        second_port: $("#second_port").val()
//    }, function(response){
//         if(charid != '')
//            {
//        if(response == 'You have already added this guild')
//            {
//                alert(response);
//                return false;
//            }
//            else
//                {
//        window.location.replace(url+'guild');
//                }
//            }
//    });
//}


function saveGuildInfo(url,obj,guild_id) {
    var charid = $("#characterlist").val();
    var guild_name = $("#guild_name").val();
    if(guild_name.trim() == '' || charid == '')
        {
            return false;
        }
    if(guild_id == null) {
        var action= 'Save';
    }
    else {
        action = "Create";
    }   
    
    $.post(url+"guild/create", {
        game: $("#game").val(),
        server: $("#server").val(),
        faction: $("#faction").val(),
        guild_name: $("#guild_name").val(),
        character: $("#characterlist").val(),
        profileimage: $("#profileimage").val(),
        guild_bio: $("#guild_bio").val(),
        accept_applicant: $('#accept_applicant').attr('checked') ? 1 : 0,
        pvp: $('#pvp').attr('checked') ? 1 : 0,
        pve: $("#pve").attr('checked') ? 1 : 0,
        rp: $("#rp").attr('checked') ? 1 : 0,
        url: $("#url").val(),
        password: $("#guild-password").val(),
        service: $("#service").val(),
        port: $("#port").val(),
        second_url: $("#second_url").val(),
        second_password: $("#second_password").val(),
        second_service: $("#second_service").val(),
        second_port: $("#second_port").val(),
        submit: action,
        guild_id:guild_id
        
    }, function(response){
       // alert(response);
        if(charid != '')
            {
        if (response == 'Failed')
            {
//                getMask();
//                  $('#comepopupbox').fadeIn("slow");
//                  $('#come_info').html('You have already added this guild');
                  jAlert('You have already added this guild');
                return false;
            }
            else if (response == 'save' || response == 'saveselected')
                {
        window.location.replace(url+'guild');
                }
                else
                    {
                        $(".msg").show();
                        $(".msg").html("Guild information successfully added!");
                        $(".msg").fadeOut(2500); 
                        location.reload(true);
                    }
            }

    });
}

function saveGuildImage(url, Id, obj) {
    $('#crop_save_load').css('display', 'inline-block');
    $("#crop_div").css('display', 'none');
    $.post(url+"guild/saveimage", {
        profile_image: $("#profileimage").val(),
        x1: coordinates(one).x,
        y1: coordinates(one).y,
        w: coordinates(one).w,
        h: coordinates(one).h,
        guild_id: Id
    }, function(response){
        $('#crop_save_load').css('display', 'none');
        $('.mask').hide();
        $('#crop_box').hide();
        $('#prof_img').attr('src', url+'public/uploads/guild/'+response);
        location.reload(true);
        
    });                         
    return false;
}


$(document).ready( function() {  
    $('select[name="game"]').change(function(){
        if ($(this).val() == "Not Listed")
            loadGamePopupBox();  
    });
    
    $('#popupBoxClose').click( function() {
        $('#errormsg').hide(); 
        unloadGamePopupBox();
    });
     
    $('#add_media').click( function() {			
        loadUploadPopupBox();
    });
    
    $('#close_upload_box').click( function() {			
        unloadUploadPopupBox();
    });
    
//    $('.popupBoxClose').click( function() {			
//        unloadMsgBox();
//    });
    
    $('#media_upload').click( function() {
        unloadUploadPopupBox();
    });
    
    $('#apply_guild').click( function() {
        loadGamePopupBox();
    });
    
    $('#feed_edit').click( function() {
        loadGamePopupBox();
    });
    
    $('#guild_feed_edit').click( function() {
        loadUploadPopupBox();
    });
    
    $('#btn_friend_req').click( function() {
        loadGamePopupBox();
        $('.popup_box').css({
            'margin-left': 180, 
            'height': 265
        });
        $('#popup_title').html('Send Friend Request');
        $('#frnd_button').css({
            'display':'block'
        });
        $('#follow_button').css({
            'display':'none'
        });
        return false;
    });
    
    $('#reply_button').click( function() {
        loadUploadPopupBox();
    });

      $('#dmenu2').click( function() {
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        var alt_id = $(this).attr("alt");
        if(alt_id == "")
            {
                var post_url = "/feeds/get_existing_banner/";
            }
            else
                {
                    post_url = "/guild/get_existing_Guild_banner/";
                }
        $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
        });
        $('.mask').fadeIn(100); 
        $('.mask').fadeTo("fast",0.8);
        $('#loading').html('<img  src="/public/images/msg_load_blue.gif">');
        $('#upload_box').fadeIn("slow");
        $.post(post_url, function(response) {
       $('#loading').html('');
        $('#exisiting_banner_id').html(response);
        });
        return false;
    }); 
    
    $('#character_name').focus();
    $('#guild_name').focus();
    
    $('#level').blur(
    function(){
        var value = $(this).val(),
            number = parseInt(value,10),
            text = isNaN(number);
        if (text){
            $(this).val('');
        }
        else {
            $(this).val(Math.abs(number));
        }
    });
    
     $('#btn_attach_media').click( function() {
       loadMediaUploadPopupBox();
    });
   $('#close_media_box').click( function() {
        $('.media-name').html('');
        $('#youtube_url').val('');
        $('#embed_url').val('');
        $('#youtube_url').removeAttr('disabled');
        $('#embed_url').removeAttr('disabled');
        $('#media_icon').css({'display':'block'});
        $('#media_upload').removeClass().addClass('post-button-white');
        $('#media_upload').attr('disabled','disabled');
        
       unloadMediaUploadPopupBox();
    });
    
    $('#level').keyup(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     
     $('#server').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#faction').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#classid').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#role').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#bio').keyup(function() {
    $('.post-button-white').removeAttr('disabled');
    $('.post-button-white').removeClass().addClass('save-button');
       
    });
     $('#enable_minibio').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#profession1').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
     $('#profession2').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });$('#profession3').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
    $('#pvp').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
    $('#rp').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
    $('#pve').change(function() {
       $('#save').removeClass().addClass('save-button');
       $('#save').removeAttr('disabled');
    });
});

function cropImageCancel(url, directory) {
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
    var urlChunks = pathname.split('/');
    var screen = urlChunks[3];
    var input_file = $("#profile_image");
    input_file.replaceWith(input_file = input_file.clone( true ));
    $("#crop_div").css('display', 'none');
    $.post(url+"helper/crop_image_cancel", {   
        file_name: $('#profileimage').val(),
        directory: directory
    }, function(response){
        $('#profileimage').val('');
        $('#crop_box').hide();
        
        if(qstr == 'signup'){
            if(screen == "user") {
                profileImageBlock();
            }
            if(screen == "character") {
                charImageBlock();
            }
        }
        else {
            $('.mask').hide();  
        }
    }); 
}

function cropImageDone(url, directory) {
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
    $("#crop_div").css('display', 'none');
    $.post(url+"helper/crop_profile_image", {   
        profile_image: $('#profileimage').val(),
        directory: directory,
        x1: coordinates(one).x,
        y1: coordinates(one).y,
        w: coordinates(one).w,
        h: coordinates(one).h
        
    }, function(response){
        if(qstr == 'signup'){
            $('#back').fadeIn(1000);
            $('#char_next').fadeIn(1000);
            $("#char_image_block").removeClass().addClass('box char-block');          
            $("#char_image_block").fadeIn(1000);
        }
        else {
            $('.mask').hide(); 
        }
        $('#prof_img').attr('src', url+directory+response);
        $('#profileimage').val(response)
        $('#crop_box').hide();
    });
    return false;
}


function unloadGamePopupBox() {	// TO Unload the Popupbox
        
    $('#popup_box').fadeOut(200);
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
    if(qstr != 'signup'){
        $('.mask').hide();
    }
}	
    
function loadGamePopupBox() {	// To Load the Popupbox
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
    $('#char_name_block').removeClass();
    $('#char_name_instruction_block').hide();
    $('#char_next1').hide();
    $('#char_skip').hide();
    $('#popup_box').fadeIn("slow");	
    $('#game_req').focus();
}

function unloadUploadPopupBox() {
    $('#upload_box').fadeOut("slow");
    $('.mask').hide();  
}
    
function loadUploadPopupBox(){
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8);
    $('#upload_box').fadeIn("slow");
}

function unloadMediaUploadPopupBox() {
    $('#media_box').fadeOut("fast");
    $('.mask').hide();
    var matches = $('#youtube_url').val().match(/http:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/) || $('#youtube_url').val().match(/https:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/);
//    var iframe = $('#embed_url').val(),
//    regEx = /(src)=["']([^"']*)["']/gi;
   if($('#youtube_url').val().length > 0 && matches) {
    if($('#youtube_url').val() != "") {
        $('#media_name').html('Youtube video added')
    }
    }
    else if($('#embed_url').val().length > 0) {
        $('#media_name').html('Embed video added');
    }
}
    
function loadMediaUploadPopupBox(){
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8);
    $('#media_box').fadeIn("slow");
}

function unloadMsgBox() {
    $('.popup_box').fadeOut("slow");
    $('.mask').hide(); 
    var pathname = window.location.href;
    var str = pathname.split("?");
    var qstr = str[1];
    if(qstr == 'signup'){
        window.location.replace('add?signup');
    }
    else {
        location.reload(true);
    }
}
    
function loadMsgBox(){
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8);
    $('#msg_box').fadeIn("slow");
}

function sendGameRequest(url) {
    $('#errormsg').show();
    if($("#game_req").val().trim().length > 0) {
        $('#bar_load').show();   
        $('#errormsg').hide();
        $.post(url+"character/gamerequest", {
            
            subject: $("#game_subject").val(),
            message: $("#game_req").val(),
            character_id: null,
            username:$("#username").val(),
            parent_message: 0
            
        }, function(response){
            if(response == 'success'){
                $('#bar_load').hide();
                $("#game_req").val('');
                unloadGamePopupBox();
                loadMsgBox();
            }
        });
    }
    else {
        $('#errormsg').html("Please enter your message!")
       // alert("Please enter your message!");
    }
    return false;  
    
}
function deleteGuild(url, obj){
    jConfirm("Do you want to delete '"+$(obj).attr("alt")+"' guild?",'Delete Confirmation',function(confirm){   
    if (confirm) {
        $.post(url+'guild/delete/',
        {
            delete_id:$(obj).attr("id")
        }
        , function(response) {
             window.location.replace(url+'guild');
        });
    }       
});
}

function deleteCharacter(url, guildId, guild_role, obj) {
    var count = $('#count').text();
   
    if(guild_role != 1)
    {
        if(guildId == null || guildId == "") {
            var msg ="Do you want to delete '"+$(obj).attr("alt")+"' character?";
        }
        else {
            msg ="This character is currently a guild member. Do you want to delete?";
        }
   //     if(confirm(msg)) {
       jConfirm(msg ,'Delete Confirmation',function(confirm)   {
           if(confirm){
            row= $(obj).closest('tr');
            $.post(url+'character/delete/',
            {
                delete_id:$(obj).attr("id"),
                guild_id: guildId
            }
            , function(response) {
                row.remove(); 
                var count_show = count-1;
                if(count_show > 0) {
                $('#count').html(count-1);
                }
                else
                    {
                        $('#count').html('');
                    }
            });
           }
        });
    }
    else {      
        jAlert('This character is currently a guild leader and cannot be deleted');
        return false;
    }
          
}

function favorite(url, obj,guild_name,game_name) {
    var fav_id=obj.id.split('_');
  guildid = fav_id[1];
  
    $.post(url+'guild/favorite/',
    {
        guild_id:guildid
    }
    , function(response) {
        if(response == "selected")
            {
            var count = $("#top_guild_list a").length + 1;
           if(count >= 1)
               {
                   $('.no_guild').css({'display':'none'});
                   $('#no_guild').css({'display':'none'});
                   
               }
            $('#fav_'+guildid).attr("src", url+"public/images/favorite.png");
             $('<div><a class="anchor" id="top_guild'+guildid+'" href="/guild/view/'+guildid+'">'+'<span style="font-weight:bold">'+guild_name+'</span>'+' - '+'<span style="font-style:italic">'+game_name+'</a></div>').appendTo('#top_guild_list');
            }
        else if(response == "unselected")
             {
          var count = $("#top_guild_list a").length - 1;
         
          if(count == 0)
                {
                   // alert(1);
                    $('#no_guild').css({'display':'block'});
                }
            $('#fav_'+guildid).attr("src", url+"public/images/non-favorite.png");
            $('#top_guild'+guildid).remove();
             }
        else if(response == "overlimit")
            {
                jAlert('Please unselect the existing one to set new favorite.');
                return false;
            }
    });
}
function character_favorite(url, obj,char_name,game_name,server_name) {
    var fav_id=obj.id.split('_');
    var chara_id =  fav_id[1];
    char_id=fav_id[1];
    if(server_name)
    var server_name_get = ' - '+server_name;
    else
     var server_name_get = server_name;       

    $.post(url+'character/favorite/',
    {
        id:char_id
    }
    , function(response) {
        if(response == "selected")
            {
            var count = $("#top_character_list a").length + 1;
           if(count >= 1)
               {
                   $('#no_char').css({'display':'none'});
                    $('.no_char').css({'display':'none'});
               }
            $('#favchar_'+char_id).attr("src", url+"public/images/favorite.png");
        $('<div><a class="anchor" id="top_char'+chara_id+'" href="/character/edit/'+chara_id+'">'+'<span style="font-weight:bold">'+char_name+'</span>'+' - '+'<span style="font-style:italic">'+game_name+'</span>'+server_name_get+'</a></div>').appendTo('#top_character_list');
            }
        else if(response == "unselected")
            {
          var count = $("#top_character_list a").length - 1;
         
          if(count == 0)
                {
                   // alert(1);
                    $('#no_char').css({'display':'block'});
                }
            $('#favchar_'+char_id).attr("src", url+"public/images/non-favorite.png");
            $('#top_char'+chara_id).remove();
            }
        else if(response == "overlimit"){
                   jAlert('Please unselect the existing one to set new favorite.');
                return false;
        }
    });
}

function getImageName(input){
    var file = $('#media_icon').val();
    var img_exts = ['jpg','jpeg','png','gif'];
 //   var vid_exts = ['mp4', 'ogv', 'webm'];
    if ( file ) {
        // split file name at dot
        var get_ext = file.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        var upload_image = $('#media_icon')[0].files[0];
        if ( $.inArray ( get_ext[0].toLowerCase(), img_exts ) > -1){
            if(upload_image.size > 1000 * 2048){
                jAlert('The file you selected is too big. Max file size limit is 2 MB');
            }
            else {
                $('.media-name').html(file+' added.');
                $('#youtube_url').attr('disabled','disabled');
                $('#embed_url').attr('disabled', 'disabled');
                $('#post').removeClass().addClass('save-button');
                $('#post').removeAttr('disabled');
                $('#media_upload').removeAttr('disabled');
                $('#media_upload').removeClass().addClass('save-button');
                $('#youtube_url').val('');
                $('#embed_url').val('');
            }
        }
//        else if($.inArray ( get_ext[0].toLowerCase(), vid_exts ) > -1){
//            if(upload_image.size > 2000 * 1024){
//                jAlert('The file you selected is too big. Max file size limit is 2 MB');
//            }
//            else {
//                $('.media-name').html(file+' added.');
//                $('#youtube_url').attr('disabled','disabled');
//                $('#embed_url').attr('disabled', 'disabled');
//                $('#post').removeClass().addClass('save-button');
//                $('#post').removeAttr('disabled');
//                $('#media_upload').removeAttr('disabled');
//                $('#media_upload').removeClass().addClass('save-button');
//                $('#youtube_url').val('');
//                $('#embed_url').val('');
//            }
//        }
        else {
            jAlert( "We does not currently support this file type, Please select .JPG, .JPEG, .PNG, .GIF");
        }
    }
}

function disableUploadMedia() {

   var matches = $('#youtube_url').val().match(/http:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/) || $('#youtube_url').val().match(/https:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/);
   if($('#youtube_url').val().length > 0 && matches) {
       $('#post').removeClass().addClass('save-button');
    $('#post').removeAttr('disabled');
   $('#media_upload').removeAttr('disabled');
  $('#media_upload').removeClass().addClass('save-button');
  $('#media_icon').css({'display':'none'});
   $('#browse_button').attr('disabled','disabled');
  $('#embed_url').attr('disabled', 'disabled');
  $('#embed_url').val("");
   }
    else {
        $('#media_icon').css({
            'display':'block'
        });
        $('#media_upload').attr('disabled','disabled');
        $('#media_upload').addClass('post-button-white');
        $('#post').removeClass().addClass('post-button-white');
       $('#post').attr('disabled','disabled');
       $('#embed_url').removeAttr('disabled');
       $('#browse_button').removeAttr('disabled');
    }
}

function activeEmbedScript() {
   // var iframe = $('#embed_url').val();
    //regEx = /(src)=["']([^"']*)["']/gi;
    var matches = $('#embed_url').val().match(/http:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/) || $('#embed_url').val().match(/https:\/\/(?:www\.)?youtube.*watch\?v=([a-zA-Z0-9\-_]+)/);
    if($('#embed_url').val().length > 0 && !matches) {
    $('#post').removeClass().addClass('save-button');
    $('#post').removeAttr('disabled');
    $('#media_upload').removeClass().addClass('save-button');
    $('#media_icon').css({'display':'none'});
    $('#youtube_url').attr('disabled', 'disabled');
    $('#youtube_url').val("");
     $('#browse_button').attr('disabled','disabled');
    $('#media_upload').removeAttr('disabled');
    }
    else{
    $('#media_icon').css({'display':'block'});
    $('#media_upload').attr('disabled','disabled');
    $('#media_upload').addClass('post-button-white');
    $('#youtube_url').removeAttr('disabled');
    $('#post').removeClass().addClass('post-button-white');
    $('#post').attr('disabled','disabled');
    $('#browse_button').removeAttr('disabled');
    }
}

function readCharImg(input) {
    var file = $('input[type="file"]').val();
    var exts = ['jpg','jpeg','png','gif'];
    if ( file ) {
        // split file name at dot
        var get_ext = file.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1){
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#prof_img').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);

        } else {
            jAlert( 'Invalid file!' );
        }
    }
}


$(document).ready( function() {
    $('#secondary').click(function() {
        $('#comm_text').css({'display':'none'});
        $('#second_comm_text').css({'display':'block'});
        $('#primary').css({'display':'inline-block'});
        $('#secondary').css({'display':'none'});
    });
    
    $('#primary').click(function() {
        $('#comm_text').css({'display':'block'});
        $('#second_comm_text').css({'display':'none'});
        $('#primary').css({'display':'none'});
        $('#secondary').css({'display':'inline-block'});
    });
});

function applyMembership(url, guild, Id)
{  
    $('.error_msg').show();
    if($('#character').val() == "") {
        $('.error_msg').html('Please select your character!');
      //  alert('Please select your character!');
    }
    else if($('[name="play_role"]:checked').length == 0) {
      //  alert('Please select your play style role!');
      $('.error_msg').html('Please select your play style role!');
    }
    else {
        $('#bar_load').show();
        $('.error_msg').hide();
        $.post(url+"guild/apply_membership", {
          
            guild_id: guild,
            user_id:Id,
            character: $("#character").val(),
            playstyle: $("input[type='radio'].checkbox:checked").val(),
            summary: $("#summary").val(),
            is_speaker_available: $("#speaker").attr('checked') ? 1 : 0,
            is_headset_available: $("#mic").attr('checked') ? 1 : 0,
            is_voicechat_available: $("#voice").attr('checked') ? 1 : 0,
            subject: "Membership Application"
        }, function(response){
            if(response == 'success'){
                $('#bar_load').hide();
                unloadGamePopupBox();
                loadMsgBox();
            }
        });
    }
    return false;
}

function promote(url, roleId, obj) {
    var member_id=obj.id;
    var role = $('#role'+member_id).text();
    if(role == "Officer"){
//        if(confirm("Do you want to promote this Officer to Guild Leader?"))
//        {
    jConfirm("Do you want to promote this Officer to Guild Leader?", 'Confirmation', function(confirm) {
    if (confirm) {
            $.post(url+'guild/promote/',
            {
                memberid: member_id
            },
            function(response) {
                if(response == "success")
                    $('#role'+member_id).html('Guild Leader'); 
                location.reload(true);
            });
        }    
    });
    }
    else if(role == "Member"){
        $.post(url+'guild/promote/',
        {
            memberid: member_id
        },
        function(response) {
            if(response == "success")
                $('#role'+member_id).html('Officer');
            if(roleId ==2){
                $('#op'+member_id).hide();
            }
        }); 
    }      
}

function demote(url, obj) {
    var member_id=obj.id;
    
    $.post(url+'guild/demote/',
    {
        memberid: member_id
    },
    function(response) {
        if(response == "success") {
            $('#role'+member_id).html('Member');
        }
        else {
            jAlert("Access denied!");
        }
    }); 
}      
function removeMember(url, charId, roleId, guildId, userId, obj) {
    var member_id=obj.id;
    
    if($(obj).attr("alt") == "member") {
        var msg ="Do you want to remove this member from guild?";
    }
    else {
        msg = "Do you want to leave the '"+$(obj).attr("alt")+"' guild?";
    }
    if(roleId != 1) {
        jConfirm(msg ,'Delete Confirmation',function(confirm)   {
            if (confirm) {
            row= $(obj).closest('tr');
            $.post(url+'guild/remove/',
            {
                remove_id: member_id,
                guild_id: guildId,
                user_id: userId,
                char_id:charId
            }
            , function(response) {
                row.remove(); 
            });
        }
        });
    }
    else {
        jAlert('You are currently the leader of this guild, to leave you must promote someone else to be leader or to close the guild, please go to the guild page');
        return false;
    }
    return false;
}
function showOperators(Id, roleId){
    var roleName = $('#role'+Id).html();
    if((roleId == 2 && roleName == "Member") || (roleId == 1)){
        $('#op'+Id).show();
    }
}

function hideOperators(Id){
    $('#op'+Id).hide();
}

//$(function(){

//    var minimized_elements = $('p.feed-text');
//    minimized_elements.each(function(){    
//        var t = $(this).html();        
//        if(t.length < 250) return;
        
//        $(this).html(
//            t.slice(0,250)+'<span>... </span><a href="#" class="more">More</a>'+
//            '<span style="display:none;">'+ t.slice(250,t.length)+' <a href="#" class="less">Less</a></span>'
//            );
        
//    }); 
    
//    $('a.more', minimized_elements).click(function(event){
//        event.preventDefault();
//        $(this).hide().prev().hide();
//        $(this).next().show();        
//    });
    
//    $('a.less', minimized_elements).click(function(event){
//        event.preventDefault();
//        $(this).parent().hide().prev().show().prev().show();    
//    });

//});


function showCmtBox(obj) {
    $('#cmt-'+obj).fadeIn(1000);
    return false;
}

function hideCmtBox(obj) {
    $('#cmt-'+obj).fadeOut(100);
    $('#feed_cmt_'+obj).val('');
    $('#cmt-button'+obj).removeClass().addClass('cmt-button-white');
    $('#cmt-button'+obj).attr("disabled", true);
    
    return false;
}

//function postComment(url, feedId, charId) {
//
//    if(charId == 0 || charId == "" || charId == null){
//        charId = null;
//    }
//    $.post(url+"feeds/post_comment", {       
//        feed_id: feedId,
//        comment: $('#feed_cmt_'+feedId).val(),
//        char_id: charId
//            
//    }, function(response){
//        if(response == 'success'){
//            location.reload(true);
//        }
//    });
//    return false;  
//}
function postComment(url, feedId, charId) {

    if(charId == 0 || charId == "" || charId == null){
        charId = null;
    }
    var window_url = window.location.href;
    var urlChunks = window_url.split('/');

    $.post(url+"feeds/post_comment", {       
        feed_id: feedId,
        comment: $('#feed_cmt_'+feedId).val(),
        char_id: charId

    }, function(response){
        if(response == 'success'){
            if(urlChunks[3] == 'feeds' && urlChunks[4] == 'view')
            {
                location.reload(true);  
            }
            else
            {
                $('#cmt-'+feedId).hide();
                $('#feed_cmt_'+feedId).val('');
                var be_feed_value = $('#be_feed-cmt-cnt-'+feedId).html();
                var feed_value = $('#feed-cmt-cnt-'+feedId).html();
                if(be_feed_value != 'Be the first!'){
                    var feed_cnt = feed_value.split(' ');
                    var feed_total_cnt = parseInt(feed_cnt[0]) + 1;
                    $('#feed-cmt-cnt-'+feedId).html(feed_total_cnt+' Comments')
                }
                else
                {
                    $('#be_feed-cmt-cnt-'+feedId).html('<a style="color:#B8B8B8" href="/feeds/view/'+feedId+'" id="feed-cmt-cnt-'+feedId+'">1 Comments</a>') 
                }
            } 
        }
    });
    return false;  
}

$(document).ready( function() {
    $('textarea.feed_input').focus(function () {
//        $(this).animate({
//            height: "50px"
//        }, 400); 
        $('#feed_options').fadeIn(500);
    });
});

function deleteFeed(url, feed_id) {
   
    jConfirm("Do you want to delete this feed?",'Delete Confirmation',function(confirm)  {
       if (confirm) {
        $.post(url+'feeds/delete/',
        {
            feedid: feed_id
        }
        , function(response) {
            window.location.replace(url+'feeds/index');
        });
    }
});
}
function sendFriendRequest(url, linkedId) {
    var charId = $('#sendeas').val();
    var comment = $('#req_cmt').val();
    $('#errormsg').show();
    if(charId == null || charId == "") {
        $('#errormsg').html('Please select your Send As'); 
        //alert('Please select your send as...');
    }
    else if(comment.length == 0 || $.trim(comment) == '') {
        $('#errormsg').html('Please enter your comment');      
        //alert('Please enter your comment');
    }
    else {
        if(charId == 0) {
            charId = null;
        }
        $('#bar_load').show();
        $('#errormsg').hide();
        $.post(url+"user/friend_request", {       
            character: charId,
            linked_id : linkedId,
            comment: $('#req_cmt').val(),
            subject: $('#friend_subject').val()
            
        }, function(response){
            if(response == 'success'){
                $('#bar_load').hide();
                unloadGamePopupBox();
                loadMsgBox();
                $('#btn_follow_req').css('display', 'none');
            }
        });
    }
    return false;
}

function sendFollowRequest(url, Id) {
//    var charId = $('#sendeas').val();
//    if(charId == '0') {
//        charId = null;
//    }

    $.post(url+"user/follow_request", {       
       // character: charId,
        linked_id : null,
        guild_id : Id
      //  comment: $('#req_cmt').val(),
      //  subject: 'Follow Request'
            
    }, function(response){
        location.reload();
    });
    return false;  
}

function sendUserFollowRequest(url, Id) {

    $.post(url+"user/follow_request", {       
        character: null,
        linked_id : Id,
        guild_id : null,
        comment: ''         
    }, function(response){
        location.reload();
    });
    return false;  
}

function unFollow(url, obj) {

    var follow_id = obj.id;
  jConfirm("Do you want to unfollow this user?",'Unfollow Confirmation', function(confirm){
        if (confirm) {
        row= $(obj).closest('tr');
        $.post(url+'user/unfollow/',
        {
            follower_id: follow_id
        }
        , function(response) {
            row.remove();                       
        });
    }
  });
    return false;
}

function unFollowReq(url, Id) {

    jConfirm("Do you want to unfollow this user?",'Unfollow Confirmation', function(confirm){
        if (confirm) {
        $.post(url+'user/profile_unfollow/',
        {
            follower_id: Id
        }
        , function(response) {
          location.reload(true);
        });
    }
    });
    return false;
}

function guildUnFollowReq(url, guildId) {
  jConfirm("Do you want to unfollow this user?",'Unfollow Confirmation', function(confirm){
        if (confirm) {

        $.post(url+'guild/unfollow/',
        {
            guild_id: guildId
        }
        , function(response) {
          location.reload(true);
        });
    }
  });
    return false;
}

function setBanner(url, Id) {
    var image =  $('#media'+Id);
    var width = image[0].naturalWidth;
    var height = image[0].naturalHeight
    if(width >= 640 && height >= 208) {
        $.post(url+'character/set_banner/',
        {
            banner_id: Id
        }
        , function(response) {
            alert('Success');
        });
    }
    else {
        jAlert("Please select large size media!")
    }  
    return false;
}

$(document).ready(function($){
    
    $('.lnk').hover(
        function () {
            $(this).animate({
                opacity:'1'
            });
        },
        function () {
            $(this).animate({
                opacity:'0'
            });
        }
        );	
});

//function postGuildComment(url, feedId, guildId, charId) {
//    $.post(url+"guild/post_comment", {       
//        feed_id: feedId,
//        comment: $('#feed_cmt_'+feedId).val(),
//        guild_id: guildId,
//        char_id: charId
//            
//    }, function(response){
//        if(response == 'success'){
//            location.reload(true);
//        }
//    });
//    return false;  
//}

function postGuildComment(url, feedId, guildId, charId) {
     var window_url = window.location.href;
    var urlChunks = window_url.split('/');
    $.post(url+"guild/post_comment", {       
        feed_id: feedId,
        comment: $('#feed_cmt_'+feedId).val(),
        guild_id: guildId,
        char_id: charId
            
    }, function(response){
        if(response == 'success'){
             if(urlChunks[3] == 'guild' && urlChunks[4] == 'feed')
            {
                location.reload(true);  
            }
            else
            {
                $('#cmt-'+feedId).hide();
                $('#feed_cmt_'+feedId).val('');
                var be_guild_feed_value = $('#be-guild-feed-cmt-cnt-'+guildId+'-'+feedId).html();
                var guild_feed_value = $('#guild_feed-cmt-cnt-'+guildId+'-'+feedId).html();
                if(be_guild_feed_value != 'Be the first!'){
                    var feed_cnt = guild_feed_value.split(' ');
                    var feed_total_cnt = parseInt(feed_cnt[0]) + 1;
                    $('#guild_feed-cmt-cnt-'+guildId+'-'+feedId).html(feed_total_cnt+' Comments')
                }
                else
                {
                    $('#be-guild-feed-cmt-cnt-'+guildId+'-'+feedId).html('<a style="color:#B8B8B8" href="/guild/feed/'+guildId+'/'+feedId+'" id="guild_feed-cmt-cnt-'+guildId+'-'+feedId+'">1 Comments</a>') 
                }
            }
        }
    });
    return false;  
}

function deleteGuildFeed(url, feed_id, guild_id) {
    
     jConfirm("Do you want to delete this feed?",'Delete Confirmation', function(confirm){
        if (confirm) {
        $.post(url+'guild/delete_feed/',
        {
            feedid: feed_id
        }
        , function(response) {
            window.location.replace(url+'guild/view/'+guild_id);
        });
    }
});
}

function sendMessage(url, recId, Id) {
    var charId = $('#sendeas' +Id).val();
    var message = $('#message'+Id).val();
   var rectoId  = $('#to').val();
   
  $('.error_msg').show();
   if(recId == null && (rectoId == null || rectoId == "")) {
       $('.error_msg').html('Please select your To');
        //alert('Please select your to...');
    }
    else if(charId == null || charId == "") {
       // alert('Please select your send as...');
       $('.error_msg').html('Please select your Send As');
    }
    else if(message.length == '0' || $.trim(message) == ''){
        $('.error_msg').html('Please enter your message');
       // alert('Please enter your message');
    }
    else {
        if(charId == '0') {
            charId = null;
        }
        if(recId == null) {
            recId  = $('#to').val();
        }
        $('.error_msg').hide();
        $('#bar_load').show();

        $.post(url+"message/send_message", {       
            character: charId,
            receiver : recId,
            message: message,
            subject: $('#message_subject').val()
            
        }, function(response){
            if(response == 'sent'){
                $('#message'+Id).val('');
                $('#bar_load').hide();
                hideSendMessage(Id)
                loadMsgBox();
            }
        });
    }
    return false;
}


function sendReplyMessage(url, recId, msgId, parentMsgId) {
    var message = $('#reply_message').val();
    if(message.length == '0' || $.trim(message) == ''){
        $('.error_msg').show();
        $('.error_msg').html('Please enter your message');
        //alert('Please type your message');
    }
    else {
        $('.error_msg').hide();
        $('#barload').show();
        $.post(url+"message/replymessage", {   
            character:null,
            receiver : recId,
            message: $('#reply_message').val(),
            subject: $('#reply_message_subject').val(),
            message_id: msgId,
            parent_message_id: parentMsgId

        }, function(response){
                $('#reply_message').val('');
                $('#barload').hide();
                $('#reply_box').hide();
                $('.mask').hide();
                $(response).hide().appendTo("div#reply_update").fadeIn(500);
                $('#msg_view').slimScroll({scrollBy: '350px'});
                //$(window).scrollTop($('#div'+last_msg_id).offset().top);
               // loadMsgBox();
        });
    }
    return false;
}

function readMessage(url, evntId, Id, obj, msgType) {
    var msgId = $(obj).attr("id");
    var action = $(obj).attr('alt');
	var msg_gme = $('#msg_game'+msgId).text();
        $('.msg-div-active').removeClass().addClass('msg-div');
        $('.msg_icon_dlt').attr('src', '/public/images/icon-delete-blue.png');
        $('#div'+Id).removeClass().addClass('msg-div-active');
        //$('#dlt'+Id).html('<span><img src="/public/images/icon-delete-white.png" style="margin-top:10px;" onclick="return deleteMessage('+ Id + ')"></span>');
        $('#dlt'+Id).attr('src', '/public/images/icon-delete-white.png');
    $('.hloade_div').css('display', 'block');
    $.post(url+"message/readmessage", {       
        message_id: msgId,
        parent_message_id: Id,
        event_id:evntId,
        message_type: msgType
            
    }, function(response){
        $('#unr_msg'+msgId).removeClass();
        $('.hloade_div').hide();
        $('#view_message').html(response);
	$('#save_game_id').html(msg_gme);
        $('#msg_id').val(Id);
        $('#unr_msg'+Id).removeClass();
        if($('#inbox_msg_count').text() != 0) {
        $('#msg_hcount').html('<span>'+$('#inbox_msg_count').text()+'</span>');
        }
        else {
         $('#msg-inner').css('display', 'none');
        }
        
//        if(evntId == ''){
//            $(window).scrollTop($('#div_scroll').offset().top);
//        }
//        else {
//            $(window).scrollTop($('#view_message').offset().top);  
//        }
    });
    return false;
}


function acceptFriendRequest(url, reqId, msgId) {

    $.post(url+"message/friend_request_accept", {       
        request_id: reqId,
        message_id: msgId
        
    }, function(response){
        $(".msg").show();
        $(".msg").html("Friend request accepted!");
        $(".msg").fadeOut(2500);
       window.location.replace('/message');
    });
    return false;
}

function acceptMembershipRequest(url, reqId, charId, msgId) {

    $.post(url+"message/membership_request_accept", {       
        request_id: reqId,
        char_id: charId,
        message_id: msgId
        
    }, function(response){
        $(".msg").show();
        $(".msg").html("Membership request accepted!");
        $(".msg").fadeOut(2500);
        window.location.replace('/message');
    });
    return false;
}

function deleteMessage(Id, userId, obj) {
    jConfirm("Do you want to delete this message?",'Delete Confirmation', function(confirm){
        if (confirm) {
        $.post('/message/delete/',
        {
            message_id: Id,
            user_id: userId,
            message_type: $(obj).attr('alt')
        }
        , function(response) {
            window.location.replace('/message/index/');
        });
    }
    });
    return false;
}

function denyRequest(msId, reqId, charId, obj) {
    var chk = $(obj).attr('alt');
    jConfirm("Are you sure, Do you want to deny this user?",'Deny Confirmation', function(confirm){
        if (confirm) {
        $.post('/message/delete/',
        {
            message_id: msId
        },
        function(response) {
         if(chk == "deny") {
             denyFriendRequest(reqId);
         }
         else {
             denyMemberRequest(reqId, charId);
         }
        });
    }
    });
    return false;
}

function denyFriendRequest(reqId) {
     $.post("/message/friend_deny_request", {       
        request_id: reqId
    }, function(response){
        $(".msg").show();
        $(".msg").html("Friend request denied");
        $(".msg").fadeOut(2500);
        window.location.replace('/message');
    });
    return false;
}

function denyMemberRequest(reqId, charId) {
     $.post("/message/member_deny_request", {       
        request_id: reqId,
        char_id: charId
    }, function(response){
        $(".msg").show();
        $(".msg").html("Member application request denied");
        $(".msg").fadeOut(2500);
        window.location.replace('/message');
    });
    return false;
}

function rsvpApproval(url, emId, eventId, obj){
   // var tank = document.getElementById("rsvp_tank"+emId);
   // var healer = document.getElementById("rsvp_healer"+emId);
   // var dps = document.getElementById("rsvp_dps"+emId);
    var checked = $('input[name="rsvp_role'+emId+'[]"]:checked').val();
// if((tank == null || tank.checked == false) && (healer == null || healer.checked == false) && (dps == null || dps.checked == false) && $('#em'+emId).val() != '3') {
        if((!checked) && $('#em'+emId).val() != '3') { 
        jAlert('Please select any one role ');
        $('select option:selected').removeAttr('selected');
    }
else {
    row= $(obj).closest('tr');
    $.post(url+"events/approval", {       
        evnt_memberId: emId,
        tank: checked, 
  //      tank: $('#rsvp_tank'+emId+':checked').val(),
  //      healer: $('#rsvp_healer'+emId+':checked').val(),
  //      dps: $('#rsvp_dps'+emId+':checked').val(),
        member_status: $('#em'+emId).val(),
        event_id: eventId,
        pathurl:$('#url').val()
    }, function(response){
       $('#approved').html(response);
       if($('#datatables_pending').find('tr').index() == 0){
           $('#pending').css('display', 'none');
       }
       row.remove();
    });
}
    return false;
}

function checkRsvpApproval(){
 $('.childCheckBox:checked').each(function(index){
    var emId = $(this).val(); 
    var length = $('.childCheckBox').filter(':checked').length -1;
    var checked = $('input[name="rsvp_role'+emId+'[]"]:checked').val();
//     var tank = document.getElementById("rsvp_tank"+emId);
//    var healer = document.getElementById("rsvp_healer"+emId);
//    var dps = document.getElementById("rsvp_dps"+emId);
//    if((tank.checked == true && healer.checked == true && dps.checked == true) || (tank.checked == false && healer.checked == true && dps.checked == true) || (tank.checked == true && healer.checked == false && dps.checked == true) || (tank.checked == true && healer.checked == true && dps.checked == false)) {
//        alert('Please select only one role ');
//        $('select option:selected').removeAttr('selected');
//        return false;
//    }
// if((tank == null || tank.checked == false) && (healer == null || healer.checked == false) && (dps == null || dps.checked == false) && $('#appr_select').val() != '3') {
      if((!checked) && $('#appr_select').val() != '3') {  
      jAlert('Please select any one role ');
        $('select option:selected').removeAttr('selected');
       return false;
    }
    else if(index == length) {
         $('#rsvp_approval').submit();
    }
 });
 return false;
}


    $(document).ready(function() 
    { 
        var $chk = $('.rsvp_role'); 
        $chk.click(function() 
        { 
            $chk.not(this).removeAttr('checked'); 
        }); 
    }); 

function removeChecked(Id) {
      var $chk = $('.rsvp_role'+Id); 
        $chk.click(function() 
        { 
            $chk.not(this).removeAttr('checked'); 
        }); 
}

function unApproveEventMember(url, obj) {

//    if(confirm("Do you want to remove '"+$(obj).attr("alt")+"' member from event?"))
//    {
    jConfirm("Do you want to remove '"+$(obj).attr("alt")+"' member from event?",'Remove Confirmation', function(confirm){
        if (confirm) {
        row= $(obj).closest('tr');
        $.post(url+'events/unapproved_member/',
        {
            member_id:$(obj).attr("id")
        }
        , function(response) {
            row.remove(); 
           location.reload(true);
        });
    } 
    });
    return false;
}


function removeEventMember(url, obj) {

    jConfirm("Do you want to remove '"+$(obj).attr("alt")+"' member from event?",'Remove Confirmation', function(confirm){
        if (confirm) {
    
        row= $(obj).closest('tr');
        $.post(url+'events/remove_member/',
        {
            member_id:$(obj).attr("id")
        }
        , function(response) {
            row.remove(); 
           location.reload(true);
        });
    } 
    });
    return false;
}
   
function selectEventTime(url) {
     var from = $('#event_from_time').val();
   var to = parseInt(from) + 1;            
    $.post(url+"events/select_time", {       
        from_time: $('#event_from_time').val()
    }, function(response){
           $('#event_to_time').empty();
        if(response != "[]") {
        var data = $.parseJSON(response);
        for(var item in data)
        {
            $('<option value="'+item+'">'+data[item]+'</option>').appendTo('#event_to_time');
        }
	$("#event_to_time option[value='"+to+"']").attr("selected","selected");
        }
        else {
            jAlert('Please select valid from time!');
        }
        
    });
                
    return false;
}

$(document).ready(function() {
$('#form_come_as').change(function() {
//    if ($('#rsvp_role1').attr('checked') || $('#rsvp_role2').attr('checked')  || $('#rsvp_role3').attr('checked')) {
       if ($('input[name="rsvp_tank[]"]:checked').length > 0) {  
      $('#btn_come').show();
    } else {
        $('#btn_come').hide();
    }
    
    if ($('#rsvp').attr('checked')) {
     $('#rsvp_roles').show();
    }
    else {
     $('#rsvp_roles').hide();
    }
});

/** RSVP Checkbox checked and unchecked **/

  $('.squaredFour input[type=checkbox]').change(function () {
        var group = "input:checkbox[name='"+$(this).prop("name")+"']";
        $(group).prop("checked",false);
        $(this).prop("checked",true);
       // alert($('.squaredFour input[type=checkbox]').length);
        var rsvp_class = $(this).attr('class');
       var split_rsvp = rsvp_class.split('_');
       //alert(split_rsvp[1]);
       $('#rsvp_hidden_value'+split_rsvp[1]).val($(this).val());
    });
       
    $('.squaredFour input[type=checkbox]:not(:checked)').each(function(){ 
        if ($.browser.msie && $.browser.version == 10) {
          $('#spn'+this.id).html('<img align="middle" src="/public/images/chk-box.png" style="margin-left:25px" />');
          }
          else
              {
             $('#spn'+this.id).html('<img align="middle" src="/public/images/chk-box.png" style="margin-left:19px" />');
              }    
});
       
    $('.squaredFour input[type=checkbox]').attr("checked",false); 

});

function createEventValidation(form) {
var officers = document.getElementById("event_officers");
var members = document.getElementById("event_members");
var rsvp_status = $('input:radio[name="rsvp_status"]:checked');
if($('#event_from_time').val() == $('#event_to_time').val()){
        jAlert('Please select valid from and to time!');
        return false;
    }
//if($('#event_date').val() > $('#event_todate').val()){
//        jAlert('End date cannot be greater than start date!');
//        return false;
//    }
if(officers.checked == false && members.checked == false) {
    jAlert('You must select sent to members or officers');       
   return false;
}
else if(rsvp_status.length == 0) {
    jAlert('You must select RSVP status');       
  return false;
}
else
{
    form.submit();
}

return false;
}

function getServerList(url, obj) {
    var gameId = $('#game').val();
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
     		setTimeout("finishAjax('gamemsg', '"+escape('')+"')", 5);      
            
       
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
	        setTimeout("finishAjax('gamemsg', '"+escape('<span>Please select your game</span>')+"')", 5);
            }
    
    return false;
}

function getFactionList(url, gameId, obj) {
//alert($('#faction_hidden_count'.html()))
var faction_count = $('#faction_hidden_count').text();

     $.post(url+"character/select_factions", {       
        game_id: gameId
    }, function(response){
         $('#faction').empty();
        if(response != "[]") {
        var data = $.parseJSON(response);
        if(faction_count == 0) {
        $('#faction_span').html('<span class="section_span lbl_span" style="margin-top:5px" align="left" id="faction_menu"><label for="faction">Faction</label><br><select class="select-input valid" name="faction" id="faction"></select></span>');
        }
       for(var item in data)
        {
            if(item != 'N/A')
                {
            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#faction');
            $('#faction_menu').css({'display':'inline-block'});
                }
                else
                    { 
                        $('#faction_menu').css({'display':'none'});
                        $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#faction');
                        
                    }
        }
     //   $('<option value="">No need faction</option>').appendTo('#faction');
        }
//        
       else {
            $('#faction_menu').css({'display':'none'});
            $('#faction_span').css({'display':'none'});
        }
         if(obj == "character") {
             getClassList(url, gameId);
             getProfessionList(url, gameId);
         }
         else{
             getCharacterList(url, gameId);
         }
        
    });
    
   return false;
}

function getClassList(url,factionId,serverId) {

var factionId = $('#faction').val();
var serverId = $('#server').val();

     $.post(url+"character/select_class", {       
        faction_id: factionId,
        server_id:serverId
    }, function(response){       
         $('#classid').empty();
        if(response != "[]") {
        var data = $.parseJSON(response);
        $('#class_span').html('<span class="section_span lbl_span" align="left" id="class_menu"><label for="class">Class</label><br><select class="select-input valid" name="classid" id="classid"></select></span>');
        for(var item in data)
        {
            
           $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#classid');
            $('#class_menu').css({'display':'inline-block'}); 
        }
        }
        else {
           $('#class_menu').css({'display':'none'});           
        }
   });
    
   return false;
}

function getProfessionList(url, gameId) {

if(gameId == null) {
    gameId = $('#game').val();
    
}
     $.post(url+"character/select_profession", {       
        game_id: gameId
    }, function(response){
            $('#profession1').empty();
            $('#profession2').empty();
            $('#profession3').empty();
        if(response != '[]') {
            
        var data = $.parseJSON(response);
        for(var item in data)
        {
            
            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#profession1');
            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#profession2');
            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#profession3');
        }
        $('#profession_select').css({'display':'inline-block'});
        $('#char_save').css({'margin-top:':'0'}); 
        }
        else {
        $('#profession_select').css({'display':'none'});  
        $('#char_save').css({'margin-top:':'-40'}); 
        
        }
    });
    
   return false;
}

function changeProfessionList() {
//alert($('#profession1').val());


$("#profession2 option[value="+$('#profession1').val()+"]").remove();


}

$.fn.sortOptions = function(){
    $(this).each(function(){
        var op = $(this).children("option");
        op.sort(function(a, b) {
            if($(this).val() != '0') {
            return a.text > b.text ? 1 : -1;
            }
        })
        return $(this).empty().append(op);
    });
}

$(document).ready(function() {
    var previous;
    $('select[name="profession1"]').focus(function () {
        previous = this.value;
    }).change(function() {
        if($('#profession1').val() != '0'){        
        $("#profession2 option[value="+$('#profession1').val()+"]").remove();
        $("#profession3 option[value="+$('#profession1').val()+"]").remove();
        }
        if(previous != '0') {
        $("#profession2 option[value="+previous+"]").remove();
        $("#profession3 option[value="+previous+"]").remove();
        $('<option value="'+previous+'">'+$("#profession1 option[value='"+previous+"']").text()+'</option>').appendTo('#profession3');
        $('<option value="'+previous+'">'+$("#profession1 option[value='"+previous+"']").text()+'</option>').appendTo('#profession2');
       // $('#profession2').sortOptions();;
        previous = this.value;
        }
     
    });
    $('select[name="profession2"]').focus(function () {
        previous = this.value;
    }).change(function() {
        if($('#profession2').val() != '0'){        
        $("#profession1 option[value="+$('#profession2').val()+"]").remove();
        $("#profession3 option[value="+$('#profession2').val()+"]").remove();
        }
        if(previous != '0') {
        $("#profession1 option[value="+previous+"]").remove();
        $("#profession3 option[value="+previous+"]").remove();
        $('<option value="'+previous+'">'+$("#profession2 option[value='"+previous+"']").text()+'</option>').appendTo('#profession1');
        $('<option value="'+previous+'">'+$("#profession2 option[value='"+previous+"']").text()+'</option>').appendTo('#profession3');
        previous = this.value;
        }
    });
    $('select[name="profession3"]').focus(function () {
        previous = this.value;
    }).change(function() {
        if($('#profession3').val() != '0'){        
        $("#profession1 option[value="+$('#profession3').val()+"]").remove();
        $("#profession2 option[value="+$('#profession3').val()+"]").remove();
        }
        if(previous != '0') {
        $("#profession1 option[value="+previous+"]").remove();
        $("#profession2 option[value="+previous+"]").remove();
        $('<option value="'+previous+'">'+$("#profession3 option[value='"+previous+"']").text()+'</option>').appendTo('#profession1');
        $('<option value="'+previous+'">'+$("#profession3 option[value='"+previous+"']").text()+'</option>').appendTo('#profession2');
        previous = this.value;
        }
    });
});


function getCharacterList(url, gameId) {
     $('label.error').css('display', 'none');
     if(gameId == null) {
         gameId = $('#game').val();
     }
     $.post(url+"guild/select_characters", {       
        game_id: gameId,
        server_id: $('#server').val(),
        faction_id: $('#faction').val()
    }, function(response){
         $('#characterlist').empty();
        if(response != "[]") {
        var data = $.parseJSON(response);
        for(var item in data)
        {
            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#characterlist');
        }
        }
         else {
          $('<option value="">No character available</option>').appendTo('#characterlist');   
        }
       
    });
    
   return false;
}

function deleteEvent(url, evntId) {

    jConfirm("Do you want to cancel this event?",'Delete Confirmation', function(confirm){
        if (confirm) {
         $.post(url+'events/delete/',
        {
            event_id:evntId
        }
        , function(response) {
            window.location.replace('/events');
        });
    }
    });
    return false;
}

function deleteMemberInGuild (url, obj, charId) {
//     if(confirm("Do you want to remove from this '"+$(obj).attr("alt")+"' guild?"))
//    {
    jConfirm("Do you want to remove from this '"+$(obj).attr("alt")+"' guild?",'Remove Confirmation', function(confirm){
        if (confirm) {
        row= $(obj).closest('tr');
        $.post(url+'guild/remove/',
        {
            remove_id:$(obj).attr("id"),
            char_id: charId
        }
        , function(response) {
            row.remove(); 
        });
    }    
    });
    return false;
}

function unfriend(url, obj) {
//      if(confirm("Do you want to unfriend this '"+$(obj).attr("alt")+"' user?"))
//    {
    jConfirm("Do you want to unfriend this '"+$(obj).attr("alt")+"' user?",'Unfriend Confirmation', function(confirm){
        if (confirm) {
        row= $(obj).closest('tr');
        $.post(url+'user/unfriend/',
        {
            remove_id:$(obj).attr("id")
        }
        , function(response) {
           row.remove(); 
           location.reload();
        });
    } 
    });
    return false;
}

function unfriendRequest(url, Id, obj) {
 //   getMask();
    jConfirm("Do you want to unfriend this '"+$(obj).attr("alt")+"' user?",'Unfriend Confirmation', function(confirm){
        if (confirm) {
        row= $(obj).closest('tr');
        $.post(url+'user/unfriend/',
        {
            remove_id:Id
        }
        , function(response) {
            $('.mask').fadeOut();
           row.remove(); 
           location.reload();
        });
    } 
//    else{
//        $('.mask').fadeOut();
//    }
    });
    return false;
}

function showUnfriendButton(Id) {
    $('#unfriend'+Id).attr('src', '/public/images/delete_icon.png');
    $('#unfriend'+Id).removeAttr('disabled');
    return false;
}

function hideUnfriendButton(Id) {
    $('#unfriend'+Id).attr('src', '/public/images/delete_icon_gray.png');
    $('#unfriend'+Id).attr("disabled", true);
    return false;
}

function showDeleteButton(Id) {
    $('#delete_banner'+Id).css({'display':'block'});
    $('#banner_save'+Id).css({'display':'block'});
    return false;
}

function hideDeleteButton(Id) {
    $('#delete_banner'+Id).css({'display':'none'});
    $('#banner_save'+Id).css({'display':'none'});
    return false;
}

function zergitFeed(url, feedId, obj) {
    $.post(url+"feeds/zergit", {       
        feed_id: feedId
       
    }, function(response){
        if(response == 'success'){
       if(obj != null) {     
          if($(obj).attr('alt') == "zergs") {  
          $('#unzerg'+feedId).css({'display':'inline-block'});
      } 
      else {
          $('#unzergs'+feedId).css({'display':'inline-block'});
      }
          $('#zerg'+feedId).css({'display':'none'});
          $('#zergs'+feedId).css({'display':'none'});
        }
        else {
         $('#actual_zerg').css({'display':'none'});
         $('#hid_zerg').css({'display':'inline-block'});
     }
     }
     
    });
    return false;
}

function unzergitFeed(url, feedId, obj) {
    $.post(url+"feeds/unzergit", {       
        feed_id: feedId
        
    }, function(response){
        if(response == 'success'){
            if($(obj).attr('alt') == "unzergs") {
                $('#zerg'+feedId).css({
                    'display':'inline-block'
                });
            }
            else {
                $('#zergs'+feedId).css({
                    'display':'inline-block'
                });
            }
            $('#unzergs'+feedId).css({
                'display':'none'
            });
            $('#unzerg'+feedId).css({
                'display':'none'
            });
        }
    });
    return false;
}

function zergitGuildFeed(url, feedId, obj) {
    $.post(url+"guild/zergit", {       
        feed_id: feedId
       
    }, function(response){
        if(response == 'success'){
      if(obj != null) {      
          if($(obj).attr('alt') == "zergs") {  
          $('#unzerg'+feedId).css({'display':'inline-block'});
      } 
      else {
          $('#unzergs'+feedId).css({'display':'inline-block'});
      }
          $('#zerg'+feedId).css({'display':'none'});
          $('#zergs'+feedId).css({'display':'none'});
        }
        else {
         $('#actual_zerg').css({'display':'none'});
         $('#hid_zerg').css({'display':'inline-block'});
        }
        }
    });
    return false;
}

function unzergitGuildFeed(url, feedId, obj) {
    $.post(url+"guild/unzergit", {       
        feed_id: feedId
        
    }, function(response){
        if(response == 'success'){
            if($(obj).attr('alt') == "unzergs") {
                $('#zerg'+feedId).css({
                    'display':'inline-block'
                });
            }
            else {
                $('#zergs'+feedId).css({
                    'display':'inline-block'
                });
            }
            $('#unzergs'+feedId).css({
                'display':'none'
            });
            $('#unzerg'+feedId).css({
                'display':'none'
            });
        }
    });
    return false;
}

function zergitComment(url, commentId, obj) {
    $.post(url+"feeds/comment_zergit", {       
        comment_id: commentId
       
    }, function(response){
        if(response == 'success'){
       if(obj != null) {     
          if($(obj).attr('alt') == "zergs") {  
          $('#unzerg'+commentId).css({'display':'inline-block'});
      } 
      else {
          $('#unzergs'+commentId).css({'display':'inline-block'});
      }
          $('#zerg'+commentId).css({'display':'none'});
          $('#zergs'+commentId).css({'display':'none'});
        }
        else {
         $('#actual_zerg').css({'display':'none'});
         $('#hid_zerg').css({'display':'inline-block'});
     }
     }
     
    });
    return false;
}

function unzergitComment(url, commentId, obj) {
    $.post(url+"feeds/comment_unzergit", {       
        comment_id: commentId
        
    }, function(response){
        if(response == 'success'){
            if($(obj).attr('alt') == "unzergs") {
                $('#zerg'+commentId).css({
                    'display':'inline-block'
                });
            }
            else {
                $('#zergs'+commentId).css({
                    'display':'inline-block'
                });
            }
            $('#unzergs'+commentId).css({
                'display':'none'
            });
            $('#unzerg'+commentId).css({
                'display':'none'
            });
        }
    });
    return false;
}

function zergitGuildComment(url, commentId, obj) {
    $.post(url+"guild/comment_zergit", {       
        comment_id: commentId
       
    }, function(response){
        if(response == 'success'){
      if(obj != null) {      
          if($(obj).attr('alt') == "zergs") {  
          $('#unzerg'+commentId).css({'display':'inline-block'});
      } 
      else {
          $('#unzergs'+commentId).css({'display':'inline-block'});
      }
          $('#zerg'+commentId).css({'display':'none'});
          $('#zergs'+commentId).css({'display':'none'});
        }
        else {
         $('#actual_zerg').css({'display':'none'});
         $('#hid_zerg').css({'display':'inline-block'});
        }
        }
    });
    return false;
}

function unzergitGuildComment(url, commentId, obj) {
    $.post(url+"guild/comment_unzergit", {       
        comment_id: commentId
        
    }, function(response){
        if(response == 'success'){
            if($(obj).attr('alt') == "unzergs") {
                $('#zerg'+commentId).css({
                    'display':'inline-block'
                });
            }
            else {
                $('#zergs'+commentId).css({
                    'display':'inline-block'
                });
            }
            $('#unzergs'+commentId).css({
                'display':'none'
            });
            $('#unzerg'+commentId).css({
                'display':'none'
            });
        }
    });
    return false;
}


/*Increase text area auto height */
$(document).ready(function() {
var txt = $('#feedtext');
var replytxt = $('.cmt-input');
var hiddenDiv = $('.hiddendiv');
var  content = null;
txt.addClass('txtstuff');

txt.keyup(function() {
    content = $(this).val();
    content = content.replace(/\n/g, '<br>');
    hiddenDiv.html(content + '<br class="lbr">');
   var regEx = /(src)=["']([^"']*)["']/gi;
   var matches = $('#feedtext').val().match(regEx);
   if(matches)
       {
           $(this).css('height', '40px');
       }
       else
           {
    $(this).css('height', hiddenDiv.height());
           }

});

replytxt.keyup(function() {
    content = $(this).val();
    content = content.replace(/\n/g, '<br>');
    hiddenDiv.html(content + '<br class="lbr">');
    $(this).css('height', hiddenDiv.height());
});
});

function getCommentHeight(feedId, obj) {
    var hiddenDiv = $('.hiddendiv');
    var  content = null;
    content = $(obj).val();

    content = content.replace(/\n/g, '<br>');
    hiddenDiv.html(content + '<br class="lbr">');
    $(obj).css('height', hiddenDiv.height());
//    $('#cmt-button'+feedId).css('margin-top', hiddenDiv.height()/2);
//    $('#cmtclose'+feedId).css('margin-top', hiddenDiv.height()/2);
    if($('#feed_cmt_'+feedId).val().trim().length > 0 ) {
        $('#cmt-button'+feedId).removeClass().addClass('cmt-button');
        $('#cmt-button'+feedId).removeAttr('disabled');
    }
    else {
        $('#cmt-button'+feedId).removeClass().addClass('cmt-button-white');
        $('#cmt-button'+feedId).attr("disabled", true);
    }
    return false;
}

function setBannerImg(form, url, div_id) { 
      var file = $('input[type="file"]').val();
    var exts = ['jpg','jpeg','png','gif'];
    if ( file ) {
        // split file name at dot
        var get_ext = file.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
        
        if ($.inArray(get_ext[0].toLowerCase(), exts ) > -1){
            
            var upload_image = $('#banner_image')[0].files[0];

            if(upload_image.size < 1000 * 2048){
                // Create the iframe...
                var iframe = document.createElement("iframe");
                iframe.setAttribute("id", "upload_iframe");
                iframe.setAttribute("name", "upload_iframe");
                iframe.setAttribute("width", "0");
                iframe.setAttribute("height", "0");
                iframe.setAttribute("border", "0");
                iframe.setAttribute("style", "width: 0; height: 0; border: none;");
 
                // Add to document...
                form.parentNode.appendChild(iframe);
                window.frames['upload_iframe'].name = "upload_iframe";
 
                iframeId = document.getElementById("upload_iframe");
 
                // Add event...
                var eventHandler = function () {
 
                    if (iframeId.detachEvent) iframeId.detachEvent("onload", eventHandler);
                    else iframeId.removeEventListener("load", eventHandler, false);
 
                    // Message from server...
                    if (iframeId.contentDocument) {
                        var content = iframeId.contentDocument.body.innerHTML;
                    } else if (iframeId.contentWindow) {
                        content = iframeId.contentWindow.document.body.innerHTML;
                    } else if (iframeId.document) {
                        content = iframeId.document.body.innerHTML;
                    }
                    //document.getElementById(div_id).innerHTML = content;
                    $('#'+div_id).css('display', 'none');
                    $('#banner_key').css({'display':'block','margin-top':'10px'});
                   
                     $('#exist_banner_img').attr("src",  $('#banner_img').attr('src'));
                    $('#exist_banner_img').css('display', 'none');
                    $('#banner_img').css('display', 'block');
                    $('#banner_img').attr("src", '/public/uploads/media/'+content);
                    $('#file_name').val(content);
                    $('#banner_selection').css('display', 'none');
                    $('#banner_save').css({
                        'display':'inline-block'
                    });
                    $('#banner_cancel').css({
                        'display':'inline-block'
                    });
 
                    // Del the iframe...
                    setTimeout('iframeId.parentNode.removeChild(iframeId)', 250);
                }
 
                if (iframeId.addEventListener) iframeId.addEventListener("load", eventHandler, true);
                if (iframeId.attachEvent) iframeId.attachEvent("onload", eventHandler);
 
                // Set properties of form...
                form.setAttribute("target", "upload_iframe");
                form.setAttribute("action", url+"feeds/setbanner");
                form.setAttribute("method", "post");
                form.setAttribute("enctype", "multipart/form-data");
                form.setAttribute("encoding", "multipart/form-data");
 
                // Submit the form...
                form.submit();
 
                //document.getElementById(div_id).innerHTML = "Uploading...";
                $('#'+div_id).css('display', 'inline-block');

            }
            else {
                jAlert('The file you selected is too big. Max file size limit is 2 MB');
            }
        } else {
            jAlert( "We don't support this file. Currently we support only JPG, JPEG, PNG and GIF files");
        }
    }
}

function saveBannerImg(url, obj) {
  $.post(url+"feeds/banner_save", {       
        file_name: $('#file_name').val(),
        guild_id: $(obj).attr('alt')
       
    }, function(response){ 
       $('#banner_selection').css('display', 'inline-block');
       $('.banner_button').css('display', 'none');
              var banner = response.split("/");
             var urlpath = "'/'";
             var space = "''";
             var banner_path = "'public/uploads/media/"+banner[0]+"'";
             var banner_id = "'"+banner[1]+"'";
//var link = 'onclick="return setExistingBanner("/", "", '+banner[1]+', "/public/uploads/media/'+banner[0]+'");"';
  $('<li id="li_remove_banner'+banner[1]+'" onmouseover="showDeleteButton('+banner_id+')" onmouseout="hideDeleteButton('+banner_id+')" style="display:inline-block; margin-top: 10px;"><img id="delete_banner'+banner[1]+'" onclick="return deleteExistingbanner('+banner_id+');" height="12px" width="12px" style="display: none; margin-left: 225px; margin-top:-15px;  cursor: pointer;" src="/public/images/delete-icon.gif" /><a href="#"><img width="220" height="137" onclick="return saveExistingbanner('+urlpath+','+space+','+banner_id+','+banner_path+');"  class="default-banner-images" alt="userbanner" src="/public/uploads/media/'+banner[0]+'" id="media'+banner[1]+'"></a></li>').appendTo('#append_existing_banner');
 $('#dd').css({'display':'block','margin-top':'10px'});
 $('#banner_img').attr("src", '/public/uploads/media/'+banner[0]);

});
return false;
}

function saveExistingbanner(url, viewId, Id, file){
var urlpath = "'"+url+"'";
var space ="'"+viewId+"'";
 var banner_id = "'"+Id+"'";
var banner_path = "'"+file+"'";
$('#banner_img').css({'display':'none'});
$('#exist_banner_img').css({'display':'block'});
$('#exist_banner_img').attr("src", url+file);
$('#upload_box').fadeOut("slow");
$('.mask').fadeOut("slow");
$('#save_cancel_existing').html('<input id = "exit_banner_save" style="display:block; margin-top:20px" type="button" class="save-button banner_button"  value="Save"  onclick="return setExistingBanner('+urlpath+','+space+','+banner_id+','+banner_path+');"  />  <input id = "exit_banner_cancel" style="display:block; margin-top:20px" type="button" class="save-button banner_button"  value="Cancel"  onclick="return cancelsaveExistingBanner();"  />')
$('#dd').css({'display':'none'});
}
function cancelsaveExistingBanner(){
$('#banner_img').css({'display':'block'});
$('#exist_banner_img').css({'display':'none'}); 
$('#exit_banner_save').remove();
$('#exit_banner_cancel').remove();
 $('#dd').css({'display':'block','margin-top':'10px'});
}

function cancelBannerImg(url, cur_file) {

    $.post(url+"feeds/banner_cancel", {       
        file_name: $('#file_name').val()
       
    }, function(response){
        if(cur_file == ''){
            $('#banner_img').attr("src", url+'public/images/print.png');
        }
        else {
            $('#banner_img').attr("src", url+'public/uploads/media/'+cur_file);
        }
        $('#banner_selection').css('display', 'inline-block');
        $('.banner_button').css('display', 'none');
        $('#banner_img').css({'display':'none'});
$('#exist_banner_img').css({'display':'block'});
    });
    return false;
}


function showBannerKey(){
    $('#banner_key').css({'display':'block'});
}

function hideBannerKey(){
    $('#banner_key').css({'display':'none'});
}

function setExistingBanner(url, viewId, Id, file) {
   // if(confirm("Do you want to delete this banner"))
   // {

        $.post(url+'character/set_banner/',
        {
            banner_id: Id,
            view_id: $('#view_id').val()
        }
        , function(response) {
             $('#upload_box').fadeOut("slow");
             $('#post_msg_box').fadeIn("slow");
             $('.mask').fadeIn("slow");
             $('#post_msg_box').html('<div align="center" style="margin-top:90px"><p style="font-size:48px;" class="popup-title poptitle">Successfully Saved</p></div><a id="msg_close" class="popupBoxClose"><img src="'+url+'public/images/popup-close.gif" onclick="closePostFeedSuccess()" /></a>');
             $('#banner_img').attr("src", url+file); 
            $('#exit_banner_save').remove();
            $('#exit_banner_cancel').remove();
             $('#dd').css({'display':'block','margin-top':'10px'});
             $('#banner_key').css({'display':'block','margin-top':'10px'});
    });
   // }
      return false;
      
      
}

//function setExistingGuildBanner(url, Id, guildId) {
//     $.post(url+'guild/set_banner/',
//        {
//            banner_id: Id,
//            guild_id: guildId
//        }
//        , function(response) {
//             $('#upload_box').fadeOut("slow");
//             $('#post_msg_box').fadeIn("slow");
//        });
//    return false;
//}

/*** Banner popup dropdown script ****/
	
function DropDown(el) {
				this.dd = el;
				this.opts = this.dd.find('ul.dropdown > li');
				this.val = [];
				this.index = [];
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});

					obj.opts.children('label').on('click',function(event){
						var opt = $(this).parent(),
							chbox = opt.children('input'),
							val = chbox.val(),
							idx = opt.index();

						($.inArray(val, obj.val) !== -1) ? obj.val.splice( $.inArray(val, obj.val), 1 ) : obj.val.push( val );
						($.inArray(idx, obj.index) !== -1) ? obj.index.splice( $.inArray(idx, obj.index), 1 ) : obj.index.push( idx );
					});
				},
				getValue : function() {
					return this.val;
				},
				getIndex : function() {
					return this.index;
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-3').removeClass('active');
				});

			});


function showPostFeedBox(Id) {
    getMask();
    $('#postbox'+Id).fadeIn("slow");
    return false;
}

function getMask() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
}

function hidePostFeedtBox(Id) {			
    $('#postbox'+Id).fadeOut(200);
    $('.mask').hide();
}

function postZergFeed(url, feedId, shareAs, mediaName, urlString, rezergCount) {
    $('#barload'+feedId).show();
    var pathname = window.location.href;
                    var str = pathname.split("/");
                    var qstr = str[3];
                    if(qstr == 'guild'){
                        var guild_parent_id = feedId;
                   }
                   else {
                       guild_parent_id = '';
                   } 
    var parentId = $('#parent_id'+feedId).val();
    if(parentId == "" || parentId == null) {
        parentId = feedId;
    }
    if(shareAs == null) {
        shareAs = $('#share_as'+feedId).val()
    }
        $.post(url+"feeds/post", {
            
            feedtext: $("#feedtext"+feedId).text(),
            feed_rezergtext: $("#feed_rezergtext"+feedId).val(), 
            shareas: shareAs,
            media_name: mediaName,
            url_string: urlString,
            parent_id: parentId,
            parent_guild_id:guild_parent_id
            
        }, function(response){
            if(response == 'success'){
                $('#barload'+feedId).hide();
                hidePostFeedtBox(feedId);
                getMask();
               $('#post_msg_box').fadeIn("slow");
               $('#post_msg_box').html('<div align="center" style="margin-top:90px"><p style="font-size:48px;" class="popup-title poptitle">Successfully Posted!</p></div><a id="msg_close" class="popupBoxClose"><img src="'+url+'public/images/popup-close.gif" onclick="closePostFeedSuccess()" /></a>');
               $('#re_zerg'+feedId).html(rezergCount + 1 + ' Re-Zergs');
            }
        });
    return false;
}

function postGuildZergFeed(url,guildId, shareAs, roleId, feedId, mediaId) {
    $('#barload'+feedId).show(); 
    var parentId = $('#parent_id'+feedId).val();
    if(parentId == "" || parentId == null) {
        parentId = feedId;
    }
        $.post(url+"guild/post", {
            feedtext: $("#feedtext"+feedId).text(),
            media_id: mediaId,
            guild_id: guildId,
            shareas: shareAs,
            guild_role_id: roleId,
            parent_id: parentId
            
        }, function(response){
            if(response == 'success'){
                $('#barload'+feedId).hide();
                hidePostFeedtBox(feedId);
                getMask();
                $('#post_msg_box').fadeIn("slow");
                $('#post_msg_box').html('<div align="center" style="margin-top:90px"><p style="font-size:48px;" class="popup-title poptitle">Successfully Posted!</p></div><a id="msg_close" class="popupBoxClose"><img src="'+url+'public/images/popup-close.gif" onclick="closePostFeedSuccess()" /></a>');
            }
        });
    return false;
}

function closePostFeedSuccess() {
    $('.mask').hide();
    $('#post_msg_box').hide();
}

function checkPostFeed() {
     var share_as = $('#shareas').val();
     if(share_as == null || share_as == ""){
          jAlert('Please select your share as your ZergID or Character');   
     }
    return false;
}
   
function showSendMessageBox(Id) {
    getMask();
    $('#smsgbox'+Id).fadeIn("slow");
    return false;
}

function hideSendMessage(Id) {	
    $('#smsgbox'+Id).fadeOut(200);
    $('.error_msg').hide();
    $('.mask').hide();
}   

$(document).ready(function () {
  function enablefeedpostbutton(){
        if($('#feedtext').val().trim().length > 0 || $("#media_icon").val() != "" || $("#youtube_url").val() != "" || $("#embed_url").val() != "") {
   
        $('#post').removeClass().addClass('save-button');
        $('#post').removeAttr('disabled');
        }
        else {
         $('#post').removeClass().addClass('post-button-white');
         $('#post').attr("disabled", true);
        }
    }
     $( "#feedtext" ).keyup(function() {
            enablefeedpostbutton()
     });
      $( ".main_content" ).mouseover(function() {
          enablefeedpostbutton()
      });
//       $('#feedtext').keyup(function () {
//        if($('#feedtext').val().trim().length > 0 || $("#media_icon").val() != "") {

//        $('#post').removeClass().addClass('save-button');
//        $('#post').removeAttr('disabled');
//        }
//        else {
//         $('#post').removeClass().addClass('post-button-white');
//         $('#post').attr("disabled", true);
//        }
//    });

   $('#character_name').keyup(function() {
        if(($('#character_name').val().trim().length > 0) && ($('#game').val() != "")) {
                $('#btn_attach_media').removeClass().addClass('save-button');
                $('#btn_attach_media').removeAttr('disabled');
                $('#char_save').removeClass().addClass('save-button');
                $('#char_save').removeAttr('disabled');                                 
        }
        else {
                $('#btn_attach_media').removeClass().addClass('post-button-white');
                $('#btn_attach_media').attr('disabled','disabled');
                $('#char_save').removeClass().addClass('post-button-white');
                $('#char_save').attr('disabled','disabled');
        }
    });
    $('#game').change(function() {
           if(($('#character_name').val().length > 0) && ($('#game').val() != "" )) {
           addAtrr();
        } 
         else {
           removeAttr();
        }
    });
    
//     $('#char_save').click(function() {
//      var mini_bio = $("#enable_minibio").attr('checked') ? 1 : 0;
//           if(($('#bio').val() == '') && (mini_bio == 1)) {
//           alert("Please enter mini bio");
//           return false;
//        } 
         
 //   });
});

function addAtrr() {
    $('#btn_attach_media').removeClass().addClass('save-button');
    $('#btn_attach_media').removeAttr('disabled');
    $('#char_save').removeClass().addClass('save-button');
    $('#char_save').removeAttr('disabled');
}

function removeAttr() {
    $('#btn_attach_media').removeClass().addClass('post-button-white');
    $('#btn_attach_media').attr('disabled');
    $('#char_save').removeClass().addClass('post-button-white');
    $('#char_save').attr('disabled');
}

function checkCommentIsEmpty(Id) {
     if($('#feed_cmt_'+Id).val().trim().length > 0 ) {
        $('#cmt-button').removeClass().addClass('save-button');
        $('#cmt-button').removeAttr('disabled');
        }
        else {
         $('#cmt-button').removeClass().addClass('post-button-white');
         $('#cmt-button').attr("disabled", true);
        }
}

function showFriendRequestBox(Id) {
    getMask();
    $('#invite_box'+Id).fadeIn("slow");
    return false;
}

function hideFriendRequestBox(Id) {
    $('#invite_box'+Id).fadeOut("slow");
    $('.mask').hide(); 
}


function sendInviteRequest(url, Id) {
    var charId = $('#sendeas'+Id).val();
    var comment = $('#req_cmt'+Id).val();

    if(charId == null || charId == "") {
        jAlert('Please select your send as...');
    }
    else if(comment.length == 0) {
        jAlert('Please enter your comment');
    }
    else {
        if(charId == 0) {
            charId = null;
        }
        $('#bar_load').show();
        $.post(url+"user/friend_request", {       
            character: charId,
            linked_id : Id,
            comment: comment,
            subject: $('#friend_subject').val()
            
        }, function(response){
            if(response == 'success'){
                $('#bar_load').hide();
                $('#btn-invite'+Id).html('<input type="button" value="Request sent" class="invite-button invite-white-button" disabled>');
                hideFriendRequestBox(Id)
                loadMsgBox();
            }
        });
    }
    return false;
}

function hideMsgBox() {
 $('#msg_box').hide();
 $('.mask').hide(); 
}

$(document).ready(function() {
        //clicking the parent checkbox should check or uncheck all child checkboxes
        $(".parentCheckBox").click(
            function() {

                $(this).parents('fieldset:eq(0)').find('.childCheckBox').attr('checked', this.checked);
                if (this.checked == true) {
                    $('.myselect').attr('disabled', true);
                    $('.myselect').addClass('rsvp-disable');
                    $('#appr_select').attr('disabled', false);
                    $('#appr_select').removeClass('rsvp-disable');
                }
                else {
                    $('.myselect').attr('disabled', false);
                    $('.myselect').removeClass('rsvp-disable');
                    $('#appr_select').attr('disabled', true);
                    $('#appr_select').addClass('rsvp-disable');
                }
            }
        );
        //clicking the last unchecked or checked checkbox should check or uncheck the parent checkbox
        $('.childCheckBox').click(
            function() {
                if ($(this).parents('fieldset:eq(0)').find('.parentCheckBox').attr('checked') == true && this.checked == false)
                  //   alert(1);
                    $(this).parents('fieldset:eq(0)').find('.parentCheckBox').attr('checked', false);
                if (this.checked == true) {
//                   $('#em'+this.value).attr('disabled', true);
//                   $('#em'+this.value).addClass('rsvp-disable');
//                   $('#appr_select').attr('disabled', false);
//                   $('#appr_select').removeClass('rsvp-disable');
                    var flag = true;
                    $(this).parents('fieldset:eq(0)').find('.childCheckBox').each(
	                    function() {
	                        if (this.checked == false)
	                            flag = false;
	                    }
                    );
                    $(this).parents('fieldset:eq(0)').find('.parentCheckBox').attr('checked', flag);
                }
                else {
                    $('#em'+this.value).attr('disabled', false);
                    $('#em'+this.value).removeClass('rsvp-disable');
                    if($('.childCheckBox').is(':checked')) {
                    $('#appr_select').attr('disabled', false);
                    $('#appr_select').removeClass('rsvp-disable');
                    }
                    else {
                        $('#appr_select').attr('disabled', true);
                        $('#appr_select').addClass('rsvp-disable');
                    }
                }
                 if($('.childCheckBox').filter(':checked').length > 1) {
                    $('.childCheckBox:checked').each(function(){
                        $('#em'+this.value).attr('disabled', true);
                        $('#em'+this.value).addClass('rsvp-disable');
                    });
                    $('#appr_select').attr('disabled', false);
                    $('#appr_select').removeClass('rsvp-disable');
                }
                else {
                    $('.rsvp-select').attr('disabled', false);
                    $('.rsvp-select').removeClass('rsvp-disable');
                    $('#appr_select').attr('disabled', true);
                    $('#appr_select').addClass('rsvp-disable');
                }
            }
        );
    }
);
    
function clearFbSession(url) {
    $.post(url+'feeds/facebook_destroy_session/',
    {
        url:url,
	facebook_active:$('#twitter_active').val()
    }
    , function(response) {
        $('#fb_link').css('display', 'none');
        $('#hfb_link').css('display', 'none');
        $('#hfb_unlink').css('display', 'inline-block');
    });
    return false;
}

function clearTwitterSession(url) {
     $.post(url+'feeds/twitter_destroy/',
        {
            url:url,
            twitter_active:$('#twitter_active').val()
        }
        , function(response) {
        $('#twit_link').css('display', 'none');
        $('#htwit_link').css('display', 'none');
        $('#htwit_unlink').css('display', 'inline-block');
       });
    return false;
}

function Twitterfeedon(url){
    $.post(url+'feeds/feedtwitter_on/',
        {
            url:url
        }
        , function(response) {
        $('#twit_unlink').css('display', 'none');
        $('#htwit_unlink').css('display', 'none');
        $('#htwit_link').css('display', 'inline-block');
       });
    return false; 
}
function facebookfeedon(url){
   $.post(url+'feeds/facebook_on/',
        {
            url:url
        }
        , function(response) {
        $('#fb_unlink').css('display', 'none');
        $('#fb_link').css('display', 'none');
        $('#hfb_link').css('display', 'inline-block');
       });
    return false;  
}

function openTwitterLoginPopup(url) {
     var screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
     var screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop
        $.oauthpopup({
            path: url+ 'feeds/twitter_connect/',
            width:500,
            height:300,
            callback: function(){
               // window.location.reload();
//            $('.twit_unlink').css('display', 'none');
//            $('#htwit_link').css('display', 'inline-block');
            //$('#twit_unlink').css('display', 'none'); 
            }
        });
       // e.preventDefault();
        return false;
}
function openTwitterfeedLoginPopup(url) {
     var screenX    = typeof window.screenX != 'undefined' ? window.screenX : window.screenLeft;
     var screenY    = typeof window.screenY != 'undefined' ? window.screenY : window.screenTop
        $.oauthpopup({
            path: url+ 'feeds/feedtwitter_connect/',
            width:500,
            height:300,
            callback: function(){
               // window.location.reload();
//            $('.twit_unlink').css('display', 'none');
//            $('#htwit_link').css('display', 'inline-block');
            //$('#twit_unlink').css('display', 'none'); 
            }
        });
       // e.preventDefault();
        return false;
}

function openFbLoginPopup(url){
    $.oauthpopup({
            path: url+ 'feeds/facebook_connect/',
            width:500,
            height:300,
            callback: function(){
            // $('.fb_unlink').css('display', 'none');
            // $('.fb_link').css('display', 'inline-block');
            }
        });
    return false;
}

function openFbfeedLoginPopup(url){
    $.oauthpopup({
            path: url+ 'feeds/facebookfeed_connect/',
            width:500,
            height:300,
            callback: function(){
            // $('.fb_unlink').css('display', 'none');
           //  $('.fb_link').css('display', 'inline-block');
            }
        });
    return false;
}

function closeGuildApplyPopup() {
    $('#msg_box').hide();
    $('.mask').hide();
    $('#guild_apply').html('<input type="button" value="Applied" class="req-button reqested-button" id="applied_guild" disabled  style="margin-top: 6px; margin-right: 15px;"/>');
}

function closeFriendRequestPopup() {
    $('#msg_box').hide();
    $('.mask').hide();
    $('#frnd_req_btn').html('<input type="button" value="Requested" class="req-button reqested-button" id="btn_friend_reqsted" disabled />');
}

function playYotubeVideo(Id, video, obj) {
    var iframe = document.createElement("iframe");
    iframe.setAttribute("src",
          "https://www.youtube.com/embed/" + video 
        + "?rel=0&autoplay=1&autohide=1&border=0&wmode=opaque&enablejsapi=1"); 
     iframe.style.width  = obj.style.width;
    iframe.style.height = obj.style.height;
    $('#vid_wrapper_'+Id).html(iframe);
    return false;
}

    function load_crop_popup(form, url, directory) {
    var file = $('input[type="file"]').val();
    var exts = ['jpg','jpeg','png','gif'];
    var get_ext = file.split('.');
        // reverse name to check extension
        get_ext = get_ext.reverse();
	var upload_image = $('input[type="file"]')[0].files[0];
        if ( $.inArray ( get_ext[0].toLowerCase(), exts ) > -1){
	if(upload_image.size < 1000 * 2048){
        $('.img-error').css('display', 'none');    
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#back').hide();
        $('#char_next').hide();
        $('#skip').hide();
        $('#next').hide();
        $('#image_instruction').hide();
        $('#image_block').removeClass();
        $('#char_image_block').removeClass();
        $('.mask').css({
            'width':maskWidth,
            'height':maskHeight
        });
        $('.mask').fadeIn(100); 
        $('.mask').fadeTo("fast",0.8);
        $('#crop_box').fadeIn("slow");
        
        // Create the iframe...
        var iframe = document.createElement("iframe");
        iframe.setAttribute("id", "upload_iframe");
        iframe.setAttribute("name", "upload_iframe");
        iframe.setAttribute("width", "0");
        iframe.setAttribute("height", "0");
        iframe.setAttribute("border", "0");
        iframe.setAttribute("style", "width: 0; height: 0; border: none;");
        $('#crop_load').css('display', 'block');
        // Add to document...
        form.parentNode.appendChild(iframe);
        window.frames['upload_iframe'].name = "upload_iframe";
        iframeId = document.getElementById("upload_iframe");
        // Add event...
        var eventHandler = function () {
            
            if (iframeId.detachEvent) iframeId.detachEvent("onload", eventHandler);
            else iframeId.removeEventListener("load", eventHandler, false);
            
            // Message from server...
            if (iframeId.contentDocument) {
                var content = iframeId.contentDocument.body.innerHTML;
            } else if (iframeId.contentWindow) {
                content = iframeId.contentWindow.document.body.innerHTML;
            } else if (iframeId.document) {
                content = iframeId.document.body.innerHTML;
            }
            $('#crop_load').css('display', 'none');
            $('#crop_div').css('display', 'block');
            $('#profileimage').val(content);
            $(".example").html('<div class="default"><div class="cropMain"></div><div class="cropSlider"></div></div>');
            one=new CROP;
            one.init(".default");
            one.loadImg(url+directory+content);
            
            // Del the iframe...
            setTimeout('iframeId.parentNode.removeChild(iframeId)', 250);
        }
        
        if (iframeId.addEventListener) iframeId.addEventListener("load", eventHandler, true);
        if (iframeId.attachEvent) iframeId.attachEvent("onload", eventHandler);
        
        // Set properties of form...
        form.setAttribute("target", "upload_iframe");
        form.setAttribute("action", url+"helper/save_image");
        form.setAttribute("method", "post");
        form.setAttribute("enctype", "multipart/form-data");
        form.setAttribute("encoding", "multipart/form-data");
        
        // Submit the form...
        form.submit();
	 }
        else
            {
               jAlert('The file you selected is too big. Max file size limit is 2 MB');  
            }
        }
        else {
            var input_file = $("#profile_image");
            input_file.replaceWith(input_file = input_file.clone( true ));
            $('.img-error').html('Please select a valid image file (jpg, png and gif are allowed)').fadeIn(500);
        }
    }

   (function($) { 
  $.extend($,{placeholder: {
      browser_supported: function() {
        return this._supported !== undefined ?
          this._supported :
          ( this._supported = !!('placeholder' in $('<input type="text">')[0]) );
      },
      shim: function(opts) {
        var config = {
          color: '#D5D5D5',
          cls: 'placeholder',
          selector: 'input[placeholder]'
        };
        $.extend(config,opts);
        return !this.browser_supported() && $(config.selector)._placeholder_shim(config);
      }
  }});

  $.extend($.fn,{
    _placeholder_shim: function(config) {
      function calcPositionCss(target)
      {
        var op = $(target).offsetParent().offset();
        var ot = $(target).offset();

        return {
          top: ot.top - op.top,
          left: ot.left - op.left,
          width: $(target).width()
        };
      }  
      return this.each(function() {
        var $this = $(this);

        if( $this.is(':visible') ) {

          if( $this.data('placeholder') ) {
            var $ol = $this.data('placeholder');
            $ol.css(calcPositionCss($this));
            return true;
          }

          var possible_line_height = {};
          if( !$this.is('textarea') && $this.css('height') != 'auto') {
            possible_line_height = {lineHeight: $this.css('height'), whiteSpace: 'nowrap'};
          }

          var ol = $('<label />')
            .text($this.attr('placeholder'))
            .addClass(config.cls)
            .css($.extend({
              position:'absolute',
              display: 'inline',           
              overflow:'hidden',
              color: config.color,
              cursor: 'text',
              paddingTop: $this.css('padding-top'),
              paddingRight: $this.css('padding-right'),
              paddingBottom: $this.css('padding-bottom'),
              paddingLeft: $this.css('padding-left'),
              fontSize: $this.css('font-size'),
              fontFamily: $this.css('font-family'),
              fontStyle: $this.css('font-style'),
              fontWeight: $this.css('font-weight'),
              textTransform: $this.css('text-transform'),
              backgroundColor: 'transparent',
              textAlign: $this.css('text-align'),
              zIndex: 99
            }, possible_line_height))
            .css(calcPositionCss(this))
            .attr('for', this.id)
            .data('target',$this)
            .click(function(){
              $(this).data('target').focus();
            })
            .insertBefore(this);
          $this
            .data('placeholder',ol)
            .focus(function(){
              ol.hide();
            }).blur(function() {
              ol[$this.val().length ? 'hide' : 'show']();
            }).triggerHandler('blur');
          $(window).one("resize", function () {adjustToResizing(ol);});
        }
      });
    }
  });
})(jQuery);

jQuery(document).add(window).bind('ready load', function() {
  if (jQuery.placeholder) {
    jQuery.placeholder.shim();
  }
});

$(document).ready(function() {
    hideBannerKey()
   //  $('#loginbutton').attr('disabled','disabled');
   //  $('#signupbutton').attr('disabled','disabled');

});

function charNamevalidate() 
            {
            var url ='/';
            var char_name = $('#character_name').val();
            var game_id = $('#game').val();
            var server_id = $('#server').val();
            var faction_id = $('#faction').val();
            $.post(url+"character/validate_char_name", {
            charname: char_name,
            gameid: game_id,
            serverid: server_id,
            factionid: faction_id
            }, function(response){
            if(response)
            {
                jAlert('You have already added this character');       
                return false;
            }
            else
                {
                    saveCharacterInfo(null, null, null);
                }
            });
            return false;
            }
             
function deleteExistingbanner(Id){
    var url = location.protocol + "//" + location.hostname + '/';
    var exit_img = $("#exist_banner_img");
    var src = exit_img.attr("src");
    var banner = src.split("/");
    var exit_img = $("#banner_img").attr("src");
    var save_banner = exit_img.split("/");
//if(confirm("Do you want to delete this banner"))
//    {
    jConfirm("Do you want to delete this banner",'Delete Confirmation', function(confirm){
    if (confirm) {
    $.post(url+"feeds/delete_banner", {
        bannerid: Id
    }, function(response){
        
        if(response == banner[4])
        {
            $('#banner_img').attr("src", '/public/images/print.png');  
            $('#exist_banner_img').attr("src", '/public/images/print.png');
        }
        else if(response == save_banner[4])
        {
            $('#banner_img').attr("src", '/public/images/print.png');  
            $('#exist_banner_img').attr("src", '/public/images/print.png');
        }
        $('#li_remove_banner'+Id).remove();
    });
    }
    });
    return false;
}

function zergSearch(url) {
    if($('#filer_keyword').val() != "" && $('#filer_keyword').val() != null){
        var game_name = document.getElementById("game_name");
        $('#search_load').html('<img src="'+ url +'public/images/msg_load_blue.gif"><span style="font-size:12px; position:absolute; margin-top:18px; margin-left:5px;">Loading...</span>');
            $.post(url+"search/options", {
            keyword: $('#filer_keyword').val(),
            game: game_name.options[game_name.selectedIndex].text,
            zerg_id: $('#zergid').attr('checked') ? 1 : 0,
            character: $('#character').attr('checked') ? 1 : 0,
            guild: $('#guild').attr('checked') ? 1 : 0,
            zergs: $('#zergs').attr('checked') ? 1 : 0,
            class_name: $('#class').val(),
            server: $('#server').val(),
            faction: $('#faction').val(),
            guild_name: $('#guild_name').val()
            }, function(response){
           $('#search_view').html(response);
        });
    }
    return false;
}

function add3Dots(string, limit)
{
  var dots = "...";
  if(string.length > limit)
  {
    // you can also use substr instead of substring
    string = string.substring(0,limit) + dots;
  }

    return string;
}

function rememberMeCheck(yCheck){
document.getElementById(yCheck).checked=!document.getElementById(yCheck).checked;
}

function getForgotPassword(url) {
    if($('#user_name').val().length > 0 && $('#user_name').val().trim() != ""){
        $('#for_pass_msg').css('display', 'none');
        $('#floading').html('<img src="'+url+'public/images/loader_double.gif" />');
        $.post(url+"home/forgot_password", {
            username: $('#user_name').val() 
        }, function(response){
            $('#floading').html('');
            if(response != "Not sent"){
               $('#forgot_popup').hide();
               $('#suc_msg').html('A new password is sent to your registered email id (<span style="color:#38CBF0">'+response+'</span>), Please check your email.');
               $('#success_fpopup').fadeIn("slow");
            }
            else{
                $('#for_pass_msg').css('display', 'inline-block');
                $('#for_pass_msg').html('Invalid username or email');
            }
        });
    }
    else {
        $('#for_pass_msg').css('display', 'inline-block');
        $('#for_pass_msg').html('Please enter your username or email');
    }
    return false;
}


//function loadPasswordPopup(Id) {
//    var maskHeight = $(document).height();
//    var maskWidth = $(window).width();
//    $('.mask').css({
//        'width':maskWidth,
//        'height':maskHeight
//    });
//    $('.mask').fadeIn(100); 
//    $('.mask').fadeTo("fast",0.8);
//    $('#'+Id).fadeIn("slow");
//    return false;
//}
//function hidePasswordPopup() {
//    $('.mask').hide();
//    $('.alpha_login_popup').hide();
//    $('#login_info').css('display', 'none');
//    $('label.error').css('display', 'none');
//    $('.password_form')[0].reset();
//    $('#pass_msg').css('display', 'none');
//    $('#change_sub_button').removeClass().addClass('form-button white_sbutton');
//    $('#change_sub_button').attr('disabled', 'disabled');
    
//}

//function hidePasswordPopup() {
//    var url = window.location.href.split('?');
//    var screen = url[1];
//    if(screen == "signup") {               
//        hidePassword();            
//    } else{
//        $('.mask').hide();
//        hidePassword();    
//  

//function hidePassword() {  
//    $('.alpha_login_popup').hide();
//    $('#login_info').css('display', 'none');
//    $('label.error').css('display', 'none');
//    $('.password_form')[0].reset();
//    $('#pass_msg').css('display', 'none');
//    $('#change_sub_button').removeClass().addClass('form-button white_sbutton');
//    $('#change_sub_button').attr('disabled', 'disabled');    
//}

function loadPasswordPopup(Id) {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100);
    $('#profile_block').fadeIn(800);
    $('#profile_block').fadeTo("fast",0.06);
    $('.instruction-title').fadeTo("fast",0.06);
    $('.instruction-content').fadeTo("fast",0.06);
    $('.mask').fadeTo("fast",0.8);
    $('#profile_block').css({'display':'none'});
    $('#back').css({'display':'none'});
    $('#prof_skip').css({'display':'none'});
    $('#save').css({'display':'none'});
    $('#'+Id).fadeIn("slow");
    return false;
}

function hidePasswordPopup() {
    var url = window.location.href.split('?');
    var screen = url[1];
    if(screen == "signup") {
       $('#profile_block').fadeTo("fast",1.0);
       $('.instruction-title').fadeTo("fast",1.0);
       $('#back').css({'display':'block'});
       $('#prof_skip').css({'display':'block'});
       $('#save').css({'display':'block'});
       $('#profile_instruction').css({'display':'block'});
       $('.instruction-content').fadeTo("fast",1.0);
       $('#profile_block').css({'display':'block'});
       hidePassword();
    } else{
        $('#profile_block').fadeTo("fast",1.0);
        $('.instruction-title').fadeTo("fast",1.0);
        $('.mask').hide();
        hidePassword();
    }
}

function hidePassword() {
    $('.alpha_login_popup').hide();
    $('#login_info').css('display', 'none');
    $('label.error').css('display', 'none');
    $('.password_form')[0].reset();
    $('#pass_msg').css('display', 'none');
    $('#change_sub_button').removeClass().addClass('form-button white_sbutton');
    $('#change_sub_button').attr('disabled', 'disabled');
}

function checkCurrentPassword(url){
    var password = $("#curr_pass").val();
    $('#pass_msg').css('display', 'none');
    if(password.length > 0){
        $('#loading').html('<img src="'+url+'public/images/loader_double.gif" />');
        $.post(url+"user/check_current_password", {
                
            password: password

        }, function(response){
            $('#loading').html('');
            if(response == "success"){
                $('#change_sub_button').removeClass('white_sbutton');
                $('#change_sub_button').removeAttr('disabled');
            }
            else {
                $('#change_sub_button').removeClass().addClass('form-button white_sbutton');
                $('#change_sub_button').attr('disabled', 'disabled');
                $('#pass_msg').css('display', 'inline-block');
                $('#pass_msg').html('Invalid Password');
            }
        });
             
    }
    return false; 
}

function changePassword(url) {
var password = $('#new_password').val();
var confirm_password = $('#confirm_password').val();
$('#pass_msg').css('display', 'inline-block');
if(password.length <= 0) {
     $('#pass_msg').html('Please provide a password');
}
else if(password.length < 8){
    $('#pass_msg').html('Please provide at least eight characters');
}
else if(confirm_password.length <= 0) {
    $('#pass_msg').html('Please provide a confirm password');
}
else if(confirm_password != password) {
    $('#pass_msg').html('Confirm Password does not match');
}
else {
    $('#pass_msg').css('display', 'none');
    $('#loading').html('<img src="'+url+'public/images/loader_double.gif" />');
    $.post(url+"user/change_password", {    
            password: password
        }, function(response){
            $('#loading').html('');
            if(response == "success") {
                $('#change_pass_popup').hide();
                $('#success_popup').fadeIn("slow");
            }
        });
}
return false;
}

//function openForgotPoupup() {
//$('#change_pass_popup').hide();
//$('#forgot_popup').css({'margin-left':-128+'px'});
//$('#success_fpopup').css({'margin-left':-160+'px'})
//$('#forgot_popup').fadeIn("slow");
//return false;
//}

//function checkRemberMe(url) {
//    if(document.getElementById("remember_me").checked==true){
//        var remeber_me = 1;
//    }
//    else {
//        remeber_me = 0;
//    }
//    $.post(url+"home/remember_me", {    
//        data: remeber_me
//    }, function(response){
//        alert(1);
//    });
//}
function getchareventSendtoList(url){
    var charId = $('#char_event_name').val();
    var split_Id= charId.split("-");
   // $('#append_char_friend').html('');
    if(charId){
    $.post(url+"character/select_character_name", {       
        char_id: split_Id[0],
        game_id: split_Id[1],
        server_id: split_Id[2],
        faction_id: split_Id[3]
    }, function(response){
        $('#append_char_friend').empty();
        if(response != "[]") {
            var data = $.parseJSON(response);
         //   $('#event_description_top').css({
         //       'margin-top':'250px'
         //   });
            $('<span class="section_span"><input type="checkbox" style="margin-right:10px;" class="parentCheckBox" value="1" onclick="return selectparentfriend();" name="select_all_char" id="select_all_char"><label for="evnt_select_all">Select All</label></span><br />').appendTo('#append_char_friend');
         $('#character_create_event_btn').removeClass().addClass('post-button-white');
        $('#character_create_event_btn').attr('disabled','disabled');
           var i = 1;
           for(var item in data)
            {
                var character_name = item.split('-');
                var character_id = "'"+character_name[1]+"'";
                $('<span style="padding-top:5px; width:250px;" class="section_span"><input type="checkbox" style="margin-right:10px;" class="childCheckBox '+character_name[1]+'" value="'+data[item]+'" name="event_members[]" onclick="return selectchildfriend('+character_id+');" id="event_members'+i+'"><label for="evnt_members">'+character_name[0]+'<span class="character_name"> ('+character_name[1]+')</span></label></span><br />').appendTo('#append_char_friend');
        i++;    
        }
        }
        else {
            $('#append_char_friend').css({
                'font-size':'13px'
            });
            $('#append_char_friend').html('');
            $('#character_create_event_btn').removeClass().addClass('save-button');
            $('#character_create_event_btn').removeAttr('disabled');
           // alert(1);
        }
       
    });
    }
    else
    {
     $('#append_char_friend').html('');
    }
   
    
    return false;
    
}

function selectparentfriend()
{
    if ($('.parentCheckBox').prop('checked') == true) {
        $('.childCheckBox').attr('checked',true);
        $('#character_create_event_btn').removeClass().addClass('save-button');
        $('#character_create_event_btn').removeAttr('disabled');
    }
    else
    {
        $('.childCheckBox').attr('checked',false);  
        $('#character_create_event_btn').removeClass().addClass('post-button-white');
        $('#character_create_event_btn').attr('disabled','disabled');
    }
     var checked_count = $('input[name="event_members[]"]:checked').length;
           // alert(checked_count);
            for(var i = 1; i<=checked_count; i++){
           for (var j = 1; j <=checked_count; j++)
                 {
            if (i!=j)
            {
            var $chk = $('input[id="event_members'+i+'"]:checked').attr("class"); 
            var $chk1 = $('input[id="event_members'+j+'"]:checked').attr("class");
            if($chk == $chk1){
            $("#event_members"+j).attr('checked',false);
         //   jAlert('Your authorized to choose only one character from same zerg');
            }
            }
                 }
            }
      
}

function selectchildfriend(username){
//    if($('input[class="childCheckBox"]:unchecked').length > 0){
//        $('.parentCheckBox').attr('checked',false); 
//    }
//    else
//    {
//        $('.parentCheckBox').attr('checked',true);   
//    }
if ($('.parentCheckBox').prop('checked') == true) {
    $('.parentCheckBox').attr('checked',false);
    $('.'+username).removeAttr('checked'); 
        //jAlert('Your authorized to choose only one character from ' +username);
}else{
    var $chk = $(+username); 
    $chk.click(function() 
    { 
        $chk.not(this).removeAttr('checked'); 
       // jAlert('Your authorized to choose only one character from ' +username);
    });
}
    if ($('input[name="event_members[]"]:checked').length > 0) {
      $('#character_create_event_btn').removeClass().addClass('save-button');
        $('#character_create_event_btn').removeAttr('disabled');  
    }
    else
        {
        $('#character_create_event_btn').removeClass().addClass('post-button-white');
        $('#character_create_event_btn').attr('disabled','disabled'); 
        }
}

function CreatecharacterEvent(url){
    var selected_event_members = new Array();
    $("input[name='event_members[]']:checked").each(function() {
        selected_event_members.push($(this).val());
    });
    var selected;
    selected = selected_event_members.join(',');
    // if($('#event_date').val() > $('#event_todate').val()){
    //    jAlert('End date cannot be greater than start date!');
    //    return false;
   // }
     if($('#event_from_time').val() == $('#event_to_time').val()){
        jAlert('Please select valid from and to time!');
        return false;
    }	
    if($('#event_name').val().trim() == ''){
       // jAlert('Please enter character name');
        return false;
    }
    if($('#event_date').val().trim() == ''){
       // jAlert('Please enter character name');
        return false;
    }
    if($('#char_event_name').val() == ''){
       // jAlert('Please enter character name');
        return false;
    }
    
//    if(selected_event_members == '')
//        {
//        jAlert('You must select sent to your friends ');
//           return false;    
//        }
	var currentdate = new Date();
    var datetime = currentdate.getFullYear() +"-"+(currentdate.getMonth()+1) + "-" + currentdate.getDate() + ' ' + currentdate.getHours() + ":" 
    + currentdate.getMinutes() + ":" + currentdate.getSeconds(); 
    var charId = $('#char_event_name').val();
    var event_timezone = $('#time_zone').val();
    var split_Id= charId.split("-");
    var rsvp = $('input:radio[name="rsvp_status"]:checked').val();
    var plusonersvp = parseInt(rsvp) + 1;
    $.post(url+"character/create_char_event", {
        charid: split_Id[0],
        event_name: $('#event_name').val(),
        event_date: $('#event_date').val(),
	event_from_date: $('#event_from_time').val(),
        event_to_date: $('#event_to_time').val(),
        event_send_to: selected,
        event_rsvp: plusonersvp,
        event_desc: $('#event_description').val(),
	create_date: datetime,
        event_timezone:event_timezone,
        guild_id: ''
    }, function(response){
    //  location.reload(true);
   // alert(response);
     window.location.replace(url+'feeds');
       
    });
    return false;
}

//function checkeditdateEvent(){
//if($('#event_date').val() > $('#event_todate').val()){
//        jAlert('End date cannot be greater than start date!');
//        return false;
//    }
//}

function cancelcharacterevent(url){
   window.location.replace(url+'events/index'); 
}

function cancelGuildevent(url,Id){
   window.location.replace(url+'guild/view/'+Id); 
}

 $(function() {
        var pathname = window.location.href.split("/");
        if(pathname[3] != "admin"){   
           $( ".popup_box" ).draggable();
        }
  });

$(function() {
         $('#aswift_1').css({'height':'70px'});
         $('#aswift_2').css({'height':'70px'});
         $('tr td.rsvp_role:nth-child(5)').css({'padding-left':'5px'});
         $('tr td.rsvp_role:nth-child(6)').css({'padding-left':'11px'});
         $('tr td.rsvp_role:nth-child(8)').css({'padding-left':'13px'});        
  });

  function feed_dropdown(){
 $(function() {
        
         var pathname = window.location.href;
         var str = pathname.split("/");
         var qstr = str[4];
         if(qstr == 'others'){
             $('.feed_dropdown').css({'display':'none'});
         }        
  });
}
