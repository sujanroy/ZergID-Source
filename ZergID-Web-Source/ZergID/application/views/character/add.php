<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
<head>
<SCRIPT LANGUAGE="JavaScript">
function clearPreloadPage() { //DOM
if (document.getElementById){
document.getElementById('prepage').style.visibility='hidden';
}else{
if (document.layers){ //NS4
document.prepage.visibility = 'hidden';
}
else { //IE4
document.all.prepage.style.visibility = 'hidden';
}
}
}
$(document).keydown(function(objEvent) {
    if (objEvent.keyCode == 9) {  //tab pressed
        objEvent.preventDefault(); // stops its action
    }
})
</SCRIPT>
<style>
.error_msg{
               background: none repeat scroll 0 0 #F2E98E;
               color: #FF0000;
               font-family: arial;
               font-weight: normal;
               text-align: center;
               font-size: 11px;
               width: 180px;
           }
           </style>
<?php echo html::style("public/ajaxupload/style.css"); ?>
<?php echo html::script('public/js/ajaxupload.js') ?>  
    </head> 
    <body onLoad="clearPreloadPage();">    
        <div class="mask_load" align="center" id="prepage" style="position: absolute;">
          <?= HTML::image('/public/images/loading.gif') ?>
        </div>
        
<?= $game_request_popup; ?>
 <?php
        $uri = $_SERVER['REQUEST_URI'];
        $explode_uri = explode('/',$uri);
        if($explode_uri[2] == 'add' && $explode_uri[1]=='character'):
         ?>
  <?= Form::open('character/save', array('enctype' => 'multipart/form-data', 'id'=>'characterinfo')); ?>
 <?php endif; ?>
