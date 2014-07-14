<script src="<?=URL::site('/public/js/flowplayer.min.js');?>" type="text/javascript"></script>
<script src="<?=URL::site('/public/js/oauthpopup.js');?>" type="text/javascript"></script>
<?php echo html::style("public/css/gallery.css"); ?>
<?php echo html::script('public/js/jquery.prettyPhoto.js'); ?>  
<link rel="stylesheet" type="text/css" href="/public/css/minimalist.css">
<script type="text/javascript">
flowplayer.conf.embed = false;
flowplayer.conf.fullscreen = true;

$(document).ready(function(){
    $("area[rel^='media']").prettyPhoto();
    $(".gallery:first a[rel^='media']").prettyPhoto({
        animation_speed:'normal',
        theme:'light_square',
        slideshow:3000, 
        autoplay_slideshow: false
    });
    $(".gallery:gt(0) a[rel^='media']").prettyPhoto({
        animation_speed:'fast',
        slideshow:10000, 
        hideflash: true
    });
});  
</script>
<style>
.flowplayer {
   width: 580px;
   height: 330px;
}
object, iframe {
        height: 320px;
        width: 580px;
    }
</style>
<?= $youtube_embed_script_view; ?>

<div id="post_msg_box" class="popup_box" style="width:450px; height:250px; margin-left:-100px;"></div>

<div id="upload_box" class="popup_box">	<!-- OUR PopupBox DIV-->
     <?= Form::open('guild/feed_edit/'.$feed->guild_id.'/'.$feed->feed_id, array('enctype' => 'multipart/form-data')); ?>
       <div class="feed_icon" align="left"> 
            <?php 
            if($feed->character_icon == "") {
                $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$feed->character_icon;
            }
           
                echo HTML::image($character_image, array('class'=>'rounded_image_small rounded_image_shadow'));
         ?>
       </div>  
    <div class="title"><?= HTML::anchor('/character/view/'.$feed->character_detail_id, $feed->character_name); ?>
      
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
          </div>
     <?= Form::textarea('feed_text', $feed->feed_text, 
                        array('class'=>'profile-input popup-input', 'id'=>'feedtext', 'maxlength'=>'2000', 'rows'=>'1', 'cols'=>'50', 'style'=>'height:55px;max-height:180px;')); ?>
        <span style="float:right;margin-top:-14px"><?= Form::submit('submit', 'SUBMIT', array('class'=>'save-button', 'style'=>'width:115px; margin-top:20px', 'id'=>'post')); ?>   </span>
     <?= Form::close(); ?>
        <a id="close_upload_box" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>

