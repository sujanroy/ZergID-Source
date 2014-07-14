<script src="<?= URL::site('/public/grid/js/admin.jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
<link rel="stylesheet" href="<?= URL::site('/public/css/admincss.css'); ?>" />
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
    $('#datatables').dataTable({
        "sPaginationType":"full_numbers",
        "bJQueryUI":true,
        "aoColumnDefs": [{
            'bSortable': false, 
            'aTargets': [10,11]
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

        $('#guild_game_select', this).change( function () {
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
                    $('#guild_server_select').empty();
                    if(response != "[]") {
                        var data = $.parseJSON(response);
                        $('<option value="">Select Server Name</option>').appendTo('#guild_server_select');
                        for(var item in data)
                        {
                            $('<option value="'+item+'">'+item+'</option>').appendTo('#guild_server_select');
                            $('#guild_server_select').css({
                                'display':'inline-block'
                            });
                        }
                    }
                     else
                        {
                            all_guild_server_list();
                        }
                });
            } );
        } );

        $('#guild_server_select', this).change( function () {
            oTable_charcter.fnFilter( $(this).val(), i );
        } );
    } );
} );
    function refresh() {
        location.reload();
    }
</script>
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
}</style>
<span id="guild_title" class="large_title">Manage Guilds <span id="guild_count"><?php if(count($guild_list) > 0): echo count($guild_list); endif;?></span></span>
<div id="viewguildmemberbox" class="popup_box" style="margin-left:255px; height: 500px; width:500px;">	<!-- OUR PopupBox DIV-->
          <input type="hidden" id="guild_dynamicid" name="guild_dynamicid" value="" /><div id="guild_memloading"></div>
          <div id="guild_meminfo"></div>
          <a class="popupGuildmembersClose" href="#" onclick="return popupGuildmembersClose();"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="viewguildeventbox" class="popup_box" style="margin-left:255px; height: 500px; width:500px;">	<!-- OUR PopupBox DIV-->
          <div id="guild_eventloading"></div>
          <div id="guild_eventinfo"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="deleteguildbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="guild_del_info" style="font-size: 68px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>

 <div id="editguildbox" class="popup_box" style="margin-top:-100px; margin-left:85px; height: 600px; width:750px;">	<!-- OUR PopupBox DIV-->
          <div id="guildloading"></div>
          <div id="guild_info"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="character_details_grid"></div>
<div id="character_details_grid_loading"></div>

<div id="hideguildedetails"> 
    <div style="width:940px;" align="right"> <span class="radio_class"><input type="radio"  name="charaguildlist" value="1"  onclick="ShowCharacterlist('<?= URL::base(); ?>');" class="checkbox" style="margin-right:10px;"><label for="character" style="font-size:15px;">All Character</label></span> <span class="radio_class"><input type="radio"  name="charaguildlist" value="2" checked="checked" class="checkbox" style="margin-right:10px;"><label for="evnt_members"  style ="color: #71bdf0; font-size:15px;">All Guild</label></span></div>
