<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
<div align="center" style="margin-top:80px">
<p style="font-size:48px;" class="popup-title">Fingers Crossed!</p>
<p class="popup-msg">We've sent your application to the guild leaders. <br /> Their reply message will show up in your <?=HTML::anchor('/message/index', 'message center', array('style'=>'color:#38CBF0;'))?>.</p>
</div>    
<a id="apply_msg_close" class="popupBoxClose" onclick="return closeGuildApplyPopup()"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>


<div id="popup_box" class="popup_applybox">	<!-- OUR PopupBox DIV-->
     <?= Form::open('guild/apply_membership', array('enctype' => 'multipart/form-data', 'id'=>'guild_members')); ?>
	<span class="popup-title">Membership Application </span>
        <div class="lite_neme"><?= $guild->guild_name; ?></div>
      
        <div>
              <span style="margin-left:15px;">
                    <?php
                        $chars_list[''] = "Select Your Character";
                        foreach ($character_list as $character):
                            $chars_list[$character->character_detail_id] = $character->character_name;
                        endforeach;
                     ?>

                  <?= Form::select('character', $chars_list, "", array('class' => "select-input", 'id' => 'character')); ?><br /></span>
              <span class="apply_header">Your Play Style</span><br />
              <div  class="fom_checkbox"> 
                  <?php
                  $play_style = array();
                  $play_style = $config_path->play_style;
                  $i = 1;
                  foreach ($play_style as $play_style):
                      ?>
                      <?= Form::radio('play_role', $i, "1", array('class' => 'checkbox', 'id' => 'play_role')); ?><?= $play_style; ?><br />
                      <?php
                      $i++;
                  endforeach;
                  ?>
              </div >

             <br />
        </div>
        <span style="margin-left: 15px;">
        <b>Describe the character(s) you would like to join the guild...</b>   
         <?= Form::textarea('summary', "", 
                        array('class'=>'profile-input popup-input','style'=>'margin-top:3px', 'id'=>'summary', 'maxlength'=>'200')); ?>
        </span>
        <div>
            <span class="apply_header">Technology</span><br />
             <div  class="fom_checkbox"><?= Form::checkbox('speaker', 1, "1", array('class'=>'checkbox', 'id'=>'speaker')); ?> Speakers or headphones only<br />
                <?= Form::checkbox('mic', 1, "1", array('class'=>'checkbox', 'id'=>'mic')); ?>headset with mic or just a mic<br/>
                <?= Form::checkbox('voice', 1, "1", array('class'=>'checkbox', 'id'=>'voice')); ?>I can install and will participate in voice chat software
            </div>
            <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span>
        </div>
        <span id="bar_load" style="display:none; margin-left:15px;"><?=HTML::image("public/images/loading-bar.gif", array('style'=>'margin-top:25px;'));?></span><span style="float:right;">
                <?= Form::submit('apply_membership', 'SUBMIT', array('class'=>'save-button', 'style'=>'width:115px; margin-top:20px','onclick'=>'return applyMembership("'.URL::site().'", "'.$guild->guild_id.'", "'.$guild->user_id.'")')); ?>
        </span>
     <?= Form::close(); ?>
        <a id="popupBoxClose" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>

<div align="right" class="top-right-padding"> <?php if($member->guild_role_id == 1): echo html::anchor('/guild/edit/'.$guild->guild_id, HTML::image("public/images/edit_profile_icon.png"), array('style'=>'font-size: 20px;')); endif;?></div>
<div class="title-big" style="margin-top:-5px;font-size:22pt"><?= HTML::anchor('/guild/view/'.$guild->guild_id,ucfirst($guild->guild_name), array('class'=>'anchor')); ?></div>
<div style="margin-top:20px; height: 90px;">
 <span style="float:left;width:100px"> 
  <?php 
 if (!$guild->guild_logo)
     $logo = $config_path->path['default_image_path'];
 else
     $logo = $config_path->path['guild'].$guild->guild_logo;

 echo HTML::anchor('/guild/view/'.$guild->guild_id, HTML::image($logo, array('class'=>'rounded_image','title'=>'Profile Picture'))); ?></span>
  <div class="prof-shot" align="center" style="float: right; margin-right: 35px; margin-top:10px;"><b style="font-size:24px;"><?= HTML::anchor('guild/guildmembers/'.$guild->guild_id, count($guild_members), array('class'=>'left-count', 'id'=>'member_count'))?></b><br /> Members
  <?php if($guild->is_accept_applicant == 1) { if($member->guild_member_id && $member->is_accepted != '0'):?>
  <span style="margin-top: 5px;"></span>
  <?php elseif($member->guild_member_id && $member->is_accepted == '0'):?>
  <input type="button" value="Applied" class="req-button reqested-button" id="applied_guild" disabled  style="margin-top: 6px; margin-right: 15px;"/>
  <?php else: ?>
  <span id="guild_apply"><input type="button" value="Apply" class="req-button" id="apply_guild" onclick="return false;" style="margin-top: 6px; margin-left: 1px;" /></span>
  <?php endif; } ?>
  </div>
