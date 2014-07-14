<div style="padding-top:2px;">      
        <table id="datatables" class="display" style="width: 150%">
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
                    <div><?php echo HTML::image($config_path->path['media'].$feed->file_path, array('class'=>'feed-media-image','style' => 'width:80px;height:70px;')); ?></div>
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
                             <?php echo  HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'media_image' , 'id'=>'media')) ;?>
                       
                 <!--   <iframe id="ytplayer" type="text/html" width="80" height="50" src="https://www.youtube.com/embed/<?= $feed->youtube_url; ?>?wmode=opaque" frameborder="0" allowfullscreen ></iframe>-->
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
                                 'onclick' => 'deleteguildfeed("' . URL::base(TRUE, 'https') . '", "' . $feed->feed_id . '")')); ?>
                    </div>
                </td>
          </tr>   
          <?php endforeach ?>
       </table>
  </div>


<?php if(count($feeds) > 9): ?>
<div class="facebook_style" id="facebook_style" align="center" style="width:151%;">
     <a id="<?php echo $feed->feed_id; ?>" href="#" alt="guild_feed_more" class="load_more" >Load more posts...</a>
</div>
<?php endif; ?>