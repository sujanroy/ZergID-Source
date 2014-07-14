<?php
session_start();
if(!isset($_SESSION["session_key"]))
header("location:/home");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"></html>

<script src="<?=URL::site('/public/js/popbox.js');?>" type="text/javascript"></script>
 <script src="<?=URL::site('/public/js/jquery.placeholder.js');?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/jstz-1.0.4.min.js'); ?>" type="text/javascript"></script>
<script>
//    $(document).ready(function() {  
//    var tz = jstz.determine(); // Determines the time zone of the browser client
//    $('#time_zone').val(tz.name());
////    alert(tz.name());
//    });

   $(document).ready(function(){
//       alert(1)
    var url = window.location.href;
    var tz = jstz.determine(); // Determines the time zone of the browser client
    var timezone = tz.name(); //'Asia/Kolhata' for Indian Time.
    $.post("user/save_timezone", {
        timezone: timezone
    }, function(data) {
  //      alert(2)
       //Preocess the timezone in the controller function and get
       //the confirmation value here. On success, refresh the page.
     });
  });
</script>
 <!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
 <!--[if IE 9 ]>    <html class="ie9"> <![endif]-->    
    <script type='text/javascript'>
    $(document).ready(function(){
      $('.popbox').popbox();
    });
  </script>
  <script>
    var url = window.location.href;
    var urlChunks = url.split('/');
    var cur_screen = urlChunks[3];
 //   var cur_screen = url.substring(url.lastIndexOf("/") + 1);
    var screen_nxt = urlChunks[4];
    var charevent_screen = urlChunks[6];
 
     $(document).ready(function(){
    if(cur_screen == "feeds" && screen_nxt != "view") {
        $('#huser_icon').html('<img src="/public/images/user_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'display':'block'});
        $('#arrow_focus').removeClass().addClass('focus_arrow_on');
    }
    if(cur_screen == "feeds" && screen_nxt == "view") {
        $('#huser_icon').html('<img src="/public/images/user_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'display':'block'});
    }
    if(screen_nxt == "create_event" && cur_screen == 'character') {
        $('#hcalendar_icon').html('<img src="/public/images/calendar_black_icon.png" class="header_icon open" />');
        $('#arrow_focus').css({'margin-left':170, 'display':'block'});
    }
    if(charevent_screen == "char"){
       $('#hcalendar_icon').html('<img src="/public/images/calendar_black_icon.png" class="header_icon open" />');
        $('#arrow_focus').css({'margin-left':170, 'display':'block'}); 
    }
    if(cur_screen == "guild" && screen_nxt != "view" && screen_nxt != "add" && screen_nxt != "edit") {
        $('#hguild_icon').html('<img src="/public/images/helmat_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'margin-left':415, 'display':'block'});
    }
    if(cur_screen == "guild" && (screen_nxt == "view" || screen_nxt == "profile")) {
        $('#hguild_icon').html('<img src="/public/images/helmat_black_icon.png" class="header_icon" />');
        $('#arrow_focus').removeClass().addClass('focus_arrow_on');
        $('#arrow_focus').css({'margin-left':415, 'display':'block'});
    }
    if(((cur_screen == "guild" || cur_screen == "character") && (screen_nxt == "add" || screen_nxt == "edit")) || (cur_screen == "user" && screen_nxt == "")) {
        $('#huser_icon').html('<img src="/public/images/user_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'display':'block'});
    }
    if(cur_screen == "events" && screen_nxt != "index" && screen_nxt != "calendar" && charevent_screen != "char") {
        $('#hguild_icon').html('<img src="/public/images/helmat_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'margin-left':415, 'display':'block'});
    }
    if(cur_screen == "message") {
        $('#hmsg_icon').html('<img src="/public/images/message_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'margin-left':290, 'display':'block'});
    }
     if(cur_screen == "events" && (screen_nxt == "index" || screen_nxt == "calendar")) {
        $('#hcalendar_icon').html('<img src="/public/images/calendar_black_icon.png" class="header_icon open" />');
        $('#arrow_focus').css({'margin-left':170, 'display':'block'});
    }
    if(cur_screen == "guild" && screen_nxt == "view") {
        $('.prof-shot').css({'margin-top':25});
    }
    if((cur_screen == "character" || cur_screen == "user")  && screen_nxt != 'create_event'){
          $('#huser_icon').html('<img src="/public/images/user_black_icon.png" class="header_icon" />');
        $('#arrow_focus').css({'display':'block'});
        if(cur_screen == "user" && screen_nxt == 'others')
       $('#arrow_focus').removeClass().addClass('focus_arrow_on');
    }
    });
</script>

<!-- Header for the site -->
<div align="center" class="hloade_div"><div class="header_load"><img src="/public/images/white-load.gif" style="position:absolute; margin-left:-5px; "/> <span style="padding-left:15px;">Loading..</span></div></div>
<div class="header" >
    <div class="logo"> <a href="/feeds"><?php echo HTML::image("public/images/zerg_icon.png") ?></a></div>
    <?php if($user): ?>
    <div style="float:left; margin-left:98px; margin-top:10px;" class="headericon">
        <span id="profile_icon"><a id="huser_icon" href="/feeds" title="Profile"><?php echo HTML::image("public/images/user_white_icon.png", array('class' => 'header_icon')); ?></a></span>  
        <span class='popbox' id="calender_icon"><a href="/events/index" title="Calendar" id="hcalendar_icon" class="open"><?php echo HTML::image("public/images/calendar_white_icon.png", array('class' => 'header_icon')); ?></a>
            <span class='collapse'>
                <span class='mbox'>
                    <span class='arrow'></span>
                    <span class='arrow-border'></span>
                    <div class="popbox-header">Upcoming Events</div>
                    <div style="float:left; margin-top:5px;">
               <?php  $count = array();  
		      $cdate = date('Y-m-d');	         
                      $events = $events->as_array();
                   usort($events, function($a, $b) {  //sort date & time in asc order
                     $date_diff = strtotime($a->event_date) - strtotime($b->event_date);
                     if ($date_diff) return $date_diff; 
                   return $a->event_from_time - $b->event_from_time; 
                       });  
                    foreach($events as $event):
		    if($event->event_date >= $cdate):  
$userid_count = $event->event_members_count;
if((($event->rsvp_state == 1 || $event->user_id == $user->id) && (($event->user_id == $user->id && $event->user_id == $event->userid && $userid_count > 1) || (($event->rsvp_state == 1 && $event->user_id == $user->id) ||($event->rsvp_state != 1 && $event->userid == NULL)) || ($event->rsvp_state != 1 && $event->userid != NULL && $userid_count == 1) || ($event->rsvp_state == 1 && $event->guild_role_id == 1) || ($event->rsvp_state == 1 && $event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)))|| ($event->userid == $user->id && $event->rsvp_accepted == 1)):                     
                           $count[] = $event->event_id;?>  
                        <div align="left" style="margin-top:10px;"> 
                            <?php if($event->guild_id != NULL): ?>    <a class="event-name" href="/events/view/<?= $event->guild_id; ?>/<?= $event->event_id; ?>"> <?php else: ?><a class="event-name" href="/events/view/<?= $event->event_id; ?>/char"><?php endif; ?><?= $event->event_name; ?></a>
                             <?php 
                                    $event_timezone = $event->event_created_timezone;
                                    $event_date = date('Y-m-d', strtotime($event->event_date));
                                    $eventdate = new DateTime($event_date, new DateTimeZone($event_timezone)); 

                                   date_default_timezone_set($timezone);

                                  $eventdate = date("Y-m-d", $eventdate->format('U')); 
                                  $current_date = date('Y-m-d');
                                $tomorrow = date("Y-m-d", strtotime("tomorrow"));
                                if ($eventdate == $current_date):
                                    $date = "Today";
                                elseif ($eventdate == $tomorrow):
                                    $date = "Tomorrow";
                                else:
                                    $date = date("M d, Y", strtotime($event->event_date));
                                endif;
                                $time = array();
                                $time = $config_path->time;
                                $from_time = $time[$event->event_from_time];
                                $from_date = new DateTime($from_time, new DateTimeZone($event_timezone)); 

                                date_default_timezone_set($timezone); 
                                $fromdate = date("h:iA", $from_date->format('U')); 
                                ?>
                            <span class="event-date"><?= $date . " ". $fromdate;?></span>
                        </div>
                    <?php endif; endif;  endforeach;?>
                    </div>
                </span>
            </span>
        </span>  
      <?php if(count($count) > 0):  ?>
     <div class="inner calender-inner">
      <div align="center" class="notify_count"><?= count($count); ?></div>
     </div>
      <?php endif; ?>
     <?php if($messages > 0): ?>   
     <div id="msg-inner" class="inner msg-inner">
      <div id="msg_hcount" align="center" class="notify_count"><?= $messages; ?></div>
     </div>
     <?php endif; ?>   
        <span id="message_icon"><a id="hmsg_icon" href="/message" title="Message"><?php echo HTML::image("public/images/message_white_icon.png", array('class' => 'header_icon')); ?></a></span>  
       
        <span id="helmet_icon"><a id="hguild_icon" href="/guild" title="Guilds"><?php echo HTML::image("public/images/helmat_white_icon.png", array('class' => 'header_icon')) ?></a></span>                                
    </div>

    <div style="float:right; margin-top:32px">
        <?= Form::open('/search', array('enctype' => 'multipart/from-data','autocomplete' => 'off')); ?>
        <?= Form::input('keyword', HTML::chars(Arr::get($_POST, 'keyword')), array('class' => 'normal-input hsearchBox', 'placeholder' => 'Search', 'maxlength' => '50', 'id' => 'search'));
        ?>
        <?= Form::close(); ?>  </div>
    <?php endif; ?>
</div>

<div class="msg">Success message!</div>
