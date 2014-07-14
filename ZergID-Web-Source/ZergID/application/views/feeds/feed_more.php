
<?= $youtube_embed_script_view; ?>

<?php $i=1;foreach ($feeds as $feed) : $i++;?>
    <div id="div<?= $feed->feed_id; ?>" style="margin-top:30px;">
        <div style="float: right;font-size: 9pt;margin-top: 28px;font-family: helvetica-light;color:#B8B8B8;width: 191px" >
          <?php 
          
          if($feed->guildcharacter ):
//              echo $feed->original_guild_character.'guild';

               $path = "/public/uploads/character/";
         if (!$feed->guildcharacter_icon){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $feed->guildcharacter_icon;
            }
            if(!$feed->guildcharacter_icon):
              echo '<span style="margin-botton:10px;">'.HTML::image('/public/uploads/profile/'.$config_path->profile_image['default'], array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'<span>';
            else:
            echo '<span style="margin-botton:10px;">'.HTML::image($path.$profile_image, array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'<span>';
              endif;
              echo "<br/>";
              echo '<span style="float:right;margin-top:-9px">'.
                "original post by ";
          echo HTML::anchor('character/view/'.$feed->guildcharacter_id, ucfirst(Text::limit_chars($feed->guildcharacter,16,'')),array('style'=>'color:#B8B8B8;text-decoration:underline;')).'</span>';

         else:

          
          if($feed->original_guild_character && $feed->guild_parent_feed_id ):
//              echo $feed->original_guild_character.'guild';
              
               $path = "/public/uploads/character/";
         if (!$feed->original_guild_character_icon){
                $profile_image = $config_path->profile_image['default'];                
            }
            else {
                $profile_image = $feed->original_guild_character_icon;
            } 
            if(!$feed->original_guild_character_icon):  
              echo '<span style="margin-botton:10px;">'.HTML::image('/public/uploads/profile/'.$config_path->profile_image['default'], array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'<span>';
            else:  
            echo '<span style="margin-botton:10px;">'.HTML::image($path.$profile_image, array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'<span>';
              endif;
              echo "<br/>";
              echo '<span style="float:right;margin-top:-9px">'.
                "original post by ";
          echo HTML::anchor('character/view/'.$feed->original_guild_character_id, ucfirst(Text::limit_chars($feed->original_guild_character,16,'')),array('style'=>'color:#B8B8B8;text-decoration:underline;')).'</span>';
              
          
//          endif;
          else:
          if($feed->original_character):
//             echo $feed->original_user;
              
              $path = "/public/uploads/character/";
          if (!$feed->original_character){
                $profile_image = $config_path->profile_image['default'];                
            }
            else {
                $profile_image = $feed->original_character_icon;
            }
            if($feed->character->character_name == "" || $feed->character->character_name == NULL):  
              echo '<span>'.HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'</span>';
            else:  
            echo '<span>'.HTML::image($path.$profile_image, array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;')).'<span>';
              endif;
            echo "<br/>";
            echo '<span style="float:right;margin-top:-9px">'."original post by ";
          echo HTML::anchor('character/view/'.$feed->original_character_id, ucfirst(Text::limit_chars($feed->original_character,16,'')),array('style'=>'color:#B8B8B8;text-decoration:underline;')).'</span>';
          
          
                            
           else:
                            
        if($feed->original_user):   
                   
          $path = "/public/uploads/profile/";
         if (!$feed->original_user_profile){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $feed->original_user_profile;
            }
              echo HTML::image($path.$profile_image, array('class'=>'rounded_image_small','style'=>'width:32px;height:32px;float:right;margin-top:-29px;'));
//              echo $feed->original_user_profile;
        
              echo "<br/>";    
           echo '<span style="float:right;margin-top:-9px">'."original post by ";
          echo HTML::anchor('user/others/'.$feed->original_user_id, ucfirst(Text::limit_chars($feed->original_user,16,'')),array('style'=>'color:#B8B8B8;text-decoration:underline;')).'</span>';
              endif;    
          endif;            
           
         endif;
         endif;
         
          
//        echo $feed->original_character_icon;
         ?>
            </div>       
 
           <div class="feed_icon" align="left"> 
            <?php 
            if (!$feed->user->profile_image_active){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $config_path->profile_image[$feed->user->profile_image_active];
                $profile_image = $feed->user->$profile_image;
            }
            if($feed->character->character_icon == "") {
                $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$feed->character->character_icon;
            }
            if($feed->character->character_name == "" || $feed->character->character_name == NULL):    
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_small rounded_image_shadow')); 
            else:
                echo HTML::image($character_image, array('class'=>'rounded_image_small rounded_image_shadow'));
            endif; ?>
           </div> 
         <div  class="feed" align="right">
         <?php if($feed->character->character_name == "" || $feed->character->character_name == NULL): ?>    
         <div class="title"><?= HTML::anchor('user/others/'.$feed->user->id, ucfirst($feed->user->username)); ?></div>
         <?php else: ?>
         <div class="title"><?= HTML::anchor('character/view/'.$feed->character->character_detail_id, $feed->character->character_name); ?> <span class="feed-charname"><?=ucfirst($feed->user->username)?>'s Character</span></div>
         <?php endif; ?>
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
         <a href="<?= URL::site(); ?>feeds/view/<?php echo $feed->feed_id; ?>">
        <p style="margin-top:10px;margin-bottom: 10px;line-height: 18px;color: #000000;" class="text-link">
             <?php if($feed->feed_rezerg_text && $feed->feed_rezerg_text != "NULL"):
                 if($feed->feed_rezerg_text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.=?&-_/]+!', "<a style=text-decoration:underline;color:blue href=\"\\0\" target='_blank' >\\0</a>",$feed->feed_rezerg_text)):
                 echo nl2br($feed->feed_rezerg_text);
                 else:
                 echo nl2br($feed->feed_rezerg_text); endif;endif;?></p>

              
             <p class="feed-text" style="word-wrap:break-word;margin-top:10px;">
               <?php if($feed_text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.=?&-_/]+!', "<a style=text-decoration:underline;color:blue href=\"\\0\" target='_blank' >\\0</a>",$feed->feed_text)):
                 echo nl2br($feed_text);
                 else:
                 echo nl2br($feed->feed_text); endif;?></p>       
   <?php if($feed->file_path != "" || $feed->file_path != NULL): 
          $file_extension =  substr(strchr($feed->file_path, '.'), 1);
          if($file_extension == "jpg"): ?>    
         <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-media-image')); ?></div>
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
         <div class="feed-text" style="padding-top:10px;">
         <?php
         $zergs = explode(",",$feed->zergs); 
         $check = array_search($user->id, $zergs);
        
         if($check !== false): ?>
             <span id ='unzerg<?=$feed->feed_id; ?>'><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzerg', 'onclick'=>'return unzergitFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?= count($zergs) . " Zergs"; ?></span></span>
             <?php else: ?>
             <span id ='zerg<?=$feed->feed_id; ?>'><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link','alt'=>'zerg', 'onclick'=>'return zergitFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"> <?php if($feed->zergs != NULL): echo count($zergs) . " Zergs";  else: ?>Be the first! <?php endif; ?></span></span>
             <?php endif; ?>
             <span id ='zergs<?=$feed->feed_id; ?>' style="display:none;"><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link', 'alt'=>'zergs', 'onclick'=>'return zergitFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?php if($feed->zergs != NULL): echo count($zergs) - 1 . " Zergs"; else: ?>Be the first!<?php endif; ?></span></span>
             <span id ='unzergs<?=$feed->feed_id; ?>' style="display:none;"><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzergs', 'onclick'=>'return unzergitFeed("'.URL::site().'", '.$feed->feed_id.', this)')); ?><span class="feed-hint"><?php if($feed->zergs != NULL): echo count($zergs) + 1 . " Zergs"; else:  echo count($zergs) . " Zergs"; endif;?></span></span>     
         <?= HTML::anchor(URL::site().'feeds/view/'.$feed->feed_id, "Comment!", array('class'=>'feed-link', 'id'=>'comment')); ?><span class="feed-hint"><?php if($feed->comments_count > 0): echo HTML::anchor('/feeds/view/'.$feed->feed_id, $feed->comments_count. " Comments", array('style'=>'color:#B8B8B8','id' => 'feed-cmt-cnt-'.$feed->feed_id)); else: ?><span id="be_feed-cmt-cnt-<?=$feed->feed_id?>">Be the first!</span><?php endif; ?></span>
         <?php if(($feed->id != $user->id && $user_id == "") || ($feed->id == $user->id && $user_id != "")): ?>
         <?= Form::open('feeds/post_zerg_feed/', array('enctype'=>"multipart/form-data", 'style'=>'float:left')); ?>
         <div id="postbox<?= $feed->feed_id; ?>" class="popup_box" style="top:110px; margin-left: -220px;"><!-- OUR PopupBox DIV-->
                     <div style="margin-top:15px; min-height: 160px;">
                         <span class="popup-title" id="popup_title">Post to your Zerg feed</span>
                          <?= Form::textarea('feed_rezergtext', '', 
        array('class'=>'feed_rezerginput','maxlength'=>'2000', 'rows'=>'3', 'cols'=>'50', 'placeholder'=>'Write something for your zerg feed!', 'id'=>'feed_rezergtext'.$feed->feed_id,'style'=>'width:519px;margin-top:20px;resize:none')); ?> 
                         <?php if ($feed->file_path != "" || $feed->file_path != NULL): 
                            if($file_extension == "jpg"): ?>  
                             <div class="post-feed">
                                 <?php echo HTML::image($config_path->path['media'] . $feed->file_path, array('class' => 'post-media')); ?>
                             </div>
                         <?php else: ?>
                         <img  src="<?= URL::site();?>public/images/video_wrapper.jpg" style="height: 150px; width: 230px; position: absolute; margin-left: -532px; margin-top: 100px;" /><div style="float:right; width:290px; margin-top:15px;" class="feed-text"><?= $feed->feed_text;?></div>
                         <?php endif; ?>
                          <?php elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):
              $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 250, 170); ?>
             <img  src="http://i.ytimg.com/vi/<?=$embed_code; ?>/hqdefault.jpg" style="height: 150px; width: 230px; position: absolute; margin-left: -532px; margin-top: 100px;" /><div style="float:right; width:290px; margin-top:15px;" class="feed-text"><?= $feed->feed_text;?></div>
             <!--<img style="position:absolute;" src="/public/images/play-button.png" />-->
             <div class="play-small-button"></div>
                         <?php endif; ?>
                         <div style="margin-top:15px; margin-left:15px;" class="feed-text"><p id="feedtext<?=$feed->feed_id;?>"><?php echo nl2br($feed->feed_text); ?></p></div>
                     </div>
                    <?php if($feed->parent_feed_id == "" || $feed->parent_feed_id == NULL): $parent_id = ""; else: $parent_id = $feed->parent_feed_id; endif; ?>
                     <?= Form::hidden('parent_id'.$feed->feed_id, $parent_id, array('id'=>'parent_id'.$feed->feed_id)) ?>
                     <div style="float:left; width:100%;"><span id="barload<?=$feed->feed_id;?>" style="margin-left:250px; display: none;"><?= HTML::image("public/images/facebook_style_loader.gif", array('style' => 'margin-top:25px;')); ?></span>
                         <?php  $character_list[''] = "SHARE AS...";
                                $character_list['0'] = ucfirst($zergid->username);
                                foreach ($characters as $character):
                                 $character_list[$character->character_detail_id] = Text::limit_chars($character->character_name  .' - '. $character->game->game_name, 35, '');                                    
                                endforeach;
                          ?>
                         <span style="float:right; margin-left:20px;"><?= Form::select('share_as', $character_list, '', array('class'=>"select-input", 'id' => 'share_as'.$feed->feed_id, 'style' => 'width:140px; margin-right:5px; background-position:103px;')); ?>
                             <?= Form::submit('post_feed', 'POST', array('id' => 'post_feed', 'class' => 'save-button', 'onclick'=>"return postZergFeed('".URL::site()."', '".$feed->feed_id."', null, '".$feed->file_path."' , '".$feed->youtube_url."', '.$feed->rezergs_count.')")); ?></span></div>
                     <a class="popupBoxClose hide_postbox" onclick="return hidePostFeedtBox('<?= $feed->feed_id; ?>')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
         </div>
         <?= Form::close();?>
         <?= HTML::anchor('#', "Post to your Zerg feed", array('class'=>'feed-link', 'onclick'=>'return showPostFeedBox('.$feed->feed_id.')'));
         endif; if($feed->rezergs_count > 0): ?><span id="re_zerg<?= $feed->feed_id?>" style="color:#B8B8B8; margin-left:5px;"><?= $feed->rezergs_count; ?> Re-Zergs</span><?php endif; ?>  
         </div>
<!--         <div class="cmt-box" id="cmt-<?= $feed->feed_id?>">
             <?php if($user->id == $feed->id):
                         if($feed->character->character_detail_id):
                 $character_id = $feed->character->character_detail_id;
                 else:
                     $character_id = 'null';
                 endif;
                 else:
                 $character_id = 'null';
             endif; ?>
            <?= Form::open('feeds/post_comment/',array('enctype'=>"multipart/form-data")); ?>
              <?= Form::textarea('feed_cmt', '', 
        array('class'=>'feed-comment','maxlength'=>'2000', 'rows'=>'1', 'placeholder'=>'Write your comment here!', 'id'=>'feed_cmt_'.$feed->feed_id, 'onkeyup'=>'return getCommentHeight('.$feed->feed_id.', this)')); ?>
             <div class="hiddendiv feed-comment"></div>
                 <span><?= Form::submit('post', 'POST', array('id'=>'cmt-button'.$feed->feed_id, 'alt'=>'feed_comment', 'class'=>'cmt-button-white', 'disabled', 'onclick'=>'return postComment("'.URL::site().'", '.$feed->feed_id.', '.$character_id.')')); ?></span>
                 <span><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'cmt-close', 'id'=>'cmtclose'.$feed->feed_id.'', 'alt'=>'Close', 'onclick'=>'return hideCmtBox('.$feed->feed_id.')')); ?></span>
            <?= Form::close(); ?>  
         </div>-->
          </div>
          <?php if($i == "6" || $i == "11"):?>
    <div class="advertisment" style="margin-left:93px">
    <?php //echo HTML::image($config_path->path['inline-advertisement']); ?>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Feed -->
<ins class="adsbygoogle"
     style="display:inline-block;width:480px;height:70px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="7644884924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
        <?php endif;?> 
</div>
<?php  endforeach; ?>
 <?php if(count($feeds) > 9): ?>
 <div class="facebook_style" id="facebook_style" align="center">
  <a id="<?php echo $feed->feed_id; ?>" href="#" class="load_more" alt="<?php echo $feed_type; ?>">Load more posts...</a>
  </div>
 <?php endif; ?>

<script type="text/javascript">

   // $(function(){

  //  var minimized_elements = $('p.feed-text');
  //  minimized_elements.each(function(){    
      //  var t = $(this).html();        
      //  if(t.length < 250) return;
        
      //  $(this).html(
      //      t.slice(0,250)+'<span>... </span><a href="#" class="more">More</a>'+
     //       '<span style="display:none;">'+ t.slice(250,t.length)+' <a href="#" class="less">Less</a></span>'
   //    );
       
 //  }); 
   
  //  $('a.more', minimized_elements).click(function(event){
  //      event.preventDefault();
  //      $(this).hide().prev().hide();
 //       $(this).next().show();        
 //   });
    
  //  $('a.less', minimized_elements).click(function(event){
  //      event.preventDefault();
  //      $(this).parent().hide().prev().show().prev().show();    
  // });

//});
</script>
