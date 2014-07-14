<div id="view_message"> 
    
    
    
<span class="large_title">Message Center <span class="search-count"> <span id="inbox_msg_count"><?php if($messagecount > 0): echo $messagecount; ?></span> New</span><?php endif; ?></span>
<?php if(count($view_message) > 0): ?>
<div id="msg_view" style="max-height: 800px;">
<div id="old_message"></div>
<div id="load_msg_icon" align="center" style="width:640px; float:left"></div>
<?php

foreach(array_reverse($view_message) as $message): ?>
<?php if($message->subject == "Send Friend Request"): ?>
<div style="margin-left: 30px; width: 90%;">
    <div style="line-height:22px;">
        <span class="msg-sender-name" style="color:#000000;">
            <?php if($message->character_detail_id == NULL || $message->character_detail_id == 0): echo Text::limit_chars(ucfirst($message->username), 30, '...'); else: echo Text::limit_chars(ucfirst($message->username), 30, '...');?> <span style="color:#CCCCCC"><?= $message->character_name; ?> has requested to be friends on ZergID</span> <?php endif; ?></span> <br />
     <span class="msg-game"><?php if($message->character_detail_id != NULL): echo Text::limit_chars($message->character_name.'-'.$message->game->game_name, 80, '...'); endif; ?></span>
      <?php 
//         $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//         $current_date = date('Y-m-d');
//         $yesterday =  date("Y-m-d", strtotime("yesterday"));
//         if($message_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($message->last_modified_date));
//         elseif($message_date == $yesterday):
//             $date = "Yesterday";
//        else:
//             $date = date("M d, Y",strtotime($message->last_modified_date));
//         endif;
            $message_date = $message->last_modified_date;
            $current_date = date('Y-m-d H:i:s');
            $yesterday = date("Y-m-d H:i:s", strtotime("yesterday 11:30"));

            $tz = new DateTimeZone($timezone);
            if($timezone == "Asia/Kolkata"):
            $message_date = new DateTime($message_date);
            $message_date->modify("+630 minutes"); 
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');
 
            $currentdate = new DateTime($current_date);
         //   $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
            else:
             $message_date = new DateTime($message_date);
            $message_date->modify("+630 minutes");
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');

            $currentdate = new DateTime($current_date);
        //    $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
             endif;
 
            if ($message_date == $currentdate):
                $date = "Today at " . date('h:i A', strtotime($messagedate));
            elseif ($message_date == $yesterday):
                $date = "Yesterday";
            else:
                $date = date("M d, Y", strtotime($messagedate));
            endif;
         ?>
     <span class="msg-view-date"><?= $date;?></span>
    </div>
    <div class="msg-text"><?= nl2br($message->message); ?></div>
    <?php if($message->friends_accepted == 0): ?><div style="margin-top:15px;"><input id="frnd_accept_button" type="button" value="ACCEPT" class="reply-button" onclick='return acceptFriendRequest("<?= URL::site(); ?>", "<?= $message->user_id; ?>", "<?= $message->message_id; ?>")' /> <input style="float:right;" id="frnd_denied_button"  type="button" value="DENY" alt="deny" class="reply-button" onclick='return denyRequest("<?=$message->message_id ?>", "<?= $message->user_id; ?>", "<?=$message->character_detail_id;?>", this)'/></div><?php endif; ?>
</div>
<hr size="1" class="line-hr">
<?php elseif($message->subject == "Membership Application"): ?>
<div style="margin-left: 30px; width: 90%;">
    <div style="line-height:22px;">
        <div class="title" style="padding-bottom:20px;">A member applied to <?= $message->guild->guild_name; ?></div>  
     <span class="msg-sender-name" style="color:#000000;"><?php echo Text::limit_chars(ucfirst($message->username), 30, '...');?></span> <br />
     <span class="msg-game"><?php if($message->character_detail_id != NULL): echo Text::limit_chars($message->character_name.'-'.$message->game->game_name, 80, '...'); endif; ?></span>
      <?php 
