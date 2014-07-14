<script src="<?= URL::site('/public/grid/js/admin.jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
<link rel="stylesheet" href="<?= URL::site('/public/css/admincss.css'); ?>" />

<style>.popup_box { 
    display:none; /* Hide the DIV */
    _position:absolute; /* hack for internet explorer 6 */  
    background:#FFFFFF;  
    margin-top: 10px;
    z-index:9999; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
    border:1px solid #fff;  	
    padding:15px;  
    font-size:15px;

}
.popup_box{
    margin-left: -130px; 
    min-height:235px;  
    width:550px;  
    position:absolute;
}



/*#items a:hover {
    background-color:#F0F0F0;
    border-bottom: 2px solid #555555;   
}*/

</style>
<script>
    $(document).ready(function(){
    $('#datatables').dataTable({
        "sPaginationType":"full_numbers",
        "bJQueryUI":true,
        "aoColumnDefs": [{
            'bSortable': false, 
            'aTargets': [7]
            }]
    });
    var oTable = $('#datatables').dataTable();
    $('.dataTables_paginate').css({
        'float':'left'
    });
    $('.dataTables_length').css({
        'margin-right':'486px'
    });
    $('#datatables_filter').css({
        'display':'block',
        'padding-left':'685px'
    });
    $('.dataTables_info').css({
        'display':'block',
        'float':'right'
    });
    if(oTable.fnGetData().length < 1) {
        $('.dataTables_paginate').hide();
        $('.dataTables_length').hide();
    }
});
$(document).ready(function() {

    var oTable_charcter = $('#datatables').dataTable();
    /* Add a select menu for each TH element in the table footer */
    $(".game_server span").each( function ( i ) {

        $('#char_game_select', this).change( function () {
            oTable_charcter.fnFilter( $(this).val(), i );
            $.post("/admin/get_gamenameid", {       
                game_name: $(this).val()
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

                $.post("/admin/select_gameservers", {       
                    game_id: game_id_change
                }, function(response){
                    $('#char_server_select').empty();
                    if(response != "[]") {
                        var data = $.parseJSON(response);
                        $('<option value="">Select Server Name</option>').appendTo('#char_server_select');
                        for(var item in data)
                        {
                            $('<option value="'+item+'">'+item+'</option>').appendTo('#char_server_select');
                            $('#server_menu').css({
                                'display':'inline-block'
                            });
                        }
                    }
                    else
                        {
                            all_char_server_list();
                        }
                });
            } );
        } );

        $('#char_server_select', this).change( function () {
            oTable_charcter.fnFilter( $(this).val(), i );
        } );
    } );
} );


    </script>


<span id="character_title" class="large_title">Manage Character <span id="character_count"><?= count($character_list); ?></span> </span>
      <div id="editcharacterbox" class="popup_box" style="margin-top:-100px; margin-left:180px; height: 580px; width:580px;">	<!-- OUR PopupBox DIV-->
          <div id="loading"></div>
          <div id="char_info"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
 <div id="deletecharacterbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="char_del_info" style="font-size: 68px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="editsuccesscharacterbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="char_edit_info" style="font-size: 68px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose" onclick="return popupCharacterEditSuccessClose();"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>

<div id="guild_details_grid"></div>
<div id="guild_details_grid_loading"></div>

  <div id="hide_character_grid">
      <div style="width:940px;" align="right"> <span class="radio_class"><input type="radio"  name="charaguildlist" value="1" checked="checked" class="checkbox" style="margin-right:10px;"><label for="character" style=" color: #71bdf0; font-size:15px;">All Character</label></span> <span class="radio_class"><input type="radio"  name="charaguildlist" value="2" class="checkbox" onclick="ShowGuildlist('<?= URL::base(); ?>');" style="margin-right:10px;"><label for="evnt_members" style="font-size:15px;">All Guild</label></span></div>
