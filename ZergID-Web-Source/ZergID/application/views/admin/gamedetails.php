 <script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
  <script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
<!-- <script type="text/javascript">
  $(document).ready(function() {
                    $(".fac_parent").click(function(){
                        $(this).next(".fac_child").slideToggle("slow")
                        .siblings(".fac_child:visible").slideUp("slow");
                        $(this).toggleClass("active");
                        $(this).siblings(".fac_parent").removeClass("active");
                        $('tr.fac_parent img.arr1').attr('src', 'http://www.riverstonetech.com/images/right.gif');
                        $('tr.fac_parent.active img.arr1').attr('src', 'http://www.riverstonetech.com/images/down.gif');
                        
                        if(this.id != "") {
                            $('.fac_child').html('');
                            $.post('/admin/get_class_details/',
                            {
                                faction_id: this.id
                            }
                            , function(response) {
                                alert(response);
                                $('.fac_child').html(response);
                            });
                        }
                    });
                });
 </script>-->

<style>
    .edit_icon{
        cursor:pointer;
    }
    </style>
 
 <div>
   
   <div style="float:left;">
   <div class="scroll_bar">
    <?php if (count($servers) > 0): ?>
           <?php foreach($servers as $server): ?>
       <div style="height: 30px;width: 100%" id="<?= $server->id; ?>server" >
       <div style="margin-left: 95px;font-size:12px;width: 130%;">
            <?=HTML::image("public/images/grid-arrow.png", array('class'=>'edit_icon')); ?><span id="server_name<?= $server->id; ?>"><?= $server->server_name; ?> </span><span id="edit_server_name<?= $server->id; ?>"></span>          
           <?php 
           $server_date = date('Y-m-d', strtotime($server->last_modified_date));
         $current_date = date('Y-m-d');
         if($server_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($server->last_modified_date));
         else:
             $date = date("M d, Y",strtotime($server->last_modified_date));
         endif;
         ?>
         <span style="font-size:10px;color: #b8b8b8;"><?=$date;?></span>           
           <span style="font-size:12px;color: #b8b8b8;"> - Server</span></div>
           <div style="margin-top: -20px; float: left; margin-left: 690px;"><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditserverBox("' . $server->server_name . '","' . $server->id . '","' . $server->game_id . '")')); ?></div>
           <div style="float: left; margin-top: -20px; margin-left: 832px;"><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon',
                                    'alt'=>$server->server_name, 'onclick'=>'deleteServer("'.URL::base(TRUE, 'https').'", "'.$server->id.'", "'.$server->server_name.'", "'.$server->game_id.'")')); ?></div>
           </div>   
           <?php endforeach; ?>
       </table>
   <?php endif; ?>
       
       
        <?php foreach($factions as $faction): ?>
            <?php if($faction->game_id == $game_id):?>
                <div style="height: 30px;width: 100%" id="<?= $faction->faction_id; ?>faction" >       
            <div style="margin-left: 94px;font-size:12px;">
            <?=HTML::image("public/images/grid-arrow.png", array('class'=>'edit_icon')); ?><span id="faction_name<?= $faction->faction_id; ?>"><?= $faction->faction_name; ?></span><span id="edit_faction_name<?= $faction->faction_id; ?>"></span>
                <?php 
                $faction_date = date('Y-m-d', strtotime($faction->last_modified_date));
                $current_date = date('Y-m-d');
                if($faction_date == $current_date):
                    $date = "Today at ". date('h:i A', strtotime($faction->last_modified_date));
                else:
                    $date = date("M d, Y",strtotime($faction->last_modified_date));
                endif;
                ?>
                <span style="font-size:10px;color: #b8b8b8;"><?=$date;?></span> 
                <span style="font-size:12px;color: #b8b8b8;"> - Faction</span>
                </div>
                <div style="margin-top: -20px; float: left; margin-left: 690px;"><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditfactionBox("' . $faction->faction_name . '","' . $faction->faction_id . '","' . $faction->game_id . '")')); ?></div>
                <div style="float: left; margin-top: -20px; margin-left: 117px;"> <?=HTML::image("public/images/delete_icon.png", 
                                        array('class'=>'delete_icon',
                                            'alt'=>$faction->faction_name, 'onclick'=>'deleteFaction("'.URL::base(TRUE, 'https').'", "'.$faction->faction_id.'", "'.$faction->faction_name.'", "'.$faction->game_id.'")')); ?></div>

                    </div>
                <?php endif;?>
               
                             
            <!--          display faction directly to game-->            
                         <?php foreach($classes as $class): ?>
                         <?php if($faction->faction_id == $class->faction_id):?>
                        <div style="height: 30px;width: 100%" id="<?= $class->class_id; ?>class" >   
                        <div style="margin-left: 135px;font-size:12px;">
                        <?=HTML::image("public/images/grid-arrow.png", array('class'=>'edit_icon')); ?><span id="class_name<?= $class->class_id; ?>"><?= $class->class_name; ?></span><span id="edit_class_name<?= $class->class_id; ?>"></span>
                            <?php 
                            $class_date = date('Y-m-d', strtotime($class->last_modified_date));
                            $current_date = date('Y-m-d');
                            if($class_date == $current_date):
                                $date = "Today at ". date('h:i A', strtotime($class->last_modified_date));
                            else:
                                $date = date("M d, Y",strtotime($class->last_modified_date));
                            endif;
                            ?>
                            <span style="font-size:10px;color: #b8b8b8;"><?=$date;?></span> 
                            <span style="font-size:12px;color: #b8b8b8;"> - Class</span> 
                            </div>
                            <div style="margin-top: -20px; float: left; margin-left: 690px;"><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditclassBox("' . $class->class_name . '","' . $class->class_id . '","' . $class->faction_id . '","' . $class->game_id . '")')); ?></div>
                            <div style="float: left; margin-top: -20px; margin-left: 117px;"><?=HTML::image("public/images/delete_icon.png", 
                                                    array('class'=>'delete_icon','id'=>$class->class_id,
                                                        'alt'=>$class->class_name, 'onclick'=>'deleteclass("'.URL::base(TRUE, 'https').'", "'.$class->class_id.'", "'.$class->class_name.'", "'.$class->game_id.'")')); ?></div>
                            </div>
                         <?php endif; ?>
                      <?php endforeach;?>   
                     

              <?php endforeach;?>
       
       
       
        <?php foreach($professions as $profession): ?>
       <div style="height: 30px;width: 100%" id="<?= $profession->profession_id; ?>profession" > 
       <div style="margin-left: 95px;font-size:12px;">
       <?=HTML::image("public/images/grid-arrow.png", array('class'=>'edit_icon')); ?><span id="profession_name<?= $profession->profession_id; ?>"><?= $profession->profession_name; ?> </span><span id="edit_profession_name<?= $profession->profession_id; ?>"></span>
           <?php 
           $profession_date = date('Y-m-d', strtotime($profession->last_modified_date));
         $current_date = date('Y-m-d');
         if($profession_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($profession->last_modified_date));
         else:
             $date = date("M d, Y",strtotime($profession->last_modified_date));
         endif;
         ?>
         <span style="font-size:10px;color: #b8b8b8;"><?=$date;?></span> 
           <span style="font-size:12px;color: #b8b8b8;">- Profession</span>
           </div>
           <div style="margin-top: -20px; float: left; margin-left: 690px;"><?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditprofessionBox("' . $profession->profession_name . '","' . $profession->profession_id . '","' . $profession->game_id . '")')); ?></div>
           <div style="float: left; margin-top: -20px; margin-left: 832px;"><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon','id'=>$profession->profession_id,
                                    'alt'=>$profession->profession_name, 'onclick'=>'deleteProfession("'.URL::base(TRUE, 'https').'", "'.$profession->profession_id.'", "'.$profession->profession_name.'", "'.$profession->game_id.'")')); ?></div>
          </div>
       <?php endforeach; ?>
       

           
       
   </div>
   </div>
 
     
     
     
     
     
     
     
     
     
     
     
</div>
<script>
  /* $('.scroll_bar').slimscroll({
       color: '#38CBF0',
       width: '600px',
       height: '200px',
       opacity : .7,
       wheelStep : 5,
       railVisible: true
   });*/
</script>
