<?= Form::open('admin/edit_characterdetails', array('enctype' => 'multipart/form-data')); ?>
        <span style="width: 70%;float:left" class="title">
            <font style="font-size: 1.7em;color:gray"><?= $character_detail->character_name; ?></font><br />
           <?=$character_detail->game->game_name; ?>      </span> 
        <div id="showcharacterimg" class="upload_icon" align="left" style="margin-top:0px; width:400px;">
            <span style="float:left;width:110px"> 
            <?php
             if (!$character_detail->character_icon){ 
             ?>    
            <?= HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img')); } else {?>
            <?= HTML::image($config_path->path['character'].$character_detail->character_icon, array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img')); } ?>          </span>
            <input type="hidden" name="profileimage" id="profileimage" value='<?= $character_detail->character_icon; ?>' />
           <?php
             if ($character_detail->character_icon !='default.jpeg'){ 
         //  $default_image = 'default.jpeg';
             ?>
            <span class="choose_button">
                <div  class="button-browse" style="width:150px;"><input type="button" id="profile_image" class="file-upload uploadfile" name="profile_image" onclick="return Setdefaultimage('<?= URL::base(); ?>',<?= $character_detail->character_detail_id ?>);"><span class="button">Set Default Image</span></div> 
            </span> 
            <?php } ?>

        </div>
        <div id="showdefaultimg" class="upload_icon" align="left" style="margin-top:0px;display: none; width: 400px;">
        <span style="float:left;width:110px"> 
       <img src="<?= URL::base(); ?>public/uploads/character/default.jpeg" class='rounded_image rounded_image_shadow' id ='prof_img' /> </span>
        </span>
           
        </div>
<div style="margin-left:250px; margin-top:-250px;">
            <span style="margin-top:5px;" align="left" class="section_span lbl_span">
                <label for="minibio">Mini Bio</label><br>
                 <?= Form::textarea('character_bio', $character_detail->mini_bio, 
                        array('class'=>'profile-input bio_input','maxlength'=>'2000', 'id'=>'bio','onkeyup'=>'return characterbiochange();')); ?>    
            <div class="level"  style="margin-top:-80px; margin-left:0">
            <label for="level">Level</label>            <input  type="text" id="level" name="character_level" value="<?=$character_detail->level; ?>" maxlength="3" class="profile-input-shot" onkeyup="return characterlevelchange();" style="margin-left:10px; margin-top:90px; text-align:center" />           
        </div> </span>
        </div>
   <div style="float:left; margin-top:-50px;">
            <span align="left" class="section_span lbl_span" >
               <span class="role-text">Enable Mini Bio</span>
              <span class="form-checkbox"><?= Form::checkbox('characterenable_mini_bio', 1, (bool)$character_detail->is_minibio_enabled, array('class'=>'checkbox', 'id'=>'enable_minibio','onclick'=>'return characterbioenablechange();')); ?><label for="enable_minibio"></label></span>
            </span>
        </div>

          <div style="width:655px;float:left;">
            <?php if($character_detail->server_id != NULL) : ?>
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
            <?= Form::select('characterserver_id', $serverList, $character_detail->server_id, array('class'=>"select-input", 'id'=>'server','onchange'=>'return characterserverchange();'));?>
       </span>
           <?php endif; if($character_detail->faction_id != NULL): ?>
         <span id="faction_menu" align="left" class="section_span lbl_span" >
            <?= Form::label('faction','Faction'); ?><br />
            <?php
            foreach ($factions as $faction):
                $factionList[$faction->faction_id] = $faction->faction_name;
            endforeach;
            if(empty($factionList)):
                $factionList[''] = "No faction available.";
            endif; 
              ?>
            <?= Form::select('characterfaction_id', $factionList, $character_detail->faction_id, array('class'=>"select-input", 'id'=>'faction','onchange'=>'return characterfactionchange();'));?>
       </span>
            <?php endif; if($character_detail->class_id != NULL): ?>
            <span id="class_menu" align="left" class="section_span lbl_span">
            <?php
            foreach ($class as $class):
                $classList[$class->class_id] = $class->class_name;
            endforeach;
            if(empty($classList)):
                $classList[''] = "No class available.";
            endif; 
              ?>
            <?= Form::label('class', 'Class'); ?><br />
            <?= Form::select('characterclass_id', $classList, $character_detail->class_id, array('class'=>"select-input", 'id'=>'classid','onchange'=>'return characterclasschange();'));?>
            </span>
            <?php endif; ?>
                     <span align="left" class="section_span lbl_span" >
              <?php
            foreach ($character as $character):
                $characterList[$character->character_id] = $character->character_role_name;
            endforeach;
            if(empty($characterList)):
                $characterList[''] = "No Roles available.";
            endif; 
              ?>
            <?= Form::label('role','Role'); ?><br />
            <?= Form::select('characterrole_id', $characterList, $character_detail->character_id, array('class'=>"select-input", 'id'=>'role','onchange'=>'return characterrolechange();'));?>
       </span>
              <span id="class_menu" align="left" class="section_span lbl_span">
                        <?php if(count($professions) > 0): ?> 
            <span id="profession_select" align="left" style="float:left;width:190px;margin-top:-18px;" class="section_span lbl_span"><br />
             <?= Form::label('professions','Professions'); ?><br />
             <?php $professionList[''] = 'Select';
            foreach ($professions as $profession):
                $professionList[$profession->profession_id] = $profession->profession_name;
            endforeach;
              ?>
             <?= Form::select('characterprofession_id1', $professionList, $character_detail->profession1_id, array('class'=>"select-input", 'id'=>'profession1','onchange'=>'return characterprofession1change();'));?>
             <?= Form::select('characterprofession_id2', $professionList, $character_detail->profession2_id, array('class'=>"select-input", 'id'=>'profession2','onchange'=>'return characterprofession2change();'));?>
             <?= Form::select('characterprofession_id3', $professionList, $character_detail->profession3_id, array('class'=>"select-input", 'id'=>'profession3','onchange'=>'return characterprofession3change();'));?>
          </span>
            <?php endif; ?>
                 </span>
                <span id="profession_select" align="left" class="section_span lbl_span" style="float:left;width:200px" >
               <?= Form::label('guild','Guild :'); ?>
               <?php if(!$guild->guild_name): ?>
                <span class="guild-name">No Guild Yet</span>
                <?php else:?>
               <span id="guild_name" class="guild-name"> <?= $guild->guild_name; ?></span>
                <?php endif; ?>
                <br /><br />
                <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('character_pvp', 1,  (bool)$character_detail->is_pvp_enabled, array('style'=>'width:0', 'id'=>'pvp','onclick'=>'return characterpvpchange();')); ?><label for="pvp"></label></span>  <span class="role-text" style="padding-left: 45px;">PvE</span><span class="form-checkbox"><?= Form::checkbox('character_pve', 1, (bool)$character_detail->is_pve_enabled, array('style'=>'width:0', 'id'=>'pve','onclick'=>'return characterpvechange();')); ?><label for="pve"></label></span><br /><br />
                <span class="role-text">RP</span> <span class="form-checkbox"><?= Form::checkbox('character_rp', 1, (bool)$character_detail->is_rp_enabled, array('style'=>'width:0', 'id'=>'rp','onclick'=>'return characterrpchange();')); ?><label for="rp"></label></span> 
          </span>  
            
        </div>
        
      <input type="hidden" value="<?= $character_detail->character_detail_id;?>" id="hiddencharacterid" />
     
        <div class="crop_buttons_div" style="float:bottom; margin-left:100px; width:345px;">
             <input id="cancel" type="button"  style="float:right;" value="CANCEL" class="save-button" onclick="return CloseCharacterPopup();"> 
            <input type="button" value="UPDATE" id="character_save" disabled="disabled" class="post-button-white" style="float:left;" onclick="return Editcharacterdetails('<?= URL::base(); ?>',<?= $character_detail->character_detail_id ?>,<?= $character_detail->user_id ?>)"> 
            <input id="character_cancel" type="button"  style="float:right;" value="REMOVE" class="save-button" onclick="return removeCharacterdetails('<?= URL::base(); ?>',<?= $character_detail->character_detail_id ?>,'<?= $character_detail->character_name ?>');"> 

        </div> 
        <?= Form::close(); ?> 