<?= Form::submit('save', 'Next!', array('id'=>'char_info_save', 'alt'=>'save', 'style'=>'display:none;', 'onclick'=>'return saveCharacterInfo(null,this, null)')); ?>
<?= Form::submit('save', 'Next!', array('class'=>'save-button', 'style'=>'display:none;', 'id' => 'char_next1','onclick'=>'return gettutorialServerList("'.URL::site().'", "character")')); ?>
<div>
    <div class="right_content">
        <div id="char_name_block">
       <span style="width: 70%; float:left;" class="title">
       <?= Form::label('character_name', 'Character Name:'); ?>
        <?= Form::input('character_name', '', 
                array('class'=>'normal-input', 'maxlength'=>'25', 'id'=>'character_name','onkeyup' => 'return Checkcharactername();')); ?>
           <span id="charname_error" style="margin-left:3px;margin-top: 5px;float: left;" class="error_msg"></span>
       </span>
       <span style="width: 70%; float:left;" class="title">     
       <?= Form::label('game', 'Game:'); ?>
       <?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->id] = $game->game_name;
          endforeach;
              $gameList['Not Listed'] = "Game not listed";
       ?>
       <?= Form::select('game', $gameList, "", array('class'=>"game-input", 'id'=>'game', 'onchange'=>'getServerList("'.URL::site().'", "character")'));?>     
	<span id="gamemsg" style="margin-left:3px;margin-top: 5px;float: left;" class="error_msg"></span>
       </span>  
      <span class="level">
            <?= Form::label('level', 'Level'); ?>
            <?= Form::input('level', '', 
                    array('class'=>'profile-input-shot', 'maxlength'=>'5', 'id'=>'level', 'maxlength'=>'3', 'style'=>'margin-left:10px; text-align:center')); ?>
           
      </span> 
            <!--        <input type="hidden" id="char_id" value="" />-->
        </div>
        <div style="display: none;" id="char_name_instruction_block">
            <p class="instruction-title">First things first...</p>
            <p class="instruction-content">Let's start with some basic info.<br> When you make posts or share content, you can do <br> it as either your Zerg ID, or a character.</p>
        </div>
       
        <div style="display: none;" id="char_image_instruction">
            <p class="instruction-title">Give it it's own avatar</p>
            <p class="instruction-content">This is the avatar that will show up when you <br> perform activities as this character.</p>
        </div>
        <div id="char_image_block">
        <div class="upload_icon" align="left">
            <span id="default_icon" style="float:left;width:110px">
            <?= HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));?>
            </span>
            <canvas style="display: none; float:left; margin-right: 19px;" width="150" height="150" id="canvas"></canvas>
            <?= $image_crop_view; ?>
            <input type="hidden" name="profileimage" id="profileimage" value="" />
            <div class="media-name" id="image_name"  style="margin-top:8px; display: none;">Profile image cropped and added</div>
      </div>
        </div> 
        <div style="display: none;" id="char_info_instruction">
            <p class="instruction-title" style="margin-top:-120px;">Character details</p>
            <p class="instruction-content">Tell everyone a bit about this character.</p>
        </div>
        <div id="char_info_block">
        <div  style="width:405px;float:left; margin-top:-20px;">
        <span id="server_menu" align="left" class="section_span lbl_span">
            <?php
           // foreach ($servers as $server):
              //  $serverList[$server->id] = $server->server_name;
            //endforeach;
            if(empty($serverList)):
                $serverList[''] = "Select Game";
            endif; 
              ?>
            <?= Form::label('server', 'Server'); ?><br />
            <?= Form::select('server', $serverList, "", array('class'=>"select-input", 'id'=>'server'));?>
       </span>
         <span id="faction_menu" align="left" class="section_span lbl_span" >
            <?= Form::label('faction','Faction'); ?><br />
            <?php
           // foreach ($factions as $faction):
           //     $factionList[$faction->faction_id] = $faction->faction_name;
           // endforeach;
            if(empty($factionList)):
                $factionList[] = "Select Game";
            endif; 
              ?>
            <?= Form::select('faction', $factionList, "", array('class'=>"select-input", 'id'=>'faction','onchange'=>'getClassList("'.URL::site().'")'));?>
       </span>
            <span id="class_menu" align="left" class="section_span lbl_span">
            <?php
          //  foreach ($class as $class):
          //      $classList[$class->class_id] = $class->class_name;
          //  endforeach;
            if(empty($classList)):
                $classList[] = "Select Game";
            endif; 
              ?>
            <?= Form::label('class', 'Class'); ?><br />
            <?= Form::select('classid', $classList, "", array('class'=>"select-input", 'id'=>'classid'));?>
       </span>
         <span id="role_menu" align="left" class="section_span lbl_span" >
              <?php
            foreach ($character as $character):
                $characterList[$character->role_id] = $character->role_name;
            endforeach;
            if(empty($characterList)):
                $characterList[] = "No Roles available.";
            endif; 
              ?>
            <?= Form::label('role','Role'); ?><br />
            <?= Form::select('character', $characterList, "", array('class'=>"select-input", 'id'=>'role'));?>
       </span>
        </div>
	<input type="hidden" id="char_id" value="" />
        <div>
            <span style="margin-top:5px;" align="left" class="section_span lbl_span">
                <?= Form::label('minibio', 'Mini Bio'); ?><br />
                <?= Form::textarea('bio', "", 
                        array('class'=>'profile-input bio_input','maxlength'=>'1000', 'id'=>'bio')); ?>
            </span>
        </div>
         <div align="right" style="float:right;">
            <div align="left" class="section_span lbl_span" style="text-align: right;margin-right: 38px; margin-top:5px;">
                 <span class="role-text">Enable Mini Bio</span>
              <span class="form-checkbox"><?= Form::checkbox('enable_minibio', 1, "1", array('style'=>'width:0', 'id'=>'enable_minibio')); ?><label for="enable_minibio"></label></span>
            </div>
        </div>
         
        <div  style="width:500px; min-height: 280px;">
            <div  align="left" style="float:left;width:190px; margin-top: 0px; height: 150px;" class="section_span">  
            <span id="profession_select"><br />
             <?= Form::label('professions','Professions'); ?><br />
             <?php    
                $professionList[] = "Select Game";
              ?>
             <?= Form::select('profession1', $professionList, "", array('class'=>"select-input", 'alt'=>'profession1', 'id'=>'profession1'));?>
             <?= Form::select('profession2', $professionList, "", array('class'=>"select-input", 'alt'=>'profession2', 'id'=>'profession2'));?>
             <?= Form::select('profession3', $professionList, "", array('class'=>"select-input", 'alt'=>'profession3', 'id'=>'profession3'));?>
          </span>
            </div>
          <span align="left" class="section_span" style="float:left;width:200px; margin-top: 0px;" >
               <?= Form::label('guild','Guild'); ?><br />
               <span class="guild-name">No guild yet</span><br /><br />
               <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('pvp', 0, "", array('id'=>'pvp', 'style'=>'width:0')); ?><label for="pvp"></label></span> <span class="role-text" style="padding-left: 45px;">PvE</span><span class="form-checkbox"><?= Form::checkbox('pve', 0, "", array('style'=>'width:0', 'id'=>'pve')); ?><label for="pve"></label></span><br /><br />
               <span class="role-text">RP</span> <span class="form-checkbox"><?= Form::checkbox('rp', 0, "", array('style'=>'width:0', 'id'=>'rp')); ?><label for="rp"></label></span> 
          </span>  
         </div>
    
        <div style="padding:0px 20px 0px 0px;float:right; margin-top: -10px;">
          <?= Form::submit('save', 'SAVE', array('class'=>'post-button-white', 'id' => 'char_save', 'disabled' => 'disabled','onclick' => 'return charNamevalidate();')); ?> 
         </div>
        </div>
        <hr size="1" class="line-hr" style="width:99%">
    </div>
    
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
        <span style="margin-left:410px;"><input type="submit" name="media_upload" value="DONE" disabled="disabled" class="post-button-white" id="media_upload" style='width:115px; margin-top:20px;' onclick='unloadMediaUploadPopupBox();' /></span>
 	<a id="close_media_box" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>
            <?php
        $uri = $_SERVER['REQUEST_URI'];
        $explode_uri = explode('/',$uri);
        if($explode_uri[2] == 'add' && $explode_uri[1]=='character'):
         ?>

          <?= Form::close(); ?>
         <?php endif; ?>
    <div class="right_content">
        <span class="title">Uploaded Media</span>
        <span style="margin-left:267px;"><?= Form::button('ADD', 'ADD', array('class'=>'post-button-white', 'disabled', 'id'=>'btn_attach_media', 'onclick'=>'return false')); ?>   </span>
    </div>
    <div class="media_table1"><span id="media_name" style="margin-left:150px; font-style:italic; font-size:15px; color:#BABABA">What's got two thumbs and has no media yet?</span></div>
    <div class="media_table2"></div>
    <hr size="1" class="line-hr" style="width:99%; margin-top:30px;">
    <div>
        <?=$grid ?>
    </div>
</div>

<!--<table class="options">
	<tr>
		<td>
            		<div id="demo1" style="width:500px;"></div>
			<div id="report" style="overflow:auto;width:300px;height:400px;"></div>
			<script type="text/javascript">
			$('#demo1').ajaxupload({
				url:'http://localhost/zergid/public/ajaxupload/upload.php',
				allowExt:['jpg','gif','png','flv','mov','swf'],
				remotePath:'../../public/uploads/media',
				finish:function(files)
				{
					alert('All images have been uploaded');
				},
				success:function(fileName)
				{
					$('#report').append('<p>'+fileName+' uploaded.</p>');
				}
			});
			</script>
		</td>

	
	</tr>
</tbody>
</table>-->
    
</body>
</html>
