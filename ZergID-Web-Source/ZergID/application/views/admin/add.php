<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


?>
<html>
    <head>
       
        <!--        Insert game in Ajax Post Method Script start Here-->
        <link rel="stylesheet" href="../../public/css/jquery-ui.css" />
       <link rel="stylesheet" href="<?=URL::site('/public/css/admincss.css');?>" />
        <script src="../../public/js/jquery-ui.js"></script>
       <script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
        <script src="<?=URL::site('/public/js/adminjPages.js');?>" type="text/javascript"></script>
       
        <script> 
            (function( $ ) {
                $.widget( "custom.combobox", {
                    _create: function() {
                        this.wrapper = $( "<span>" )
                        .addClass( "custom-combobox" )
                        .insertAfter( this.element );
 
                        this.element.hide();
                        this._createAutocomplete();
                        this._createShowAllButton();
                    },
 
                    _createAutocomplete: function() {
                        var selected = this.element.children( ":selected" ),
                        value = selected.val() ? selected.text() : "";
 
                        this.input = $( "<input id = 'text_name' name = 'text_name'  style='width:150px; font-size:14px;'>" )
                        .appendTo( this.wrapper )
                        .val( value )
                        .attr( "title", "" )
                        //.addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
                        .addClass( "normal-input" )
                        .autocomplete({
                            delay: 0,
                            minLength: 0,
                            source: $.proxy( this, "_source" )
                        })
                        .tooltip({
                            tooltipClass: "ui-state-highlight"
                        });
 
                        this._on( this.input, {
                            autocompleteselect: function( event, ui ) {
                                ui.item.option.selected = true;
                                var selectgameid = ui.item.option.value;
                                var url ='<?= URL::site(); ?>';
                                var gameId = selectgameid;
                                
                                $.post(url+"admin/select_gameservers", {       
                                    game_id: gameId
                                }, function(response){
                                    $('#server').empty();
                                    if(response != "[]") {
                                        var data = $.parseJSON(response);
                                        for(var item in data)
                                        {
                                            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#server');
                                            $('#server_menu').css({'display':'inline-block'});
                                             $('#server').css({'display':'block'});
                                            $('#dynfields').css({'display':'none'});
                                            $('#serveraddimage').css({'float':'left','margin-left':'185px','margin-top':'-28px'});
                                          ;
                                        }
                                    }
                                    else {
                                        $('#server').css({'display':'none'});
                                         $('#dynfields').css({'display':'block'});
                                       $('#serveraddimage').css({'margin-left':'185px','margin-top':'-28px','float':'left'});
                                    }
                                    var serverId = $('#server').val();
                                    
                                   check_serveraddedname();
                                   check_factionaddedname();
                                  $('#classaddInfo').hide();
                                  $('#addgamebt').attr('class', 'save-button');  
                                  $('#addgamebt').removeAttr("disabled");
                                   check_professionaddedname();
                                    getgameFactionList(url,gameId)                              
                                  //  getserverFactionList(url);
                                    getGameProfessionList(url, gameId);
                                });
         
                                this._trigger( "select", event, {
                                    item: ui.item.option
                                });
                            },
 
                            autocompletechange: "_removeIfInvalid"
                        });
                    },
 
                    _createShowAllButton: function() {
                        var input = this.input,
                        wasOpen = false;
 
                        $( "<a style='background: #ffffff url('../../public/images/select-arrow.png') no-repeat;'>" )
                        .attr( "tabIndex", -1 )
                        .attr( "title", "Show All Games" )
                        .tooltip()
                        .appendTo( this.wrapper )
                        .button({
                            icons: {
                                primary: "ui-icon-triangle-1-s"
                            },
                            text: false
                        })
                        .removeClass( "ui-corner-all" )
                        .addClass( "custom-combobox-toggle ui-corner-right" )
                        .mousedown(function() {
                            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
                        })
                        .click(function() {
                            input.focus();
 
                            // Close if already visible
                            if ( wasOpen ) {
                                return;
                            }
 
                            // Pass empty string as value to search for, displaying all results
                            input.autocomplete( "search", "" );
                        });
                    },
 
                    _source: function( request, response ) {
                        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
                        response( this.element.children( "option" ).map(function() {
                            var text = $( this ).text();
                            if ( this.value && ( !request.term || matcher.test(text) ) )
                                return {
                                    label: text,
                                    value: text,
                                    option: this
                                };
                        }) );
                    },
 
                    _removeIfInvalid: function( event, ui ) {
 
                        // Selected an item, nothing to do
                        if ( ui.item ) {
                            return;
                        }
 
                        // Search for a match (case-insensitive)
                        var value = this.input.val(),
                        valueLowerCase = value.toLowerCase(),
                        valid = false;
                       
                        
                        var url_name = '<?= URL::site(); ?>';
                      //  alert(value);
                         $.post(url_name+"admin/get_gamenameid", {       
                            game_name: value
                        }, function(response){
                           
                            if(response !='')
                                {
                                  var  game_change_id = response;
                                }
                                else
                                    {
                                       var  game_change_id = 0; 
                                    }
                            
                            
                                    var game_id_change = game_change_id;
                                    var url_name_change = '<?= URL::site(); ?>';
                                    $.post(url_name_change+"admin/select_gameservers", {       
                                    game_id: game_id_change
                                }, function(response){
                                    $('#server').empty();
                                    if(response != "[]") {
                                        var data = $.parseJSON(response);
                                        for(var item in data)
                                        {
                                            $('<option value="'+data[item]+'">'+item+'</option>').appendTo('#server');
                                            $('#server_menu').css({'display':'inline-block'});
                                             $('#server').css({'display':'block'});
                                            $('#dynfields').css({'display':'none'});
                                            $('#serveraddimage').css({'float':'left','margin-left':'185px','margin-top':'-28px'});
                                          ;
                                        }
                                    }
                                    else {
                                        $('#server').css({'display':'none'});
                                         $('#dynfields').css({'display':'block'});
                                       $('#serveraddimage').css({'margin-left':'185px','margin-top':'-28px'});
                                    }
                                    var serverId = $('#server').val();
                                   // check_serveraddedname();
                                  // check_factionaddedname();
                                  $('#classaddInfo').hide();
                                   $('#factionaddInfo').hide();
                                   $('#serveraddInfo').hide();
                                    $('#professionaddInfo').hide();
                                  $('#addgamebt').attr('class', 'save-button');  
                                  $('#addgamebt').removeAttr("disabled");
                                   $('#factionfields').removeAttr("disabled");
                        removedisable_text();
                                  // check_professionaddedname();
                                  getgameFactionList(url_name_change, game_id_change)
                                   // getserverFactionList(url_name_change);
                                     getGameProfessionList(url_name_change, game_id_change);
                                     
                                     
                                });
                                
                        
                        });
                        
                        
                        this.element.children( "option" ).each(function() {
                            if ( $( this ).text().toLowerCase() === valueLowerCase ) {
                                this.selected = valid = true;
                                return false;
                            }
                        });
 
                        // Found a match, nothing to do
                        if ( valid ) {
                            return;
                        }
 
                        // Remove invalid value
                        //this.input
                        //.val( "" )
                        //.attr( "title", value + " " )
                        //.tooltip( "open" );
                        //this.element.val( "" );
                        this._delay(function() {
                            this.input.tooltip( "close" ).attr( "title", "" );
                        }, 2500 );
                        this.input.data( "ui-autocomplete" ).term = "";
                    },
 
                    _destroy: function() {
                        this.wrapper.remove();
                        this.element.show();
                    }
                });
            })( jQuery );
 
            $(function() {
                $( "#game" ).combobox();
                $( "#toggle" ).click(function() {
                    $( "#game" ).toggle();
                });
            });
          
     
       
        </script>     
        <script>
