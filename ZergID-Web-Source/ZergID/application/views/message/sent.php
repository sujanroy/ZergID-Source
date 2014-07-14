<span class="large_title">Sent Messages</span>
<?php if(count($view_message) > 0):
 foreach($view_message as $message): ?>
 <div style="margin-left: 15px; width: 90%;">
    <table  style="float:left; width:100%"><tr>
    <td style="width:40px;">        
    <?php if($message->user_id == $user->id): ?>        
     <div><?php echo HTML::image("public/images/icon-reply-big.png", array('style'=>'width:30px')); ?></div>
    <?php endif; ?>
     </td>
    <td>        
    <div style="line-height:22px;">
     <span class="msg-sender-name" style="color:#000000;"><?php  echo Text::limit_chars(ucfirst($message->username), 30, '...'); ?></span> <br />
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
            $message_date = new DateTime($message_date); 
            $message_date->setTimeZone($tz);
            $messagedate = $message_date->format('Y-m-d H:i:s');
            $message_date = $message_date->format('Y-m-d');


            $currentdate = new DateTime($current_date);
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

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
     <span class="msg-view-date" style="margin-top:-20px;"><?= $date;?></span>
    </div>
    <div class="msg-text"><?= nl2br($message->message); ?></div>
    </td>
        </tr></table>
</div>
<hr size="1" class="line-hr">
 <?php endforeach; ?>
<div style="float:right; margin-right:30px"><input id="reply_button" type="button" value="REPLY" class="reply-button" /></div>
 <div id="upload_box" class="popup_box" style="top:130px; height: 230px;">	<!-- OUR PopupBox DIV-->
                  <?php
                if($message->user_id == $user->id):
                    $user_id = $message->receiver_id;
                else:
                    $user_id = $message->user_id;
                endif;
                ?>
                <?= Form::open('message/replymessage', array('enctype' => 'multipart/form-data')); ?>
                <span class="popup-title" id="popup_title">To <?php if($message->character_detail_id == NULL): echo Text::limit_chars(ucfirst($message->username), 15, '...'); else: echo Text::limit_chars($message->character_name, 15, '...'); endif; ?> </span><br />
                <?= Form::hidden('reply_message_subject', 'Reply Message', array('id' => 'reply_message_subject')); ?>   
                <?= Form::textarea('reply_message', "", array('class' => 'profile-input popup-input', 'id' => 'reply_message', 'maxlength' => '2000'));
                ?>
                <span id="barload" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class' => 'save-button post-btn', 'onclick' => 'return sendReplyMessage("'.URL::site().'", "'.$user_id.'", "'.$message->message_id.'", "'.$message->parent_message_id.'")')); ?></span>
                <?= Form::close(); ?>
                <a id="close_upload_box" class="popupBoxClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
 </div>
<!-- success popup -->
<div id="msg_box" class="popup_box" style="width:550px; height:306px; margin-top: -100px;">
<div align="center" style="margin-top:120px">
<p style="font-size:48px;" class="popup-title">Message Sent!</p>
</div>    
<a id="msg_close" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>
<?php endif;?>
