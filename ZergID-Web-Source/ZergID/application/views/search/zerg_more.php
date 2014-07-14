<?php foreach ($feeds as $feed) : ?>
 <div id="div<?= $feed->feed_id; ?>" style="margin-top:30px;">
        
           <div class="feed_icon" align="left"> 
            <?php 
            if (!$feed->profile_image_active){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $config_path->profile_image[$feed->profile_image_active];
                $profile_image = $feed->$profile_image;
            }
            if($feed->character_icon == "") {
                $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$feed->character_icon;
            }
            if($feed->character_name == "" || $feed->character_name == NULL):    
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_small rounded_image_shadow')); 
            else:
                echo HTML::image($character_image, array('class'=>'rounded_image_small rounded_image_shadow'));
            endif; ?>
           </div> 
         <div  class="feed" align="right">
         <?php if($feed->character_name == "" || $feed->character_name == NULL): ?>    
         <div class="title"><?= HTML::anchor('user/others/'.$feed->id, ucfirst($feed->username)); ?></div>
         <?php else: ?>
         <div class="title"><?= HTML::anchor('user/others/'.$feed->id, $feed->character_name); ?> <span class="feed-charname"><?=ucfirst($feed->username)?>'s Character</span></div>
         <?php endif; ?>
         <?php 
         $feed_date = date('Y-m-d', strtotime($feed->last_modified_date));
         $current_date = date('Y-m-d');
         if($feed_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($feed->last_modified_date));
         else:
             $date = date("M d, Y",strtotime($feed->last_modified_date));
         endif;
         ?>
         <span class="feed-date"><?=$date;?></span>
         <a href="<?= URL::site(); ?>feeds/view/<?php echo $feed->feed_id; ?>">
         <p class="feed-text" style="word-wrap: break-word;"><?php echo $feed->feed_text; ?></p>
         <?php if($feed->file_path != "" || $feed->file_path != NULL): ?>
         <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-media-image')); ?></div>
         <?php endif; ?>
         </a>
          </div>
 </div>

<?php  $msg_id=$feed->feed_id; endforeach; ?>
<?php if(count($feeds) > 9): ?>
<div class="facebook_style" id="facebook_style" align="center">
  <a id="<?php echo $msg_id; ?>" href="#" class="load_more" >Load more posts... </a>
</div>
<?php endif; ?>
