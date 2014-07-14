
<script>
//$(function() {
//$('.load_more').live("click",function() {
//var last_msg_id = $(this).attr("id");
//var feed_type = $(this).attr("alt");
//if(last_msg_id!='end'){
//$.post('<?= URL::site(); ?>admin/guildfeed_more/',
//{
//lastmsg:last_msg_id,
//feed:feed_type,
//
//beforeSend: function() { 
//$('a.load_more').append('<img src="<?= URL::site(); ?>public/images/facebook_style_loader.gif" />');
//}
//}
//, function(response) {
//$(".facebook_style").remove(); 
//$(response).hide().appendTo("div#updates").fadeIn(2000);
//$(window).scrollTop($('#div'+last_msg_id).offset().top);
//}
//);
// 
//}
//return false;
//});
//});


 function load_more_guild(Id){
        var last_msg_id = Id;
        var feed_type = 'guild_feed_more';
        if(last_msg_id!='end'){
$.post('<?= URL::site(); ?>admin/guildfeed_more/',
{
lastmsg:last_msg_id,
feed:feed_type,

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
    }
function getGameMask() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
}

function showEditBox(url,feedid,guildid) {
   

getGameMask();
//alert(characterid);
$('#editpopupbox').fadeIn("slow");
$('#feedinfo').html('');
$('#loading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$.post(url+'admin/edit_guildfeeds/',
{
feedid: feedid,
guildid: guildid
}
, function(response) {
     
$('#loading').html('');
$('#feedinfo').html(response);
});
                
return false;
}

function deleteGuildFeed(url, feed_id, guild_id) {
    
    if(confirm("Do you want to delete this feed?")) {
        $.post(url+'guild/delete_feed/',
        {
            feedid: feed_id
        }
        , function(response) {
            window.location.replace(url+'admin/guild_feeds');
        });
    }
}

function deleteguildfeed(url, feed_id, obj) {
                 row= $(obj).closest('tr');
                if(confirm("Are you sure Do you want to remove this feed?")) {
                    $.post(url+'admin/guild_feeddelete/',
                    {
                        feedid:feed_id
                    }
                    , function(response) {
                     $('#editpopupbox').hide();
                     $('.mask').hide();
                      row.remove();
                    });
                }
            }
            
function zergfeeds(url){
$('#hidezergfeeds').hide();
//$('#hideloadfeed').hide();
$('#zerg_info').html('');
$('#zergloading').html('<div align="center" style="margin-left:90px;" id="popup"><img src="../../public/images/loading.gif"></div>');
$.post(url+'admin/manage_feeds_details/', function(response) {
$('#zergloading').html('');
$('#hidezergfeeds').hide();
//$('#hideloadfeed').hide();
$('#zerg_info').html(response);
});
                
return false;
}

            
</script>

<style>
.edit_comments {
   image: url(public/images/edit-icon.png); 
}

.admin_feed_text{
    text-align: justify;
    padding-top: 5px;
    line-height: 18px;
    color: #000000;
}

.admin_feed-media-image {
    border: 1px solid #FFFFFF;
    margin-right: 20px;
    overflow: hidden;
    margin-top: 10px;
    max-width: 80px;
    max-height: 80px;
}

.popupGameClose
{
    font-size:20px;  
    line-height:15px;  
    right:5px;  
    top:5px;  
    position:absolute;  
    color:#6fa5e2;  
    cursor: pointer;
    margin-top: 10px;
    margin-right: 10px;
}

</style> 

     <div id="editpopupbox" class="popup_box" style="margin-top:-100px; margin-left:145px; height: 800px; width:650px;position:absolute ">	<!-- OUR PopupBox DIV-->
          <div id="loading"></div>
          <div id="feedinfo"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="zerg_info"></div>
<div id="zergloading"></div>


<div id="hidezergfeeds" style="padding-top:30px;">
       <span class="small-title">Guild Feeds</span>
      <span style="float:right;margin-right: -170px;"><input type="radio" class="checkbox" name="zerg_feeds"  onclick="zergfeeds('<?= URL::base(TRUE, 'https'); ?>');" value=" ">  <label for="character" style=" font-size:15px;"> Zerg Feeds</label></span><span style="float:right;margin-right: -288px;"><input type="radio" checked="checked"  class="checkbox" name="guild_feeds" value=" ">  <label for="evnt_members" style="color: #71bdf0; font-size:15px;"> Guild Feeds</label></span>
       <table id="datatables" class="display" style="width: 150%">
           <thead>
                <tr id="data_header">                     
                    <th>Guild Name</th>
                    <th>Feeds</th>
                    <th>Media</th>
                    <th>Edit</th>
                    <th>Delete</th>                 
                </tr>
          </thead>
          <?= $youtube_embed_script_view; ?> 
          <?php foreach ($feeds as $feed) : ?>          
          <tr class="row">
              
              <td class="top-chars">
                  <div style="margin-left: 23px;" class="edit_character"><?= $feed->character_name; ?> </div>
              </td>
              
               <td class="top-chars">
                   <p  class="admin_feed_text" style="width:300px;">
                        <?php if($feed->feed_text==''): ?>
                        <?php echo "No feed message"; ?>
                        <?php else: ?>
                        <?php echo Text::limit_chars($feed->feed_text, 52, '...');?>       
                        <?php endif; ?>
                   </p>                         
               </td>
                              
               <td class="top-chars">
                  <?php if($feed->file_path != "" || $feed->file_path != NULL): 
                    $file_extension =  substr(strchr($feed->file_path, '.'), 1);
                    if($file_extension == "jpg"): ?>    
                    <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-media-image','style' => 'width:80px;height:70px;','id'=>'media'.$feed->feed_id)); ?></div>
                    <?php else: ?>
                    <div style="margin-top:15px; width: 80px; height: 70px;" class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                    <video>
                    <source type="video/<?=$file_extension?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
                    </video>
                    </div>
                    <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):?>
                    <div style="margin-top:15px;">
                        <?php
                              $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 40, 40); ?>
                             <?php echo  HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'media_image' , 'id'=>'media'.$feed->feed_id)) ;?>
                 
                <!--    <iframe id="ytplayer" type="text/html" width="80" height="50" src="https://www.youtube.com/embed/<?= $feed->youtube_url; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>-->
                    </div>
                    <?php else: ?>
                               <?php echo "No media posted"; ?>  
                  <?php endif; ?> 
                </td>
                
                <td class="top-chars">
                   <div style="float: left; margin-top: 12px;"> 
                        <?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'style' => 'cursor: pointer','onclick' => "showEditBox('".URL::site()."', '".$feed->feed_id."','".$feed->guild_id."')")); ?>                              
                   </div>
                </td>
                
                <td class="top-chars">
                    <div style="float: left; margin-top: 12px;  ">  
                        <?= HTML::image("public/images/delete_icon.png", array('class' => 'delete_icon', 'id' => $feed->feed_id,
                                 'onclick' => 'deleteguildfeed("' . URL::base(TRUE, 'https') . '", "' . $feed->feed_id . '", this)')); ?>
                    </div> 
                </td>
          </tr>   
          <?php endforeach ?>
       </table>
 <div class="row" id="updates"></div>      
<?php if(count($feeds) > 9): ?>
<!--<div class="facebook_style" id="facebook_style" align="center" style="width:151%;">
     <a id="<?php echo $feed->feed_id; ?>" href="#" alt="guild_feed_more" class="load_more" >Load more posts...</a>
</div>-->

<div class="facebook_style" id="facebook_style" align="center" style="width:151%;">
     <a id="<?php echo $feed->feed_id; ?>" onclick="return load_more_guild(<?php echo $feed->feed_id; ?>);" href="#" alt="guild_feed_more" class="load_more" >Load more posts...</a>
</div>
<?php endif; ?>
  </div>


