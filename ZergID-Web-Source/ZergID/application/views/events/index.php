<link rel="stylesheet" type="text/css" href="/public/css/fullcalendar.css" rel="stylesheet" media="all" />
<script src="<?= URL::site('/public/js/fullcalendar.min.js'); ?>" type="text/javascript"></script>
<script>
     $(document).ready(function(){
       if($.browser.webkit){
       $('.mbox').css({'display': 'block', 'top': 24,'left':-218.5});
       } else if($.browser.opera){
       $('.mbox').css({'display': 'block', 'top': 67,'left':-218.5});
       } else{
       $('.mbox').css({'display': 'block', 'top': 10, 'left':-218.5});
       }
       $('.arrow').css({'left':'145.5px'});
       $('.arrow-border').css({'left':'145.5px'});
    });
    </script>
<?php 
        
$event_list = array();
$cdate = date('Y-m-d'); 
foreach($events as $event):
if($event->event_date >= $cdate):
$color = '#FFFFFF';
    $textcolor = '#38CBF0';
   else:
    $color = '#FFFFFF';
   $textcolor = '#38CBF0';
   endif;  
$userid_count = $event->event_members_count;
//if(($event->guild_role_id == 1 && $event->rsvp_state == 1) || ($event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)):
// if((($event->rsvp_state == 1 || $event->user_id == $user->id) && (($event->user_id == $user->id && $event->user_id == $event->userid) || (($event->rsvp_state == 1 && $event->user_id == $user->id) ||($event->rsvp_state != 1 && $event->userid == NULL)) || ($event->rsvp_state == 1 && $event->guild_role_id == 1) || ($event->rsvp_state == 1 && $event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)))|| ($event->userid == $user->id && $event->rsvp_accepted == 1)):
  if((($event->rsvp_state == 1 || $event->user_id == $user->id) && (($event->user_id == $user->id && $event->user_id == $event->userid && $userid_count > 1) || (($event->rsvp_state == 1 && $event->user_id == $user->id) ||($event->rsvp_state != 1 && $event->userid == NULL)) ||
          ($event->rsvp_state != 1 && $event->userid != NULL && $userid_count == 1 && $event->user_id == $user->id) || ($event->rsvp_state == 1 && $event->guild_role_id == 1) || ($event->rsvp_state == 1 && $event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)))|| ($event->userid == $user->id && $event->rsvp_accepted == 1)):                     
    if($event->guild_id != NULL):
       $event_view_url = $event->guild_id.'/'.$event->event_id;
   else:
       $event_view_url = $event->event_id.'/char';
   endif;
     $data = array('id' => $event->event_id,'time' => $event->event_from_time, 'title' => $event->event_name, 'start' => $event->event_date, 'url' => '/events/view/'.$event_view_url,'color' => $color,'textColor' => $textcolor);  
    array_push($event_list, $data);
endif;   
endforeach;

 $result = json_encode($event_list);
?>
<script>
 
   var sort_bytime = <?php echo $result; ?>.sort(function(a,b) { return (a.time) - (b.time) } );
	$(document).ready(function() {
            
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            
            $('#calendar').fullCalendar({
                editable: true,
                events: sort_bytime,
                eventRender: function(event, element, view)
                {
                    if(event.start.getMonth() !== view.start.getMonth()) { return false; }
                }
            });
            $('.fc-button-today').css({'display':'none'});
            
             var pathname = window.location.href;
        var str = pathname.split("/");
        if(str[4]=='calendar'){
         $('#create_event_link_chk').css({'display':'none'});
         }
        else{
        $('#create_event_link_chk').css({'display':'block'});
        }
         $('.fc-button-prev').click(function(){
        var fullcalendar_month = $('#event_month').text();
        var split_month = fullcalendar_month.split(' ');
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
        var date = new Date();
        if(split_month[0] != months[date.getMonth()]){
        $('.fc-state-highlight').css({'background-color': '#FFFFFF'});
        }
        });    
        $('.fc-button-next').click(function(){
        var fullcalendar_month = $('#event_month').text();
        var split_month = fullcalendar_month.split(' ');
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];;
        var date = new Date();
        if(split_month[0] != months[date.getMonth()]){
        $('.fc-state-highlight').css({'background-color': '#FFFFFF'});
        }    
	});
        });
        
       

</script>

<style>

	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 590px;
		margin: 0 auto;
		}

</style>
<div style="margin-top:20px; margin-left:25px; width:90%; padding-bottom:350px">
<p class="profile_title">Calendar of Events</p>
<div id="create_event_link_chk" style="margin-left:470px; margin-top:-65px;"><a style="color:#38CBF0; text-decoration:underline;" href="/character/create_event">Create Event</a></div><br /><br />
<div id='loading' style='display:none'>loading...</div>
<div id='calendar'></div>
</div>