</div>
<span class="bold_text">
    <b><?= $guild->game->game_name; ?><br />
<?= $guild->server->server_name; ?><br />
<?php 
   $players =array(); 
   if($guild->is_pvp_enabled){
     $players[] = $config_path->player_type['1']; 
    }
    if($guild->is_pve_enabled){
        $players[] .= $config_path->player_type['2']; 
    }
    if($guild->is_rp_enabled){
        $players[] .= $config_path->player_type['3']; 
    } echo join(" / ",$players); ?>
   </b></span>
<span class="bio_text">
    <?php 
    if($guild->guild_description)
        echo '<pre>'.$guild->guild_description.'</pre>'; 
    ?>
    
</span>

<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Communication</span>  <span style="margin-left:60px;" class="left-header-tab" id="secondary">VIEW SECONDARY</span><span style="margin-left:80px; display: none;" class="left-header-tab" id="primary">VIEW PRIMARY</span>
    <?php  if($member->guild_role_id && $member->is_accepted == 1): ?>
    <span>
     <span class="comm_listing" id="comm_text" style="display:block"><br />
        <?php if($guild->main_comm_service)
        echo $guild->main_comm_service;
      else  
          echo "Service name not available";?><br />
     Server: <?php if($guild->main_comm_url)
         echo $guild->main_comm_url;
      else  
          echo "Not available";?><br />
     Port: <?php if($guild->main_comm_port)
         echo $guild->main_comm_port;
      else  
          echo "Not available";?><br />
     Password: <?php if($guild->main_comm_password)
         echo $guild->main_comm_password;
      else  
          echo "Not available";?><br />
    </span>
     <span class="comm_listing" id="second_comm_text" style="display:none"><br />
        <?php if($guild->second_comm_service)
        echo $guild->second_comm_service;
      else  
          echo "Service name not available";?><br />
     Server: <?php if($guild->second_comm_url)
         echo $guild->second_comm_url;
      else  
          echo "Not available";?><br />
     Port: <?php if($guild->second_comm_port)
         echo $guild->second_comm_port;
      else  
          echo "Not available";?><br />
     Password: <?php if($guild->second_comm_password)
         echo $guild->second_comm_password;
      else  
          echo "Not available";?><br />
    </span>
    </span>
    <?php else: ?>
    <span>
    <span class="comm_listing" id="comm_text" style="display:block"><br />
        <?php if($guild->main_comm_service)
        echo $guild->main_comm_service;
      else  
          echo "Service name not available";?><br />
     Server: xxx.xxx.xxx.xxx<br />
     Port: xxxx <br />
     Password: xxxxxxxxxxx<br />
    </span>
     <span class="comm_listing" id="second_comm_text" style="display:none"><br />
        <?php if($guild->second_comm_service)
        echo $guild->second_comm_service;
      else  
          echo "Service name not available";?><br />
     Server: xxx.xxx.xxx.xxx<br />
     Port: xxxx<br />
     Password: xxxxxxxxxxx<br />
    </span>
    </span>
    <?php endif;?>
</div>
<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Upcoming Events</span><br /> 
    
     <?php 
     if(count($guild_events) > 0 && $member->guild_member_id) :
     $cdate = date('Y-m-d'); 	
     foreach($guild_events as $event): 
	if($event->event_date >= $cdate || $event->event_todate >= $cdate): 
                     if($event->guild_role_id == 1 || ($event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)):?>               
    <span class="listing">
              <?php
                      $event_date = date('Y-m-d', strtotime($event->event_date));
                      $current_date = date('Y-m-d');
                      $tomorrow = date("Y-m-d", strtotime("tomorrow"));
                        if ($event_date == $current_date):
                           $date = "Today";
                        elseif ($event_date == $tomorrow):
                           $date = "Tomorrow";
                        else:
                           $date = date("M d, Y", strtotime($event->event_date));
                        endif;
                           $time = array();
                           $time = $config_path->time;
                ?>
                            
        <a style="color:#36BBDD" href="/events/view/<?=$event->guild_id; ?>/<?=$event->event_id; ?>"><?= $event->event_name; ?></a> <span><?= $date . " ". $time[$event->event_from_time]; ?></span><br />  
    </span>
    <?php endif; endif;  endforeach; else: ?><span class="bio_text">No Events are available</span> <?php endif;?>
   <span class="edit_link"> <?php if($member->guild_role_id == 1  || $member->guild_role_id == 2):  echo html::anchor('/events/create/'.$guild->guild_id, "CREATE EVENT", array('class'=>"edit_link", 'id'=>'add_guild')); endif; ?></span><span class="edit_link"  style="text-align:right; margin-right:30px; float:right;"><?php echo html::anchor("/events/calendar/".$guild->guild_id, 'VIEW CALENDAR', array('class'=>"edit_link"));?></span>
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
