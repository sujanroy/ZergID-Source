 <?php if (count($messages) > 0): ?>
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
                            <a href="/message/index/<?= $message_id; ?>" id="<?= $message->message_id; ?>" alt="index" onclick='return readMessage("<?= URL::site(); ?>", "<?= $message->event_id; ?>", "<?= $message_id; ?>", this)'>
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
                                        if ($message->event_id == NULL): 
                                            if($message->guild_id != NULL && $message->character_detail_id == NULL): 
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
//                                        $message_date = date('Y-m-d', strtotime($message->last_modified_date));
//                                        $current_date = date('Y-m-d');
//                                        $yesterday = date("Y-m-d", strtotime("yesterday"));
//                                        if ($message_date == $current_date):
//                                            $date = "Today at " . date('h:i A', strtotime($message->last_modified_date));
//                                        elseif ($message_date == $yesterday):
//                                            $date = "Yesterday";
//                                        else:
//                                            $date = date("M d, Y", strtotime($message->last_modified_date));
//                                        endif;

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
                                        <span class="msg-date"><?= $date; ?></span><br />
                                        <span class="msg-game"><?php if ($message->character_detail_id != NULL && $message->event_id == NULL): echo Text::limit_chars($message->character_name . '-' . $message->game->game_name, 40, '...');
                                        endif;
                                        if ($message->event_id != NULL): echo Text::limit_chars($message->game->game_name, 30, '...');
                                        endif;
                                        ?></span><br />
                                        <span class="msg-sub"><?php echo Text::limit_chars($message->message, 40, '...'); ?></span>   
                                    </div>
                                </div>
                            </a>
                            <span  class="msg_dlt_icon"><?= HTML::image("public/images/icon-delete-blue.png", array('alt' => 'delete', 'class'=>'msg_icon_dlt', 'id'=>'dlt'.$message_id, 'onclick' => 'return deleteMessage("' . $message->message_id . '", "' . $message->user_id . '")')); ?></span>
                        </td>
                    </tr>
        <?php endif;
    endforeach; ?>
        </table>
            
<?php endif; ?>
<input type="hidden" id="msg_count" value="<?= count($messages); ?>" />
