<span class="large_title"><?= ucfirst($user->username); ?>'s Guilds <?php if(count($guild_list) > 0): echo count($guild_list); endif;?></span>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#datatables').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true
        });
         var oTable = $('#datatables').dataTable();
         if(oTable.fnGetData().length < 11) {
              $('.dataTables_paginate').hide();
              $('.dataTables_length').hide();
               $('#datatables_filter').css({'margin-top':10});
         }
    })
   </script>
    <div>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header">
                    <th width="10%"></th>
                    <th>Name</th>
                    <th>Game</th>
                    <th>Server</th>
                </tr>
            </thead>
                <?php
                    foreach ($guild_list as $guild_list):
                    ?>
                    <tr class="row">
                        <td align="center"> 
                        <?php $favorite_list = explode(",",$favorites->guild_favorite);
                         $favorite_id =$guild_list->guild_id;
                         if (in_array($favorite_id, $favorite_list)) {
                          echo HTML::image("public/images/favorite.png",
                            array('style'=>'margin-left: 10px;','class'=>'favorite','id'=>$guild_list->guild_id)); 
                         }
                         else
                         {   echo "<b/>".HTML::image("public/images/non-favorite.png", 
                             array('style'=>'margin-left: 10px;','class'=>'favorite','id'=>$guild_list->guild_id)); 
                         }?>
                        </td>
                        <td class="character_name"><?php echo html::anchor('/guild/profile/'. $guild_list->guild_id, $guild_list->guild_name, array('class'=>"edit_character",'style'=>'width:210px'));?></td>
                        <td><?=$guild_list->game->game_name;?></td>
                        <td><?=$guild_list->server->server_name;?></td>
                    </tr>
                    <?php
                endforeach;
                ?>

        </table>
    </div>
    <?php                
             
                   
    ?>