<?php if (count($character_list) > 0): ?>
    <div align="center">
         <div style="float:right; margin-top:-6px;" class="game_server">
             <span style="display:none;"></span>
               <span style="display:none;"></span>
               <span> <?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->game_name] = $game->game_name;
          endforeach;
              
       ?>
       <?= Form::select('game', $gameList, "", array('class'=>"select-input", 'id'=>'char_game_select'));?> </span>
               <span style="display:none;"></span>
                <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                  <span><?php
          $serverList[''] = "Select Server Name";
          foreach ($servers as $server):
              $serverList[$server->server_name] = $server->server_name;
          endforeach;
              
       ?>
       <?= Form::select('server', $serverList, "", array('class'=>"select-input", 'id'=>'char_server_select'));?></span>
                </div>
        <table id="datatables" class="display" style="width:970px; margin-top:12px;">
            <thead>
                <tr id="data_header">
                    <th style="text-align: center;"  width="15%">Favorite</th>
                    <th  width="20%">Character Name</th>
                    <th  width="23%">Game</th>
                    <th  width="15%">Server</th>
                    <th  width="8%">Edit</th>
                    <th  width="5%">Delete</th>
                    <th  width="19%">Date/Time</th>
                    <th  width="1%"></th>
                </tr>
            </thead>
            <?php
            foreach ($character_list as $character_list):
                ?>
                <tr id="row<?= $character_list->character_detail_id ?>" class="row">
                    <td  style="text-align: center; margin-left:-5px;">
                        <?php
                        $favorite_list = explode(",", $character_list->character_favorite);
                        $favorite_id = $character_list->character_detail_id;
                        if (in_array($favorite_id, $favorite_list)) {
                           echo '<img src="/public/images/favorite.png" />'; //echo HTML::image("../../public/images/favorite.png", array('style' => 'margin-left: 10px;cursor:pointer', 'class' => 'favorite', 'id' => $character_list->character_detail_id));
                        } else {
                            echo '<img src="/public/images/non-favorite.png" />'; //echo "<b/>" . HTML::image("../../public/images/non-favorite.png", array('style' => 'margin-left: 10px;cursor:pointer', 'class' => 'favorite', 'id' => $character_list->character_detail_id));
                        }

                        $character_create_date = date('Y-m-d', strtotime($character_list->created_date));
                        $current_date = date('Y-m-d');
                        if ($character_create_date == $current_date):
                           $date = "Today at " . date('h:i A', strtotime($character_list->created_date));
                       else:
                           $date = date("M d, Y h:i A ", strtotime($character_list->created_date));
                       endif;
                       
                        ?> 

                    </td>
                    <td ><span class="character_name"><?php echo Text::limit_chars($character_list->character_name, 12, '...'); ?></span>   <span style="margin-left:10px"> (<?= $character_list->user->username; ?>)</span></td>
                    <td><?= $character_list->game->game_name; ?></td>
                    <td><span id="server_name_view<?= $character_list->character_detail_id; ?>"><?= $character_list->server->server_name; ?></span><span id="edit_server_name<?= $character_list->character_detail_id; ?>"></span></td>
                    <td><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'style' => 'cursor: pointer','onclick' => "showEditcharacterBox('".URL::site()."', '".$character_list->character_detail_id."')")); ?></td>
                    <td><?=
                HTML::image("public/images/delete_icon.png", array('class' => 'delete_icon', 'id' => $character_list->character_detail_id,
                    'alt' => $character_list->character_name,'onclick' => "deleteCharacter('".URL::site()."', '".$character_list->character_detail_id."', '".$character_list->character_name."',this)"));
                        ?></td>
                    <td align="left" style="font-size: 10px;"><?= $date; ?>  </td>
                    <td style="display:none;"><?= $character_list->server->server_name; ?></td>
                </tr>
          
                <?php
            endforeach;
            ?>
        </table>

    </div>
<?php endif; ?>
  </div>
