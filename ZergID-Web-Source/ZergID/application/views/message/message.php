        <?php if (count($messages) > 0): ?>
<div  style="margin-top:20px;">
<div id="testDiv2">    
        <table id="datatables" class="display" style="width:320px;">
            <thead>
                <tr id="data_header" style="display:none;">
                    <th style="display:none;" width="100%"></th>
                </tr>
            </thead>
            <?php
            foreach ($messages as $message):
                $members_list = explode(",", $message->guild_receiver_id);
                $userid = in_array($user->id, $members_list);
                if ($user->id == $userid || $message->guild_receiver_id == NULL):
                    if ($message->parent_message_id == NULL || $message->parent_message_id == ""):
                        $message_id = $message->message_id;
                    else:
                        $message_id = $message->parent_message_id;
                    endif;
                    ?> 
                    <tr> 
                        <td class="last_msg" id="<?= $message->message_id; ?>">
                            <a href="/message/index/<?= $message_id; ?>" id="<?= $message->message_id; ?>" alt="index" onclick='return readMessage("<?= URL::site(); ?>", "<?= $message->event_id; ?>", "<?= $message_id; ?>", this, "<?= $action; ?>")'>
                                <div id="div<?= $message_id; ?>" class="msg-div">
                                    <div class="msg-actions">
                                        <?php
                                        $read_user_list = explode(",", $message->is_event_message_viewed);
                                        $view_user_id = in_array($user->id, $read_user_list);
                                        if ($message->is_message_viewed == 0 && $view_user_id != $user->id && $action == "index"):
                                            ?>
                                            <div id="unr_msg<?= $message->message_id; ?>" class="msg-unread"></div>
                                            <?php endif; ?>

                                            <?php if ($message->parent_message_id != NULL): ?>  
                <?= HTML::image("public/images/icon-reply-small.png", array('style' => 'margin-top:35px; margin-left:5px;')); ?>
            <?php endif; ?>

                                    </div>
                                    <div style="margin-top:14px; margin-bottom: 14px; line-height: 21px;">

                                        <span class="msg-sender-name"><?php
                                        if ($message->event_id == NULL && $message->subject == "Send Friend Request"): 
                                            //if($message->guild_id != NULL && $message->character_detail_id == NULL): 
                                            if($message->guild_id != NULL):
                                                echo '<span style="font-size:12px">Friend Request:</span> '.Text::limit_chars(ucfirst($message->guild_name), 16, '...'); 
                                            else:
                                                echo '<span style="font-size:12px">Friend Request:</span> '.Text::limit_chars(ucfirst($message->username), 16, '...'); 
                                            endif;
                                       elseif ($message->event_id == NULL): 
                                            //if($message->guild_id != NULL && $message->character_detail_id == NULL): 
                                            if($message->guild_id != NULL):
                                                echo Text::limit_chars(ucfirst($message->guild_name), 16, '...'); 
                                            else:
                                                echo Text::limit_chars(ucfirst($message->username), 16, '...'); 
                                            endif;
            else:
                if($message->guild_id != NULL): 
                    echo '<span style="font-size:12px">Event Invite:</span> '.Text::limit_chars(ucfirst($message->guild_name), 16, '...'); 
                else:
                    echo '<span style="font-size:12px">Event Invite:</span> '.Text::limit_chars(ucfirst($message->character_name), 16, '...'); 
                endif;
            endif; ?></span>  
                                        <?php
       

       //                                   $message_date = $message->last_modified_date;
       //                                     $current_date = date('Y-m-d H:i:s');
        //                                    $yesterday = date("Y-m-d H:i:s", strtotime("yesterday 11:30"));
                            //               echo $message->user_id;
          //                                  $tz = new DateTimeZone($timezone);
          //                                  $message_date = new DateTime($message_date); 
          //                                  $message_date->setTimeZone($tz);
          //                                  if($message->user_id != $user->id && $timezone != "Asia/Kolkata"):
          //                                  $current_date = date('Y-m-d H:i:s', strtotime ("-2 hour"));
          //                                  $message_date->sub(new DateInterval("PT12H"));
          //                                  $message_date->sub(new DateInterval("PT30M"));
          //                                  else:
          //                                  if($message->user_id != $user->id && $timezone == "Asia/Kolkata"):
          //                                  $message_date->add(new DateInterval("PT12H"));
          //                                  $message_date->add(new DateInterval("PT30M")); 
          //                                  $current_date = date('Y-m-d H:i:s', strtotime ("-2 hour"));  
          //                                  else:
          //                                  $message_date->sub(new DateInterval("PT0H"));
          //                                  $message_date->sub(new DateInterval("PT0M")); 
          //                                  $current_date = date('Y-m-d H:i:s', strtotime ("-2 hour"));
          //                                  endif;
          //                                   endif;
          //                                  $messagedate = $message_date->format('Y-m-d H:i:s');
          //                                  $message_date = $message_date->format('Y-m-d');
       
                                            
                             
       //                                     $currentdate = new DateTime($current_date);
       //                                     $currentdate->setTimeZone($tz);
       //                                     $currentdate = $currentdate->format('Y-m-d');

      //                                      $yesterday_date = new DateTime($yesterday);
      //                                      $yesterday_date->setTimeZone($tz);
      //                                      $yesterday = $yesterday_date->format('Y-m-d');

     //                                       if ($message_date == $currentdate):
     //                                           $date = "Today at " . date('h:i A', strtotime($messagedate));
     //                                       elseif ($message_date == $yesterday):
    //                                            $date = "Yesterday";
    //                                        else:
    //                                            $date = date("M d, Y", strtotime($messagedate));
    //                                        endif; 

                                        $event_timezone = $message->event_created_timezone;
                                       if($event_timezone):
                                         $event_timezone = $message->event_created_timezone;
                                        else:
                                         $event_timezone = "America/Los_Angeles";
                                        endif;

                                     //  $message_date = date('Y-m-d', strtotime($message->last_modified_date));
                                        $message_date = $message->last_modified_date;  
                                       
                                         if($event_timezone == "America/Los_Angeles" && $message->subject == "Membership Accepted"):
                                            $message_date = date("Y-m-d", strtotime("$message->last_modified_date +720 minutes"));
                                            $messagedate = date("Y-m-d h:i A", strtotime("$message->last_modified_date +720 minutes"));
                                        else:
                                            if($event_timezone == $message->event_created_timezone  && $message->subject == "New Event Notification"):
                                             $message_date = date("Y-m-d", strtotime("$message->last_modified_date -0 minutes"));
                                             $messagedate = date("Y-m-d h:i A", strtotime("$message->last_modified_date -0 minutes"));
                                        else:
                                        if($event_timezone == "America/Los_Angeles"):
                                             $message_date = date("Y-m-d", strtotime("$message->last_modified_date -120 minutes"));
                                             $messagedate = date("Y-m-d h:i A", strtotime("$message->last_modified_date -120 minutes"));
                                        else:

   
                                        $message_date = new DateTime($message_date, new DateTimeZone($event_timezone));                                         
                                        date_default_timezone_set($timezone);
                                             $messagedate = date("Y-m-d h:i A", $message_date->format('U')); 
                                             $message_date = date("Y-m-d", $message_date->format('U')); 
                                        endif;
                                        endif;   
                                         endif;                                     
                                                                                                                    
                                           $current_date = date('Y-m-d',strtotime('0 hours'));
                                       
                                        
                                    //    $current_date = new DateTime($current_date, new DateTimeZone($event_timezone));  
                                    //    date_default_timezone_set($timezone);
                                    //    $current_date = date("Y-m-d", $current_date->format('U'));
                                        
                                        
                                        $yesterday =  date("Y-m-d h:i A", strtotime("yesterday"));
                                        
                                        $yesterday = new DateTime($yesterday, new DateTimeZone($event_timezone));
                                        date_default_timezone_set($timezone);
                                        $yesterday = date("Y-m-d", $yesterday->format('U'));