//         $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//         $current_date = date('Y-m-d');
//         $yesterday =  date("Y-m-d", strtotime("yesterday"));
//         if($message_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($message->last_modified_date));
//         elseif($message_date == $yesterday):
//             $date = "Yesterday";
//         else:
//             $date = date("M d, Y",strtotime($message->last_modified_date));
//         endif;

           $message_date = $message->last_modified_date;
            $current_date = date('Y-m-d H:i:s');
            $yesterday = date("Y-m-d H:i:s", strtotime("yesterday 11:30"));

            $tz = new DateTimeZone($timezone);
            if($timezone == "Asia/Kolkata"):
            $message_date = new DateTime($message_date); 
            $message_date->modify("+630 minutes");
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
//            $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
            else:
             $message_date = new DateTime($message_date);
             $message_date->modify("+630 minutes");
            $message_date->setTimeZone($tz);
           $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
 //           $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
            endif;   
            if ($message_date == $currentdate):
                $date = "Today at " . date('h:i A', strtotime($messagedate));
            elseif ($message_date == $yesterday):
                $date = "Yesterday";
            else:
                $date = date("M d, Y", strtotime($messagedate));
            endif;
         ?>
     <span class="msg-view-date"><?= $date;?></span>
    </div>
    <div class="msg-text"><?= nl2br($message->message); ?></div>
     <div style="margin-top:20px;">
        <?php  
        if($message->guild_play_style != NULL):
          $play_style = array();
                  $play_style = $config_path->play_style;  
           ?>
         <span class="msg-text" style="color:#000000; font-weight: bold;">Play Style: </span> <span class="msg-text"><?= $play_style[$message->guild_play_style]?></span><br /><?php endif; ?>
         <div style="margin-top:5px;"> 
             <?php if($message->is_speaker_available != 0 || $message->is_headset_available != 0 || $message->is_voice_chat_available != 0): ?>
         <span class="msg-text" style="color:#000000; font-weight: bold;">Technology:</span> <?php endif; ?> <br />
         <?php if($message->is_speaker_available != 0): ?>
          <span class="msg-text" style="color:#000000;">Speakers or headphones only</span><br />
         <?php endif; if($message->is_headset_available != 0): ?>
          <span class="msg-text" style="color:#000000;">headset with mic or just a mic</span><br />
         <?php endif; if($message->is_voice_chat_available != 0): ?>
          <span class="msg-text" style="color:#000000;">I can install and will participate in voice chat software</span>
         <?php endif; ?>
         </div>
     </div>
    <?php if($message->is_accepted == 0): ?><div style="margin-top:15px;"><input id="frnd_accept_button" type="button" value="ACCEPT" class="reply-button" onclick='return acceptMembershipRequest("<?= URL::site(); ?>", "<?= $message->user_id; ?>", "<?=$message->character_detail_id;?>", "<?= $message->message_id; ?>")' /> <input style="float:right;" id="frnd_denied_button" alt="memeber_deny" type="button" value="DENY" class="reply-button" onclick='return denyRequest("<?=$message->message_id ?>", "<?= $message->user_id; ?>", "<?=$message->character_detail_id;?>", this)'/></div><?php endif; ?>
</div>
<hr size="1" class="line-hr">
<?php elseif($message->subject == "New Event Notification"): ?>

<div style="margin-left: 30px; width: 90%;">
    <div style="line-height:22px;">
        <span class="msg-sender-name" style="color:#000000;">
            <?php if($message->guild_id != NULL): echo Text::limit_chars(ucfirst($message->guild_name), 30, '...'); else: echo Text::limit_chars(ucfirst($message->character_name), 30, '...'); endif; ?></span><br/>
        <span id="save_game_id" class="msg-game"><?php echo Text::limit_chars($message->game->game_name, 40, '...');  ?></span>    
      
         <?php
        // echo "d".$message->game_id;
