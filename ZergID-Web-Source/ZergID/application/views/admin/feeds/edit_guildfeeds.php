<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
<script>
function Setdefaultimage(url,feed_media_id)
 {
     
     $.post(url+'admin/change_defaultguild_image/',
                    {
                        feed_media_id: feed_media_id
                    }
                    , function(response) {
                       $('#show_feed_img').css({'display':'none'});
                       $('#show_default_img').css({'display':'block'});
                       $('.button-browse').css({'background': '#D3D3D3'});
                       $('.button-browse').css({'color': '#fff'});
                       $('.button-browse').css({'border': '1px solid'});    
                       $('.button-browse').css({'border-color': '#D3D3D3'});   
                       $('#media'+feed_media_id).attr('src', url+'public/uploads/media/feed_default.jpg');
                       $('#media'+feed_media_id).removeClass().addClass('admin_feed-media-image');
                    });
 }
</script>
<?= $youtube_embed_script_view; ?>
<div id="post_msg_box" class="popup_box" style="width:450px; height:250px; margin-left:-100px;">
<div align="center" style="margin-top:90px">
<p style="font-size:48px;" class="popup-title poptitle">Success!</p>
</div>    
<a id="msg_close" class="popupBoxClose"><?=HTML::image("public/images/popup-close.gif");?></a>
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
         $feed_date = date('Y-m-d', strtotime($feed->last_modified_date));
         $current_date = date('Y-m-d');
         if($feed_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($feed->last_modified_date));
         else:
             $date = date("M d, Y",strtotime($feed->last_modified_date));
         endif;
         ?>
         <span class="feed-date"><?=$date;?></span>
          </div>
         </div>
   <div id="show_feed_img" style="margin-left:10px;">
              <p class="feed-text"><?php
        if (preg_match('/(http\:\/\/www\.youtube\.com\/watch\?v=)/', $feed->feed_text)):
            $embed_code = youtubeEmbedFromUrl($feed->feed_text, 580, 320);
            echo preg_replace('@(https?://([-\w\.]+)+(:\d+)?(/([\w/_\.-]*(\?\S+)?)?)?)@', '<br />'.$embed_code, nl2br($feed->feed_text));
        else: 
            echo nl2br($feed->feed_text); 
        endif; ?></p>
         
         <?php if($feed->file_path != "" || $feed->file_path != NULL): 
          $file_extension =  substr(strchr($feed->file_path, '.'), 1);
          if($file_extension == "jpg"): ?>    
         <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-view-media-image','id'=>'media'.$feed->feed_id)); ?></div>
         <?php else: ?>
         <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
         <video>
         <source type="video/<?=$file_extension;?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
         </video>
         </div>
         <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):?>
         <div style="margin-top:15px;">
          <iframe id="ytplayer" type="text/html" width="580" height="320" src="https://www.youtube.com/embed/<?= $feed->youtube_url; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>
         </div>
         <?php endif; ?>
    </div>
    <div id="show_default_img" class="upload_icon" align="left" style="margin-top:0px;display: none;">
        <span style="float:left;width:110px"> 
        <?= HTML::image($config_path->path['feed_default_image_path']);  ?>
        </span>
    </div>
    <div style="float:left; margin-left:10px; margin-top:40px; margin-bottom: 25px;">
          <table style="width:580px; border-top: 1px solid #CECECE; border-bottom: 1px solid #CECECE; height: 55px;">
              <tr>
                  <td style="width:270px;"><div class="cmt-count">Comments: <span style="color:#3A3A3A"><?php if($comment_count > 0): echo $comment_count;  endif;?></span></div></td>
                 
                 
                  <td><?= HTML::image("public/images/cmt-bar.png");?></td>
                  <td> <?php  
                           echo HTML::image("public/images/delete-icon.png", array('style'=>'margin-left:30px;', 'onclick'=>'return deleteguildfeed("'.URL::site().'", "'.$feed->feed_id.'", "'.$feed->guild_id.'", this);')); ?>
                      
                        <?php if($feed->file_path == 'feed_default.jpg'): ?>
                      <div  class="button-browse" style="width:150px;margin-top: 0px;float: left;background: #D3D3D3;color: #fff;border: 1px solid;border-color: #D3D3D3;"><input type="button" id="feed_default_image"  class="file-upload" disabled="disabled" ><span class="button">Set Default Image</span></div>
                      <?php else: ?>
                     <div  class="button-browse" style="width:150px;margin-top: 0px;float: left;"><input type="button" id="feed_default_image" class="file-upload uploadfile" onclick="return Setdefaultimage('<?= URL::base(); ?>',<?= $feed->feed_id ?>);"><span class="button">Set Default Image</span></div>
                     <?php endif ?>
           </td>              
              </tr>
          </table>
      </div>  

 <div class="scroll_bar" style="height:500px;">     
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
        
            <?php if ($comment->character_name == "" || $comment->character_name == NULL): ?>    
                <div class="comment_title" style="width:300px;"><?= $comment->username; ?> 
                    <?php echo HTML::image("public/images/delete_icon.png", array('style'=>'float:right;', 'id'=>'comment_delete','onclick' => 'deleteComment("' . URL::base(TRUE, 'https') . '", "' . $comment->comment_id . '")')); ?>
                </div>
                 <?php else: ?>
                     <div class="comment_title"><?= $comment->character_name; ?> <span class="feed-charname"><?= ucfirst($comment->username) ?>'s Character</span>
                    <?php echo HTML::image("public/images/delete_icon.png", array('style'=>'float:right;', 'id'=>'comment_delete', 'onclick' => 'deleteComment("' . URL::base(TRUE, 'https') . '", "' . $comment->comment_id . '")')); ?>       
                    </div>
                     <?php endif; ?> 
       
         <?php 
         $feed_date = date('Y-m-d', strtotime($comment->last_modified_date));
         $current_date = date('Y-m-d');
         if($feed_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($comment->last_modified_date));
         else:
             $date = date("M d, Y",strtotime($comment->last_modified_date));
         endif;
         ?>
         <span class="feed-date"><?=$date;?></span>
         <p class="feed-text" style="width:480px;"><?php echo $comment->comment; ?></p>
         
</div>
</div>
      <?php endforeach; ?>  
</div>

    <script>
    $('.scroll_bar').slimscroll({
       color: '#38CBF0',
       width: '600px',
       height: '200px',
       opacity : .7,
       wheelStep : 5,
       railVisible: true
   });
   
   function deleteComment(url, comment_id) {
    
                if(confirm("Do you want to delete this comment?")) {
                    $.post(url+'admin/delete_guild_comment/',
                    {
                        commentid: comment_id
                    }
                    , function(response) {
                      location.reload(true);
                    });
                }
            }
   </script>