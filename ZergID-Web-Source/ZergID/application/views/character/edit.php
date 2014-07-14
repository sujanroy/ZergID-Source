<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script src="<?=URL::site('/public/js/jPages.js');?>" type="text/javascript"></script>
<?php echo html::style("public/css/gallery.css"); ?>
<?php echo html::script('public/js/jquery.prettyPhoto.js') ?> 
<script type="text/javascript">
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

  /* when document is ready */
  $(function(){

    /* initiate the plugin */
    $("div.holder").jPages({
      containerID  : "itemContainer",
      perPage      : 8,
      startPage    : 1,
      startRange   : 1,
      midRange     : 5,
      endRange     : 1
    });

  });
</script>
<style>
.video_play_button {

    position:relative;
    z-index: 10;
    background-repeat:no-repeat;
    display: inline-block;
    margin: -216px 13px auto -46px;

     }
.video_feed 
{
 z-index: 10;
background-repeat:no-repeat;
margin: -154px 38px auto -41px;

}
</style>
  
  <?= Form::open('', array('id'=>'add_character')); ?>
      
  <div>
    <div class="right_content">
       <span style="width: 70%;float:left" class="title">
         <font style="font-size: 1.5em;color:gray"><?= $character_detail->character_name; ?></font><br />
         <?=$character_detail->game->game_name; ?><input type="hidden" id="game" value="<?=$character_detail->game_id; ?>" /><input type="hidden" id="character_name" value="<?=$character_detail->character_name; ?>" />
         <input type="hidden" id="char_id" value="<?=$character_detail->character_detail_id; ?>" />
       </span>  
        <span class="level">
            <?= Form::label('level', 'Level'); ?>
            <?= Form::input('level', $character_detail->level, 
                    array('class'=>'profile-input-shot', 'maxlength'=>'5', 'id'=>'level', 'maxlength'=>'3',  'style'=>'margin-left:10px; text-align:center')); ?>
           
      </span> 
   
        <div class="upload_icon" align="left">
            <span style="float:left;width:110px"> 
              <?php
             if (!$character_detail->character_icon){ 
             ?>    
            <?= HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img')); } else {?>
            <?= HTML::image($config_path->path['character'].$character_detail->character_icon, array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img')); } ?>
            </span>
             <?= $image_crop_view; ?>
            <input type="hidden" name="profileimage" id="profileimage" value='<?= $character_detail->character_icon; ?>' />
             <div id="media_box" class="popup_box" style="top:80px;">	<!-- OUR PopupBox DIV-->
	<span class="popup-title">Add media </span>
        <div style="margin-left:15px; margin-top:10px;">
        <b style="margin-right:15px">Choose image</b><br />
        <input type="file" id="media_icon" name="media_icon" class="upload_file" onchange="getImageName(this);"/>
        <input id="browse_button" class="browse-button" type="button" value="BROWSE" onclick="javascipt:document.getElementById('media_icon').click();"/>
        </div>
        <div id="medianame" class="media-name" style="float:right; margin-right:20px; margin-top:-20px"></div>
        <div style="margin-top:15px; margin-left:150px; font-weight:bold">OR</div>
        <div style="margin-left:15px; margin-top:15px;">    
        <b style="margin-right:101px;">Youtube URL</b> <?= Form::input('youtube_url', '', 
                array('class'=>'normal-input', 'style'=>'width:335px;', 'id'=>'youtube_url', 'onkeyup'=>'disableUploadMedia()','onmouseout'=>'disableUploadMedia()','autocomplete' => 'off')); ?>
        </div>
        <div style="margin-top:17px; margin-left:150px; font-weight:bold">OR</div>
        <div style="margin-left:15px; margin-top:17px;">
         <b style="margin-right:101px;">Embed Script</b> <?= Form::input('embed_url', '', 
                array('class'=>'normal-input', 'style'=>'width:335px;', 'id'=>'embed_url', 'onkeyup'=>'activeEmbedScript()','autocomplete' => 'off')); ?>
        </div>
        <span style="margin-left:410px;"><input type="button" name="media_upload" value="DONE" class="post-button-white" disabled="disabled" id="media_upload" style='width:115px; margin-top:20px;' onclick='return charMediaSave("<?=  URL::site(); ?>", <?= $character_detail->character_detail_id; ?>);' /></span>
 	<a id="close_media_box" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>
      </div>
        <div  style="width:405px;float:left; margin-top:-20px;">
        <?php if($character_detail->server_id != NULL): ?>    
        <span id="server_menu" align="left" class="section_span lbl_span">
            <?php
            foreach ($servers as $server):
                $serverList[$server->id] = $server->server_name;
            endforeach;
            if(empty($serverList)):
                $serverList[''] = "No server available.";
            endif; 
              ?>
            <?= Form::label('server', 'Server'); ?><br />
            <?= Form::select('server', $serverList, $character_detail->server_id, array('class'=>"select-input", 'id'=>'server'));?>
       </span>
            <?php endif;  ?>
         
           <?php
            foreach ($factions as $faction):
                $factionList[$faction->faction_id] = $faction->faction_name;
            endforeach;
            if(empty($factionList)):
                $factionList[''] = "No faction available.";
            endif; 
              ?>
            <?php if($faction_count == 0 && $character_detail->faction_id != NULL): ?>
            <span id="faction_menu" align="left" class="section_span lbl_span" >
            <?= Form::label('faction','Faction'); ?><br />
            <?= Form::select('faction', $factionList, $character_detail->faction_id, array('class'=>"select-input", 'id'=>'faction','onchange'=>'getClassList("'.URL::site().'")'));?>
       <?php else: ?>
            <?= Form::select('faction', $factionList, $character_detail->faction_id, array('class'=>"select-input", 'id'=>'faction','style'=>'display:none;','onchange'=>'getClassList("'.URL::site().'")'));?>
            <?php endif; ?>
         </span>
           
            <span id="class_span">
            <?php if($character_detail->class_id != NULL): 
            foreach ($class as $class):
                $classList[$class->class_id] = $class->class_name;
            endforeach;
            if(empty($classList)):
                $classList[''] = "No class available.";
            endif; 
              ?>
            <span id="class_menu" align="left" class="section_span lbl_span">
            <?= Form::label('class', 'Class'); ?><br />
            <?= Form::select('classid', $classList, $character_detail->class_id, array('class'=>"select-input", 'id'=>'classid'));?>
            </span>
            <?php endif; ?>
            </span>
         <span align="left" class="section_span lbl_span" >
              <?php
            foreach ($character as $character):
                $characterList[$character->role_id] = $character->role_name;
            endforeach;
            if(empty($characterList)):
                $characterList[] = "No Roles available.";
            endif; 
              ?>
            <?= Form::label('role','Role'); ?><br />
            <?= Form::select('character', $characterList, $character_detail->character_id, array('class'=>"select-input", 'id'=>'role'));?>
       </span>
            <div style="width:500px">
            <?php if(count($professions) > 0): ?> 
            <span id="profession_select" align="left" style="float:left;width:190px; margin-top:0px " class="section_span lbl_span"><br />
             <?= Form::label('professions','Professions'); ?><br />
             <?php $professionList[''] = 'Select';
            foreach ($professions as $profession):
                $professionList[$profession->profession_id] = $profession->profession_name;
            endforeach;
              ?>
             <?= Form::select('profession1', $professionList, $character_detail->profession1_id, array('class'=>"select-input", 'id'=>'profession1'));?>
             <?= Form::select('profession2', $professionList, $character_detail->profession2_id, array('class'=>"select-input", 'id'=>'profession2'));?>
             <?= Form::select('profession3', $professionList, $character_detail->profession3_id, array('class'=>"select-input", 'id'=>'profession3'));?>
          </span>
            <?php endif; ?>
          <span id="profession_select" align="left" class="section_span lbl_span" style="float:left;width:200px; " >
               <?= Form::label('guild','Guild'); ?><br />
               <?php if(!$guild->guild_name || ($guild->guild_name && $guild_member->is_accepted == 0)): ?>
                <span class="guild-name">No guild yet</span>
                <?php else:?>
               <span id="guild_name" class="guild-name"> <?= $guild->guild_name; ?></span>
                <?php endif; ?>
                <br /><br />
                <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('pvp', 1,  (bool)$character_detail->is_pvp_enabled, array('style'=>'width:0', 'id'=>'pvp')); ?><label for="pvp"></label></span>  <span class="role-text" style="padding-left: 45px;">PvE</span><span class="form-checkbox"><?= Form::checkbox('pve', 1, (bool)$character_detail->is_pve_enabled, array('style'=>'width:0', 'id'=>'pve')); ?><label for="pve"></label></span><br /><br />
                <span class="role-text">RP</span> <span class="form-checkbox"><?= Form::checkbox('rp', 1, (bool)$character_detail->is_rp_enabled, array('style'=>'width:0', 'id'=>'rp')); ?><label for="rp"></label></span> 
          </span>  
            
        </div>
        </div>
        <div>
            <span style="margin-top:5px;" align="left" class="section_span lbl_span">
                <?= Form::label('minibio', 'Mini Bio'); ?><br />
                <?= Form::textarea('bio', $character_detail->mini_bio, 
                        array('class'=>'profile-input bio_input','maxlength'=>'2000', 'id'=>'bio')); ?>
            <span align="left" class="section_span lbl_span" style="text-align: center; margin-left:20px;">
               <span class="role-text">Enable Mini Bio</span>
              <span class="form-checkbox"><?= Form::checkbox('enable_minibio', 1, (bool)$character_detail->is_minibio_enabled, array('class'=>'checkbox', 'id'=>'enable_minibio')); ?><label for="enable_minibio"></label></span>
            </span>
            
            </span>
        </div>
         
        
        <div style="padding:110px 20px 0px 0px;float:right;  margin-left:50px;">
          <?= Form::submit('save', 'SAVE', array('class'=>'post-button-white', 'alt'=>'update', 'id'=>'save', 'disabled' => 'disabled' ,'onclick'=>'return saveCharacterInfo("'.URL::site().'", this, "'.$character_detail->character_detail_id.'")')); ?>   
         </div>
        <hr size="1" class="line-hr" style="width:99%">
    </div>
    <div class="right_content" style="margin-bottom:30px;">
        <span class="title">Uploaded Media</span>
        <span style="margin-left:267px;"><?= Form::button('ADD', 'ADD', array('class'=>'save-button', 'id'=>'btn_attach_media', 'onclick'=>'return false')); ?>  </span>
    </div>
    <?= $youtube_embed_script_view; ?> 
    <?php if(count($media) > 0): ?>  
    <div class="media_table1">
         <div id="content" class="defaults">
      <!-- navigation holder -->
      <div align="right" class="holder"></div>
      <!-- item container -->
      <ul class="gallery clearfix" id="itemContainer">
          <?php foreach($media as $media):
          if($media->file_path != "" || $media->file_path != NULL):?>
          <li><?php echo HTML::anchor($config_path->path['media'].$media->file_path, HTML::image($config_path->path['media'].$media->file_path, array('class'=>'media_image' , 'id'=>'media')), array('rel'=>'media[gallery1]', 'alt'=>$media->file_path));?></li>
          <?php else: 
              $embed_code = youtubeEmbedFromUrl($media->youtube_url, 125, 80); ?> 
          <li> <?php echo HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'media_image' , 'id'=>'media'));?>
              <span>
              <?php echo HTML::anchor("http://www.youtube.com/watch?v=".$embed_code, HTML::image('/public/images/rsz_play_white.png', array('class'=>'video_play_button ' , 'style'=>'height:30px;width:30px;','align'=>'center')), array('rel'=>'media[gallery1]','class'=>'video_feed', 'alt'=>$media->file_path));?>
             </span></li>
 <?php endif;
           endforeach; ?>   
      </ul>
         </div>  
    </div>
    <div class="media_table1"></div>
    <?php else: ?>
    <div class="media_table1"><span id="media_name" style="margin-left:150px; font-style:italic; font-size:15px; color:#BABABA">What's got two thumbs and has no media yet?</span></div>
    <div class="media_table2"></div>
    <?php endif; ?>
    <?php if(count($character_list) > 1): ?>
    <div>
        <?=$grid ?>
    </div>
      <?php endif; ?>
  </div>
<?= Form::close('character/edit'); ?>
