
<?php 
if(count($feeds) > 0): $i=1;
foreach ($feeds as $feed) :$i++; ?>
    <div id="div<?= $feed->feed_id; ?>" style="margin-top:30px;">
        
           <div class="feed_icon" align="left"> 
            <?php 
            if($feed->character_icon == "") {
                $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$feed->character_icon;
            }
                echo HTML::image($character_image, array('class'=>'rounded_image_small rounded_image_shadow')); ?>
           
           </div> 
         <div  class="feed" align="right">
         <div class="title"><?= HTML::anchor('/character/view/'.$feed->character_detail_id, $feed->character_name); ?> </div>
         <?php 
//         $feed_date = date('Y-m-d', strtotime($feed->last_modified_date));
//         $current_date = date('Y-m-d');
//         if($feed_date == $current_date):
//             $date = "Today at ". date('h:i A', strtotime($feed->last_modified_date));
//         else:
//             $date = date("M d, Y",strtotime($feed->last_modified_date));
//         endif;

            $current_date = date('Y-m-d H:i:s');
            $tz = new DateTimeZone($timezone);
            $date = new DateTime($feed->last_modified_date);
            if($timezone == "Asia/Kolkata"):
            $date->modify(" +630 minutes");
            $date->setTimeZone($tz);
            $feed_date = $date->format('Y-m-d');
            $feed_modified_date = $date->format('Y-m-d h:i A');

            $currentdate = new DateTime($current_date);
  //          $currentdate->modify(" +2 hours ");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');
            else:
            $date->modify(" +630 minutes");
            $date->setTimeZone($tz);
            $feed_date = $date->format('Y-m-d');
            $feed_modified_date = $date->format('Y-m-d h:i A');

            $currentdate = new DateTime($current_date);
  //          $currentdate->modify(" +2 hours ");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');
            endif;
            if($feed_date == $currentdate):
            $date = "Today at ". date('h:i A', strtotime($feed_modified_date));
            else:
            $date = date("M d, Y",strtotime($feed_modified_date));
            endif;

         ?>
         <span class="feed-date"><?=$date;?></span>
         <a href="<?= URL::site(); ?>guild/feed/<?= $feed->guild_id; ?>/<?= $feed->feed_id; ?>">
             <p class="feed-text" style="word-wrap:break-word;">
               <?php if($feed_text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.=?&_/]+!', "<a style=ext-decoration:underline;color:blue href=\"\\0\" target='_blank' >\\0</a>",$feed->feed_text)):
                
                     echo nl2br($feed_text);
                 else:
               echo nl2br($feed->feed_text); endif; ?></p>
              <script> //script to append anchor tag,if some text & you tube url and some text posted(1st part text + youtube url + 2nd part text),normally the 2nd part of text is losing anchor tag focus,to get the correct feedid in anchor tag script placed here  
                $('p.feed-text').contents().filter(function(){
                    return this.nodeType === 3;
                }).wrap(function(){
                    return $('<a/>', {href: "../../guild/feed/<?= $feed->guild_id; ?>/<?=$feed->feed_id; ?>"});
                });
               </script>
   <?php if($feed->file_path != "" || $feed->file_path != NULL): 
          $file_extension =  substr(strchr($feed->file_path, '.'), 1);
          if($file_extension == "jpg"): ?>    
         <div><?php echo HTML::anchor("/guild/feed/$feed->guild_id/$feed->feed_id", HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-media-image'))); ?></div>
         <?php else: ?>
         <div style="margin-top:15px; width: 480px; height: 270px;" class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
         <video>
         <source type="video/<?=$file_extension?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
         </video>
         </div>
         <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):
                $youtubeurl= explode("/",$feed->youtube_url); 
                if($youtubeurl[0] == "www.youtube.com" || $youtubeurl[2] == "www.youtube.com"):
                $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 480, 270); ?>
         <div class="ywrapper" id="vid_wrapper_<?=$feed->feed_id;?>"  style="width:480px;height:270px;" onclick='return playYotubeVideo("<?= $feed->feed_id; ?>", "<?=$embed_code?>", this)'>
             <img class="absolute" src="http://i.ytimg.com/vi/<?=$embed_code; ?>/hqdefault.jpg" />
             <!--<img style="position:absolute;" src="/public/images/play-button.png" />-->
             <div class="play-button">...</div>
         </div>  
         <?php else:
             echo $feed->youtube_url;
         endif;?>
         <?php endif; ?>
         </a>
         <div class="text-link" style="padding-top:10px;">
         <?php
         $zergs = explode(",",$feed->zergs); 
         $check = array_search($user->id, $zergs);
        
         if($check !== false): ?>
             <span id ='unzerg<?=$feed->feed_id; ?>'><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzerg', 'onclick'=>'return unzergitGuildFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?= count($zergs) . " Zergs"; ?></span></span>
             <?php else: ?>
             <span id ='zerg<?=$feed->feed_id; ?>'><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link','alt'=>'zerg', 'onclick'=>'return zergitGuildFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"> <?php if($feed->zergs != NULL): echo count($zergs) . " Zergs";  else: ?>Be the first! <?php endif; ?></span></span>
             <?php endif; ?>
             <span id ='zergs<?=$feed->feed_id; ?>' style="display:none;"><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link', 'alt'=>'zergs', 'onclick'=>'return zergitGuildFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?php if($feed->zergs != NULL): echo count($zergs) - 1 . " Zergs"; else: ?>Be the first!<?php endif; ?></span></span>
             <span id ='unzergs<?=$feed->feed_id; ?>' style="display:none;"><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzergs', 'onclick'=>'return unzergitGuildFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?php if($feed->zergs != NULL): echo count($zergs) + 1 . " Zergs"; else:  echo count($zergs) . " Zergs"; endif;?></span></span>
         <?php if($guild_character->character_detail_id):
             $character_id = $guild_character->character_detail_id;
         else:
             $character_id = 'null';
         endif; ?>
        <?= HTML::anchor(URL::site().'guild/feed/'.$feed->guild_id.'/'.$feed->feed_id, "Comment!", array('class'=>'feed-link', 'id'=>'comment')); ?><span class="feed-hint"><?php if($feed->comments_count > 0): echo HTML::anchor('/guild/feed/'.$feed->guild_id.'/'.$feed->feed_id, $feed->comments_count. " Comments", array('style'=>'color:#B8B8B8','id' => 'guild_feed-cmt-cnt-'.$feed->guild_id.'-'.$feed->feed_id)); else: ?><span id="be-guild-feed-cmt-cnt-<?=$feed->guild_id.'-'.$feed->feed_id?>">Be the first!</span><?php endif; ?></span> 
         <?= Form::open('guild/post/', array('enctype'=>"multipart/form-data", 'style'=>'float:left')); ?>
         <div id="postbox<?= $feed->feed_id; ?>" class="popup_box" style="top:110px; margin-left: -220px;"><!-- OUR PopupBox DIV-->
                     <div style="margin-top:-5px; min-height: 280px;">
                         <span class="popup-title" id="popup_title">Post to your Zerg feed</span>
                          <?= Form::textarea('feed_rezergtext', '', 
        array('class'=>'feed_rezerginput','maxlength'=>'1000', 'rows'=>'3', 'cols'=>'50', 'placeholder'=>'Write something for your Zerg feed!', 'id'=>'feed_rezergtext'.$feed->feed_id,'style'=>'width:519px;margin-top:20px;resize:none')); ?>
                         <?php if ($feed->file_path != "" || $feed->file_path != NULL): 
                          if($file_extension == "jpg"): ?>  
                             <div class="post-feed">
                                 <?php echo HTML::image($config_path->path['media'] . $feed->file_path, array('class' => 'post-media')); ?>
                             </div>
                         <?php else: ?>
                         <img  src="<?= URL::site();?>public/images/video_wrapper.jpg" style="height: 150px; width: 230px; position: absolute; margin-left: -530px; margin-top: 105px;" /><div style="float:right; width:290px; margin-top:15px;" class="feed-text"><?= $feed->feed_text;?></div>
                         <?php endif; ?>
                         <?php elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):
                $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 250, 170); ?>
             <img  src="http://i.ytimg.com/vi/<?=$embed_code; ?>/hqdefault.jpg" style="height: 150px; width: 230px; position: absolute; margin-left: -530px; margin-top: 105px;" /><div style="float:right; width:290px; margin-top:15px;" class="feed-text"><?= $feed->feed_text;?></div>
             <!--<img style="position:absolute;" src="/public/images/play-button.png" />-->
             <div class="play-small-button"></div>
                         <?php endif; ?>
                         <div style="margin-top:15px; margin-left:15px;" class="feed-text"><p id="feedtext<?=$feed->feed_id;?>"><?php echo nl2br($feed->feed_text); ?></p></div>
                     </div>
                    <?php if($feed->parent_feed_id == "" || $feed->parent_feed_id == NULL): $parent_id = ""; else: $parent_id = $feed->parent_feed_id; endif; ?>
                     <?= Form::hidden('parent_id'.$feed->feed_id, $parent_id, array('id'=>'parent_id'.$feed->feed_id)) ?>
                     <div style="float:left; width:100%;"><span id="barload<?=$feed->feed_id;?>" style="margin-left:380px; display: none;"><?= HTML::image("public/images/facebook_style_loader.gif", array('style' => 'margin-top:25px;')); ?></span>
                     <span style="float:right; margin-left:20px;"><?= Form::submit('post_feed', 'POST', array('id' => 'post_feed', 'class' => 'save-button', 'onclick'=>"return postZergFeed('".URL::site()."', '".$feed->feed_id."', '".$guild_character->character_detail_id."', '".$feed->file_path."' , '".$feed->youtube_url."')")); ?></span></div>
                     <a class="popupBoxClose hide_postbox" onclick="return hidePostFeedtBox('<?= $feed->feed_id; ?>')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
         </div>
         <?= Form::close();?>
          <?= HTML::anchor('#', "Post to your Zerg feed", array('class'=>'feed-link', 'onclick'=>'return showPostFeedBox('.$feed->feed_id.')'));
          if($feed->rezergs_count > 0): ?><span style="color:#B8B8B8; margin-left:5px;"><?= $feed->rezergs_count; ?> Re-Zergs</span><?php endif; ?>  
         </div>
