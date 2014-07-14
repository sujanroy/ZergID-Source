<?php foreach ($comments as $comment) : ?>     
<div style="margin-top:30px;">
           <div class="feed_icon" style="margin-left:30px; width:10%;" align="left"> 
            <?php 
            if (!$comment->profile_image_active){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $config_path->profile_image[$comment->profile_image_active];
                $profile_image = $comment->$profile_image;
            }
            if($comment->character_icon == "") {
                $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$comment->character_icon;
            }
            if($comment->character_name == "" || $comment->character_name == NULL):    
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_mini rounded_image_shadow')); 
            else:
                echo HTML::image($character_image, array('class'=>'rounded_image_mini rounded_image_shadow'));
            endif; ?>
           </div> 
         <div  class="feed" align="right" style="margin-left:10px;">
         <?php if($comment->character_name == "" || $comment->character_name == NULL): ?>    
         <div class="title"><?= HTML::anchor('user/others/'.$comment->id,ucfirst($comment->username)); ?></div>
         <?php else: ?>
         <div class="title"><?= HTML::anchor('character/view/'.$comment->id, ucfirst($comment->character_name)); ?> <span class="feed-charname"><?=$comment->username?>'s Character</span></div>
         <?php endif; ?>
         <?php 
//         $feed_date = date('Y-m-d', strtotime($comment->last_modified_date));
//         $current_date = date('Y-m-d');
//         if($feed_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($comment->last_modified_date));
//         else:
//             $date = date("M d, Y",strtotime($comment->last_modified_date));
//         endif;

           $current_date = date('Y-m-d H:i:s');
            $tz = new DateTimeZone($timezone);
            $date = new DateTime($comment->last_modified_date);              
            $date->setTimeZone($tz);
            $feed_date = $date->format('Y-m-d');
            $feed_modified_date = $date->format('Y-m-d h:i A');

            $currentdate = new DateTime($current_date);
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');

            if($feed_date == $currentdate):
            $date = "Today at ". date('h:i A', strtotime($feed_modified_date));
            else:
            $date = date("M d, Y",strtotime($feed_modified_date));
            endif;
         ?>
         <span class="feed-date"><?=$date;?></span>
         <p class="feed-text" style="width:480px;">
          <?php if($comment->comment = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.=?&-_/]+!', "<a style=text-decoration:underline;color:blue href=\"\\0\" target='_blank' >\\0</a>",$comment->comment)):
                 echo nl2br($comment->comment);
                 else:
                 echo nl2br($comment->comment); endif;?>
         </p>
         <div class="feed-text" style="padding-top:10px;">
          <?php
         $zergs = explode(",",$comment->zergs); 
         $check = array_search($user->id, $zergs);
         if($check !== false): ?>
             <span id ='unzerg<?=$comment->comment_id; ?>'><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzerg', 'onclick'=>'return unzergitComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"><?= count($zergs) . " Zergs"; ?></span></span>
             <?php else: ?>
             <span id ='zerg<?=$comment->comment_id; ?>'><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link','alt'=>'zerg', 'onclick'=>'return zergitComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"> <?php if($comment->zergs != NULL): echo count($zergs) . " Zergs";  else: ?>Be the first! <?php endif; ?></span></span>
             <?php endif; ?>
             <span id ='zergs<?=$comment->comment_id; ?>' style="display:none;"><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link', 'alt'=>'zergs', 'onclick'=>'return zergitComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"><?php if($comment->zergs != NULL): echo count($zergs) - 1 . " Zergs"; else: ?>Be the first!<?php endif; ?></span></span>
             <span id ='unzergs<?=$comment->comment_id; ?>' style="display:none;"><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzergs', 'onclick'=>'return unzergitComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint "><?php if($comment->zergs != NULL): echo count($zergs) + 1 . " Zergs"; else:  echo count($zergs) . " Zergs"; endif;?></span></span>
         </div>
</div>
</div>
<?php $msg_id=$comment->comment_id; endforeach; ?>
 <?php if(count($comments) > 2): ?>
 <div class="facebook_style" id="facebook_style" align="center">
  <a id="<?php echo $msg_id; ?>" href="#" class="load_more" alt="<?php echo $feedid ?>">Load more comments... </a>
  </div>
 <?php endif; ?>

<script type="text/javascript">
    $(function(){

    var minimized_elements = $('p.feed-text');
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 250) return;
        
        $(this).html(
            t.slice(0,250)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(250,t.length)+' <a href="#" class="less">Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });

});
</script>
