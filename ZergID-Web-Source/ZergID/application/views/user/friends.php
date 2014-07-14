<div id="msg_box" class="popup_box" style="width:550px; height:306px;">
<div align="center" style="margin-top:120px">
<p style="font-size:48px;" class="popup-title">Message Sent!</p>
</div>    
<a id="msg_close" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>


<span class="large_title">Friends <span class="count"><?php if(count($friends) > 0): echo count($friends); endif; ?></span></span>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#datatables').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "fnDrawCallback": function(oSettings) {
                if ($('#datatables tr').length < 11) {
                    $('.dataTables_paginate').hide();
                    $('.dataTables_length').hide();
                    $('#datatables_filter').css({'margin-top':-10});
                }
            }
        });
        $('#datatables_filter').css({'display':'block'});
    });
</script>
   <style>
    .error_msg{
                background: none repeat scroll 0 0 #F2E98E;
                color: #FF0000;
                font-family: arial;
                font-weight: normal;
                text-align: center;
                width: 270px;
            }
    </style>
<?php if(count($friends) > 0): ?>
<div>
    <table id="datatables" class="display">
        <thead>
            <tr id="data_header" style="background:#fff;">
                <th style="display:none;" width="20%"></th>
                <th style="display:none;" width="80%"></th>

            </tr>
        </thead>
        <?php foreach ($friends as $friend): ?>
         <?php if ($profile_id == ""): ?>
            <div id="smsgbox<?=$friend->friend_id;?>" class="popup_box" style="margin-top:-100px; height: 260px;">	<!-- OUR PopupBox DIV--> 
             <?= Form::open('message/send_message', array('enctype' => 'multipart/form-data')); ?>
                <span class="popup-title" id="popup_title">To <?php echo ucfirst($friend->username); ?> </span><br />
                <?= Form::hidden('message_subject', 'Friend Message', array('id' => 'message_subject')); ?>   
                <?php
                $character_list[''] = "Send As...";
                $character_list['0'] = ucfirst($zergid->username);
                foreach ($char_list as $char):
                    $character_list[$char->character_detail_id] = Text::limit_chars($char->character_name .' - '. $char->game->game_name, 35, '...');
                endforeach;
                ?>
                <?= Form::select('sendas', $character_list, '', array('class' => "select-input", 'id' => 'sendeas'.$friend->friend_id, 'style' => 'width:185px; margin-left:15px')); ?>
                <?= Form::textarea('message', "", array('class' => 'profile-input popup-input', 'id' => 'message'.$friend->friend_id, 'maxlength' => '2000'));
                ?>   
                <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class' => 'save-button post-btn', 'onclick' => 'return sendMessage("'.URL::site().'", "'.$friend->id.'", "'.$friend->friend_id.'")')); ?></span>
                <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span>
                <?= Form::close(); ?>
                <a class="popupBoxClose" onclick="hideSendMessage('<?= $friend->friend_id; ?>')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
            </div>
        <?php endif; ?>
            <tr onmouseover="showUnfriendButton('<?= $friend->friend_id ?>')" onmouseout="hideUnfriendButton('<?= $friend->friend_id ?>')"> 
                <td class="member-td" style="width:110px;">
                    <?php
                    if (!$friend->profile_image_active) {
                        $profile_image = $config_path->profile_image['default'];
                    } else {
                        $profile_image = $config_path->profile_image[$friend->profile_image_active];
                        $profile_image = $friend->$profile_image;
                    }
                    echo HTML::image($config_path->path['profile'] . $profile_image, array('class' => 'rounded_image_small rounded_image_shadow', 'style' => 'margin-left:20px;'));
                    ?>

                <td valign="top" class="member-name member-td">
                    <div style="margin-top:10px"><a href="/user/others/<?= $friend->user_id; ?>"><?= ucfirst($friend->username); ?></a> <?php if ($profile_id == ""): ?><span style="float:right; margin-right: 50px;"><input type="button" id="send_message" value="SEND MESSAGE" class="feed-attach btn-send-message" onclick=" showSendMessageBox('<?= $friend->friend_id; ?>')" /><img src="/public/images/delete_icon_gray.png" disabled  class="img_unfriend" id="unfriend<?= $friend->friend_id; ?>" alt="<?= $friend->username; ?>" onclick="return unfriendRequest('<?= URL::site();?>', '<?=$friend->user_id; ?>', this)" /></span><?php endif; ?></div>
                    <?php if($friend->character_name && $profile_id == ""): ?><div class="friends-hint">Best Known as...<br/><span style="color:#444444;"><?= $friend->character_name; ?> - <?= $friend->game->game_name; ?> - <?= $friend->server->server_name; ?></span></div><?php endif; ?>

                </td>                
              </tr>
        <?php endforeach; ?>
    </table>
</div>
    <?php else:?>
    <?php if(count($friends) == 0): ?>
    <div class="friend-text">
        <p>Looks like you haven't connected with any of your friends yet.Don't worry it's easy!</p>
        <p>Simply search for your friends at the top using their character names from any of your</p>
        <p>favorite MMOs or MOBAs.</p><br/>
        <p>Once you've found them click "Friend" at the top of their profile.</p><br/>
        Happy Hunting.
        </div>
    <?php else:?>
    <div>Nill
</div>
<?php endif; ?>
<?php endif; ?>
