<?php if(count($event_members_approved) > 0):?>
<div style="margin-top:80px; margin-bottom: 50px;">
     <p  style="margin-left:30px; margin-top: 20px;" class="title">RSVP'd and Approved</p>
     
     <div style="width:100%;">
      
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header">
                    <th width="20%" style="padding-left: 30px;">Character</th>
                    <th width="18%">Rank</th> 
                    <?php foreach ($role_id as $role): ?>
                    <th width="14%"><?=$role->role_name?></th>
                    <?php endforeach;?> 
                    
                    <th width="11%"></th>
                    <th width="7%"></th>
                 
                </tr>
            </thead>
                <?php
                    foreach ($event_members_approved as $event_member):
                        
                    ?>
                    <tr class="row">
                        <td class="character_name" style="padding-left: 30px;"><?php echo HTML::anchor('/character/view/'. $event_member->character_detail_id, $event_member->character_name, array('class'=>"edit_character"));?></td> 
                      <td class="top-chars"><?php if($url !='char'):  ?>  <?=$event_member->member->role_name;?> <?php else: if($event->character_id == $event_member->character_detail_id): echo 'Event Leader'; else: echo 'Member'; endif; endif; ?></td>
                        <?php foreach ($role_id as $role): ?>
                        <td class="top-chars" style="padding-left:20px;"><?php if($event_member->is_role_accepted == $role->role_id): ?> <input type="checkbox" checked disabled name="rsvp_role1" value="<?=$event_member->is_role_accepted?>" id="rsvp_role<?=$event_member->is_role_accepted?>" /> <?php endif;?></td>
                        <?php endforeach;?> 
                        <td class="top-chars"><?php if($event_member->is_alternate == 1):  echo "Alternate"; endif; ?></td>
                          <td><?php if($event->user_id == $user->id): if($event->rsvp_state == 3):?>
                             <?=HTML::image("public/images/delete_icon.png",  array('class'=>'delete_icon', 'id'=>$event_member->event_member_id, 'alt'=>$event_member->character_name, 'onclick'=>'unApproveEventMember("'.URL::base(TRUE, 'https').'", this)'));?>
                             <?php else: ?>
                             <?=HTML::image("public/images/delete_icon.png",  array('class'=>'delete_icon', 'id'=>$event_member->event_member_id, 'alt'=>$event_member->character_name, 'onclick'=>'removeEventMember("'.URL::base(TRUE, 'https').'", this)'));?>
                             <?php endif; endif; ?>                    
                         </td>           
                    </tr>
                    <?php endforeach;?>
        </table>
    </div>
</div>
<?php endif;?>
