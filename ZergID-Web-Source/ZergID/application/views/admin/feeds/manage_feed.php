
<link rel="stylesheet" href="<?=URL::site('/public/css/admincss.css');?>" />
<script src="<?=URL::site('/public/js/adminjs.js');?>" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
$('.load_more').live("click",function() {
    

var last_msg_id = $(this).attr("id");
var feed_type = $(this).attr("alt");
if(last_msg_id!='end'){
$.post('<?= URL::site(); ?>admin/zergfeed_more/',
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
});
});

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

function showEditBox(url,feedid) {
   

getGameMask();
//alert(characterid);
$('#editpopupbox').fadeIn("slow");
$('#feedinfo').html('');
$('#loading').html('<div align="center" ><img style="margin-top:200px;" src="../../public/images/msg_load_blue.gif"></div>');
$.post(url+'admin/edit_zergfeeds/',
{
feedid: feedid
}
, function(response) {
     
$('#loading').html('');
$('#feedinfo').html(response);
});
                
return false;
}

function deleteFeed(url, feed_id, obj) {
    row= $(obj).closest('tr');
    if(confirm("Are you sure Do you want to delete this feed?")) {
        $.post(url+'admin/feeddelete/',
        {
            feedid: feed_id
        }
        , function(response) {
            $('#editpopupbox').hide();
            row.remove();
        });
    }
}

function deleteFeedImage(url, media_id) {
   // row= $(obj).closest('tr');
    if(confirm("Are you sure Do you want to delete this feed?")) {
        $.post(url+'admin/feedmediadelete/',
        {
            mediaid: media_id
        }
        , function(response) {
//            $('#editpopupbox').hide();
//            row.remove();
        });
    }
}

function guildfeeds(url){
$('#hidezergfeeds').hide();
$('#guild_info').html('');
//$('#hidezergfeed').hide();
$('#guildloading').html('<div align="center" style="margin-left:90px;" id="popup"><img src="../../public/images/loading.gif"></div>');
$.post(url+'admin/guild_feeds/', function(response) {
$('#guildloading').html('');
$('#hidezergfeeds').hide();
//$('#hidezergfeed').hide();
$('#guild_info').html(response);
});
                
return false;
}


</script>
<div id="editpopupbox" class="popup_box" style="margin-top:-100px; margin-left:145px; height: 580px; width:750px;position:absolute ">	<!-- OUR PopupBox DIV-->
      <div id="loading"></div>
      <div id="feedinfo"></div>
      <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
</div>
<div id="guild_info"></div>
<div id="guildloading"></div>
 <div id="hidezergfeeds" style="padding-top:30px;">
       <span class="small-title">Zerg Feeds</span>
       <span style="float:right;margin-right: -170px;"><input type="radio" class="checkbox" name="zerg_feeds" checked="checked" value=" ">  <label for="character" style=" color: #71bdf0; font-size:15px;"> Zerg Feeds</label></span><span style="float:right;margin-right: -288px;"><input type="radio" onclick="guildfeeds('<?= URL::base(TRUE, 'https'); ?>');" class="checkbox" name="guild_feeds" value=" ">  <label for="evnt_members" style="font-size:15px;"> Guild Feeds</label></span>
        <table id="datatables" class="display" style="width: 150%">
           <thead>
                <tr id="data_header">                     
                    <th>ZergID/Character Name</th>
                    <th>Feeds</th>
                    <th>Media</th>
                    <th>Edit</th>
                    <th>Delete</th>
              <!--      <th width="17%">Active</th>             -->   
                </tr>
          </thead>
                      <?= $youtube_embed_script_view; ?> 
          
              <?php  foreach ($feeds as $feed) :?>
            
                            
                    <tr class="row">                                                  
                        <td class="top-chars">
                           <?php if($feed->character_name == "" || $feed->character_name == NULL): ?>    
                             <div style="margin-left: 23px;" class="edit_character"><?= ucfirst($feed->username); ?></div>
                             <?php else: ?>
                             <div style="margin-left: 23px;" class="edit_character"><?= $feed->character_name; ?> <span class="feed-charname"><?=ucfirst($feed->username)?>'s Character</span></div>
                           <?php endif; ?>                            
                        </td>                       
                        <td class="top-chars">
                            <p  class="admin_feed_text" style="width:300px;">
                                <?php if($feed->feed_text==''): ?>
                                <?php echo "No feed message"; ?>
                              
                                <?php else: ?>
                                <div id="<?= $feed->feed_id; ?>updated"></div>
                                 <div id="<?= $feed->feed_id; ?>feedtext"><?php echo Text::limit_chars($feed->feed_text, 52, '...');?></div>       
                                <?php endif; ?>
                            </p>                    
                        </td>
                        <td class="top-chars">    
                            
                              <?php if($feed->file_path != "" || $feed->file_path != NULL): 
                              $file_extension =  substr(strchr($feed->file_path, '.'), 1);
                              if($file_extension == "jpg"): ?>    
                             <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'admin_feed-media-image','id'=>'media'.$feed->feed_id )); ?></div>
                              <?php else: ?>
                             <div style="margin-top:15px; width: 70px; height: 50px;" class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                              <video class="admin_feed-media-image">
                              <source type="video/<?=$file_extension?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
                              </video>
                              </div>
                              <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):?>
                             
                              <?php
                              $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 40, 40); ?>
                             <?php echo  HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'admim_media_image' , 'id'=>'media'.$feed->feed_id)) ;?>
                         <!--    <iframe id="ytplayer" type="text/html" width="80" height="50" src="https://www.youtube.com/embed/?wmode=opaque" frameborder="0" allowfullscreen ></iframe>-->
                              <?php else: ?>
                               <?php echo "No media posted"; ?>                            
                              <?php endif; ?>
                           
                        </td>
                        <td class="top-chars">
                      <div style="float: left; margin-top: 12px;"> 
                        <?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'style' => 'cursor: pointer','onclick' => "showEditBox('".URL::site()."', '".$feed->feed_id."')")); ?>                              
                      </div>
                        </td>  
                        <td class="top-chars">
                            <div style="float: left; margin-top: 12px;  ">  
                              <?php  if($feed->is_visible == "1"):  ?> 
                                <?=
                            HTML::image("public/images/delete_icon.png", array('class' => 'delete_icon', 'id' => $feed->feed_id,
                                 'onclick' => 'deleteFeed("' . URL::base(TRUE, 'https') . '", "' . $feed->feed_id . '", this)'));
                            ?>
                                <?php else:?>                      
                           <?=HTML::image("public/images/delete_icon_gray.png", 
                                array('class'=>'delete_icon')); ?>
                                <?php endif;?>
                            </div>                          
                        </td>
                     <!--   <td class="top-chars">
                            <div style="float: left; margin-top: 12px;  ">      
                           <?=HTML::image("public/images/active.png", 
                                array('class'=>'delete_icon')); ?>
                            </div> 
                        </td>-->
                    </tr>                         
                    <?php  endforeach; ?>                                      
        </table> 
       
       <?php if(count($feeds) > 9): ?>
 <div class="row" id="updates"></div>
 <div class="facebook_style" id="facebook_style" align="center" style="width:151%;">
  <a id="<?php echo $feed->feed_id; ?>" href="#" class="load_more" alt="<?php echo $feed_type; ?>">Load more posts...</a>
  </div>

 <?php endif; ?>
</div>

 