<div class="main_content">  
<div  style="margin-top:30px;">
           <div class="feed_icon" align="left"> 
            <?php 
            if($feed->character_icon == "") {
                $characterimage = $config_path->path['default_image_path'];
            }
            else {
                $characterimage = $config_path->path['character'].$feed->character_icon;
            }
           
                echo HTML::image($characterimage, array('class'=>'rounded_image_small rounded_image_shadow'));
         ?>
           </div> 
         <div  class="feed" align="right" style="min-height: 80px;">
        
         <div class="title"><?= HTML::anchor('/character/view/'.$feed->character_detail_id, $feed->character_name); ?>
      
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
   //         $currentdate->modify(" +2 hours ");
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
          </div>
         </div>
   <div style="margin-left:10px;">
  <p class="feed-view-text" style="word-wrap:break-word;">
                <?php if($feed_text = preg_replace('!(http|ftp|scp)(s)?:\/\/[a-zA-Z0-9.=?&_/]+!', "<a style=text-decoration:underline;color:blue  href=\"\\0\" target='_blank' >\\0</a>",nl2br($feed->feed_text))):
                 echo $feed_text;
                 else:
                 echo nl2br($feed->feed_text); endif;?></p>       
         <?php if($feed->file_path != "" || $feed->file_path != NULL): 
          $file_extension =  substr(strchr($feed->file_path, '.'), 1);
          if($file_extension == "jpg"): ?>    
          <div>
             <?php if($feed->large_file_path == NULL):
                 $file = $feed->file_path;
             else:
                 $file = $feed->large_file_path;
             endif;
             echo HTML::anchor($config_path->path['media'].$file, HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-view-media-image')), array('target'=>'_blank')); ?>
          </div>
         <?php else: ?>
         <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
         <video>
         <source type="video/<?=$file_extension;?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
         </video>
         </div>
         <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):
             $youtubeurl= explode("/",$feed->youtube_url); 
             if($youtubeurl[0] == "www.youtube.com" || $youtubeurl[2] == "www.youtube.com"):
             $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 580, 320); ?>
         <div style="margin-top:15px;">
          <iframe id="ytplayer" type="text/html" width="580" height="320" src="https://www.youtube.com/embed/<?= $embed_code; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>
         </div>
         <?php else:
           echo $feed->youtube_url;
         endif;?>
         <?php endif; ?>
    </div>
    <div style="float:left; margin-left:10px; margin-top:40px; margin-bottom: 25px;">
          <table style="width:580px; border-top: 1px solid #CECECE; border-bottom: 1px solid #CECECE; height: 55px;">
              <tr>
                  <td style="width:190px;"><div class="cmt-count">Comments: <span style="color:#3A3A3A"><?php if($comment_count > 0): echo $comment_count;  endif;?></span></div></td>
                  <td><?= HTML::image("public/images/cmt-bar.png");?></td>
                  <td style="width:160px;">
                      <?php $zergs = explode(",",$feed->zergs); 
                            $check = array_search($user->id, $zergs);
                      if($check !== false): ?>
                  <div class="zerg_count_gray">Zergs: <span style="color:#3A3A3A"><?php if($feed->zergs != NULL): echo count($zergs);  endif;?></span></div>
                  <?php else: ?>
                  <a href="#" id="actual_zerg" class="zerg_count_blue" onclick="return zergitGuildFeed('<?= URL::site();?>', '<?=$feed->feed_id?>', null)">Zerg it! <span style="color:#3A3A3A; margin-left: 5px;"><?php if($feed->zergs != NULL):  echo count(explode(",", $feed->zergs));  endif;?></span></a>
                  <?php endif; ?>
                  <div id="hid_zerg" class="zerg_count_gray" style="display:none;">Zergs: <span style="color:#3A3A3A"><?php if($feed->zergs != NULL): echo count($zergs) + 1; else: echo count($zergs); endif;?></span></div>
                  </td>
                  <td><?= HTML::image("public/images/cmt-bar.png");?></td>
                  <td> <?php if($user->id == $feed->user_id): 
                      echo HTML::image("public/images/edit-icon.png", array('style'=>'margin-left:50px;', 'id'=>'guild_feed_edit'));
                      echo HTML::image("public/images/delete-icon.png", array('style'=>'margin-left:30px;', 'onclick'=>'return deleteGuildFeed("'.URL::site().'", "'.$feed->feed_id.'", "'.$feed->guild_id.'");')); ?>
                      <?php else: ?>
                       <?= Form::open('guild/post/', array('enctype'=>"multipart/form-data", 'style'=>'float:left')); ?>
                    <div id="postbox<?= $feed->feed_id; ?>" class="popup_box" style="top:110px; margin-left: -560px;"><!-- OUR PopupBox DIV-->
                     <div style="margin-top:15px; min-height: 160px;">
                         <span class="popup-title" id="popup_title">Post to your Zerg feed</span>
                                                  <?= Form::textarea('feed_rezergtext', '', 
        array('class'=>'feed_rezerginput','maxlength'=>'2000', 'rows'=>'3', 'cols'=>'50', 'placeholder'=>'Write your thoughts!', 'id'=>'feed_rezergtext','style'=>'width:519px;margin-top:20px;resize:none')); ?>
                         <?php if ($feed->file_path != "" || $feed->file_path != NULL): ?>
                             <div class="post-feed">
                                 <?php echo HTML::image($config_path->path['media'] . $feed->file_path, array('class' => 'post-media')); ?>
                             </div>
                         <?php endif; ?>
                         <div style="margin-top:15px; margin-left:15px;" class="feed-text"><p id="feedtext<?=$feed->feed_id;?>"><?php echo nl2br($feed->feed_text); ?></p></div>
                     </div>
                    <?php if($feed->parent_feed_id == "" || $feed->parent_feed_id == NULL): $parent_id = ""; else: $parent_id = $feed->parent_feed_id; endif; ?>
                     <?= Form::hidden('parent_id'.$feed->feed_id, $parent_id, array('id'=>'parent_id'.$feed->feed_id)) ?>
                     <div style="float:left; width:100%;"><span id="barload<?=$feed->feed_id;?>" style="margin-left:15px; display: none;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span>
                     <span style="float:right; margin-left:20px;"><?= Form::submit('post_feed', 'POST', array('id' => 'post_feed', 'class' => 'save-button', 'onclick'=>"return postZergFeed('".URL::site()."', '".$feed->feed_id."', '".$guild_character->character_detail_id."', '".$feed->file_path."' , '".$feed->youtube_url."')")); ?></span></div>
                     <a class="popupBoxClose hide_postbox" onclick="return hidePostFeedtBox('<?= $feed->feed_id; ?>')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
                  </div>
         <?= Form::close();?>
         <?= HTML::anchor('#', "Post to Zerg Feed", array('class'=>'feed-link', 'style'=>'margin-left:25px; font-weight:bold; font-size:15px', 'onclick'=>'return showPostFeedBox('.$feed->feed_id.')')); endif; ?>
      </td>              
              </tr>
          </table>
      </div>  

 <?php foreach ($comments as $comment) : ?>     