//         $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//         $current_date = date('Y-m-d');
//         $yesterday =  date("Y-m-d", strtotime("yesterday"));
//         if($message_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($message->last_modified_date));
//         elseif($message_date == $yesterday):
//             $date = "Yesterday";
//         else:
//             $date = date("M d, Y",strtotime($message->last_modified_date));
//         endif;

           $message_date = $message->last_modified_date;
            $current_date = date('Y-m-d H:i:s',strtotime ("-750 minutes"));
            $yesterday = date("Y-m-d H:i:s", strtotime("yesterday"));

            $tz = new DateTimeZone($timezone);
            $message_date = new DateTime($message_date); 
            $message_date->setTimeZone($tz);
           if($message->user_id == $user->id && $timezone != "Asia/Kolkata"):
           $message_date->add(new DateInterval("PT12H"));   
           $message_date->add(new DateInterval("PT30M"));   
           else:
             if($message->user_id != $user->id && $timezone == "Asia/Kolkata"):
            $message_date->sub(new DateInterval("PT0H"));

          $message_date->add(new DateInterval("PT0M"));
            else:
           if($message->user_id == $user->id && $timezone == "Asia/Kolkata"):
            $message_date->add(new DateInterval("PT2H"));
          $message_date->sub(new DateInterval("PT120M"));
          else:    
            $message_date->add(new DateInterval("PT12H"));
          $message_date->add(new DateInterval("PT30M"));
            endif;
            endif;  
             endif;
               $messagedate = $message_date->format('Y-m-d H:i:s');
               $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
            $currentdate->modify("+24 hours");
            $currentdate->modify("+30 minutes");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');
     // echo   $message->user_id;   

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');

            if ($message_date == $currentdate):
                $date = "Today at " . date('h:i A', strtotime($messagedate));
            elseif ($message_date == $yesterday):
                $date = "Yesterday";
            else:
                $date = date("M d, Y", strtotime($messagedate));
            endif;
         ?>
     <span class="msg-view-date"><?= $date;?></span>
    </div>
    
    <div class="msg-text" style="line-height: 25px;">
        <?php 
             $event_timezone = $message->user_time_zone;
             $event_date = date("M d, Y",strtotime($message->event_date));
             $eventdate = new DateTime($event_date, new DateTimeZone($event_timezone)); 
             date_default_timezone_set($timezone); 
             $event_date = date("l M d, Y", $eventdate->format('U'));
        ?>
        <span class="span_event">Event Name : </span><span><?=$message->event_name;?></span><br />
        <span class="span_event">Event Date : </span><span><?= $event_date ?></span><br />
        <?php $time = array();
              $time = $config_path->time; ?>
       <?php
//            echo $timezone;
            $from_time = $time[$message->event_from_time];
            $to_time = $time[$message->event_to_time];
//                    echo $to_time;
                    //from date
//                    $fromdate = new DateTime($from_time);

//                    $from_date = $fromdate->setTimezone(new DateTimeZone($timezone));
 
//                    $from_date->modify("930 minutes");
//                    $event_from_time = $from_date->format('g:i A');
                    
                    //to date
//                    $todate = new DateTime($to_time);

//                    $to_date = $todate->setTimezone(new DateTimeZone($timezone));
                    
//                    $to_date->modify("930 minutes");

//                    $event_to_time = $to_date->format('g:i A'); 

                       $event_timezone = $message->event_created_timezone;
                        $from_date = new DateTime($from_time, new DateTimeZone($event_timezone)); 

                        date_default_timezone_set($timezone); 
                        //echo $timezone;
                        //echo $event_timezone.'=event_user';

                        $fromdate = date("h:iA", $from_date->format('U')); 

                        $to_date = new DateTime($to_time, new DateTimeZone($event_timezone)); 

                        date_default_timezone_set($timezone); 
                        //echo $timezone;
                        //echo $event_timezone.'=event_user';

                        $todate = date("h:iA", $to_date->format('U'));    
                    ?>
        
        <span class="span_event">Event Time : </span><span><?= $fromdate.'-'.$todate?></span><br />
        <span class="span_event">Attendance Required : </span><span><?php if($message->is_attendance_required == 1): echo "YES"; else: echo "NO"; endif; ?></span><br />
        <span class="span_event">Event Description : </span><br />
        <span style="line-height: 18px;"><?= $message->event_description; ?></span>
    </div>
    <?php if($message->rsvp_state != 1 && $message->guild_id != NULL): ?>
    <div class="msg-text">
        <?php echo HTML::anchor('events/view/'.$message->guild_id.'/'.$message->event_id, "Click here", array('style'=>'color:#38CBF0')); ?> to RSVP for this event
    </div>
    <?php elseif($message->rsvp_state != 1 && $message->character_id != NULL): ?>
    <div class="msg-text">
        <?php echo HTML::anchor('events/view/'.$message->event_id.'/char', "Click here", array('style'=>'color:#38CBF0')); ?> to RSVP for this event
    </div>
    <?php endif; ?>
    <div>
    </div>
</div>
<hr size="1" class="line-hr">
<?php elseif($message->subject == "Membership Accepted"): ?>
<div style="margin-left: 30px; width: 90%;">
    <div style="line-height:22px;">
       
     <span class="msg-sender-name" style="color:#000000;"><?php  echo Text::limit_chars(ucfirst($message->guild->guild_name), 30, '...'); ?></span> <br />
      <?php 
