<script src="<?=URL::site('/public/js/flowplayer.min.js');?>" type="text/javascript"></script>
<script src="<?=URL::site('/public/js/adminjs.js');?>" type="text/javascript"></script>
<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/public/css/minimalist.css">
<link rel="stylesheet" href="<?=URL::site('/public/css/admincss.css');?>" />
<script type="text/javascript">
flowplayer.conf.embed = false;
flowplayer.conf.fullscreen = true;
/*
function showEditCommentBox(commentId) {
getGameMask();
var comments = $('#'+commentId+'comments_edit').val();
$('#edit_comment').val(comments);
$('#edit_commentid').val(commentId);

$('#editcommentbox').fadeIn("slow");
return false;
}
*/

 
    
   

/*
function loadGamePopupBox() {	// To Load the Popupbox
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
  //  $('#char_name_block').removeClass();
 //   $('#char_name_instruction_block').hide();
   // $('#char_next1').hide();
  //  $('#char_skip').hide();
    $('#popup_commentbox').fadeIn("slow");	
    $('#game_req').focus();
}

$(document).ready( function() { 
$('#comment_edit').click( function() {
        loadGamePopupBox();
    });
    });*/
    
  

function Setdefaultimage(url,feed_media_id){
     if(confirm("Are you sure Do you want to set default image?")) {
     $.post(url+'admin/feed_defaultimage/',
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
 }

</script>
<style>
.flowplayer {
   width: 580px;
   height: 330px;
}

.white_button{
    background: #D3D3D3;
    color: #fff;
    border: 1px solid;
    border-color: #D3D3D3;
    color: White;
    border:1px solid;
    border-color:#38CBF0;
    background: #38CBF0;
    font-family: "Helvetica-Bold";
    cursor:pointer;
    /*    display: inline block;*/
    outline:none;
    text-align:center; 
}
    
.comment_title{
    font-size: 14pt;
color: #979797;
font-family: "HelveticaNeueLTCom25UltraLight";
}

.admin-feed-view-media-image {
/*    border: 1px solid #FFFFFF;*/
    margin-right: 20px;
    overflow: hidden;
/*    margin-top: 10px;*/
    width: 336px;
    height: 230px;
}

.admin-edit-comment{
    height: 240px;
    margin-left: -6px;
    margin-top: -6px;
    width: 300px;
    padding-top: 10px;
}
a.delete{
    display:none1;
    position:absolute;
/*    top:0;
    right:0;*/
    width:30px;
    height:30px;
/*    text-indent:-999px;*/
    background:red;
    background-image:url('../images/red_cross.gif'); 
}
</style>



<!-- Media & feed text -->

<div  style="margin-top:-10px;">
         <?= $youtube_embed_script_view; ?>
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
         <div  class="feed" align="right" style="min-height: 80px;">
         <?php if($feed->character_name == "" || $feed->character_name == NULL): ?>    
         <div class="title"><?= $feed->username; ?></div>
         <?php else: ?>
         <div class="title"><?= $feed->character_name; ?> <span class="feed-charname"><?=ucfirst($feed->username)?>'s Character</span></div>
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
          </div>
    
    <div id="show_feed_img" style="margin-left:10px;margin-top: -15px;width: 715px;height: 250px;">
             <!-- edit feed text -->
              <div style="float: right;width: 300px;height: 240px;" class="feed-text"> 
               <div  style="background-color:#E6EBF0;" class="edit_text" id="<?= $feed->feed_id; ?>updated">
                  <?= HTML::image("public/images/feed-edit-icon.png",array('id'=>'edit','style'=>'display:none;float:right;')); ?>  
               <div  style="width: 282px;" >
                 
               
               <?= $feed->feed_text; ?>
                 </div>     
              </div>
                  
               <div style="display:none;" class="edit-comment" id="<?= $feed->feed_id; ?>feedtext">
                   
                   <input type="hidden" value="<?=$feed->feed_id; ?>" style="width:180px; line-spacing:25px;" name="edit_feedid" id="edit_feedid" class="normal-input" />  
                   
               <?= Form::textarea('feed_text', $feed->feed_text, 
                        array('class'=>'admin-edit-comment', 'id'=>'feedtext', 'maxlength'=>'2000', 'rows'=>'1', 'cols'=>'50')); ?>
                   
               </div>
              </div>  <!-- edit feed text end here -->
              
           <div style="width:350px;float: right;" id="delete_media">
               <?= HTML::image("public/images/red_cross.gif",array('id'=>'delete_icon','style'=>'display:none1;float:right;margin-right: 4px;margin-top: -15px;','onclick'=>'return deleteFeedImage("'.URL::site().'", "'.$feed->feed_media_id.'");')); ?>  
              
              
<!--             <span style="max-width:400px;float:right">-->
             
         <?php if($feed->file_path != "" || $feed->file_path != NULL): 
          $file_extension =  substr(strchr($feed->file_path, '.'), 1);
          if($file_extension == "jpg"): ?>    
         <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'admin-feed-view-media-image')); ?></div>
         <?php else: ?>
         <div class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
         <video>
         <source type="video/<?=$file_extension;?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
         </video>
         </div>
         <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):?>
         <div style="margin-top:0px;">
             <?php $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 336, 230); ?>
          <iframe id="ytplayer" type="text/html" width="336" height="230" src="https://www.youtube.com/embed/<?= $embed_code; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>
         </div>
        <?php endif; ?>