<div>
    <div style="float:right; margin-top:-6px;" class="game_server">
             <span style="display:none;"></span>
               <span style="display:none;"></span>
               <span style="display:none;"></span>
                <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span style="display:none;"></span>
                 <span> <?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->game_name] = $game->game_name;
          endforeach;
              
       ?>
       <?= Form::select('game', $gameList, "", array('class'=>"select-input", 'id'=>'guild_game_select'));?> </span>
                  <span><?php
          $serverList[''] = "Select Server Name";
          foreach ($servers as $server):
              $serverList[$server->server_name] = $server->server_name;
          endforeach;
              
       ?>
       <?= Form::select('server', $serverList, "", array('class'=>"select-input", 'id'=>'guild_server_select'));?></span>
                </div>
        <?php if(count($guild_list) > 0): ?>
      <table id="datatables" class="display" style="width:970px; margin-top:12px;">
            <thead>
               <tr id="data_header">
                    <th style="text-align: center;"  width="10%">Favorite</th>
                    <th  width="20%">Guild Name</th>
                    <th  width="13%">Game</th>
                    <th  width="12%">Server</th>
                   <th  width=7%">Accepting</th>
                   <th  width="6%">Members</th>
                   <th  width="6%">Events</th>
                   <th  style="padding-left:25px;"  width="8%">Edit</th>
                    <th align="center"  width="5%">Delete</th>
                    <th  width="20%">Date/Time</th>
                    <th  width="1%"></th>
                     <th  width="1%"></th>

                </tr>
            </thead>
                <?php
                    foreach ($guild_list as $guild_list):
                    ?>
                    <tr id="row<?= $guild_list->guild_id ?>" class="row">
                        <td align="center"> 
                        <?php 
                         $favorite_list = explode(",",$guild_list->guild_favorite);
                         $favorite_id =$guild_list->guild_id;
                         if (in_array($favorite_id, $favorite_list)) {
                          echo HTML::image("public/images/favorite.png",
                            array('style'=>'margin-left: 10px;cursor:pointer','class'=>'favorite','id'=>$guild_list->guild_id)); 
                         }
                         else
                         {   echo "<b/>".HTML::image("public/images/non-favorite.png", 
                             array('style'=>'margin-left: 10px;;cursor:pointer','class'=>'favorite','id'=>$guild_list->guild_id)); 
                         } 
                         $guild_create_date = date('Y-m-d', strtotime($guild_list->created_date));
                        $current_date = date('Y-m-d');
                        if ($guild_create_date == $current_date):
                           $date = "Today at " . date('h:i A', strtotime($guild_list->created_date));
                       else:
                           $date = date("M d, Y h:i A ", strtotime($guild_list->created_date));
                       endif;
                         ?>
                        </td>
                        <td><span class="character_name"><?php echo Text::limit_chars($guild_list->guild_name, 8, '...'); ?></span><span style="margin-left:4px"> (<?= $guild_list->user->username; ?>)</span></td>
                        <td><?php echo Text::limit_chars($guild_list->game->game_name, 12, '...'); ?></td>
                        <td><span id="guild_server<?= $guild_list->guild_id; ?>"><?php echo Text::limit_chars($guild_list->server->server_name, 12, '...'); ?></span><span id="edit_guild_server<?= $guild_list->guild_id; ?>"></span></td>
                        <td style="padding-left:25px;"> 
                            <span id="guild_accpet<?= $guild_list->guild_id; ?>"> <input type="checkbox" disabled="disabled" name="guild_accept" id="guild_accept" class="form-checkbox" <?php if($guild_list->is_accept_applicant == 1) : ?> checked="checked" <?php endif; ?> /></span><span id="edit_guild_accept<?= $guild_list->guild_id; ?>"></span></td>
                        <td style="padding-left:25px;"><a href="#" onclick="return viewGuildMembers('<?= URL::base(); ?>',<?= $guild_list->guild_id ?>,<?= $guild_list->user_id ?>)"><span id="guild_members_count<?= $guild_list->guild_id; ?>"><?= $guild_list->guild_member_count; ?></span><span id="guild_member_cnt_del<?= $guild_list->guild_id; ?>"></span></a></td>
                         <td style="padding-left:10px;"><?= HTML::image("public/images/icon-calender.png", array('class' => 'event_icon', 'style' => 'cursor: pointer','onclick' => "showGuildEventBox('".URL::site()."', '".$guild_list->guild_id."','".$guild_list->user_id."')")); ?></td>
                        <td align="center"><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'style' => 'cursor: pointer','onclick' => "showEditguildBox('".URL::site()."', '".$guild_list->guild_id."')")); ?></td>
                        <td> 
                         <?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon','id'=>$guild_list->guild_member_id,
                                    'alt'=>$guild_list->guild_name, 'onclick'=>'removeGuild("'.URL::base(TRUE, 'https').'", "'.$guild_list->character_detail_id.'", "'.$guild_list->guild_role_id.'", "'.$guild_list->guild_id.'", "'.$guild_list->user_id.'", this)')); ?>
                        </td>
                         <td style="font-size: 10px;"><?= $date; ?>  </td>
                         <td style="display:none;"><?= $guild_list->game->game_name; ?></td>
                         <td style="display:none;"><?= $guild_list->server->server_name; ?></td>
                    </tr>
                    
                    <?php
                endforeach;
                ?>
        </table>
        <?php else: ?>
        <div style="margin-left:30px">No guild available.</div>
        <?php endif; ?>
    </div>
</div>
  