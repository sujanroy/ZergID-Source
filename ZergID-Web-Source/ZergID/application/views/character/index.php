<script src="<?=URL::site('/public/grid/js/jquery.dataTables.js');?>" type="text/javascript"></script>
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
         }
          var url = window.location.href;
          var urlChunks = url.split('/');
          var id = urlChunks[urlChunks.length - 1];
          var screen_id = urlChunks[4];
          if(id != "character") {
              $('#row'+id).css({'display':'none'});
          }
          if(screen_id == "edit") {
              $('#count').css({'display':'none'});
          }
        });
   </script>
   <span class="large_title">Your Characters <span id="count"><?php if(count($character_list) > 0): echo count($character_list); endif;?></span></span>
    <?php if(count($character_list) > 0): ?>
    <div>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header">
                    <th  width="10%"></th>
                    <th>Name</th>
                    <th>Game</th>
                    <th>Server</th>
                    <th></th>
                    
                </tr>
            </thead>
                <?php
              
                    foreach ($character_list as $character_list):
                    ?>
                    <tr id="row<?= $character_list->character_detail_id?>" class="row">
                        <td align="center">
                         <?php 
                         $favorite_list = explode(",",$favorites->character_favorite);
                         $favorite_id =$character_list->character_detail_id;
                         if (in_array($favorite_id, $favorite_list)) {
                          echo HTML::image("public/images/favorite.png",
                            array('style'=>'margin-left: 10px;cursor:pointer','class'=>'favorite','id'=>'favchar_'.$character_list->character_detail_id,'onclick'=>'character_favorite("'.URL::base(TRUE, 'https').'",this,"'.$character_list->character_name.'","'.$character_list->game->game_name.'","'.$character_list->server->server_name.'")')); 
                         }
                         else
                         {   echo "<b/>".HTML::image("public/images/non-favorite.png", 
                             array('style'=>'margin-left: 10px;;cursor:pointer','class'=>'favorite','id'=>'favchar_'.$character_list->character_detail_id,'onclick'=>'character_favorite("'.URL::base(TRUE, 'https').'",this,"'.$character_list->character_name.'","'.$character_list->game->game_name.'","'.$character_list->server->server_name.'")')); 
                         }?> 
                            
                        </td>
                        <td class="character_name"><?php echo html::anchor('/character/edit/'. $character_list->character_detail_id, $character_list->character_name, array('class'=>"edit_character",'style'=>'width:210px'));?></td>
                        <td><?=$character_list->game->game_name;?></td>
                        <td><?=$character_list->server->server_name;?></td>
                        <td align="center"><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon','id'=>$character_list->character_detail_id,
                                    'alt'=>$character_list->character_name, 'onclick'=>'deleteCharacter("'.URL::base(TRUE, 'https').'", "'.$character_list->guild_id.'", "'.$character_list->guild_role_id.'", this)')); ?></td>
                    </tr>
                    <?php
                endforeach;
                ?>
        </table>
    </div>
   <?php endif;?>
    