//           $(document).ready(function(){
//                $('#data_header').css({cursor:'default'});     
//                $(".accordion div").click(function(){
//                    $(this).next(".child").slideToggle("slow")
//                    .siblings(".child:visible").slideUp("slow");
//                    $(this).toggleClass("active");
//                    $(this).siblings("div.accordin").removeClass("active");
//                    $('div.accordin img.arr').attr('src', '../../public/images/up-arrow.png');
//                    $('div.accordin.active img.arr').attr('src', '../../public/images/down-arrow.png');
//                        
//                    //if(this.id != "") {
//                        //loadgrid(this.id);
//                   // }
//                });
//            });
    function loadgrid(gameid)
    {
       
     if ($("#child"+gameid).is(":visible") == true) {
                $('#child'+gameid).hide();
                $('.arr').attr('src', '../../public/images/up-arrow.png');
                return false;
            }
            else
                {
    $('.arr').attr('src', '../../public/images/up-arrow.png');
    $('.child').hide();
    $('#child'+gameid).hide();
    $('#arr'+gameid).attr('src', '../../public/images/down-arrow.png');
    $('#grid_loader').css('display', 'block');
    $('#child'+gameid).html('');
    $("#child"+gameid).slideToggle(500);
   
    $.post('/admin/get_game_details/',
    {
    game_id: gameid
    }
    , function(response) {
     $('#grid_loader').css('display', 'none');
    $('#child'+gameid).html(response);
    });  
                }
    }
           
 function showEditfactionBox(factionName,factionId,gameId) {
        getGameMask();
        var url ='<?= URL::site(); ?>';
      
        $('#edit_factionname').val(factionName);
        $('#edit_factionid').val(factionId);
         $('#edit_gamefactionid').val(gameId);
        $.post(url+"admin/select_gameservers", {       
            game_id: gameId
        }, function(response){
            $('#server1').empty();
            
            if(response != "[]") {
                var data = $.parseJSON(response);
                for(var item in data)
                {
                    $('<option value="'+item+'">'+data[item]+'</option>').appendTo('#server1');
                    $('#server_menu').css({'display':'inline-block'});
                    
                    ;
                }
            }
            
            
        });
        $('#editfactionbox').fadeIn("slow");
        return false;
}
    function edit_gamevalidate() 
    {
        var url ='<?= URL::site(); ?>';
        var editgamename = $('#edit_gamename').val();
        var editgameId = $('#edit_gameid').val();
       
        if(editgamename == "") {
            alert("Please enter game name");
            //this.game_name.focus();
            return false;
        }
        if(editgamename.length > 0){
          //  $('#Loading').show();
            $.post(url+"admin/game_validate", {
                gamename: $('#edit_gamename').val(),
                game_id: $('#edit_gameid').val()
            }, function(response){
               // $('#Info').fadeOut();
              //  $('#Loading').hide();
               // setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
              if(response)
                 {
          // $('#editgamesbt').attr('class', 'post-button-white');
           //   $('#editgamesbt').attr('disabled','disabled');
           alert(response);
       
           return false;
                 }
                 else
                     {
                          $.post(url+"admin/game_edit", {
                    game_name: editgamename,
                    game_id: editgameId
                                
                }, function(response){
                   //location.reload(true);
                  // alert(response);
                   getGameMask();
                $('#comepopupbox').fadeIn("slow");
                $('#come_info').html(response);
                $('#editgamebox').hide();
                $('#game_name'+editgameId).html(editgamename);
               // $('#edit_game_name'+editgameId).html(editgamename);
              $('#game option[value="'+editgameId+'"]').remove();
              $('<option value="'+editgameId+'">'+editgamename+'</option>').appendTo('#game');
            
                });
                     }
//                 else
//                     {
//                        $('#editgamesbt').attr('class', 'save-button');  
//                         $('#editgamesbt').removeAttr("disabled");
//                     }
            });
          
    }
                   
                return false;
        
       } 