//                                        
                                        
                                        
                                        if($message_date == $current_date):
                                            $date = "Today at ". date('h:i A', strtotime($messagedate));
                                        elseif($message_date == $yesterday):
                                            $date = "Yesterday";
                                        else:
                                            $date = date("M d, Y",strtotime($message->last_modified_date));
                                        endif;
                                        ?>
                                        <span class="msg-date"><?= $date; ?></span><br />
                                        <span id="msg_game<?= $message->message_id; ?>" class="msg-game"><?php if ($message->character_detail_id != NULL && $message->event_id == NULL): echo Text::limit_chars($message->character_name . '-' . $message->game->game_name, 40, '...');
                                        endif;
                                        if ($message->event_id != NULL): echo Text::limit_chars($message->game->game_name, 30, '...');
                                        endif;
                                        ?></span><br />
                                        <span class="msg-sub"><?php echo Text::limit_chars($message->message, 40, '...'); ?></span>   
                                    </div>
                                </div>
                            </a>
                            <span  class="msg_dlt_icon"><?= HTML::image("public/images/icon-delete-blue.png", array('alt' => $action, 'class'=>'msg_icon_dlt', 'id'=>'dlt'.$message_id, 'onclick' => 'return deleteMessage("' . $message->message_id . '", "' . $message->user_id . '", this)')); ?></span>                   
                        </td>                       
                    </tr>
        <?php endif;
    endforeach; ?>
        </table>
<input type="hidden" id="msg_type" value="<?= $action; ?>" />
<div id="more_message"></div>
<div align="center" style="margin-top:10px;" id="loader"></div>
<input type="hidden" id="msg_count" value="<?= count($messages); ?>" />
  </div>
</div>
<?php endif; ?>

<script type="text/javascript" charset="utf-8">
    $( "#msg_sent" ).live( "click", function(event) {
        setTimeout(function(){
            loadMsgGrid();
        }, 700);
    });
    $( "#msg_garbage" ).live( "click", function(event) {
        setTimeout(function(){
            loadMsgGrid();
        }, 700);
    });
</script>
