
<script>
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
</script>

<?= $youtube_embed_script_view; ?> 
<div style="padding-top:2px;">
       
        <table id="datatables" class="display" style="width: 150%">
          
                       
              <?php foreach ($feeds as $feed) :?>
            
                            
                    <tr class="row">                                                   
                        <td class="top-chars">
                           <?php if($feed->character_name == "" || $feed->character_name == NULL): ?>    
                             <div style="margin-left: 23px;" class="edit_character"><?= ucfirst($feed->username); ?></div>
                             <?php else: ?>
                             <div style="margin-left: 23px;" class="edit_character"><?= $feed->character_name; ?> <span class="feed-charname"><?=ucfirst($feed->username)?>'s Character</span></div>
                           <?php endif; ?>                            
                        </td>                       
                        <td class="top-chars">
                         <p  class="admin_feed_text" style="width:300px;" >
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
                             <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'admin_feed-media-image','id'=>'media'.$feed->feed_id )); ?></div>
                              <?php else: ?>
                             <div style="margin-top:15px; width: 80px; height: 70px;" class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
                              <video>
                              <source type="video/<?=$file_extension?>" src="/<?=$config_path->path['media'].$feed->file_path?>">
                              </video>
                              </div>
                             
                              <?php endif; elseif($feed->youtube_url != "" || $feed->youtube_url != NULL):?>
                             
                             <?php
                              $embed_code = youtubeEmbedFromUrl($feed->youtube_url, 40, 40); ?>
                             <?php echo  HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'admim_media_image' , 'id'=>'media'.$feed->feed_id)) ;?>
                 
                             
                         <!--     <iframe id="ytplayer" type="text/html" width="80" height="50" src="https://www.youtube.com/embed/<?= $feed->youtube_url; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>-->
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
                    <!--    <td class="top-chars">
                            <div style="float: left; margin-top: 12px;  ">      
                           <?=HTML::image("public/images/active.png", 
                                array('class'=>'delete_icon')); ?>
                            </div> 
                        </td>-->
                    </tr>                         
                    <?php  endforeach; ?>                                      
        </table>       
</div>

 <?php if(count($feeds) > 9): ?>
 <div class="facebook_style" id="facebook_style" align="center" style="width:151%;">
  <a id="<?php echo $feed->feed_id; ?>" href="#" class="load_more" alt="<?php echo $feed_type; ?>">Load more posts...</a>
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