//function check_gamename(){
//    var gamename = $("#edit_gamename").val();
//    //alert(gamename);
//     var url ='<? //= URL::site(); ?>';
//    
//    // return false;  
//}
function check_gameaddname(){
   var gamename = $("#text_name").val();
    //alert(gamename);
     var url ='<?= URL::site(); ?>';
    
           $.post(url+"admin/game_validate", {
                gamename: gamename
               
            }, function(response){
                
               if(response)
                 {
                    // alert('Same game name not allowed');
                    getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same game name not allowed');
           $('#addgamebt').attr('class', 'post-button-white');
              $('#addgamebt').attr('disabled','disabled');
                 }
                 else
                     {
                        $('#addgamebt').attr('class', 'save-button');  
                         $('#addgamebt').removeAttr("disabled");
                     }
            });
           
        
    
     return false;  
}




function check_serveraddedname(){
    var game_id=$("#game").val().trim();
    var servername_validate = document.getElementsByName('dynfields[]'); 
     var dynfields = [];
    $.each($("input[name=dynfields\\[\\]]"), function (indexInArray, valueOfElement) {
      dynfields.push($(valueOfElement).val());
    });
     var url ='<?= URL::site(); ?>';
     if(servername_validate.length > 1)
         {
      for (var j = 1; j < servername_validate.length; j++)
      {
   // alert(game_id);
      
    if(servername_validate[j].value.length > 0){
         
          //  $('#serveraddLoading').show();
            $.post(url+"admin/server_validate", {
                servername: dynfields,
                game_server_id: game_id
            }, function(response){
                //$('#serveraddInfo').html(response);
              //  $('#serveraddLoading').hide();
                //setTimeout("finishAjax('serveraddInfo', '"+escape(response)+"')", 450);
            // alert(response);
             if(response)
                 {
                    // alert(response);
                    
            getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same server name not allowed ' + response);
           $('#addgamebt').attr('class', 'post-button-white');
              $('#addgamebt').attr('disabled','disabled');
              $('#factionfields').attr('readonly','readonly');
              $('#factionaddimage').css({'display':'none'});
              $('#classfields').attr('readonly','readonly');
              $('#classaddimage').css({'display':'none'});
              $('#professionfields').attr('readonly','readonly');
              $('#professionaddimage').css({'display':'none'});
               $('#dynfields').attr('readonly','readonly');
                $('#serveraddimage').css({'display':'none'});
                 }
                 else
                     {
                        $('#addgamebt').attr('class', 'save-button');  
                         $('#addgamebt').removeAttr("disabled");
                        $('#factionfields').removeAttr("readonly");
                        $('#factionaddimage').css({'display':'block'});
                        $('#classfields').removeAttr("readonly");
                        $('#classaddimage').css({'display':'block'});
                        $('#professionfields').removeAttr("readonly");
                        $('#professionaddimage').css({'display':'block'});
                        $('#dynfields').removeAttr("readonly");
                        $('#serveraddimage').css({'display':'block'});
                     }


            });
           
        
    }
    else
    {
    $('#serveraddInfo').hide();
    }
     return false;  
      }
         }
         else
         {
         $('#addgamebt').attr('class', 'save-button');  
         $('#addgamebt').removeAttr("disabled");
         }
}
function check_factionaddedname(){
    var game_id=$('#game').val();
    var factionname_validate = document.getElementsByName('factionfields[]'); 
    var factionfields = [];
    $.each($("input[name=factionfields\\[\\]]"), function (indexInArray, valueOfElement) {
      factionfields.push($(valueOfElement).val());
    });
     var url ='<?= URL::site(); ?>';
      if(factionname_validate.length > 1)
         {
      for (var j = 1; j < factionname_validate.length; j++)
      {
   // alert(game_id);
      
    if(factionname_validate[j].value.length > 0){
         
           // $('#factionaddLoading').show();
            $.post(url+"admin/game_faction_validate", {
                factionname: factionfields,
                game_id: game_id
            }, function(response){
               // $('#factionaddInfo').html(response);
               // $('#factionaddLoading').hide();
               // setTimeout("finishAjax('factionaddInfo', '"+escape(response)+"')", 450);
             // alert(response);
             if(response)
                 {
                    // alert('Same faction name not allowed');
                     getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same faction name not allowed ' + response);
           $('#addgamebt').attr('class', 'post-button-white');
              $('#addgamebt').attr('disabled','disabled');
              $('#dynfields').attr('readonly','readonly');
                $('#serveraddimage').css({'display':'none'});
                $('#classfields').attr('readonly','readonly');
                $('#classaddimage').css({'display':'none'});
                $('#professionfields').attr('readonly','readonly');
                $('#professionaddimage').css({'display':'none'});
                $('#factionfields').attr('readonly','readonly');
              $('#factionaddimage').css({'display':'none'});
                 }
                 else
                     {
                        $('#addgamebt').attr('class', 'save-button');  
                         $('#addgamebt').removeAttr("disabled");
                         $('#dynfields').removeAttr("readonly");
                        $('#serveraddimage').css({'display':'block'});
                        $('#classfields').removeAttr("readonly");
                        $('#classaddimage').css({'display':'block'});
                        $('#professionfields').removeAttr("readonly");
                        $('#professionaddimage').css({'display':'block'});
                         $('#factionfields').removeAttr("readonly");
                        $('#factionaddimage').css({'display':'block'});
                     }


            });
           
        
    }
    else
    {
    $('#factionaddInfo').hide();
    }
   
     return false;  
      }
       }
         else
         {
         $('#addgamebt').attr('class', 'save-button');  
         $('#addgamebt').removeAttr("disabled");
         }
}


