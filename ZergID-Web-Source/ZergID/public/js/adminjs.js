function showEditcharacterBox(url,characterid) {
getGameMask();
//alert(characterid);
$('#editcharacterbox').fadeIn("slow");
$('#char_info').html('');
$('#loading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$.post(url+'admin/view_characterdetail/',
{
characterid: characterid
}
, function(response) {
$('#loading').html('');
$('#char_info').html(response);
});
                
return false;
} 
function hideEditGameMessage() {	
    $('#smsgbox').fadeOut(200);
    $('#mask').hide();
}  
    
function getGameMask() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
}

function geteditServerList(url,gameId) {
    
    $.post(url+"admin/select_gameservers", {       
        game_id: gameId
    }, function(response){
        $('#server').empty();
        if(response != "[]") {
            var data = $.parseJSON(response);
            for(var item in data)
            {
                $('<option value="'+item+'">'+data[item]+'</option>').appendTo('#server');
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
    
    return false;
}

$(document).ready( function() {  
    
    
    $('.popupGameClose').click( function() {			
        unloadGameBox();
    });
    
   
});

function ClosePopup() {
    
   $('.popup_box1').fadeOut("slow");
    $('.mask').hide(); 
}

function popupGuildmembersClose() {
    
    var hidden_guildmemberid = $('#guild_dynamicid').val();
   //alert(hidden_guildmemberid);
   unloadGameBox();
        var guilddetails_membertrcnt =  $("#guild_memberstbl tr").length - 1;
        if(guilddetails_membertrcnt > 0){
         $('#guild_member_cnt_del'+hidden_guildmemberid).html(guilddetails_membertrcnt);
                $('#guild_members_count'+hidden_guildmemberid).css({
                  'display':'none'
                });
        }
}

function popupCharacterEditSuccessClose() {
    var characterservername = $( "#server option:selected" ).text();
    var hiddencharacterid = $('#hiddencharacterid').val();
    $('#server_name_view'+hiddencharacterid).css({
        'display':'none'
    });
    $('#edit_server_name'+hiddencharacterid).html(characterservername);
    unloadGameBox();
}

function unloadGameBox() {
    $('.popup_box').fadeOut("slow");
    $('.mask').hide(); 
    
}



function unloadGuildBox() {
    $('.popup_box').fadeOut("slow");
    $('.mask').hide(); 
    location.reload(true);
}

function deleteGame(url, game_id,game_name) {
    
                if(confirm("Do you want to delete " + game_name + " confirm")) {
                    $.post(url+'admin/gamedelete/',
                    {
                        gameid: game_id
                    }
                    , function(response) {
                getGameMask();
                $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                        $('#'+game_id+'game').css({
                    'display':'none'
                });
                 $('#game option[value="'+game_id+'"]').remove();
                
               //  viewGameadd(url);
                    });
                }
               
}


 function deleteServer(url, server_id, server_name,game_id) {

    
                if(confirm("Do you want to delete " + server_name + " confirm")) {
                   
                    $.post(url+'admin/serverdelete/',
                    {
                        serverid: server_id
                    }
                    , function(response) {
                         getGameMask();
               $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                      $('#'+server_id+'server').remove();
                    $('#'+server_id+'server').css({
                    'display':'none'
                    });
               loadgrid(game_id);
                    });
                   
                }
            }

            function deleteFaction(url, faction_id, faction_name,game_id) {

    
                if(confirm("Do you want to delete " + faction_name + " confirm")) {
                    $.post(url+'admin/deletefaction/',
                    {
                        factionid: faction_id
                    }
                    , function(response) {
                        //window.location.replace(url+'admin/add');
                       // location.reload(true);
                        $('#'+faction_id+'faction').css({
                    'display':'none'
                });
                getGameMask();
               $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
              
                    });
                    loadgrid(game_id);
                }
            }
            
             function deleteclass(url, class_id, class_name,game_id) {
//alert(class_id);
    
                if(confirm("Do you want to delete " + class_name + " confirm")) {
                    $.post(url+'admin/deleteclass/',
                    {
                        classid: class_id
                    }
                    , function(response) {
                       // alert(class_id);
                        //window.location.replace(url+'admin/add');
                       // location.reload(true);
                        $('#'+class_id+'class').css({
                    'display':'none'
                });
                getGameMask();
               $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                    });
                    loadgrid(game_id);
                }
            }
            
            

            function deleteProfession(url, profession_id, profession_name,game_id) {

    
                if(confirm("Do you want to delete this profession " + profession_name + " confirm")) {
                    $.post(url+'admin/deleteprofession/',
                    {
                        professionid: profession_id
                    }
                    , function(response) {
                        //window.location.replace(url+'admin/add');
                     //   location.reload(true);
                      //  alert(response);
                        $('#'+profession_id+'profession').css({
                    'display':'none'
                });
                getGameMask();
               $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                
                    });
                    loadgrid(game_id);
                }
            }
            
            
function ShowCharacterlist(url) {
 $('#character_details_grid').html('');
 $('#guild_title').hide();
 $('#hideguildedetails').hide();
$('#character_details_grid_loading').html('<div align="center" style="margin-left:90px;" id="popup"><img src="../../public/images/loading.gif"></div>');
$.post(url+'admin/character_details_view/'
                    , function(response) {
                        
                        $('#guild_title').hide();
                        $('#hideguildedetails').hide();
                        $('#character_details_grid_loading').html('');
                      $('#character_details_grid').html(response);
                    });

return false;
}

function ShowGuildlist(url) {

$('#guild_details_grid').html('');
$('#character_title').hide();
$('#hide_character_grid').hide();
$('#guild_details_grid_loading').html('<div align="center" style="margin-left:90px;" id="popup"><img src="../../public/images/loading.gif"></div>');
$.post(url+'admin/guild_details/'
                    , function(response) {
                        
                        $('#character_title').hide();
                        $('#hide_character_grid').hide();
                     $('#guild_details_grid_loading').html('');
                      $('#guild_details_grid').html(response);
                    });

return false;
}
 function post(url)
            { 
    var game_name=$("#game").val().trim();
    var text_name = $("#text_name").val();
   
      //alert(server_id);
    if(text_name == "") {
       // alert("Please enter game name");
        getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Please enter game name');
        this.text_name.focus();
        return false;
    }
    
    var server_validate = document.getElementsByName('dynfields[]'); 
    for (var ik = 0; ik < server_validate.length; ik++)
                 {
        for (var jk = 0; jk < server_validate.length; jk++)
                 {
            if (ik!=jk)
            {
                if (server_validate[ik].value.trim()==server_validate[jk].value.trim() && 

                    server_validate[ik].value.trim()!="" && server_validate[jk].value.trim()!="")
                    {
                //    alert("Same server name not allowed");
                     getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same server name not allowed '+ server_validate[ik].value.trim());
                  //  document.getElementById(server_validate[i]).select();
                 
                return false;
                }
            }
        }
    }
   
    
    //server base faction validation start here
     var class_name = $('#classfields').val();
    var server_validate = document.getElementsByName('dynfields[]'); 
    var server_validateId = $('#server').val();
    var faction_validateId = $('#faction').val();
    var faction_validate = document.getElementsByName('factionfields[]'); 
    var class_validate = document.getElementsByName('classfields[]'); 
    var server_count = server_validate.length; 
    var faction_count =  faction_validate.length;
    var class_count =  class_validate.length;
    var faction_name = $('#factionfields').val();
   
  //alert(class_count);
  //alert(faction_count);
  //alert(faction_validateId);
  
  if(faction_validateId == null || faction_validateId == 0)
      {
           for (var m = 0; m < class_validate.length; m++)
        {
            if (class_validate[m].value.trim() !='' && faction_validate[0].value.trim() =='')
            {
               // alert("Please enter faction name");
                 getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Please enter faction name');
                faction_validate[0].focus();
                return false;
            }
        }
      } 
      else
          {
    if(faction_validateId && class_count > 1 && faction_count >= 1)
    {
        for (var k = 1; k < faction_validate.length; k++)
        {
            if((faction_validate[k].value.trim() !="") && (class_validate || class_validate[0].value.trim() !='' || class_validate[1].value.trim() !=''))
            {
               // alert("Multiple class for multiple factions can not be entered. Please remove " + faction_validate[k].value);  
               getGameMask();
            $('#comepopupbox1').fadeIn("slow");
            $('#come_info1').html('Multiple class for multiple factions can not be entered. Please remove ' + faction_validate[k].value);
              return false;
            }
        } 
    }
          }
   
    for (var k = 1; k < faction_validate.length; k++)
    {
        if(faction_validate[k].value.trim() !="" && (class_validate[0].value.trim() !=''))
        {
           // alert("Multiple class for multiple factions can not be entered. Please remove " + faction_validate[k].value); 
           getGameMask();
            $('#comepopupbox1').fadeIn("slow");
            $('#come_info1').html('Multiple class for multiple factions can not be entered. Please remove ' + faction_validate[k].value);
           return false;
        }
    }
    //end here
    var class_validate = document.getElementsByName('classfields[]');  
       var faction_validate = document.getElementsByName('factionfields[]'); 
       
    for (var i = 0; i < faction_validate.length; i++)
                 {
        for (var j = 0; j < faction_validate.length; j++)
                 {
            if (i!=j)
            {
                if (faction_validate[i].value.trim()==faction_validate[j].value.trim() && 

                    faction_validate[i].value.trim()!="" && faction_validate[j].value.trim()!="")
                    {
                   // alert("Same faction name not allowed");
                   // document.getElementById(faction_validate[i]).select();
                   getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same faction name not allowed '+ faction_validate[i].value.trim());
                 
                return false;
                }
            }
        }
    }
       var class_validate = document.getElementsByName('classfields[]'); 
    for (var i = 0; i < class_validate.length; i++)
                 {
        for (var j = 0; j < class_validate.length; j++)
                 {
            if (i!=j)
            {
                if (class_validate[i].value.trim()==class_validate[j].value.trim() && 

                    class_validate[i].value.trim()!="" && class_validate[j].value.trim()!="")
                    {
                   // alert("Same class name not allowed");
                     getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same class name not allowed ' + class_validate[i].value.trim());
                   // document.getElementById(class_validate[i]).select();
                 
                return false;
                }
            }
        }
    }
    var profession_validate = document.getElementsByName('professionfields[]'); 
    for (var i = 0; i < profession_validate.length; i++)
                 {
        for (var j = 0; j < profession_validate.length; j++)
                 {
            if (i!=j)
            {
                if (profession_validate[i].value.trim()==profession_validate[j].value.trim() && 

                    profession_validate[i].value.trim()!="" && profession_validate[j].value.trim()!="")
                    {
                   // alert("Same profession name not allowed");
                     getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same profession name not allowed '+ profession_validate[i].value.trim());
                    //document.getElementById(profession_validate[i]).select();
                 
                return false;
                }
            }
        }
    }
    
var game_name=$("#game").val().trim();
var text_name=$("#text_name").val().trim();
var server_name =$('#dynfields').val();
var faction_name = $('#factionfields').val();
var clas_name = $('#classfields').val();
var profession_name = $('#professionfields').val();
var server_id = $('#server').val();
var faction_id = $('#faction').val();
var class_id = $('#classid').val();
var professionn_id = $('#professionid').val();
var faction_name = $('#faction').text();
var server_count = server_validate.length;
var faction_count = faction_validate.length;
var class_count = class_validate.length;
var profession_count = profession_validate.length;

if(game_name!='')
    {             
       
           if((server_id !='' && server_name == '' &&  server_count <= 1) && (professionn_id != '' && profession_name == '' && profession_count <= 1) && (faction_name == '' && faction_id !='' && faction_count <= 1) && (clas_name == '' && class_id !='' && class_count <= 1) )
           {
             //  alert('No changes are affected');
                getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('No changes are affected');
              // return false;
              // viewGameadd(url);
               return false;
           }
    }

   if(server_id !='')
       {
           for (var k = 1; k < server_validate.length; k++)
    {
        if(server_validate[k].value.trim() =="")
        { 
            //alert('Server name cannot empty');
             getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Server name cannot empty');
            return false;
        }
       }
       }
       if(faction_id !='')
       {
           for (var k = 1; k < faction_validate.length; k++)
    {
        if(faction_validate[k].value.trim() =="")
        { 
            //alert('Faction name cannot empty');
            getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Faction name cannot empty');
            return false;
        }
       }
       }
       if(class_id !='')
       {
           for (var k = 1; k < class_validate.length; k++)
    {
        if(class_validate[k].value.trim() =="")
        { 
            //alert('Class name cannot empty');
             getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Class name cannot empty');
            return false;
        }
       }
       }
       if(professionn_id !='')
       {
           for (var k = 1; k < profession_validate.length; k++)
    {
        if(profession_validate[k].value.trim() =="")
        { 
           // alert('Profession name cannot empty');
             getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Profession name cannot empty');
            return false;
        }
       }
       }
       
        if(faction_id !='')
       {
           for (var k = 1; k < faction_validate.length; k++)
    {
        if(faction_validate[k].value.trim() == "N/A" || faction_name == 'N/A')
        { 
            //alert('Faction name cannot empty');
            getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('For this game allow only one "N/A" faction');
            return false;
        }
       }
       }
       
       
       var faction_total_length = faction_validate.length;
       
       if(faction_total_length > 1){
           for (var i = 0; i < faction_validate.length; i++)
                 {
                    if(faction_validate[i].value.trim() == "N/A")
        { 
            //alert('Faction name cannot empty');
            getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('For this game allow only one "N/A" faction');
            return false;
        } 
                 }
       }
      
    
      // end here
      add_games(url,game_name,text_name);
                    
    
}

function add_games(url,game_name,text_name)
{
   
    var classfields = [];
    $.each($("input[name=classfields\\[\\]]"), function (indexInArray, valueOfElement) {
      classfields.push($(valueOfElement).val());
    });
    var dynfields = [];
    $.each($("input[name=dynfields\\[\\]]"), function (indexInArray, valueOfElement) {
      dynfields.push($(valueOfElement).val());
    });
     var professionfields = [];
    $.each($("input[name=professionfields\\[\\]]"), function (indexInArray, valueOfElement) {
      professionfields.push($(valueOfElement).val());
    });
     var factionfields = [];
    $.each($("input[name=factionfields\\[\\]]"), function (indexInArray, valueOfElement) {
      factionfields.push($(valueOfElement).val());
    });
     
       $.post(url+'admin/save_gameDetails/',
      //$.post(url+'admin//',
                    {
                        game_name: game_name,
                        text_name: text_name,
                        server:$('#server').val(),
                        faction:$('#faction').val(),
                        classid:$('#classid').val(),
                        professionfields:professionfields,
                        dynfields:dynfields,
                        factionfields:factionfields,
                        classfields:classfields
                        
                    }
                    , function(response) {
                     // alert(response);
                      //removeServerTextfield(1);
                getGameMask();
                $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                    viewGameGrid(url);
                    viewGameadd(url);
                   
                  // $("dynfields[]").remove();
                     
//                      if(!game_name)
//                          {
//                     $('<div class="accordin" id="'+response+'game" style="border-bottom: 1px solid #ECECEC; height: 40px;"><div style="float: left; margin-top: 12px; width: 70%; margin-left:25px;"><img class="arr" src="../../public/images/up-arrow.png" /> <span style="padding-left:20px; font-size:13px;">'+text_name+'</span></div><div style="float: left; margin-top: 12px; width:15%"> <img class="edit_icon" src="../../public/images/edit-icon.png" onclick = showEditGameBox("'+text_name+'","'+response+'")></div><div style="float: left; margin-top: 12px;  "> <img class="delete_icon" id="game_id" src="../../public/images/delete_icon.png" onclick = deleteGame("'+text_name+'","'+response+'")></div></div>').appendTo('#append_game');
//                          }
                  
                    });
                    return false;
}

function viewGameGrid(url) {

//$('#grid_loading').html('<div align="center" style="margin-left:90px; margin-top:150px;" id="popup"><img src="../../public/images/msg_load_blue.gif"></div>');


$.post(url+'admin/game_grid_details/', function(response) {
$('#grid_loading').html('');
$('#game_grid').hide();
$('#zergid_gamedetails').hide();
$('#get_game_grid').html(response);
});           
return false;
} 

function viewGameadd(url) {
$.post(url+'admin/game_add_details/', function(response) {
$('#hide_game_details').remove();
$('#get_game_add_grid').html(response);
});
                
return false;
} 
    
      function getgameFactionList(url,gameId) {
   
    //alert(url);
    $.post(url+"admin/select_gamefactions", {       
        game_id: gameId
    }, function(response){
        $('#faction').empty();
        if(response != "[]") {
            var data = $.parseJSON(response);
            for(var item in data)
            {
                $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#faction');
                $('#faction_menu').css({
                    'display':'inline-block'
                });
                $('#faction').css({
                    'display':'block'
                });
                $('#factionfields').css({
                    'display':'none'
                });
                $('#factionaddimage').css({
                    'float':'left',
                    'margin-left':'185px',
                    'margin-top':'-28px'
                });
            
            }
        }
        else {
            $('#faction').css({
                'display':'none'
            });
            $('#factionfields').css({
                'display':'block'
            });
            $('#factionaddimage').css({
                'float':'left',
                'margin-left':'185px',
                'margin-top':'-28px'
            });
        }
     
             getfactionClassList(url);   
    });
    
    return false;
}
            
//    //select ajax faction class profession start here        
//    function getserverFactionList(url) {
//    var serverId = $('#server').val();
//    if(serverId != 001)
//        {
//    $.post(url+"admin/select_serverfactions", {       
//        server_id: serverId
//    }, function(response){
//        $('#faction').empty();
//        if(response != "[]") {
//            var data = $.parseJSON(response);
//            for(var item in data)
//            {
//                $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#faction');
//                $('#faction_menu').css({
//                    'display':'inline-block'
//                });
//                $('#faction').css({
//                    'display':'block'
//                });
//                $('#factionfields').css({
//                    'display':'none'
//                });
//                $('#factionaddimage').css({
//                    'float':'left',
//                    'margin-left':'185px',
//                    'margin-top':'-28px'
//                });
//            
//            }
//        }
//        else {
//            $('#faction').css({
//                'display':'none'
//            });
//            $('#factionfields').css({
//                'display':'block'
//            });
//            $('#factionaddimage').css({
//                'float':'left',
//                'margin-left':'185px',
//                'margin-top':'-28px'
//            });
//        }
//        var factionId = $('#faction').val();
//       // getfactionClassList(url);
//       getServerClassList(url);
//                
//    });
//        }
//        else
//        {
//        var gameId = $('#game').val();
//        getgameFactionList(url,gameId);
//        getServerClassList(url);
//        }
//    
//    return false;
//}

//function getServerClassList(url) {
//       var serverId = $('#server').val();
//   // alert(factionId);
//    //alert(serverId);
//    $.post(url+"admin/select_serverclass", {       
//        server_id: serverId
//    }, function(response){
//        $('#classid').empty();
//        if(response != "[]") {
//            var data = $.parseJSON(response);
//            for(var item in data)
//            {
//                $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#classid');
//                $('#class_menu').css({
//                    'display':'inline-block'
//                }); 
//            
//                $('#classid').css({
//                    'display':'block'
//                });
//                $('#classfields').css({
//                    'display':'none'
//                });
//                $('#classaddimage').css({
//                    'float':'left',
//                    'margin-left':'185px',
//                    'margin-top':'-25px'
//                });
//            }
//        }
//        else {
//            $('#classid').css({
//                'display':'none'
//            });
//            $('#classfields').css({
//                'display':'block'
//            });
//            $('#classaddimage').css({
//                'float':'left',
//                'margin-left':'185px',
//                'margin-top':'-25px'
//            });          
//        }
//    });
//    
//    return false;
//}

function getfactionClassList(url) {
    var factionId = $('#faction').val();
   
    $.post(url+"admin/select_factionclass", {       
        faction_id: factionId
       // server_id: serverId
    }, function(response){
        $('#classid').empty();
        if(response != "[]") {
            var data = $.parseJSON(response);
            for(var item in data)
            {
                $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#classid');
                $('#class_menu').css({
                    'display':'inline-block'
                }); 
            
                $('#classid').css({
                    'display':'block'
                });
                $('#classfields').css({
                    'display':'none'
                });
                $('#classaddimage').css({
                    'float':'left',
                    'margin-left':'185px',
                    'margin-top':'-28px'
                });
            }
        }
        else {
            $('#classid').css({
                'display':'none'
            });
            $('#classfields').css({
                'display':'block'
            });
            $('#classaddimage').css({
                'float':'left',
                'margin-left':'185px',
                'margin-top':'-28px'
            });          
        }
    });
       
    
    return false;
}

function getGameProfessionList(url, gameId) {
    $.post(url+"admin/select_gameprofession", {       
        game_id: gameId
    }, function(response){
        $('#professionid').empty();
                                   
        if(response != "[]") {
            var data = $.parseJSON(response);
            for(var item in data)
            {
                $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#professionid');
                $('#server_menu').css({
                    'display':'inline-block'
                });
                $('#professionid').css({
                    'display':'block'
                });
                $('#professionfields').css({
                    'display':'none'
                });
                $('#professionaddimage').css({
                    'float':'left',
                    'margin-left':'185px',
                    'margin-top':'-28px'
                });
            ;
            }
        }
        else {
            $('#professionid').css({
                'display':'none'
            });
            $('#professionfields').css({
                'display':'block'
            });
            $('#professionaddimage').css({
                'margin-left':'185px',
                'margin-top':'-28px',
                'float':'left'
            });
        }
      
    });
    
    return false;
}
//select ajax faction class profession end

//add dynamic text box

function removedisable_text()
{
$('#dynfields').removeAttr("readonly");
$('#serveraddimage').css({'display':'block'});
$('#factionfields').removeAttr("readonly");
$('#factionaddimage').css({'display':'block'});
$('#classfields').removeAttr("readonly");
$('#classaddimage').css({'display':'block'});
$('#professionfields').removeAttr("readonly");
$('#professionaddimage').css({'display':'block'});
}

            
            var counter = 1;
            function addServerTextfield() {
                counter += 1;
                $('#custom').append(
                '<input  id="dynfields[]" class="normal-input" name="dynfields[]' + '" placeholder=" "  onkeyup = "return check_serveraddedname();" type="text" style ="width:178px;" autocomplete="off"><a  href="#" onclick=" return removeServerTextfield(this);"> <img style =" vertical-align: middle" src="../../public/images/delete_icon.png" /></a><br>');
                return false;    
            }

            function removeServerTextfield(obj) {
                var $this = $(obj);
                $this.add($this.prev()).add($this.next()).remove();
                check_serveraddedname();
                removedisable_text();
                return false;
            }

            function addClassTextfield(){
                counter += 1;
                $('#classcustom').append(
                '<input  id="classfields[]" name="classfields[]' + '" placeholder=" "  onkeyup ="return check_classaddedname();" type="text" class = "normal-input" style ="width:178px;" autocomplete="off"><a href="#" onclick=" return removeClassTextfield(this);"> <img style =" vertical-align: middle" src="../../public/images/delete_icon.png" /></a><br>');
                return false;              
            } 
            function removeClassTextfield(obj) {
                var $this = $(obj);
                $this.add($this.prev()).add($this.next()).remove();
                check_classaddedname();
                removedisable_text();
                return false;
            }
            
            function addFactionTextfield(){
                counter += 1;
                $('#factioncustom').append(
                '<input  id="factionfields[]" name="factionfields[]' + '" placeholder=" "  onkeyup ="return check_factionaddedname();" type="text" class = "normal-input" style ="width:178px;" autocomplete="off"><a  href="#" onclick=" return removeFactionTextfield(this);"> <img style =" vertical-align: middle" src="../../public/images/delete_icon.png" /></a><br>');
                return false;              
            }
            function removeFactionTextfield(obj) {
                var $this = $(obj);
                $this.add($this.prev()).add($this.next()).remove();
                check_factionaddedname();
                removedisable_text();
                return false;
            }

            function addProfessionTextfield(){
                counter += 1;
                $('#professioncustom').append(
                '<input  id="professionfields[]" name="professionfields[]' + '" placeholder=" "  onkeyup ="return check_professionaddedname();" type="text" class = "normal-input" style ="width:178px;" autocomplete="off"><a href="#" onclick=" return removeClassTextfield(this);"> <img style =" vertical-align: middle" src="../../public/images/delete_icon.png" /></a><br>');
                return false;
            }
            function removeProfessionTextfield(obj) {
                var $this = $(obj);
                $this.add($this.prev()).add($this.next()).remove();
                check_professionaddedname(); 
                removedisable_text();
                return false;
            }
            //end add dynamic text box
                       
function showEditGameBox(gameId) {
getGameMask();
var game_value = $('#game_name'+gameId).text();
$('#edit_gamename').val(game_value);
$('#edit_gameid').val(gameId);
$('#editgamebox').fadeIn("slow");
return false;
}

   
function showEditserverBox(serverName,serverId,gameId) {
        getGameMask();
      $('#edit_servername').val(serverName);
        $('#edit_serverid').val(serverId);
         $('#edit_gameid').val(gameId);
        $('#editserverbox').fadeIn("slow");
        return false;
    }
    
    function showEditprofessionBox(professionName,professionId,gameId) {
        getGameMask();
      $('#edit_professionname').val(professionName);
        $('#edit_professionid').val(professionId);
        $('#edit_professiongameid').val(gameId);
        $('#editprofessionbox').fadeIn("slow");
        return false;
    }
    
    function showEditclassBox(className,classId,factionId,gameid) {
        getGameMask();
      $('#edit_classname').val(className);
        $('#edit_classid').val(classId);
         $('#edit_classfactionid').val(factionId);
          $('#edit_classgameid').val(gameid);
        $('#editclassbox').fadeIn("slow");
        return false;
    }

 function Setdefaultimage(url,characterid)
 {
     
     $.post(url+'admin/change_defaultimage/',
                    {
                        characterid: characterid
                    }
                    , function(response) {
                      
                    $('#showcharacterimg').css({
                    'display':'none'
                    });
                    $('#showdefaultimg').css({
                    'display':'block'
                    });
                    $('#profileimage').val('default.jpeg');
                    });
 }
 
 function Setdefaultguildimage(url,guildid)
 {
     
     $.post(url+'admin/change_defaultguildimage/',
                    {
                        guildid: guildid
                    }
                    , function(response) {
                      
                    $('#showguildimg').css({
                    'display':'none'
                    });
                    $('#showdefaultimg').css({
                    'display':'block'
                    });
                    $('#profileimage').val('default.jpeg');
                    });
 }
 
 
 
 function deleteCharacter(url,characterid,character_name,obj) {
     var character_count = $('#character_count').text();
     

                if(confirm("Do you want to delete " + character_name + " confirm")) {
                    row= $(obj).closest('tr');
                    $.post(url+'admin/characterdelete/',
                    {
                        characterid: characterid
                    }
                    , function(response) {
                      getGameMask();
                      row.remove(); 
                     $('#character_count').html(character_count-1);
                    
                   //  $('#after_del_char_cnt').html(count_character);
                     $('#deletecharacterbox').fadeIn("slow");
                      $('#char_del_info').html(response);
//                        $('#row'+characterid).css({
//                    'display':'none'
//                });
                    });
                }
}
function removeCharacterdetails(url,characterid,character_name) {
    var character_count = $('#character_count').text();
                if(confirm("Do you want to delete " + character_name + " confirm")) {
                    $.post(url+'admin/characterdelete/',
                    {
                        characterid: characterid
                    }
                    , function(response) {
                      getGameMask();
                      $('#editcharacterbox').hide();
                      $('#deletecharacterbox').fadeIn("slow");
                      $('#character_count').html(character_count-1);
                      $('#char_del_info').html(response);
                        $('#row'+characterid).css({
                    'display':'none'
                });
                    });
                }
}

function Editcharacterdetails(url,characterid,userid) {
    var characterlevel = $("#level").val();
    var characterserverId = $('#server').val();
    var characterfactionId = $('#faction').val();
    var characterclassId = $('#classid').val();
    var characterroleId = $('#role').val();
    var characterprofessionId1 = $('#profession1').val();
    var characterprofessionId2 = $('#profession2').val();
    var characterprofessionId3 = $('#profession3').val();
    var characterpvp = $('#pvp').attr('checked') ? 1 : 0;
    var characterrp = $("#rp").attr('checked') ? 1 : 0;
    var characterpve = $("#pve").attr('checked') ? 1 : 0;
    var characterbio = $('#bio').val();
    var charactericon = $('#profileimage').val();
    var characterenable_minibio = $("#enable_minibio").attr('checked') ? 1 : 0;
   // alert(factionId);
    // alert(factionId);
    $.post(url+"admin/edit_characterdetails", {   
        character_id: characterid,
        userid: userid,
        character_level: characterlevel,
        characterserver_id: characterserverId,
        characterfaction_id: characterfactionId,
        characterclass_id: characterclassId,
        characterrole_id: characterroleId,
        characterprofession_id1: characterprofessionId1,
        characterprofession_id2: characterprofessionId2,
        characterprofession_id3: characterprofessionId3,
        character_icon: charactericon,
        character_pvp: characterpvp,
        character_rp: characterrp,
        character_pve: characterpve,
        character_bio: characterbio,
        characterenable_mini_bio: characterenable_minibio
      }, function(response){
          if(response==1)
              {
         getGameMask();
         $('#editcharacterbox').hide();
         $('#editsuccesscharacterbox').fadeIn("slow");
         $('#char_edit_info').html("Success");
        //location.reload(true);
              }
       
    });
    
    return false;
}

function Editguilddetails(url,guildid,userid) {
    var guildservername = $( "#server option:selected" ).text();
    var accept_applicant_val = $("#accept_applicant").attr('checked') ? 1 : 0;
   // alert(accept_applicant_val);
    $.post(url+"admin/edit_guilddetails", {   
        guild_id: guildid,
        userid: userid,
        guild_name: $('#guild_name').val(),
        guild_game: $('#guild_game').val(),
        accept_applicant: $("#accept_applicant").attr('checked') ? 1 : 0,
        guild_pvp: $('#pvp').attr('checked') ? 1 : 0,
        guild_rp: $("#rp").attr('checked') ? 1 : 0,
        guild_pve: $("#pve").attr('checked') ? 1 : 0,
        guild_bio: $('#bio').val(),
        guildserver_id: $('#server').val(),
        guildfaction_id: $('#faction').val(),
        service: $('#service').val(),
        url_server: $('#url').val(),
        port: $('#port').val(),
        password: $('#password').val(),
        second_service: $('#second_service').val(),
        second_url: $('#second_url').val(),
        second_port: $('#second_port').val(),
        second_password: $('#second_password').val()
      }, function(response){
        
         getGameMask();
         $('#editguildbox').hide();
         $('#deleteguildbox').fadeIn("slow");
         $('#guild_del_info').html(response);
         $('#guild_server'+guildid).css({
                    'display':'none'
                });
         $('#guild_accpet'+guildid).css({
            'display':'none'
        });    
         $('#edit_guild_server'+guildid).html(guildservername.substr(0,12)+'...');
         if(accept_applicant_val == 1){
           $('#edit_guild_accept'+guildid).html('<input type="checkbox" disabled="disabled" name="guild_accept" id="guild_accept" class="form-checkbox" checked="checked" />');  
         }
         else
             {
                 $('#edit_guild_accept'+guildid).html('<input type="checkbox" disabled="disabled" name="guild_accept" id="guild_accept" class="form-checkbox"  />'); 
             }
        //location.reload(true);
              
       
    });
    
    return false;
}


function characterlevelchange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterserverchange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterfactionchange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterclasschange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterrolechange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterprofession1change()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterprofession2change()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterprofession3change()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterpvpchange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterrpchange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterpvechange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterbiochange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}
function characterbioenablechange()
{
    $('#character_save').attr('class', 'save-button');  
    $('#character_save').removeAttr("disabled");
}

function viewGuildMembers(url,guildid,userid) {
getGameMask();
//alert(guildid);
$('#viewguildmemberbox').fadeIn("slow");
$('#guild_meminfo').html('');
$('#guild_memloading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$('#guild_dynamicid').val(guildid);

$.post(url+'admin/guild_members/',
{
guildid: guildid,
userid: userid
}
, function(response) {
$('#guild_memloading').html('');
$('#guild_meminfo').html(response);
});
                
return false;
} 

function showGuildEventBox(url,guildid,userid) {
getGameMask();
//alert(guildid);
$('#viewguildeventbox').fadeIn("slow");
$('#guild_eventinfo').html('');
$('#guild_eventloading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$.post(url+'admin/guild_event_details/',
{
guildid: guildid,
userid: userid
}
, function(response) {
$('#guild_eventloading').html('');
$('#guild_eventinfo').html(response);
});
                
return false;
} 
function removeGuildMember(url, charId, roleId, guildId, userId, obj) {
    var member_id=obj.id;
    
    if($(obj).attr("alt") == "member") {
        var msg ="Do you want to remove this member from guild?";
    }
    else {
        msg = "Do you want to leave the '"+$(obj).attr("alt")+"' guild?";
    }
    if(roleId != 1) {
        if(confirm(msg)) {
            row= $(obj).closest('tr');
            $.post(url+'guild/remove/',
            {
                remove_id: member_id,
                guild_id: guildId,
                user_id: userId,
                char_id:charId
            }
            , function(response) {
                //viewGuildMembers(url,guildId,userId)
                row.remove(); 
                 var guild_membertrcnt =  $("#guild_memberstbl tr").length - 1;
                // alert(guild_membertrcnt);
                 $('#guildcnt').html(guild_membertrcnt);
                 $('#guild_mem_cnt').css({
                    'display':'none'
                });
                $('#guild_mem_del_cnt').css({
                    'display':'block'
                });
                if(guild_membertrcnt==0){
                    $('#noguild_mem').css({
                    'display':'block'
                    
                });
                 $('#guild_mem_cnt').css({
                    'display':'none'
                });
                $('#guild_mem_del_cnt').css({
                    'display':'none'
                });
                }
                
            });
        }
    }
    else {
        alert("You are currently the leader of this guild, to leave you must promote someone else to be leader or to close the guild, please go to the guild page");
    }
    return false;
}

function removeGuildEvents(url,eventid,event_name,obj) {
    
                if(confirm("Do you want to delete " + event_name + " confirm")) {
                    row= $(obj).closest('tr');
                    $.post(url+'events/delete/',
                    {
                        event_id: eventid
                    }
                    , function(response) {
                      
                     // showGuildEventBox(url,guildid,userid);
                    row.remove();
                     var guild_eventtrcnt =  $("#guildeventtbl tr").length - 1;
                // alert(guild_membertrcnt);
                 $('#guildeventcnt').html(guild_eventtrcnt);
                 $('#guild_event_cnt').css({
                    'display':'none'
                });
                $('#guild_event_del_cnt').css({
                    'display':'block'
                });
                if(guild_eventtrcnt==0){
                    $('#noguild_event').css({
                    'display':'block'
                });
                $('#guild_event_cnt').css({
                    'display':'none'
                });
                $('#guild_event_del_cnt').css({
                    'display':'none'
                });
                }    
                    });
                }
}

function removeGuild(url, charId, roleId, guildId, userId, obj) {
    var member_id=obj.id;
    var guild_count = $('#guild_count').text();
   // alert(guildId);
    if($(obj).attr("alt") == "member") {
        var msg ="Do you want to remove this member from guild?";
    }
    else {
        msg = "Do you want to remove the '"+$(obj).attr("alt")+"' guild?";
    }
   // if(roleId != 1) {
        if(confirm(msg)) {
            row= $(obj).closest('tr');
            $.post(url+'admin/removeguild/',
            {
                remove_id: member_id,
                guild_id: guildId,
                user_id: userId,
                char_id:charId
            }
            , function(response) {
                getGameMask();
                $('#deleteguildbox').fadeIn("slow");
                $('#guild_del_info').html(response);
                 row.remove();
                $('#guild_count').html(guild_count-1) 
            });
        }
   // }
   // else {
    //    alert($(obj).attr("alt")+" currently the leader of this guild, to leave you must promote someone else to be leader or to close the guild, please go to the guild page");
   // }
    return false;
}

function showEditguildBox(url,guildid) {
getGameMask();
//alert(guildid);
$('#editguildbox').fadeIn("slow");
$('#guild_info').html('');
$('#guildloading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$.post(url+'admin/view_guilddetail/',
{
guildid: guildid
}
, function(response) {
$('#guildloading').html('');
$('#guild_info').html(response);
});
                
return false;
} 

function removeguilddetails(url,guildid,guild_name) {
    var guild_count_details = $('#guild_count').text();
    
    if(confirm("Do you want to delete " + guild_name + " confirm")) {
                    
        $.post(url+'admin/removeguild/',
        {
            guild_id: guildid
        }
        , function(response) {
            getGameMask();
            $('#editguildbox').hide();
            $('#deleteguildbox').fadeIn("slow");
            $('#guild_del_info').html(response);
            $('#row'+guildid).css({
                'display':'none'
            });
            $('#guild_count').html(guild_count_details-1);
        });
    }
}

function guildservicechange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildservernamechange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildportchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildsecond_servicechange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildsecond_urlchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildsecond_portchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildaccept()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildpvpchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildrpchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildpvechange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildbiochange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildserverchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}
function guildfactionchange()
{
    $('#guild_save').attr('class', 'save-button');  
    $('#guild_save').removeAttr("disabled");
}

function edit_servervalidate() 
{
     var url ='/';
    var editservername = $('#edit_servername').val();
    var editserverId = $('#edit_serverid').val();
    var editgameId = $('#edit_gameid').val();
    
    if(editservername == "") {
                   alert("Please enter server name");
                    //this.game_name.focus();
                   
                    return false;
                }
                if(editservername.length > 0){
            $('#editserverLoading').show();
           $.post(url+"admin/edit_server_validate", {
                servername: editservername,
                game_server_id: editgameId,
                server_id : editserverId
            }, function(response){
//                $('#editserverInfo').fadeOut();
//                $('#editserverLoading').hide();
//                setTimeout("finishAjax('editserverInfo', '"+escape(response)+"')", 450);
               if(response)
                 {
//           $('#editserverbt').attr('class', 'post-button-white');
//              $('#editserverbt').attr('disabled','disabled');
alert('Server name already exists');
 
           return false;
                 }
                 else
                     {
                         $.post(url+"admin/server_edit", {
                    edit_servername: editservername,
                   edit_serverid: editserverId
                                
                }, function(response){
                   //location.reload(true);
                  // alert(response);
                   getGameMask();
                $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                $('#editserverbox').hide();
                  $('#server_name'+editserverId).css({'display':'none'});
                  $('#edit_server_name'+editserverId).html(editservername);
                  loadgrid(editgameId);
                          });
                     }
                

            });
           
        
    }
                
    
                return false;
}

function edit_factionvalidate() 
{
    var url ='/';
    var editfactionname = $('#edit_factionname').val();
    var edit_factionid = $('#edit_factionid').val();
    var edit_gamefactionid = $('#edit_gamefactionid').val();
    if(editfactionname == "") {
                  alert("Please enter faction name");
                  
                    //this.game_name.focus();
                    return false;
                }
                 if(editfactionname.length > 0){
            $('#editfactionLoading').show();
           $.post(url+"admin/edit_faction_validate", {
                factionname: editfactionname,
                game_id: edit_gamefactionid,
                faction_id: edit_factionid
            }, function(response){

               if(response)
                 {
        alert('Faction name already exists');
           
           return false;
                 }
                 else
                     {
                    $.post(url+"admin/faction_edit", {
                    edit_factionname: editfactionname,
                   edit_factionid: edit_factionid
                                
                }, function(response){
                   //location.reload(true);
                  // alert(response);
                   getGameMask();
                 $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                $('#editfactionbox').hide();
                
                  $('#faction_name'+edit_factionid).css({'display':'none'});
                  $('#edit_faction_name'+edit_factionid).html(editfactionname);
                  loadgrid(edit_gamefactionid);
            
                });
                     }
                

            });
           
        
    }
    
                return false;
}
function edit_classvalidate() 
{
    var url ='/';
    var editclassname = $('#edit_classname').val();
    var editclassId = $('#edit_classid').val();
    var editfactionclassId = $('#edit_classfactionid').val();
   var editgameclassid = $('#edit_classgameid').val();
    
    if(editclassname == "") {
                    alert("Please enter class name");
                  
                    //this.game_name.focus();
                    return false;
                }
                
                if(editclassname.length > 0){
                $.post(url+"admin/edit_class_validate", {
                classname: editclassname,
                faction_class_id: editfactionclassId,
                class_id: editclassId
            }, function(response){
               
               if(response)
                 {
        alert('Class name already exists');
              
           return false;
                 }
                 else
                     {
                        $.post(url+"admin/class_edit", {
                    edit_classname: editclassname,
                    class_id: editclassId
                                
                }, function(response){
                   //location.reload(true);
                  // alert(response);
                   getGameMask();
                 $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                $('#editclassbox').hide();
                  $('#class_name'+editclassId).css({'display':'none'});
                  $('#edit_class_name'+editclassId).html(editclassname);
                  $('#class_server_name'+editclassId).css({'display':'none'});
                  $('#edit_class_server_name'+editclassId).html(editclassname);
                  loadgrid(editgameclassid); 
                });
                     }

            });
           
        
    }
                 
                return false;
    
}
function edit_professionvalidate() 
{
    var url ='/';  
    var editprofessionname = $('#edit_professionname').val();
    var editprofessionId = $('#edit_professionid').val();
    var editgameId = $('#edit_professiongameid').val();
    
    if(editprofessionname == "") {
               alert("Please enter profession name");
                    
                  
                    //this.game_name.focus();
                    return false;
                }
                if(editprofessionname.length > 0){
            
           $.post(url+"admin/profession_edit_validate", {
                professionname: editprofessionname,
                game_profession_id: editgameId,
                profession_id: editprofessionId
            }, function(response){
                 if(response)
                 {
         alert('Profession name already exists');
           
           return false;
                 }
                 else
                     {
                    $.post(url+"admin/profession_edit", {
                    edit_professionname: editprofessionname,
                    edit_professionid: editprofessionId
                                
                }, function(response){
                   //location.reload(true);
                  // alert(response);
                  getGameMask();
                 $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                $('#editprofessionbox').hide();
                $('#edit_professionname').val(editprofessionname);
                $('#edit_professionid').val(editprofessionId);
                    
                  $('#profession_name'+editprofessionId).css({'display':'none'});
                  $('#edit_profession_name'+editprofessionId).html(editprofessionname);
            loadgrid(editgameId); 
                });
                     }

            });
           
        
    }
                 
                return false;
    
}




function gamenamechange()
{
var game_name=$("#game").val().trim();
var text_name=$("#text_name").val().trim();
var server_name =$('#dynfields').val();
var faction_name = $('#factionfields').val();
var clas_name = $('#classfields').val();
var profession_name = $('#professionfields').val();
var server_id = $('#server').val();

if(game_name!='')
    {
  $('#addgamebt').attr('class', 'save-button');  
  $('#addgamebt').removeAttr("disabled");   
    }
    else
        {
  $('#addgamebt').attr('class', 'post-button-white');  
  $('#addgamebt').attr("disabled"); 
        }


}

 function editfeedtext(url) 
    {      
      //  var url ='<?= URL::site(); ?>';
        var editfeed = $('#feedtext').val();
        var feedId = $('#edit_feedid').val();
        //   alert(editfeed);
        //   alert(feedId);
                    $.post(url+"admin/edit_feed_text", {
                    feed_id: feedId,
                    feed_text:editfeed
                    
                }, function(response){
               //    location.reload(true);
               
                   alert('#'+feedId+'updated')
                   $('#'+feedId+'updated').html(editfeed);
                   $('#'+feedId+'feedtext').css({'display':'none'});
                   $('#'+feedId+'updated').css({'display':'block'});
                  
                });
                return false;
        
       }
       
        
    $(document).ready(function () {
       $('#delete_media').on('mouseenter', function () {
           $('#delete_icon').show();
           
       }).on('mouseleave', function () {
           $('#delete_icon').hide();
           
       });
   });

 function closegrid()
            {
              $(".child").hide(); 
               $('.arr').attr('src', '../../public/images/up-arrow.png');
            }
            
            function CloseCharacterPopup() {
    
   $('.popup_box').fadeOut("slow");
    $('.mask').hide(); 
}

function all_char_server_list() {
$.post('/admin/all_server_details/'
                    , function(response) {
                        $('#char_server_select').empty();
                      var data = $.parseJSON(response);
                        $('<option value="">Select Server Name</option>').appendTo('#char_server_select');
                        for(var item in data)
                        {
                            $('<option value="'+item+'">'+item+'</option>').appendTo('#char_server_select');
                            $('#server_menu').css({
                                'display':'inline-block'
                            });
                        }
                    });

return false;
}
function all_guild_server_list() {
$.post('/admin/all_server_details/'
                    , function(response) {
                        $('#guild_server_select').empty();
                      var data = $.parseJSON(response);
                        $('<option value="">Select Server Name</option>').appendTo('#guild_server_select');
                        for(var item in data)
                        {
                            $('<option value="'+item+'">'+item+'</option>').appendTo('#guild_server_select');
                            $('#server_menu').css({
                                'display':'inline-block'
                            });
                        }
                    });

return false;
}

function deleteUser(url,userid,username,obj) {
     var character_count = $('#character_count').text();
     

                jConfirm("Are you sure you want to delete " + username +" User?" ,'Delete confirmation',function(confirm) {
                    if(confirm){
                    
                    row= $(obj).closest('tr');
                    $.post(url+'admin/delete_user/',
                    {
                        userId: userid
                    }
                    , function(response) {
                      getGameMask();
                      row.remove(); 
                     $('#character_count').html(character_count-1);
                    
                   //  $('#after_del_char_cnt').html(count_character);
                     $('#deletecharacterbox').fadeIn("slow");
                      $('#char_del_info').html(response);
//                        $('#row'+characterid).css({
//                    'display':'none'
//                });
                    });
                    }
                });
                }

function deleteRole(url, role_id, role_name) {
       
                jConfirm("Do you want to delete this role " + role_name + " Confirm?","Delete Confirmation",function(confirm) {
                    if (confirm) {
                    $.post(url+'admin/deleterole/',
                    {
                        roleId: role_id
                    }
                    , function(response) {
                     location.reload()
                
                    });
                    }
                });
                }
     
            
function showEditrolepopup(roleName,roleId) {
        getGameMask();
      $('#edit_rolename').val(roleName);
        $('#edit_roleid').val(roleId);     
        $('#editrolebox').fadeIn("slow");
        return false;
    }  
    
function edit_rolevalidate() {
    var url ='/';  
    var editrolename = $('#edit_rolename').val();
    var editroleId = $('#edit_roleid').val();
    
    if(editrolename == "") {
               jAlert("Please enter role name");
                    
                  
                    //this.game_name.focus();
                    return false;
                }
//                if(editrolename.length > 0){
//            
//           $.post(url+"admin/role_edit_validate", {
//                rolename: editrolename,
//                role_id: editroleId
//            }, function(response){
//                 if(response)
//                 {
//         alert(response);
//           
//           return false;
//                 }
                 else
                     {
                    $.post(url+"admin/role_edit", {
                    edit_rolename: editrolename,
                    edit_roleid: editroleId
                                
                }, function(response){
                    if (response){
                        location.replace("manage_roles");
                    }
                        
                
                });
                     }       
    }
 
function ShowUserlist(url) {  
   location.replace("")
}      

function Showdeletedlist(url) {

$('#deleteduser_details_grid').html('');
$('#User_title').hide();
$('#hide_user_grid').hide();
$('#deleteduser_details_grid_loading').html('<div align="center" style="margin-left:90px;" id="popup"><img src="../../public/images/loading.gif"></div>');
$.post(url+'admin/deleted_user/'
                    , function(response) {
                        
                        $('#User_title').hide();
                        $('#hide_user_grid').hide();
                      $('#deleteduser_details_grid_loading').html('');
                      $('#deleteduser_details_grid').html(response);
                    });

return false;
}

$(function(){
  $('.advs').click(function(){
    if ($(this).is(':checked')){
      var advs = $(this).val();
      var url = '/';
        $.post(url+"admin/select_ads", {
           advs_id: advs
        }, function(response){
                        
           });
      
    }
  });
}); 
