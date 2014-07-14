  <span class="large_title char_tittle"><?= ucfirst($user->username); ?>'s Characters <?php if(count($character_list) > 0): echo count($character_list); endif;?></span>
  <script src="<?=URL::site('/public/grid/js/jquery.dataTables.js');?>" type="text/javascript"></script>
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
        });
   </script>
<?php if(count($character_list) > 0): ?>
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
              
                    foreach ($character_list as $character_list):
                    ?>
                    <tr class="row">
                        <td align="center">
                         <?php 
                         
                         $favorite_list = explode(",",$favorites->character_favorite);
                         $favorite_id =$character_list->character_detail_id;
                         if (in_array($favorite_id, $favorite_list)) {
                          echo HTML::image("public/images/favorite.png",
                            array('style'=>'margin-left: 10px;','class'=>'favorite','id'=>$character_list->character_detail_id)); 
                         }
                         else
                         {   echo "<b/>".HTML::image("public/images/non-favorite.png", 
                             array('style'=>'margin-left: 10px;','class'=>'favorite','id'=>$character_list->character_detail_id)); 
                         }?>    
                        </td>
                        <td class="character_name"><?php echo html::anchor('/character/view/'. $character_list->character_detail_id, $character_list->character_name,  array('class'=>"edit_character",'style'=>'width:210px'));?></td>
                        <td><?=$character_list->game->game_name;?></td>
                        <td><?=$character_list->server->server_name;?></td>
                    </tr>
                    <?php
                endforeach;
                ?>

        </table>
    </div>
   <?php endif;?>
    