function check_professionaddedname(){
    var game_id=$('#game').val();
    var professionname_validate = document.getElementsByName('professionfields[]'); 
    var professionfields = [];
    $.each($("input[name=professionfields\\[\\]]"), function (indexInArray, valueOfElement) {
      professionfields.push($(valueOfElement).val());
    });
     var url ='<?= URL::site(); ?>';
     if(professionname_validate.length > 1)
         {
      for (var j = 1; j < professionname_validate.length; j++)
      {
   // alert(game_id);
      
    if(professionname_validate[j].value.length > 0){
         
            //$('#professionaddLoading').show();
            $.post(url+"admin/profession_validate", {
                professionname: professionfields,
                game_profession_id: game_id
            }, function(response){
             //   $('#professionaddInfo').html(response);
               // $('#professionaddLoading').hide();
              //  setTimeout("finishAjax('professionaddInfo', '"+escape(response)+"')", 450);
             // alert(response);
             if(response)
                 {
                //alert('Same profession name not allowed');
                getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same profession name not allowed ' + response);
           $('#addgamebt').attr('class', 'post-button-white');
              $('#addgamebt').attr('disabled','disabled');
               $('#dynfields').attr('readonly','readonly');
                $('#serveraddimage').css({'display':'none'});
               $('#factionfields').attr('readonly','readonly');
              $('#factionaddimage').css({'display':'none'});
              $('#classfields').attr('readonly','readonly');
              $('#classaddimage').css({'display':'none'});
              $('#professionfields').attr('readonly','readonly');
                $('#professionaddimage').css({'display':'none'});
                 }
                 else
                     {
                        $('#addgamebt').attr('class', 'save-button');  
                         $('#addgamebt').removeAttr("disabled");
                          $('#dynfields').removeAttr("readonly");
                        $('#serveraddimage').css({'display':'block'});
                          $('#factionfields').removeAttr("readonly");
                        $('#factionaddimage').css({'display':'block'});
                        $('#classfields').removeAttr("readonly");
                        $('#classaddimage').css({'display':'block'});
                         $('#professionfields').removeAttr("readonly");
                        $('#professionaddimage').css({'display':'block'});
                     }

            });
           
        
    }
    else
    {
    $('#professionaddInfo').hide();
    }
     return false;  
      }
      }
         else
         {
         $('#addgamebt').attr('class', 'save-button');  
         $('#addgamebt').removeAttr("disabled");
         }
}

