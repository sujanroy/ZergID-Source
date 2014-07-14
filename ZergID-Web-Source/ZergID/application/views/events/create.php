<link rel="stylesheet" type="text/css" href="/public/css/glDatePicker.default.css" rel="stylesheet" media="all" />
<script src="<?= URL::site('/public/js/glDatePicker.js'); ?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/jstz-1.0.4.min.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
   $(document).ready(function() {  
    var tz = jstz.determine(); // Determines the time zone of the browser client
    $('#time_zone').val(tz.name());
//    alert(tz.name());
    });
    $(window).load(function()
    {
        var today = new Date();
        var future = new Date(today);
        future.setDate(today.getDate() + 120);
        $('.edate').glDatePicker(
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
    var currentdate = new Date();
    var datetime = currentdate.getFullYear() +"-"+(currentdate.getMonth()+1) + "-" + currentdate.getDate() + ' ' + currentdate.getHours() + ":" 
    + currentdate.getMinutes() + ":" + currentdate.getSeconds(); 
    $('#create_date').val(datetime);
    });
</script>
<div gldp-el="mydate" style="width:320px; height:250px; position:absolute;"></div>
<div gldp-el="mydate1" style="width:320px; height:250px; position:absolute;"></div>
<input type="hidden" value="203" id="date_top" />
<?= Form::open('events/save/'.$guild_id, array('enctype' => 'multipart/from-data', 'id' => 'create_event')); ?>
<input type="hidden" name="create_date" value="" id="create_date" />
<input type="hidden" id="time_zone" value="" name ="event_timezone" />
<div style="margin-left:30px; margin-top: 20px; width: 90%;">
    <p class="profile_title">Create an Event</p>
    <select class="select-input" name="character_id" style="display:none" id="character_id">
        <option value="">Select Character Name</option>
    </select>
    <input type="hidden" value="" name="is_sendto_user" id="is_sendto_user" />
     <input type="hidden" value="" name="is_sendto_character" id="is_sendto_character" />
    <div class="title">
       <span> <?= Form::label('evnt_name', 'Name:'); ?>
        <?= Form::input('event_name', '', array('class' => 'normal-input', 'style' => 'width:265px;', 'maxlength' => '25', 'id' => 'event_name'));
        ?> </span>
        <span class="span-attendance"><?= Form::label('evnt_attendance', 'Attendance Required');?><?= Form::checkbox('event_attendance', 1, "", array('class'=>'checkbox', 'id'=>'event_attendance', 'style'=>'margin-left:10px;')); ?></span>
    </div> 
    <table><tr><td><div class="title" style="margin-top:12px;">
        <?= Form::label('evnt_date', 'Date:'); ?>
        <?= Form::input('event_date', '', array('class' => 'normal-input event_date edate', 'style' => 'width:220px;  margin-left:17px;', 'maxlength' => '25', 'id' => 'event_date', 'gldp-id'=>'mydate'));
        ?>
    </div></td>
         <td><?php echo HTML::image("/public/images/icon-calender.png", array('class'=>'edate', 'style'=>'margin-top:20px; margin-left:5px; cursor:pointer;', 'gldp-id'=>'mydate1'));?></td></tr></table>
    
    <div class="title" style="margin-top:12px;">
        <?= Form::label('evnt_time', 'Time:'); ?>
        <?php
        $time = array();
        $time = $config_path->time;
        $to_time = array();
        $to_time = $config_path->time;
        unset($to_time[1]);
        ?>
        <?= Form::select('event_from_time', $time, "25", array('class' => "select-input time-select", 'id' => 'event_from_time', 'onchange'=>'return selectEventTime("'.URL::site().'")')); ?>
        <?= Form::select('event_to_time', $to_time, "25", array('class' => "select-input time-select", 'id' => 'event_to_time')); ?>

    </div> 
    <div style="margin-top:50px;">
        <div style="float:left; width: 300px;">
             <span class="title"><?= Form::label('evnt_sent', 'Send To:'); ?> </span><br />
             <span class="section_span"><?= Form::checkbox('event_officers', 1, "", array('class'=>'checkbox', 'id'=>'event_officers', 'style'=>'margin-right:10px;')); ?><?= Form::label('evnt_officers', 'Officers'); ?></span> <br />
             <span class="section_span" style="padding-top:5px;"><?= Form::checkbox('event_members', 1, "", array('class'=>'checkbox', 'id'=>'event_members', 'style'=>'margin-right:10px;')); ?><?= Form::label('evnt_members', 'Members'); ?></span>
        </div>
        <div style="float:right; margin-right:50px; width:200px;">
             <span class="title"><?= Form::label('evnt_sent', 'RSVP:'); ?> </span><br />
            
             <?php
                  $rsvp_status = array();
                  $rsvp_status = $config_path->rsvp_status;
                  $i = 1;
                  foreach ($rsvp_status as $rsvp_status): ?>
                      <span class="section_span" style="padding-top:5px;"><?= Form::radio('rsvp_status', $i, "", array('class' => 'checkbox', 'id' => 'rsvp_status'.$i, 'style'=>'margin-right:10px;')); ?><?= Form::label('evnt_members', $rsvp_status); ?></span><br />
                      <?php
                      $i++;
                  endforeach;
                  ?>
        </div>
    </div>
    <div style="margin-top:200px;">
             <span class="title"><?= Form::label('evnt_description', 'Description:'); ?> </span><br />
                <?= Form::textarea('event_description', "", 
                        array('class'=>'profile-input', 'id'=>'event_description', 'maxlength'=>'2000', 'style'=>'width:250px; height:100px;')); ?>
    </div>
    <div style="margin-top:50px;">
    <span style="float: left;"><?= Form::button('cancel', 'CANCEL', array('class'=>'save-button')); ?></span> <span style="float:right;"><?= Form::button('create', 'CREATE', array('class'=>'save-button')); ?>   </span>
    </div>
</div>
<?= Form::close(); ?>       
<script>
 document.getElementById('rsvp_status1').checked = true;
</script>