<!--         <div class="cmt-box" id="cmt-<?= $feed->feed_id?>">
            <?= Form::open('guild/post_comment/',array('enctype'=>"multipart/form-data")); ?>
              <?= Form::textarea('feed_cmt', '', 
        array('class'=>'feed-comment','maxlength'=>'2000', 'rows'=>'1', 'placeholder'=>'Write your comment here!', 'id'=>'feed_cmt_'.$feed->feed_id, 'onkeyup'=>'return getCommentHeight('.$feed->feed_id.', this)')); ?>
             <div class="hiddendiv feed-comment"></div>    
             <span><?= Form::submit('post', 'POST', array('id'=>'cmt-button'.$feed->feed_id, 'alt'=>'feed_comment', 'class'=>'cmt-button-white', 'disabled', 'onclick'=>'return postGuildComment("'.URL::site().'", '.$feed->feed_id.', "'.$guild->guild_id.'", "'.$character_id.'")')); ?></span>
                 <span><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'cmt-close', 'id'=>'cmtclose'.$feed->feed_id.'', 'alt'=>'Close', 'onclick'=>'return hideCmtBox('.$feed->feed_id.')')); ?></span>
            <?= Form::close(); ?>  
          </div>-->
          </div>
           <?php if($i == "6" || $i == "11"):?>
    <div class="advertisment" style="margin-left:100px">
    <?php //echo HTML::image($config_path->path['inline-advertisement']); ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Video Games -->
<ins class="adsbygoogle"
     style="display:inline-block;
width:480px;height:70px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="2882744924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php endif;?> 
</div>
<?php  endforeach; ?>
   <div class="row" id="updates"></div>
<?php if(count($feeds) > 9): ?>
<div class="facebook_style" id="facebook_style" align="center">
     <a id="<?php echo $feed->feed_id; ?>" href="#" alt="<?= $feed_type; ?>" class="load_more" >Load more posts...</a>
</div>
<?php endif; endif; ?>