function check_classaddedname(){
   var faction_id=$('#faction').val();
    var classname_validate = document.getElementsByName('classfields[]'); 
    var classfields = [];
    $.each($("input[name=classfields\\[\\]]"), function (indexInArray, valueOfElement) {
      classfields.push($(valueOfElement).val());
    });
   // alert(faction_id);
     var url ='<?= URL::site(); ?>';
      if(classname_validate.length > 1)
         {
      for (var j = 1; j < classname_validate.length; j++)
      {
   // alert(game_id);
      
    if(classname_validate[j].value.length > 0){
         
           // $('#classaddLoading').show();
            $.post(url+"admin/class_validate", {
                classname: classfields,
                 faction_class_id: faction_id
            }, function(response){
               // $('#classaddInfo').html(response);
               // $('#classaddLoading').hide();
               // setTimeout("finishAjax('classaddInfo', '"+escape(response)+"')", 450);
             // alert(response);
             if(response)
                 {
              // alert('Same class name not allowed');
                getGameMask();
            $('#comepopupbox').fadeIn("slow");
            $('#come_info').html('Same class name not allowed ' + response);
                $('#addgamebt').attr('class', 'post-button-white');
                $('#addgamebt').attr('disabled','disabled');
                $('#dynfields').attr('readonly','readonly');
                $('#serveraddimage').css({'display':'none'});
                $('#factionfields').attr('readonly','readonly');
                $('#factionaddimage').css({'display':'none'});
                $('#professionfields').attr('readonly','readonly');
                $('#professionaddimage').css({'display':'none'});
                 $('#classfields').attr('readonly','readonly');
              $('#classaddimage').css({'display':'none'});
                 }
                 else
                     {
                        $('#addgamebt').attr('class', 'save-button');  
                        $('#addgamebt').removeAttr("disabled");
                        $('#dynfields').removeAttr("readonly");
                        $('#serveraddimage').css({'display':'block'});
                        $('#factionfields').removeAttr("readonly");
                        $('#factionaddimage').css({'display':'block'});
                        $('#professionfields').removeAttr("readonly");
                        $('#professionaddimage').css({'display':'block'});
                        $('#classfields').removeAttr("readonly");
                        $('#classaddimage').css({'display':'block'});
                     }


            });
           
        
    }
      else
    {
    $('#classaddInfo').hide();
    //alert(1);
    }
     return false;  
      }
      }
         else
         {
         $('#addgamebt').attr('class', 'save-button');  
         $('#addgamebt').removeAttr("disabled");
         }
}
  window.onload = function() {
  document.getElementById("text_name").focus();
};

 /* when document is ready */
 
  /* when document is ready */
  $(function() {
    /* initiate plugin */
    $("div.holder").jPages({
        containerID : "itemContainer",
        perPage : 20
    });
    /* on select change */
    $("#setpagingcount").change(function(){
        /* get new nº of items per page */
      var newPerPage = parseInt( $(this).val() );
      /* destroy jPages and initiate plugin again */
      $("div.holder").jPages("destroy").jPages({
            containerID   : "itemContainer",
            perPage       : newPerPage
        });
    });
});
 
   $(document).ready(function () {
  $("#admin-search").keyup(function()
    
    {
      
    var url ='<?= URL::site(); ?>';
    var game_name = $("#admin-search").val();
    //alert(game_name);
    
     $.post(url+"admin/search", {
                    game_name: game_name
                   
                    
                }, function(response){
                $('#game_grid').hide();
                $('#zergid_gamedetails').hide();
                $('#get_game_grid').html(response); 
                 //  alert(response)
  });
   });
   });
  
             
        </script>
     
        <style>
            #serveraddimage{
                float: left;
                margin-left: 185px;
                margin-top: -28px;
            }
             #factionaddimage{
                  float: left;
                margin-left: 185px;
                margin-top: -28px;
            }
             #classaddimage{
                  float: left;
                margin-left: 185px;
                margin-top: -28px;
            }
            #professionaddimage{
              float: left;
                margin-left: 185px;
                margin-top: -28px;  
            }
            .span4 {
            width: 370px;
            }
             div.child{ overflow: hidden; }
            
            .accordin{cursor: pointer;}
            
            .popup_box1 { 
            display:none; /* Hide the DIV */
            _position:absolute; /* hack for internet explorer 6 */  
            background:#FFFFFF;  
            margin-top: 10px;
            z-index:9999; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
            border:1px solid #fff;  	
            padding:15px;  
            font-size:15px;
            margin-left: -130px; 
            height:235px;  
            width:550px;  
            position:fixed;

            }
            
