
<script src="<?= URL::site('/public/js/fullcalendar.js'); ?>" type="text/javascript"></script>


<?php 
        
$event_list = array();
 
foreach($events as $event):
if(($event->guild_role_id == 1 || ($event->guild_role_id == 2 && $event->is_sendto_officer == 1) || ($event->guild_role_id == 3 && $event->is_sendto_member == 1)) || ($event->character_id != NULL)):
    $dateSet =  date('d', strtotime($event->event_date));
    $data = array('id' => $event->event_id, 'title' => $dateSet, 'start' => $event->event_date);
    array_push($event_list, $data);
    
endif;   
endforeach;

 $result = json_encode($event_list);
?>
<script>
	$(document).ready(function() {
            
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
       for(i=3; i>0; i--) {
            $('#calendar_small'+ i).fullCalendar1({
                editable: true,
                events: <?php echo $result; ?>,
                eventRender: function(event, element, view)
                {
                    if(event.start.getMonth() !== view.start.getMonth()) { return false; }
                }
            });
            $('#calendar_small'+i).fullCalendar1('gotoDate',y,m+i);
       }
           
            $('.fc-button').css({'display':'none'});
            $('.fc-day-header').css({'display':'none'});
            $('.fc-day').css({'border':'1px solid #fff'});
	    $('.fc-event-day').css({'color':'#38CBF0','font-size':'11px','cursor':'hand','font-weight':'bold','margin-top':'5px'});
            $('.fc-border-separate').css({'margin-bottom':50});	
            $('.fc-day-number').css({'color':'#D3D3D3'});
            $('.fc-day-number').css({'margin-left':10});
            $('.fc-day-content').css({'height':10});
            $('.fc-event-inner').css({'margin-top':-45, 'font-size':12, 'margin-left':10, 'background':'#2A2A2A', 'width':25, 'height':20});
            $('.fc-day').css({'border-top':0});
            $('.fc-day').css({'border-right':0});
	});
function gotoMonth(obj) {
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
$('#calendar').fullCalendar('gotoDate',y,m+obj);
}

</script>
<style>

	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 200px;
		margin: 0 auto;
		}

</style>
<div style="margin-top:50px; width:88%;">
<div id='loading' style='display:none'>loading...</div>
<?php for($i=1; $i<=3; $i++) { ?>
<div id='calendar_small<?= $i ?>'onclick="gotoMonth(<?= $i ?>);"></div>
<?php } ?>
</div>
<hr style="width:90%; margin-top:-20px;" size="1" class="line" />
<div align="center" class="logout-button"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png', array('title'=>'Log Out'))); ?> </div>
