
       <script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
       
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
        </script>
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
                <?= Form::select('server', $serverList, "", array('class' => "select-input", 'id' => 'server', 'style' => 'display:none', 'onchange'=>'getserverFactionList("'.URL::site().'")'));?>
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