#items 
{
    width: 950px;
    font-size:15px;
    margin-left:8px;
}
#items a
{
     color: #33CCFF;
     font:'Helvetica-Bold';
     
}
            
            
            
        </style>
        <!--        End Here-->

    </head> 
    <body>
        
         <div id="successbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="success_info" style="font-size: 48px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      <?= Form::submit('closepopup', 'OK', array('class' => 'save-button', 'style' => 'width:55px; margin-left:105px;','onclick' => 'return ClosePopup();')); ?>
         </div>
        <div id="comepopupbox" class="popup_box1" style="margin-left: 350px; width: 300px;  height:135px; margin-top:20px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="come_info" style="font-size: 20px;color:black; margin-top:40px"></div>
          <a class="popupGameClose" onclick="return ClosePopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      <?= Form::submit('closepopup', 'OK', array('class' => 'save-button', 'style' => 'width:55px; margin-left:125px;','onclick' => 'return ClosePopup();')); ?>
         </div>
        <div id="comepopupbox1" class="popup_box1" style="margin-left: 350px; width: 450px; height: 140px; ">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="come_info1" style="font-size: 22px;color:black; margin-top:40px"></div>
          <a class="popupGameClose" onclick="return ClosePopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      <?= Form::submit('closepopup', 'OK', array('class' => 'save-button', 'style' => 'width:55px;  margin-left:195px;','onclick' => 'return ClosePopup();')); ?>
         </div>
         <div id="editsuccessbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="editsuccess_info" style="font-size: 48px;color:gray; margin-top:70px"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
        
        <div id="editgamebox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 100px;">	<!-- OUR PopupBox DIV-->
   <?= Form::open('admin/game_edit', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px;" id="popup_title">Edit Game</span><br /><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_gameid" id="edit_gameid" class="normal-input" />
     <h5>Game Name:</h5 <br />
     <div style="margin-left:100px; margin-top:-30px;"> <input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_gamename" id="edit_gamename"  class="normal-input" /><!--<span id="Info"></span> --><!--<span class="val-loading" id="Loading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
   
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:-50px; ')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn' ,'style' => 'width:150px;','id'=>'editgamesbt','onclick' => 'return edit_gamevalidate();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
</div>
        <div id="editserverbox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 155px;">	<!-- OUR PopupBox DIV-->
   <?= Form::open('admin/server_edit', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px; " id="popup_title">Edit Server</span><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_serverid" id="edit_serverid"  class="normal-input" />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_gameid" id="edit_gameid"  class="normal-input" />
       
      
       <?php
         // $gameList[''] = "Select Game Name";
         // foreach ($games as $game):
           //   $gameList[$game->id] = $game->game_name;
//          endforeach;
             
       ?>
<!--      <div style="margin-left:100px; margin-top:-50px;"> <? //= Form::select('game', $gameList, "", array('class'=>"game-input", 'id'=>'game_edit'));?></div>    -->
       <h5>Server Name:</h5> 
  <div style="margin-left:105px; margin-top:-30px;"><input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_servername" id="edit_servername"  class="normal-input" /><!--<span id="editserverInfo"></span> --><!--<span class="val-loading" style="display:none;" id="editserverLoading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
    
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn','style' => 'width:150px;','id'=>'editserverbt','onclick' => 'return edit_servervalidate();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose" ><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
        
         <div id="editfactionbox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 155px;">	<!-- OUR PopupBox DIV-->
   <?= Form::open('admin/faction_edit', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px; " id="popup_title">Edit Faction</span><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_factionid" id="edit_factionid" class="normal-input" />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_gamefactionid" id="edit_gamefactionid" class="normal-input" />
   
       
      <?php //
                    
                    //if (empty($serverList)):
                      //  $serverList[''] = "Select Server";
                   // endif;
                    ?>
                    
                    
<!--                   <div style="margin-left:100px; margin-top:-38px;">  <? //= Form::select('server', $serverList, "", array('class' => "select-input", 'id' => 'server1'));?></div>-->
      
       <h5>Faction:</h5><br />
  <div style="margin-left:70px; margin-top:-45px;"><input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_factionname" id="edit_factionname" onkeyup ="return check_factionname()" class="normal-input" /><!--<span id="editfactionInfo">--></span><!--<span class="val-loading" style="display:none;" id="editfactionLoading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
    
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn','style' => 'width:150px;','id'=>'editfactionbt','onclick' => 'return edit_factionvalidate();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
        
         <div id="editclassbox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 155px;">	<!-- OUR PopupBox DIV-->
   <?= Form::open('admin/class_edit', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px; " id="popup_title">Edit Class</span><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_classid" id="edit_classid" class="normal-input" />
   <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_classfactionid" id="edit_classfactionid" class="normal-input" />
   <input  type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_classgameid" id="edit_classgameid" class="normal-input" />
      
       
       <?php
//          $gameList[''] = "Select Game Name";
//          foreach ($games as $game):
//              $gameList[$game->id] = $game->game_name;
//          endforeach;
//             
       ?>
<!--      <div style="margin-left:100px; margin-top:-50px;"> <? //= Form::select('game', $gameList, "", array('class'=>"game-input", 'id'=>'game_professionedit'));?></div>    -->
       <h5>Class:</h5><br />
  <div style="margin-left:70px; margin-top:-45px;"><input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_classname" id="edit_classname" class="normal-input" /><!--<span id="editclassInfo"></span>--><!--<span class="val-loading" style="display:none;" id="editclassLoading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
   
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn','style' => 'width:150px;','id'=>'editclassbt','onclick' => 'return edit_classvalidate();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose" onclick="hideEditGameMessage('')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
        
        <div id="editprofessionbox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 155px;">	<!-- OUR PopupBox DIV-->
   <?= Form::open('admin/profession_edit', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px; " id="popup_title">Edit Server</span><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_professionid" id="edit_professionid" class="normal-input" />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_professiongameid" id="edit_professiongameid" class="normal-input" />
       
       
       <?php
//          $gameList[''] = "Select Game Name";
//          foreach ($games as $game):
//              $gameList[$game->id] = $game->game_name;
//          endforeach;
//             
       ?>
<!--      <div style="margin-left:100px; margin-top:-50px;"> <? //= Form::select('game', $gameList, "", array('class'=>"game-input", 'id'=>'game_professionedit'));?></div>    -->
       <h5>Profession:</h5><br />
  <div style="margin-left:100px; margin-top:-45px;"><input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_professionname" id="edit_professionname" onkeyup ="return check_professionname()" class="normal-input" /><!--<span id="editprofessionInfo"></span>--><!--<span class="val-loading" style="display:none;" id="editprofessionLoading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
    
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn','style' => 'width:150px;','id'=>'editprofessionbt','onclick' => 'return edit_professionvalidate();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose" onclick="hideEditGameMessage('')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>

        <?php //= Form::open('admin/save_gameDetails', array('enctype' => 'multipart/form-data', 'id' => 'addgame')); ?>
        <span class="large_title" style="font-size:35px;">ZergID Game Database </span>    
       <div id="get_game_add_grid"></div>
        <div id="hide_game_details">
        <div id="char_info_block" style="margin-left:30px;">
        <div style="width:976px;float:left; margin-top:-20px;">
        <span id="server_menu" align="left" class="section_span lbl_span">
                        <label for="game">Game</label><br>
           <div class="ui-widget" style="width:350px;"> 
                    <select style="width:150px; font-size:14px;"  name ="game_name" class="game-input" id="game"> 
                        <option value=""></option> 
                        <?php foreach ($gamenames as $game_name): ?>
                            <option value="<?= $game_name->id; ?>"><?= $game_name->game_name; ?></option> 
                        <?php endforeach; ?>
                    </select>
                    </div>     </span>
                <span id="faction_menu" align="left" class="section_span lbl_span"  style="margin-left:25px;">
                <label for="server">Server</label><br>
                <div id="custom" style="width:350px;">
                    <input type="text" id="dynfields" placeholder=""  name ="dynfields[]"  class = "normal-input" style ="width:178px;" autocomplete="off"> 
                <?php

                if (empty($serverList)):
                $serverList[''] = "Select Server";
                endif;
                ?> 
                <?= Form::select('server', $serverList, "", array('class' => "select-input", 'id' => 'server', 'style' => 'display:none'));?>
                <a href="#" onclick="return addServerTextfield();"><div style="width:25px;" class="serveraddimage" id="serveraddimage"><img  style =" vertical-align: middle"  src="../../public/images/add_icon.png" /></div><p></p></a> <span id="serveraddInfo"></span><span class="val-loading" style="display:none;" id="serveraddLoading"><!--<img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" />--></span></div>
                </span>
            <span id="faction_menu" align="left" class="section_span lbl_span"  style="margin-left:45px;">
            <label for="faction">Faction</label><br>
                        <div id="factioncustom" style="width:350px;">
               <input type="text" id="factionfields" placeholder=""  name ="factionfields[]" class = "normal-input" style ="width:178px;" autocomplete="off">
                     <?php
          
            if(empty($factionList)):
                $factionList[] = "Select Faction";
            endif; 
              ?>
            <?= Form::select('faction', $factionList, "", array('class'=>"select-input", 'id'=>'faction', 'style' => 'display:none', 'onchange'=>'getfactionClassList("'.URL::site().'")'));?>
                    
                    <a onclick ="return addFactionTextfield();" href="#"><div style="width:25px;" class="factionaddimage" id="factionaddimage"><img style =" vertical-align: middle"  src="../../public/images/add_icon.png" /></div><p></p></a> <span id="factionaddInfo"></span><span class="val-loading" style="display:none;" id="factionaddLoading"><!--<img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" />--></span> </div>    </span>
            <span id="faction_menu" align="left" class="section_span lbl_span"  style="margin-left:45px;">
            <label for="class">Class</label><br>
                        <div id="classcustom" style="width:350px;">
               <input type="text" id="classfields" placeholder=""  name ="classfields[]" class = "normal-input" style ="width:178px;" autocomplete="off">
                    <?php
             if(empty($classList)):
                $classList[] = "Select Game";
            endif; 
              ?>
           
            <?= Form::select('classid', $classList, "", array('class'=>"select-input", 'id'=>'classid', 'style' => 'display:none'));?>
                    <a onclick ="return addClassTextfield();" href="#"><div style="width:25px;" class="classaddimage" id="classaddimage"><img style =" vertical-align: middle;"  src="../../public/images/add_icon.png" /></div> </a><span id="classaddInfo"></span><span class="val-loading" style="display:none;" id="classaddLoading"><!--<img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" />--></span>  </div>     </span>
              
         
        </div>
        
        </div>

<span id="faction_menu" align="left" class="section_span lbl_span">
    <div style="margin-left:30px">
            <label for="profession">Profession</label><br>
                        <div id="professioncustom" style="width:350px;">
               <input type="text" id="professionfields" placeholder=" "  name ="professionfields[]" class = "normal-input" style ="width:178px;" autocomplete="off"> 
               <?php
          
            if(empty($professionList)):
                $professionList[''] = "Select Profession";
            endif; 
              ?>
           
            <?= Form::select('professionid', $professionList, "", array('class'=>"select-input", 'id'=>'professionid', 'style' => 'display:none'));?>
                     <a onclick ="return addProfessionTextfield();" href="#" ><div style="width:25px;" class="professionaddimage" id="professionaddimage"><img  style =" vertical-align: middle"  src="../../public/images/add_icon.png" /></div> <p></p></a> 
                    <span id="professionaddInfo"></span><span class="val-loading" style="display:none;" id="professionaddLoading"><!--<img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" />--></span>    </div>  </div>     </span>
<div style="padding:0px 20px 0px 0px;float:right; margin-top: 30px;">
         <?= Form::submit('addgame', 'SAVE', array('class' => 'save-button', 'style' => 'width:115px;', 'id' => 'addgamebt', 'onclick' => 'return post("' . URL::site() . '")')); ?>
         </div>
        </div>
        <? //= Form::close(); ?> 
        <div id="grid_loading"></div>
       
        
      
        <div style="float:left;">
            

            
            <span id="zergid_gamedetails" class="large_title" style="font-size:35px;">ZergID Game Details </span> 
<!--             <div style="padding-left:10px;font-size:13px;"><label>Show <select id="grid_paging_id"  name="datatables_length" size="1" aria-controls="datatables"><option value="20" selected="selected">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>-->
         <div style="float:right; margin-top:20px;">
       
        <?= Form::input('keyword', HTML::chars(Arr::get($_POST, 'game_name')), array('class' => 'normal-input hsearchBox', 'placeholder' => 'Search', 'maxlength' => '50', 'id' => 'admin-search','style'=>'width:150px;'));
        ?>
        </div>
            <br />
             <div id="get_game_grid"></div>
             <div id="game_grid" style="float:left;"> 
          
             <div   class="accordion" style ="width:950px; padding-left:10px;">
                <table  class="display" style ="width:950px;">
                    <thead>
                        <tr id="data_header">
                            <th align ="right"  style="padding-left:57px;"  width="70%">Game</th>
                            <th align ="right" style="padding-left: 25px;" width="15%">Edit</th>
                            <th style="padding-left: 15px;" align ="left" width="15%">Remove</th>
                        </tr>
                    </thead>
               </table>
                <div id="itemContainer">
                <?php foreach ($games as $game): ?>
                    <span id="append_game"> </span>
                    <div class="accordin" id="<?= $game->id; ?>game" style="border-bottom: 1px solid #ECECEC; height: 40px;">
                        <div onclick="return loadgrid(<?= $game->id; ?>);"  style="float: left; margin-top: 12px; width: 70%; margin-left:25px;">      
                            <img id="arr<?= $game->id; ?>"  class="arr" src="../../public/images/up-arrow.png" /> <span id="game_name<?= $game->id; ?>" style="padding-left:20px; font-size:13px;"><?= $game->game_name; ?></span>
                        </div>
                        <div style="float: left; margin-top: 12px; width:15%">      
                            <?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditGameBox("' . $game->id . '")')); ?>
                        </div>
                        <div style="float: left; margin-top: 12px;  ">      
                            <?=
                            HTML::image("public/images/delete_icon.png", array('class' => 'delete_icon', 'id' => $game->id,
                                'alt' => $game->game_name, 'onclick' => 'deleteGame("' . URL::base(TRUE, 'https') . '", "' . $game->id . '", "' . $game->game_name . '")'));
                            ?>
                        </div>
                    </div>
                       

                    <div id="child<?= $game->id; ?>" class="child" align="right" style="padding-top:5px; display: none;">

                    </div>

<?php endforeach; ?>
                </div> 
                <div align="right" class="holder"></div>
                <div style="font-size:13px;  margin-top:-32px;"> <form>
        <label>Show
        <select id="setpagingcount">
          <option>20</option>
          <option>50</option>
          <option>75</option>
           <option>100</option>
        </select>entries</label>
      </form></div> 
            </div>
        </div>
       
         <div id="grid_loader" style="position:fixed;margin-left:450px; display: none;">
           <img style="position:absolute; margin-top:-10px" src="/public/images/msg_load_blue.gif">
           <span style="padding-left:50px; font-size:15px">Loading...</span>
       </div>
        </div>
    </body>

</html>