//         $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//         $current_date = date('Y-m-d');
//         $yesterday =  date("Y-m-d", strtotime("yesterday"));
//         if($message_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($message->last_modified_date));
//         elseif($message_date == $yesterday):
//             $date = "Yesterday";
//         else:
//            $date = date("M d, Y",strtotime($message->last_modified_date));
//         endif;

           $message_date = $message->last_modified_date;
            $current_date = date('Y-m-d H:i:s');
            $yesterday = date("Y-m-d H:i:s", strtotime("yesterday 11:30"));

            $tz = new DateTimeZone($timezone);
            if($timezone == "Asia/Kolkata"):  
            $message_date = new DateTime($message_date); 
            $message_date->modify("+12 hours");
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
//            $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
           else:
              $message_date = new DateTime($message_date);
              $message_date->modify("+12 hours");
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
    //        $currentdate->modify("+2 hours");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');
           endif;    
            if ($message_date == $currentdate):
                $date = "Today at " . date('h:i A', strtotime($messagedate));
            elseif ($message_date == $yesterday):
                $date = "Yesterday";
            else:
                $date = date("M d, Y", strtotime($messagedate));
            endif;
         ?>
     <span class="msg-view-date"><?= $date;?></span>
    </div>
    <div class="msg-text"><?= nl2br($message->message); ?></div>
</div>
     
<hr size="1" class="line-hr">
<?php else: ?>
    <div class="view_message" id="<?= $message->message_id; ?>">
    <table  style="float:left; width:100%"><tr>
    <td style="width:40px;">        
    <?php if($message->user_id == $user->id): ?>        
     <div><?php echo HTML::image("public/images/icon-reply-big.png", array('style'=>'width:30px')); ?></div>
    <?php endif; ?>
     </td>
    <td>        
    <div style="line-height:22px;">
     <span class="msg-sender-name" style="color:#000000;"><?php  echo Text::limit_chars(ucfirst($message->username), 30, '...'); ?></span> <br />
     <span id="save_game_id" class="msg-game"><?php if($message->character_detail_id != NULL): echo Text::limit_chars($message->character_name.'-'.$message->game->game_name, 80, '...'); endif; ?></span>
      <?php 
//         $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//         $current_date = date('Y-m-d');
//         $yesterday =  date("Y-m-d", strtotime("yesterday"));
//         if($message_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($message->last_modified_date));
//         elseif($message_date == $yesterday):
//             $date = "Yesterday";
//         else:
//             $date = date("M d, Y",strtotime($message->last_modified_date));
//         endif;

           $message_date = $message->last_modified_date;
            $current_date = date('Y-m-d H:i:s');
            $yesterday = date("Y-m-d H:i:s", strtotime("yesterday 11:30"));

            $tz = new DateTimeZone($timezone);
            $message_date = new DateTime($message_date); 
            $message_date->setTimeZone($tz);
            $message_date->modify("+570 minutes");
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
      //      $currentdate->modify("+2 hours"); 
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            $yesterday_date = new DateTime($yesterday);
            $yesterday_date->setTimeZone($tz);
            $yesterday = $yesterday_date->format('Y-m-d');

            if ($message_date == $currentdate):
                $date = "Today at " . date('h:i A', strtotime("$messagedate + 1 hours"));
            elseif ($message_date == $yesterday):
                $date = "Yesterday";
            else:
                $date = date("M d, Y", strtotime($messagedate));
            endif;
         ?>
     <span class="msg-view-date" style="margin-top:-20px;"><?= $date;?></span>
    </div>
    <div class="msg-text"><?= nl2br($message->message); ?></div>
    </td>
        </tr></table>
</div>
<hr size="1" class="line-hr">
<?php endif; endforeach; ?> 
<div id="reply_update"></div>
    </div>
<div id="div_scroll"></div>
<?php if($message->subject != "Send Friend Request" && $message->subject != "Membership Application" && $message->event_id == NULL && $message->subject != "Membership Accepted"  &&  $message_type != 'garbage'):?>

