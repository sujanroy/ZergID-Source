<link rel="stylesheet" type="text/css" href="/public/css/glDatePicker.default.css" rel="stylesheet" media="all" />
<script src="<?= URL::site('/public/js/glDatePicker.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(window).load(function()
    {
        var today = new Date();
        var future = new Date(today);
        future.setDate(today.getDate() + 120);
        $('.eventdate').glDatePicker(
        {
            selectableDateRange: [
                { from: today,
                    to: future }
            ],
            onClick: function(target, cell, date, data) {
                target.val(date.getFullYear() + '-' +
                    (date.getMonth()+1) + '-' +
                    date.getDate());
                $('#event_date').val(target.val()); 
            }
        });
    });
</script>
<script src="<?=URL::site('/public/grid/js/jquery.dataTables.js');?>" type="text/javascript"></script>
<?php if($uri != 'char'):
    //$atargets = ',6';
   $margin_top='';
else:
   // $atargets = '';
    $margin_top='-14px';
endif; ?>
<script type="text/javascript" charset="utf-8">
    function removeCheck() {
        alert('test');
        
    }

    $(document).ready(function(){
        $('.display').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "aoColumnDefs": [{'bSortable': false, 'aTargets': [ 0,2,3,4,5,6]}],
            "fnDrawCallback": function(oSettings) {
                if ($('.display tr').length < 11) {
                    $('.dataTables_paginate').hide();
                    $('.dataTables_length').hide();
                }
            }
        });
        
    });
    
</script>
   <div gldp-el="mydate"style="width:320px; height:250px; position:absolute;"></div>
   <div gldp-el="mydate1" style="width:320px; height:250px; position:absolute;"></div>
<?php if($uri != 'char'): ?><input type="hidden" value="153" id="date_top" />
    <?= Form::open('events/update/'.$event->guild_id.'/'.$event->event_id, array('enctype' => 'multipart/from-data', 'id' => 'create_event')); ?> <?php else: ?><input type="hidden" value="203" id="date_top" /> <?= Form::open('events/update/'.$event->event_id.'/char', array('enctype' => 'multipart/from-data', 'id' => 'create_event')); ?><?php endif; ?>
<div style="margin-left:30px; margin-top: 20px; width: 90%;">
    <p class="profile_title"><?= $event->event_name; ?></p>
       <?php if($uri == 'char'): ?> 
             <div id="character_name_show"><span class="title">Char:</span><span class="span-text" style="margin-left:20px;"><?= $character_name->character_name; ?></span></div><br /> <?php endif; ?>
    <div class="title" style="<?=$margin_top;?>">
        <?= Form::label('evnt_date', 'Date:'); ?>
        <?php 
            $event_date = date("l M d, Y",strtotime($event->event_date));
            ?>
        <?= Form::input('event_date', $event_date, array('class' => 'normal-input event_date eventdate', 'style' => 'width:220px;  margin-left:17px;', 'maxlength' => '25', 'id' => 'event_date', 'gldp-id'=>'mydate'));
        ?>
        <?php echo HTML::image("/public/images/icon-calender.png", array('class'=>'eventdate', 'style'=>'margin-top:8px; position:absolute; margin-left:5px;', 'gldp-id'=>'mydate1'));?>
        <?php if($uri != 'char'): ?> <span class="span-attendance" style="margin-left:100px;"><?= Form::label('evnt_attendance', 'Attendance Required');?><?= Form::checkbox('event_attendance', 1, (bool)$event->is_attendance_required, array('class'=>'checkbox', 'id'=>'event_attendance', 'style'=>'margin-left:10px;')); ?></span><?php endif; ?>
    </div> 
    <div class="title" style="margin-top:12px;">
        <?= Form::label('evnt_time', 'Time:'); ?>
        <?php
        $time = array();
        $time = $config_path->time;
        $totime = array();
        $totime = $config_path->time;
      //  for($i=$event->event_from_time; $i>0; $i--){
      //  unset($totime[$i]);
       // }
        ?>
        <?= Form::select('event_from_time', $time, $event->event_from_time, array('class' => "select-input time-select", 'id' => 'event_from_time', 'onchange'=>'return selectEventTime("'.URL::site().'")')); ?>
       <?= Form::select('event_to_time', $totime, $event->event_to_time, array('class' => "select-input time-select", 'id' => 'event_to_time')); ?>

    </div> 
    <div style="margin-top:30px;">
             <span class="title"><?= Form::label('evnt_description', 'Description:'); ?> </span><br />
                <?= Form::textarea('event_description', $event->event_description, 
                        array('class'=>'profile-input', 'id'=>'event_description', 'maxlength'=>'2000', 'style'=>'width:250px; height:100px;')); ?>
    </div>
     <span style="float:right;"><?= Form::button('save', 'SAVE', array('class'=>'save-button')); ?>   </span>
</div>
<?= Form::close(); ?>
<hr style="margin-top:20px;" size="1" class="line-hr"><br />
<div align="center"><input class="feed-attach btn-cancel-event" type="button" value="CANCEL EVENT" onclick="deleteEvent('<?= URL::site(); ?>', '<?= $event->event_id;?>')"/></div>
<hr size="1" class="line-hr">
<div id="pending"><?= $members_pending_view; ?></div>   
<div id="approved"><?= $members_approved_view; ?></div>
       
