 <div style="margin-left: 15px; width: 90%;">
<table  style="float:left; width:100%"><tr>
        <td style="width:40px;">         
            <div><?php echo HTML::image("public/images/icon-reply-big.png", array('style' => 'width:30px')); ?></div>
        </td>
        <td>        
            <div style="line-height:22px;">
                <span class="msg-sender-name" style="color:#000000;"><?php echo Text::limit_chars(ucfirst($message->username), 30, '...'); ?></span> <br />
                <span class="msg-game"><?php if ($message->character_detail_id != NULL): echo Text::limit_chars($message->character_name . '-' . $message->game->game_name, 80, '...');
endif; ?></span>
                <?php
 //               $message_date = date('Y-m-d', strtotime($message->last_modified_date));
 //               $current_date = date('Y-m-d');
 //               $yesterday = date("Y-m-d", strtotime("yesterday"));
 //               if ($message_date == $current_date):
 //                   $date = "Today at " . date('h:i A', strtotime($message->last_modified_date));
 //               elseif ($message_date == $yesterday):
 //                   $date = "Yesterday";
 //               else:
 //                   $date = date("M d, Y", strtotime($message->last_modified_date));
 //                endif;

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
  //                  $currentdate->modify("+2 hours");
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
                <span class="msg-view-date" style="margin-top:-20px;"><?= $date; ?></span>
            </div>
            <div class="msg-text"><?= nl2br($message->message); ?></div>
        </td>
    </tr>
</table>
</div>
<hr size="1" class="line-hr">