<div style="float:right; margin-right:30px"><input type="hidden" id="msg_id" value="" /><input id="reply_button" type="button" value="REPLY" class="reply-button" onclick="showReplyBox('<?= URL::site(); ?>')" /></div> <?php endif; ?>
<div id="reply_box" class="popup_box" style="top:130px; height: 250px;">	<!-- OUR PopupBox DIV-->   
        <?php
        if ($message->user_id == $user->id):
            $receiver_id = $message->receiver_id;
        else:
            $receiver_id = $message->user_id;
        endif;
        ?>                

<?= Form::open('message/replymessage', array('enctype' => 'multipart/form-data')); ?>
     <input type="hidden" id="rec_id" value ="<?= $receiver_id; ?>" />
                <span class="popup-title" id="popup_title">To <span id="reply_user"><?php if($message->character_detail_id == NULL): echo Text::limit_chars(ucfirst($message->username), 15, '...'); else: echo Text::limit_chars($message->character_name, 15, '...'); endif; ?></span> </span><br />
                <?= Form::hidden('reply_message_subject', 'Reply Message', array('id' => 'reply_message_subject')); ?>   
                <?= Form::textarea('reply_message', "", array('class' => 'profile-input popup-input', 'id' => 'reply_message', 'maxlength' => '2000'));
                ?>
                <span id="barload" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class' => 'save-button post-btn', 'onclick' => 'return sendReplyMessage("'.URL::site().'", "'.$receiver_id.'", "'.$message->message_id.'", "'.$message->parent_message_id.'")')); ?></span>
                <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span>
                <?= Form::close(); ?>
                <a id="close_upload_box" class="popupBoxClose" onclick="hideReplyBox();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
 </div>
<?php endif; ?>


 
<!-- success popup -->
<div id="msg_box" class="popup_box" style="width:550px; height:306px; margin-top: -100px;">
<div align="center" style="margin-top:120px">
<p style="font-size:48px;" class="popup-title">Message Sent!</p>
</div>    
<a id="close_msg" class="popupBoxClose" onclick="hideMsgBox()"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>
</div>

    
<script>
    $('#msg_view').slimscroll({
        color: '#38CBF0',
        width: '640px',
        height: '800px',
        opacity : .7,
        wheelStep : 5,
        railVisible: true,
        railBorderRadius: 0,
        start:'bottom'
    });
    
    $('#msg_view').slimScroll().bind('slimscroll', function(e, pos){
        var last_id  = $(".view_message:first").attr("id");
        if(pos == 'top' && last_id!='end') {
            $.post('<?= URL::site(); ?>message/load_more_old_messages',
            {
                last_msg_id:last_id,
                message_id: $('#msg_id').val(),
                beforeSend: function() { 
                    $('#load_msg_icon').html('<img src="/public/images/msg_load_blue.gif" />')
                }
            }
            , function(response) {
            $('#load_msg_icon').html('');
            $('div#old_message').prepend(response).fadeIn(1000);
            }); 
        }
    });
    
    function showReplyBox(url) {
    $('#msg_view').slimScroll({ scrollBy: $('#msg_view')[0].scrollHeight });
        $.post(url+"message/get_replyuser", {       
            user_id: $('#rec_id').val()
            
        }, function(response){
            getMask();
            $('#reply_user').html(response);
            $('#reply_box').fadeIn("slow");
            
        });                
    }
    
    function hideReplyBox() {
        $('#reply_box').hide();
        $('.error_msg').hide();
        $('.mask').hide();
    }
//    $(document).ready(function () {
//        $('.load_more_msg').click(function() {
//            var last_id  = $(".view_message:first").attr("id");
//            alert(last_id);
//            if(last_id!='end'){
//                $.post('<?= URL::site(); ?>message/load_more_old_messages',
//                {
//                    last_msg_id:last_id,
//                    message_id: $('#msg_id').val(),
//                    beforeSend: function() { 
//                        $('a.load_more_msg').append('<img src="<?= URL::site(); ?>public/images/facebook_style_loader.gif" />');
//                    }
//                }
//                , function(response) {
//                    $(".facebook_style").remove(); 
//                    $(response).hide().appendTo("div#old_message").fadeIn(1000);
//                    $(window).scrollTop($('#view_message').offset().top);
//                    //   $(window).scrollTop($('#'+last_id).offset().top);
//                }
//            );    
//            }
//            return false;  
//        });
//    });
    function test() {
       // alert(1);
        $('#msg_view').slimScroll({ scrollBy: '350px' });
        
    }
    
</script>
    
