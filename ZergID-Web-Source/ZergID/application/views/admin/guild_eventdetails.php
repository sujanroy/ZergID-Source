<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
<?php if(count($event) > 0) { ?>
<span id="guild_event_cnt" class="large_title">Events <?= count($event); ?></span>
<span id="guild_event_del_cnt" style="display:none" class="large_title">Events <span id="guildeventcnt"></span></span>
<span id="noguild_event" style="display:none"><span class="large_title">Events </span>
<div class="large_title" style="margin-top:100px; font-size:30px;" align="center">No events are available</div></span>
<div class="scroll_bar">
        <table id="guildeventtbl" width="500px;" class="display">
            <thead>
                <tr style="background:#fff;">
                    <th style="display:none;" width="20%"></th>
                    <th style="display:none;" width="30%"></th>
                    <th style="display:none;" width="50%"></th>
                    
                </tr>
            </thead>
               <?php foreach ($event as $event):?> 
            
             <?php 
            $event_date = date("l M d, Y",strtotime($event->event_date));
            $time = array();
            $time = $config_path->time;
            ?>
            
            <tr id="event<?= $event->event_id; ?>"> 
            <td class="character_name">
                 <?= $event->event_name; ?>
                </td>
                <td class="member-name member-td"><span style="font-size:20px;" class="title">Date:</span><span class="span-text" style="margin-left:20px;"><?= $event_date; ?></span><br /><span style="font-size:20px;" class="title">Time:</span><span class="span-text" style="margin-left:20px;"><?= $time[$event->event_from_time].'-'.$time[$event->event_to_time]?></span></td>
                <td class="member-td" style="width:25%;  padding-left:40px;">
                    <?php //
                  //  $flag = 0;
                   // if ($role->guild_role_id != 3):
                   //     if ($role->guild_role_id == 1 && $role->guild_role_id != $guild_members->guild_role_id):
                    //        $flag = 1;
                    //    elseif ($role->guild_role_id != 1 && $role->guild_role_id == 2 && $guild_members->guild_role_id == 3):
                    //        $flag = 1;
                    //    endif;
                  //  endif;
                  //  if ($flag != 0):
                        ?>
                       
                    <?php //endif;  ?>
                    
              <a href="#" id="<?= $event->event_id ?>" alt="member" onclick='return removeGuildEvents("<?= URL::base(TRUE, 'https'); ?>", "<?= $event->event_id ?>", "<?= $event->event_name; ?>",this)'><?= HTML::image('public/images/delete_icon.png') ?></a>
                </td>
            </tr>
                <?php endforeach; ?>
        </table>
    </div>
<?php } else { ?>
<span class="large_title">Events </span>
<div class="large_title" style="margin-top:100px; font-size:30px;" align="center">No events are available</div>
<?php } ?>

<script>
    $('.scroll_bar').slimscroll({
        color: '#38CBF0',
        width: '500px',
        height: '400px',
        opacity : .7,
        wheelStep : 5,
        railVisible: true
    });
</script>











