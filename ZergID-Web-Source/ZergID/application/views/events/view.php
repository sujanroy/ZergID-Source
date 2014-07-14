<?php 
// if($explode_uri[4] != 'char'):
//    $atargets = ',6';
//else:
//    $atargets = '';
//endif; 
?>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('.display').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "aoColumnDefs": [{'bSortable': false, 'aTargets': [ 0,2,3,4,5,6,7,8]}],
            "fnDrawCallback": function(oSettings) {
                if ($('#datatables tr').length < 11) {
                    $('.dataTables_paginate').hide();
                    $('.dataTables_length').hide();
                    $('#datatables_filter').css({'margin-top':10});
                }
            }
        });
    });
   
</script>

<div style="width:90%; margin-left:30px; margin-top:20px; float: left;">
    <p class="profile_title"><?= $event->event_name; ?><?php if($event->user_id == $user->id): ?><span style="float: right;"><?php if($explode_uri[4] != 'char'): ?><a href="/events/edit/<?= $event->guild_id; ?>/<?= $event->event_id; ?>"> <?php else: ?> <a href="/events/edit/<?= $event->event_id; ?>/char"> <?php endif; ?><input type="button" value="EDIT" class="save-button" style="height:30px; margin: 0px;" /></a></span><?php endif;?></p> 
    <div>
        <div style="float:left; width:45%;">
             <?php 
            $event_date = date("l M d, Y",strtotime($event->event_date));
            $time = array();
            $time = $config_path->time;
            ?>
            <?php
//            echo $timezone;
            $from_time = $time[$event->event_from_time];
            $to_time = $time[$event->event_to_time];
//                    echo $to_time;
                    //from date
//                    $fromdate = new DateTime($from_time);

 //                   $from_date = $fromdate->setTimezone(new DateTimeZone($timezone));
 
//                    $from_date->modify("930 minutes");
//                    $event_from_time = $from_date->format('g:i A');
                    
                    //to date
  //                  $todate = new DateTime($to_time);

   //                 $to_date = $todate->setTimezone(new DateTimeZone($timezone));
                    
  //                  $to_date->modify("930 minutes");

    //                $event_to_time = $to_date->format('g:i A');
 
                      $from_date = new DateTime($from_time, new DateTimeZone($event_timezone)); 

                      date_default_timezone_set($timezone); 
                      $fromdate = date("h:iA", $from_date->format('U')); 
 
                      $to_date = new DateTime($to_time, new DateTimeZone($event_timezone)); 
                       date_default_timezone_set($timezone); 
                       $todate = date("h:iA", $to_date->format('U'));                         
                
                     $eventdate = new DateTime($event_date, new DateTimeZone($event_timezone)); 
                     date_default_timezone_set($timezone); 
                     $event_date = date("l M d, Y", $eventdate->format('U')); 
   
                 ?>
            <?php if($explode_uri[4] == 'char'): ?> 
             <div id="character_name_show"><span class="title">Char:</span><span class="span-text" style="margin-left:20px;"><?= $character_name->character_name; ?></span></div><br /> <?php endif; ?>
         <div style="margin-top:-4px;">   <span class="title">Date:</span><span class="span-text" style="margin-left:20px;"><?= $event_date; ?></span></div>
            <div style="margin-top:15px;"><span class="title">Time:</span><span class="span-text" style="margin-left:20px;"><?= $fromdate.'-'.$todate?></span></div>
            <div style="margin-top:15px;"><span class="title">Description:</span><br /><span class="span-text" style="font-weight:normal;"><?= $event->event_description; ?></span></div>
        </div>
        <div style="float:right">
            <?php if($event->is_attendance_required == 1): ?><div class="title" style="color:#D14F4F">Attendance Required</div><?php endif; ?>
        <?php if($explode_uri[4] != 'char'): ?>
         <?= Form::open('events/save_role/'.$event->guild_id.'/'.$event->event_id, array('enctype' => 'multipart/from-data', 'id' => 'form_come_as')); ?> 
            <?php else: ?>
             <?= Form::open('events/save_role/'.$event->character_id.'/'.$event->event_id, array('enctype' => 'multipart/from-data', 'id' => 'form_come_as')); ?> 
            <?php endif; ?>
       <input type="hidden" name="uri_hidden" id="uri_hidden" value="<?=$explode_uri[4]; ?>" />
       <input type="hidden" name="event_user_id" id="event_user_id" value="<?=$event->user_id; ?>" />
        <?php if($event->rsvp_state > 1 && !$event_member->user_id): ?><div style="margin-top:15px; width:200px;"><?= Form::checkbox('rsvp', 1, (bool)$event_member->is_rsvp, array('class' => 'checkbox', 'id' => 'rsvp')); ?><span class="span-text" style="margin-left: 10px;">RSVP</span></div><?php endif; ?>
        <?php if(!$event_member->user_id):?>
         <div id="rsvp_roles" class="rsvp_comeas">
             <span class="title">I Can Come As:</span><br />
            <?php foreach($roles as $role): ?>
             <?php if($event->rsvp_state == 3): ?>
             <span><?= Form::checkbox('rsvp_tank[]', "$role->role_id", "", array('class' => 'checkbox', 'id' => 'rsvp_role'.$role->role_id, 'style'=>'margin-right:10px;')); ?> <span class="span-text"><?= $role->role_name?></span></span><br />   
            <?php else: ?>
            <span><?= Form::checkbox('rsvp_tank[]', "$role->role_id", "", array('class' => 'checkbox rsvp_role', 'id' => 'rsvp_role1', 'style'=>'margin-right:10px;')); ?> <span class="span-text"><?= $role->role_name?></span></span><br />  
             <?php endif; ?>
             <?php endforeach; ?>
             <?= Form::hidden('rsvp_state', $event->rsvp_state, array('id'=>'rsvp_state')); ?>
             <?= Form::button('create', 'SUBMIT', array('class'=>'save-button',  'id'=>'btn_come','style'=>'margin-top:5px; margin-left:0; display:none')); ?>
         </div>
         <?php 
         else:
             if($event->rsvp_state == 3 && $event->user_id != $user->id && $event_member->is_rsvp_accepted == 0):
                echo '<div class="span-text" style="margin-top:40px;"> You have RSVP’d for this event.  The event will appear on your calendar once the event creator approves your role.</div>';
             endif;
         endif;
         ?>
        <?= Form::close(); ?>
        </div>
       
    </div>
</div>
<hr style="margin-top:20px;" size="1" class="line-hr">
 
<div id="pending"><?= $members_pending_view; ?></div>   
<div id="approved"><?= $members_approved_view; ?></div>
