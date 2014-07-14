<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    $('#popupBoxClose').click( function() {  
        $('#errormsg').hide();
        unloadGamePopupBox();
        
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
<div id="msg_box" class="popup_box" style="width:550px; height:306px; margin-left:200px;">
<div align="center" style="margin-top:90px">
<p style="font-size:48px;" class="popup-title poptitle">Request Sent!</p>
</div>    
<a id="friend_msg_close" class="popupBoxClose" onclick="return closeFriendRequestPopup();"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>

<div id="popup_box" class="popup_box">	<!-- OUR PopupBox DIV-->
     <?= Form::open('user/friend_request', array('enctype' => 'multipart/form-data')); ?>
	<span class="popup-title" id="popup_title">Send Friend Request </span>
     <?= Form::hidden('friend_subject', 'Send Friend Request', array('id'=>'friend_subject')); ?>   
      <?php
	  if(strlen($user->username) > 12):
          $font_size = '42px;';
	  else:
   	  $font_size = '35pt;';
	  endif;
          $character_list[''] = "Send As...";
          $character_list['0'] = $zergid->username;
          foreach ($char_list as $char):
               $character_list[$char->character_detail_id] = Text::limit_chars($char->character_name .' - '. $char->game->game_name, 35, '...');
          endforeach;
           
       ?>
     <?= Form::select('sendas',$character_list, '', array('class'=>"select-input", 'id'=>'sendeas', 'style'=>'width:180px; margin-left:15px'));?>
     <?= Form::textarea('req_cmt', "", 
                        array('class'=>'profile-input popup-input', 'id'=>'req_cmt', 'maxlength'=>'2000')); ?>   
        <span id="bar_load" style="display:none; margin-left:15px;"><?=HTML::image("public/images/loading-bar.gif", array('style'=>'margin-top:25px;'));?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class'=>'save-button post-btn', 'onclick'=>'return sendFriendRequest("'.URL::site().'", "'.$user->id.'")')); ?></span> <!--<span style="float:right; display: none;" id="follow_button"><?= Form::submit('btn_submit', 'Follow', array('class'=>'save-button post-btn', 'alt'=>'zergid', 'onclick'=>'return sendFollowRequest("'.URL::site().'", "'.$user->id.'", this)')); ?>   </span>-->
        <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span>
     <?= Form::close(); ?>
        <a id="popupBoxClose" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>
<div class="title-big" style="margin-top:20px; font-size:<?=$font_size;?>"><?= HTML::anchor('/user/others/'.$user->id,ucfirst($user->username), array('class'=>'anchor')); ?></div>
<div style="margin-top:20px; height: 90px;">
 <span style="float:left;width:100px"> 
  <?php 
  if (!$user->profile_image_active){
     echo HTML::anchor('/user/others/'.$user->id, HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow','title'=>'Profile Picture')));
 }
 else {
      $profile_image = $config_path->profile_image[$user->profile_image_active];
      $profile_image = $user->$profile_image;
      echo HTML::anchor('/user/others/'.$user->id, HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image rounded_image_shadow','title'=>'Profile Picture')));
 }

 ?></span>
    <div style="float: left; width:100px;"><a href="<?= URL::site(); ?>user/profile_followers/<?= $user->id?>"><div class="prof-shot" align="center"><span class="left-count"><?= count($followers); ?></span><br /> Followers</div></a><br />
        <?php if(count($friend) == '0'): foreach($follower as $follower_id): if(count($follower) > 0 && $follower_id->is_accepted == 1): ?>
        <input type="button" value="Unfollow" class="req-button" id="btn_unfollow" onclick="return unFollowReq('<?=URL::site();?>', '<?=$user->id;?>')" />
        <?php elseif(count($follower) > 0 && $follower_id->is_accepted == 0): ?>
        <input type="button" value="Requested" class="req-button" disabled />
        <?php endif; endforeach; ?><?php if(count($follower) == 0): ?>
        <input type="button" value="Follow" class="req-button" id="btn_follow_req" onclick="return sendUserFollowRequest('<?=URL::site();?>', '<?=$user->id;?>')" />
        <?php endif; endif;?>
    </div>
    <div><a href="<?= URL::site(); ?>user/profile_friends/<?= $user->id?>"><div class="prof-shot" align="center"><span class="left-count"><?= count($friends); ?></span><br /> Friends</div></a><br />
        <?php if(count($friend) == '0'): ?>
        <span id="frnd_req_btn"><input type="button" value="Friend" class="req-button" id="btn_friend_req" /></span>
        <?php else: foreach($friend as $frnd): if(count($friend) > 0 && $frnd->is_accepted == 0):?>
        <input type="button" value="Requested" class="req-button reqested-button" id="btn_friend_reqsted" disabled />
        <?php elseif(count($friend) > 0 && $frnd->is_accepted == 1): ?>
        <!--<input type="button" value="Unfriend" class="req-button unreq-button" id="<?= $user->id;?>" alt="<?= $user->username; ?>" onclick="return unfriend('<?=URL::site();?>', this)" />-->
        <?php endif; endforeach; endif; ?>
    </div>
</div>
<span class="bio_text">
    <?php 
    if($profile->mini_bio)
        echo '<pre>'.$profile->mini_bio.'</pre>'; ?>
</span>

<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Top Characters</span> 
    <span class="listing"><br />
    <?php foreach ($character as $character):
        if($character->server->server_name)
         {
             $server_name = ' - '.$character->server->server_name;
         }
         else
         {
             $server_name = '';
         }
      echo HTML::anchor('/character/view/'.$character->character_detail_id, '<span style="font-weight:bold">'.$character->character_name.'</span>'." - ".'<span style="font-style:italic">'.$character->game->game_name.'</span>'.$server_name, array('class'=>'anchor'))."<br />";
       endforeach;
       if (!count($character)):
       echo "No top characters selected"."<br />";
       endif;
     ?>
    </span>

 <span style="text-align:right"><?php echo html::anchor("/character/others/$user->id", 'FULL LIST', array('class'=>"edit_link", 'style'=>'width:61px; margin-left:220px;'));?></span>
  
</div>
<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Top Guilds</span> 
    <div class="listing">
    <?php foreach ($guild as $guild):
       echo HTML::anchor('/guild/profile/'.$guild->guild_id, '<span style="font-weight:bold">'.$guild->guild_name.'</span>'." - ".'<span style="font-style:italic">'.$guild->game->game_name.'</span>', array('class'=>'anchor'))."<br />";
       endforeach;
       if (!count($guild)):
       echo "No top guilds selected"."<br />";
       endif;
     ?>
    </div>
    <span style="text-align:right"><?php echo html::anchor("/guild/others/$user->id", 'FULL LIST', array('class'=>"edit_link", 'style'=>'width:61px; margin-left:220px;'));?></span>
</div>
<hr style="width:90%" size="1" class="line" />
<div align="center" class="logout-button"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png', array('title'=>'Log Out'))); ?> </div>
<?php if($advs->is_checked == "1"):?>
<div id="opacity_ads" class="advertisment" align="center">
<!-- Video Games -->
<ins class="adsbygoogle"
     style="display:inline-block;
width:250px;height:250px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="2882744924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php else:?>
<?php if($advs->is_checked == "2"):?>
<div id="opacity_ads_def" class="advertisment" align="center">
    <?php echo HTML::image($config_path->path['advertisement']); ?>
</div>
<?php else: ?>
<div id="opacity_ads" class="advertisment" align="center">
<!-- Video Games -->
<ins class="adsbygoogle"
     style="display:inline-block;
width:250px;height:250px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="2882744924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div id="opacity_ads_def" class="advertisment" align="center">
    <?php echo HTML::image($config_path->path['advertisement']); ?>
</div>
<?php endif;endif; ?>
