<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#datatables').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "aoColumnDefs": [{'bSortable': false, 'aTargets': [ 0,2,3,4 ]}]
        });
         var oTable = $('#datatables').dataTable();
         if(oTable.fnGetData().length < 11) {
              $('.dataTables_paginate').hide();
              $('.dataTables_length').hide();
              $('#datatables_filter').css({'margin-top':10});
         }
    })
    function refresh() {
        location.reload();
    }
</script>
    <div>
        <span class="large_title">Your Guilds <?php if(count($guild_list) > 0): echo count($guild_list); endif;?></span>
       <?php if(count($guild_list) > 0): ?>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header">
                    <th width="10%"></th>
                    <th>Name</th>
                    <th>Game</th>
                    <th>Server</th>
                    <th></th>
                 
                </tr>
            </thead>
                <?php
                    foreach ($guild_list as $guild_list):
                    ?>
                    <tr class="row">
                        <td align="center"> 
                        <?php 
                         $favorite_list = explode(",",$favorites->guild_favorite);
                         $favorite_id =$guild_list->guild_id;
                         if (in_array($favorite_id, $favorite_list)) {
                          echo HTML::image("public/images/favorite.png",
                            array('style'=>'margin-left: 10px;cursor:pointer','class'=>'favorite','id'=>'fav_'.$guild_list->guild_id,'onclick'=>'favorite("'.URL::base(TRUE, 'https').'",this,"'.$guild_list->guild_name.'","'.$guild_list->game->game_name.'")')); 
                         }
                         else
                         {   echo "<b/>".HTML::image("public/images/non-favorite.png", 
                             array('style'=>'margin-left: 10px;;cursor:pointer','class'=>'favorite','id'=>'fav_'.$guild_list->guild_id,'onclick'=>'favorite("'.URL::base(TRUE, 'https').'",this,"'.$guild_list->guild_name.'","'.$guild_list->game->game_name.'")')); 
                         } 
                         ?>
                        </td>
                        <td class="character_name"><?php if($guild_list->user_id == $user->id): echo html::anchor('/guild/view/'. $guild_list->guild_id, $guild_list->guild_name,  array('class'=>"edit_character",'style'=>'width:210px')); else: echo html::anchor('/guild/profile/'. $guild_list->guild_id, $guild_list->guild_name, array('class'=>"edit_character",'style'=>'width:210px')); endif;?></td>
                        <td><?=$guild_list->game->game_name;?></td>
                        <td><?=$guild_list->server->server_name;?></td>
                        <td align="center"> 
                         <?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon','id'=>$guild_list->guild_member_id,
                                    'alt'=>$guild_list->guild_name, 'onclick'=>'removeMember("'.URL::base(TRUE, 'https').'", "'.$guild_list->character_detail_id.'", "'.$guild_list->guild_role_id.'", "'.$guild_list->guild_id.'", "'.$user->id.'", this)')); ?>
                        </td>                    
                    </tr>
                    <?php
                endforeach;
                ?>

        </table>
        <?php else: ?>
        <div style="margin-left:30px">No guild available. <a href="/guild/add" style="color:#38CBF0">Click here to create a new guild</a> </div>
        <?php endif; ?>
    </div>
  