<!--         </span>-->
         </div>
    </div>
    <div id="show_default_img" class="upload_icon" style="margin-top:0px;display: none;">
        <span style="float:right;width:350px"> 
        <?= HTML::image($config_path->path['feed_default_image_path'],array('style'=>'margin-left:60px;'));  ?>
        </span>
    </div>
    
</div>
    
    <!--  Comments count div -->

      <div style="float:left; margin-left:10px; margin-top:6px; margin-bottom: 8px;">
          <table style="width:730px; border-top: 1px solid #CECECE; border-bottom: 1px solid #CECECE; height: 55px;">
              <tr>
                  <td style="width:290px;">
                      <?php if($comment_count > 0): ?>
                      <div class="cmt-count" style="text-align:center;background-position: 90px center;">Comments: <span style="color:#3A3A3A">
                              <?php echo $comment_count; ?></span></div>
                              <?php else: ?>
                              <div class="cmt-count" style="text-align:center;background-position: 90px center;">
                              <?php echo "No comments";?>
                              </div>
                              <?php endif;?></td>
                  
                  
   <!-- set default image -->
                
                  <td><?= HTML::image("public/images/cmt-bar.png");?></td>
                  <td> <?php 
                       echo HTML::image("public/images/delete-icon.png", array('style'=>'margin-right:30px;float:right;', 'onclick'=>'return deleteFeed("'.URL::site().'", "'.$feed->feed_id.'", this);')); ?>
                       <?php if($feed->file_path == 'feed_default.jpg'): ?>
                      <div  class="button-browse" style="width:150px;margin-top: 0px;float: left;background: #D3D3D3;color: #fff;border: 1px solid;border-color: #D3D3D3;"><input type="button" id="feed_default_image"  class="file-upload" disabled="disabled" ><span class="button">Set Default Image</span></div>
                      <?php else: ?>
                     <div  class="button-browse" style="width:150px;margin-top: 0px;float: left;"><input type="button" id="feed_default_image" class="file-upload uploadfile" onclick="return Setdefaultimage('<?= URL::base(); ?>',<?= $feed->feed_id ?>);"><span class="button">Set Default Image</span></div>
                     <?php endif ?>
                     
                  </td>  
                   <td><?= Form::button('update', 'SAVE', array('id'=>'update','class'=>'save-button', 'onclick' => 'return editfeedtext("' . URL::base(TRUE, 'https') . '");')); ?></td>  
              </tr>
          </table>
      </div>
    
  
    
 <!-- show comments inside div with scroll bar -->
 
  <div class="scroll_bar" style="height:500px;">  
 <?php foreach ($comments as $comment) : ?>     
  <div style="margin-top:-2px; width:730px;" >
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
             <div class="comment_title" style="width:300px;"><?= $comment->username; ?>
            <?php echo HTML::image("public/images/delete_icon.png", array('style'=>'float:right;', 'id'=>'comment_delete','onclick' => 'deleteComment("' . URL::base(TRUE, 'https') . '", "' . $comment->comment_id . '")')); ?>
             </div>
            
         <?php else: ?>
         <div class="comment_title"><?= $comment->character_name; ?> <span class="feed-charname"><?= ucfirst($feed->username)?>'s Character</span>
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
         <p  class="feed-text" style="width:480px;"><?php echo nl2br($comment->comment); ?></p> 
         <input type="hidden" id ="<?= $comment->comment_id ?>comments_edit" value="<?php echo $comment->comment; ?>" />
</div>        
      <?php endforeach; ?>
 </div>
  </div>
 
 
  
      
<script>
    $('.scroll_bar').slimscroll({
       color: '#38CBF0',
       width: '720px',
       height: '200px',
       opacity : .7,
       wheelStep : 5,
       railVisible: true
   });
   
   function deleteComment(url, comment_id) {
    
                if(confirm("Do you want to delete this comment?")) {
                    $.post(url+'admin/delete_comment/',
                    {
                        commentid: comment_id
                    }
                    , function(response) {
                      location.reload(true);
                    });
                }
            }
            
      $(document).ready(function () {
       $('div.edit_text').on('mouseenter', function () {
           $('#edit').show();
           
       }).on('mouseleave', function () {
           $('#edit').hide();
           
       });
   });
   
   $('#edit').click(function(){
   $('.edit_text').css({'display':'none'});
   $('.edit-comment').css({'display':'block'});
   });
   
  
  
   </script>
 
 
