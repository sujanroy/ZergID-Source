<?php if(count($event_members_pending) > 0): if($event->user_id == $user->id && $event->rsvp_state == 3):?>
<div>
     <p  style="margin-left:30px; margin-top: 20px;" class="title">Pending Approval</p>
         <fieldset style="width:100%; padding: 0; border:0">
      <?= Form::open('events/rsvp_approval/', array('enctype' => 'multipart/from-data', 'id' => 'rsvp_approval')); ?>          
        <table id="datatables_pending" class="display">
            <thead>
                <tr id="data_header">
                    <th widht="8%"  style="padding-left: 10px; padding-right:10px;"></th>
                    <th width="18%">Character</th>
                   <th width="17%">Rank</th>
                   <?php foreach ($role_id as $role): ?>
                    <th width="15%"><?=$role->role_name?></th>
                   <?php endforeach;?> 
                    <th width="10%"></th>
                 
                </tr>
            </thead>
                <?php
                    foreach ($event_members_pending as $event_member):
                    ?>
                    <tr class="row">
                        <td class="rsvp_role" style="padding-left: 10px; padding-right:10px;"></td>
                         <td class="character_name rsvp_role"><?php echo html::anchor('/character/view/'. $event_member->character_detail_id, $event_member->character_name, array('class'=>"edit_character",'style'=>'width:100px;margin-left:-20px'));?></td> 
                       <td class="top-chars rsvp_role"><?php if($url !='char'):  ?>  <?=$event_member->member->role_name;?> <?php else: if($event->character_id == $event_member->character_detail_id): echo 'Event Leader'; else: echo 'Member'; endif; endif; ?></td>
                                         
                      <?php $role_list = explode(",", $event_member->comeas_role);?>
                      <input type='hidden' value='0' id='rsvp_hidden_value<?=$event_member->event_member_id ?>'  name='rsvp_hidden_value<?=$event_member->event_member_id ?>'>
                       <?php foreach ($role_id as $roles):?>
                       <?php if(in_array($roles->role_id,$role_list )): ?>
                       <td class="rsvp_role"> <input type='hidden' value='0' name='rsvp_role<?=$event_member->event_member_id ?>[]'><span class="squaredFour" style="marign-top:-9px;" id="spnrsvp_<?=$roles->role_name;?><?=$event_member->event_member_id;?>"><?= Form::checkbox('rsvp_role'.$event_member->event_member_id."[]", $roles->role_id, (bool)$roles->role_id, array('id' => 'rsvp_'.$roles->role_name.$event_member->event_member_id,'class'=>'rsvpclass_'.$event_member->event_member_id, 'style'=>'margin-right:-10px;')); ?><label style=" margin-top:-1px;" for="rsvp_<?=$roles->role_name;?><?=$event_member->event_member_id; ?>"></label></span></td>
                        <?php else:?>
                       <td class="rsvp_role"><?php echo "<b/>".HTML::image("public/images/chk-box.png",array('style'=>'margin-left:-2px')) ?></td>
                           <?php endif;?>
                           <?php endforeach; ?>
                      
                         <td>
                        <?= Form::select('em'.$event_member->event_member_id, array(''=>'Select', '1' => 'Approve', '2' => 'Alternate', '3'=>'Deny'), '', array('class'=>"select-input rsvp-select myselect", 'id'=>'em'.$event_member->event_member_id, 'style'=>'width:110px; margin-left:-10px;', 'onchange'=>'return rsvpApproval("'.URL::site().'", "'.$event_member->event_member_id.'", "'.$event->event_id.'", this);'));?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
        </table>
             <input type="hidden" value="<?=$url;?>" name="url" id="url" />
              <?= Form::close(); ?>
         </fieldset>
</div>
<?php endif; endif; ?>