<div style="margin-top:30px; width:480px;">
           <div class="feed_icon" style="margin-left:30px; width:10%;" align="left"> 
            <?php 
                 if (!$comment->profile_image_active) {
                    $profile_image = $config_path->profile_image['default'];
                } else {
                    $profile_image = $config_path->profile_image[$comment->profile_image_active];
                    $profile_image = $comment->$profile_image;
                }

                if ($comment->character_icon == "") {
                    $character_image = $config_path->path['default_image_path'];
                } else {
                    $character_image = $config_path->path['character'] . $comment->character_icon;
                }

                if($comment->character_name == "" || $comment->character_name == NULL):    
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_mini rounded_image_shadow')); 
            else:
                echo HTML::image($character_image, array('class'=>'rounded_image_mini rounded_image_shadow'));
            endif; ?>
           </div> 
         <div  class="feed" align="right" style="margin-left:10px;">  
         <div class="title">
            <?php if ($comment->character_name == "" || $comment->character_name == NULL):    
                     echo HTML::anchor('user/others/' . $comment->user_id, ucfirst($comment->username)); 
                 else: 
                     echo HTML::anchor('character/view/' . $comment->character_detail_id, $comment->character_name); ?> <span class="feed-charname"><?= ucfirst($comment->username) ?>'s Character</span>
             <?php endif; ?> 
         </div>
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
            if($timezone == "Asia/Kolkata"):
            $date->modify(" +630 minutes");
            $date->setTimeZone($tz);
            $feed_date = $date->format('Y-m-d');
            $feed_modified_date = $date->format('Y-m-d h:i A');

            $currentdate = new DateTime($current_date);
         //   $currentdate->modify(" +2 hours ");
            $currentdate->setTimeZone($tz);
            $currentdate = $currentdate->format('Y-m-d');
            else:
            $date->modify(" +630 minutes");
            $date->setTimeZone($tz);
            $feed_date = $date->format('Y-m-d');
            $feed_modified_date = $date->format('Y-m-d h:i A');

            $currentdate = new DateTime($current_date);
      //      $currentdate->modify(" +2 hours ");
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
             <span id ='unzerg<?=$comment->comment_id; ?>'><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzerg', 'onclick'=>'return unzergitGuildComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"><?= count($zergs) . " Zergs"; ?></span></span>
             <?php else: ?>
             <span id ='zerg<?=$comment->comment_id; ?>'><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link','alt'=>'zerg', 'onclick'=>'return zergitGuildComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"> <?php if($comment->zergs != NULL): echo count($zergs) . " Zergs";  else: ?>Be the first! <?php endif; ?></span></span>
             <?php endif; ?>
             <span id ='zergs<?=$comment->comment_id; ?>' style="display:none;"><?= HTML::anchor('#', "Zerg it!", array('class'=>'feed-link', 'alt'=>'zergs', 'onclick'=>'return zergitGuildComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"><?php if($comment->zergs != NULL): echo count($zergs) - 1 . " Zergs"; else: ?>Be the first!<?php endif; ?></span></span>
             <span id ='unzergs<?=$comment->comment_id; ?>' style="display:none;"><?= HTML::anchor('#', "Unzerg it!", array('class'=>'feed-link', 'alt'=>'unzergs', 'onclick'=>'return unzergitGuildComment("'.URL::site().'", '.$comment->comment_id.', this)')); ?><span class="feed-hint"><?php if($comment->zergs != NULL): echo count($zergs) + 1 . " Zergs"; else:  echo count($zergs) . " Zergs"; endif;?></span></span>
         </div>
</div>
</div>
      <?php endforeach; ?>
  <div class="row" id="updates"></div>
<?php if(count($comments) > 9): ?>
<div class="facebook_style" id="facebook_style" align="center">
     <a id="<?php echo $comment->comment_id; ?>" href="#" alt=<?php echo $feed->feed_id; ?> class="load_more" >Load more comments...</a>
</div>
<?php endif; ?>
  
  <div>
  <div style="float:left; margin-top:30px; margin-left:35px; margin-right:10px"> 
      
 <?php 
   if (!$user->profile_image_active) {
     $profile_image = $config_path->profile_image['default'];
 } else {
     $profile_image = $config_path->profile_image[$user->profile_image_active];
     $profile_image = $user->$profile_image;
 }

  if($guild_character->character_detail_id) {
      if($feed->character_name == "" || $feed->character_name == NULL): 
           echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_mini rounded_image_shadow')); 
      else:
           echo HTML::image($characterimage, array('class'=>'rounded_image_mini rounded_image_shadow'));
      endif;
      $character_id = $guild_character->character_detail_id;
  }
  else {
     echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_mini rounded_image_shadow')); 
      $character_id = 'null';
  }
 ?>
  </div>
  <div align="right" id="checkCommentIsEmpty<?=$feed->feed_id;?>">
           <?= Form::open('#',array('enctype'=>"multipart/form-data")); ?>
<?= Form::textarea('feedcmt', '', 
        array('class'=>'cmt-input','maxlength'=>'2000', 'placeholder'=>'Write a reply!', 'id'=>'feed_cmt_'.$feed->feed_id, 'rows'=>'3','onmouseover'=>'checkCommentIsEmpty("'.$feed->feed_id.'")','onkeyup'=>'checkCommentIsEmpty("'.$feed->feed_id.'")')); ?>
         <div class="hiddendiv cmt-input"></div>
         <?= Form::submit('post', 'POST', array('id'=>'cmt-button', 'alt'=>'reply_comment', 'class'=>'post-button-white', 'disabled', 'onclick'=>'return postGuildComment("'.URL::site().'", '.$feed->feed_id.', '.$feed->guild_id.', '.$character_id.')')); ?>
         <?= Form::close(); ?>
  </div>
</div>

</div>
<script type="text/javascript">
    
  $(document).ready(function () {
    $('#feedtext').keyup(function () {
        if($('#feedtext').val().trim().length > 0 ) {
     
        $('#post').removeClass().addClass('save-button');
        $('#post').removeAttr('disabled');
        }
        else {
         $('#post').removeClass().addClass('post-button-white');
         $('#post').attr("disabled", true);
        }
    });
  });
  
$(function() {
$('.load_more').live("click",function() {
var last_msg_id = $(this).attr("id");
var feed_id = $(this).attr("alt");
if(last_msg_id!='end'){
$.post('<?= URL::site(); ?>guild/comment_more/',
{
lastmsg:last_msg_id,
feedid: feed_id,
beforeSend: function() { 
$('a.load_more').append('<img src="<?= URL::site(); ?>public/images/facebook_style_loader.gif" />');
}
}
, function(response) {
$(".facebook_style").remove(); 
$(response).hide().appendTo("div#updates").fadeIn(2000);
$(window).scrollTop($('#div'+last_msg_id).offset().top);
}
);
 
}
return false;
});
$( "#checkCommentIsEmpty<?=$feed->feed_id;?>" ).mouseover(function() {
  checkCommentIsEmpty(<?=$feed->feed_id;?>)
});
});

</script>
