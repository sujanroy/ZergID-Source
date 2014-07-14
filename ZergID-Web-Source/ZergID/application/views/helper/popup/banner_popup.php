<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
	<!-- OUR PopupBox DIV-->
   <span class="popup-title" id="popup_title">Banner Images</span>
   <div class="scroll_bar">
<!--       <div class="floatbox"> -->
    <ul id="append_existing_banner" style="margin-left:-28px;">
     <?php  foreach($existing_banners as $existing_banner):
   $mysock = getimagesize($config_path->path['media'].$existing_banner->file_path); ?> 
       
   <li id="li_remove_banner<?=$existing_banner->media_info_id?>" onmouseover="showDeleteButton('<?=$existing_banner->media_info_id?>')" onmouseout="hideDeleteButton('<?=$existing_banner->media_info_id?>')" style="display:inline-block; margin-top: 10px;"> <?php if($existing_banner->is_default != 1): ?><img id="delete_banner<?=$existing_banner->media_info_id?>"height="12px" onclick="return deleteExistingbanner('<?=$existing_banner->media_info_id?>')" width="12px" style="display: none; margin-left: 225px; margin-top:-15px;  cursor: pointer;" src="/public/images/delete-icon.gif" /> <?php endif; ?> <?php echo HTML::anchor('#', HTML::image($config_path->path['media'].$existing_banner->file_path, array('class'=>'default-banner-images', 'alt'=>'userbanner', 'id'=>'media'.$existing_banner->media_info_id, 'onclick'=>"return saveExistingbanner('".URL::site()."', '".$view_id."', '".$existing_banner->media_info_id."', '".$config_path->path['media'].$existing_banner->file_path."');")));?></li>
 <?php endforeach;?>
        </ul>
   </div>
        

<script>
$('.scroll_bar').slimscroll({
       color: '#38CBF0',
       width: '750px',
       height: '310px',
       opacity : .7,
       wheelStep : 5,
       railVisible: true
   });
   </script>