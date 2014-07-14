<?= Form::open('admin/edit_characterdetails', array('enctype' => 'multipart/form-data')); ?>
        <span style="width: 50%;float:left" class="title">
            <font style="font-size: 1.7em;color:gray"><?= $guild->guild_name; ?></font><br />
           <?=$guild->game->game_name; ?>      </span> 
<input type="hidden" value="<?= $guild->guild_name; ?>" id="guild_name" name="guild_name" />
<input type="hidden" value="<?= $guild->game_id; ?>" id="guild_game" name="guild_game" />
<span style="margin-left:30px;">
 <span style="width:50%; margin-right:40px" class="title margin_top_20">
<?= Form::label('communication', 'Main Communication:'); ?>   </span>
        
                 <span style="float:right;width:45%" class="section_span margin_top_20">
            <?= Form::label('service', 'Service :'); ?>
            <?= Form::input('service',  $guild->main_comm_service, 
            array('class'=>'profile-input', 'maxlength'=>'25','style'=>'margin-left:20px;','id'=>'service','onkeyup'=>'return guildservicechange();')); ?><br/><br/>
            <?= Form::label('server', 'Server :'); ?>
            <?= Form::input('url',  $guild->main_comm_url, 
            array('class'=>'profile-input', 'maxlength'=>'25','style'=>'margin-left:25px;','id'=>'url','onkeyup'=>'return guildservernamechange();')); ?><br/><br/>
            <?= Form::label('port', 'Port :'); ?>
            <?= Form::input('port', $guild->main_comm_port, 
            array('class'=>'profile-input', 'maxlength'=>'10','style'=>'margin-left:40px;','id'=>'port','onkeyup'=>'return guildportchange();')); ?><br/><br/>
            <?= Form::label('password', 'Password :'); ?>
            <?= Form::password('password', $guild->main_comm_password, 
            array('class'=>'profile-input', 'maxlength'=>'20','style'=>'margin-left:8px;','disabled'=>'disabled','id'=>'password')); ?><br><br>
            
<span style="float:left;width:50%; font-size: 1.7em;color:gray" class="title margin_top_20">
             <?= Form::label('communication', 'Secondary Communication:'); ?>         </span><br><br>
             <span style="float:left;width:100%" class="section_span margin_top_20">
                
            <?= Form::label('service', 'Service :'); ?>
            <?= Form::input('second_service', $guild->second_comm_service, 
            array('class'=>'profile-input', 'maxlength'=>'25','style'=>'margin-left:20px;','id'=>'second_service','onkeyup'=>'return guildsecond_servicechange();')); ?><br/><br/>
            <?= Form::label('server', 'Server :'); ?>
            <?= Form::input('second_url', $guild->second_comm_url, 
            array('class'=>'profile-input', 'maxlength'=>'25','style'=>'margin-left:25px;','id'=>'second_url','onkeyup'=>'return guildsecond_urlchange();')); ?><br/><br/>
            <?= Form::label('port', 'Port :'); ?>
            <?= Form::input('second_port', $guild->second_comm_port, 
            array('class'=>'profile-input', 'maxlength'=>'10','style'=>'margin-left:40px;','id'=>'second_port','onkeyup'=>'return guildsecond_portchange();')); ?><br/><br/>
            <?= Form::label('password', 'Password :'); ?>
            <?= Form::password('second_password', $guild->second_comm_password, 
            array('class'=>'profile-input', 'maxlength'=>'20','style'=>'margin-left:8px;','disabled'=>'disabled','id'=>'second_password')); ?>
        </span>
                 
        </span>
   
    
        <div id="showguildimg" class="upload_icon" align="left" style="margin-top:0px;">
            <span style="float:left;width:110px">
                <?php
                if (!$guild->guild_logo)
                    $logo = $config_path->path['default_image_path'];
                else
                    $logo = $config_path->path['guild'].$guild->guild_logo;
                ?>
            <?= HTML::image($logo, array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));?>

            </span>
           <input type="hidden" name="profileimage" id="profileimage" value="<?= $guild->guild_logo ?>" />
           <?php
             if ($guild->guild_logo!='default.jpeg'){ 
             ?>
            <span class="choose_button">
                <div  class="button-browse" style="width:150px;"><input type="button" id="profile_image" class="file-upload uploadfile" name="profile_image" onclick="return Setdefaultguildimage('<?= URL::base(); ?>',<?= $guild->guild_id ?>);"><span class="button">Set Default Image</span></div> 
            </span> 
            <?php } ?>

        </div>
        <div id="showdefaultimg" class="upload_icon" align="left" style="margin-top:0px;display: none;">
        <span style="float:left;width:110px"> 
        <img src="<?= URL::base(); ?>public/uploads/guild/default.jpeg" class='rounded_image rounded_image_shadow' id ='prof_img' /> </span>
        </span>
        </div>
 <div class="accept_applicants" style="margin-right:150px;"> 
             <span class="role-text">Accepting Applicants</span>
            <span class="form-checkbox"><?= Form::checkbox('accept_applicant', 1, (bool)$guild->is_accept_applicant, array('style'=>'width:0', 'id'=>'accept_applicant','onclick'=>'return guildaccept();')); ?><label  for="accept_applicant"></label></span>      
     </div>

         
        <div>
             <span style="margin-left:110px;" id="profession_select" align="left" class="section_span lbl_span" style="float:left;width:200px" >
               
                <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('guild_pvp', 1,  (bool)$guild->is_pvp_enabled, array('style'=>'width:0', 'id'=>'pvp','onclick'=>'return guildpvpchange();')); ?><label for="pvp"></label></span>  <span class="role-text" style="padding-left: 45px;">PvE</span><span class="form-checkbox"><?= Form::checkbox('guild_pve', 1, (bool)$guild->is_pve_enabled, array('style'=>'width:0', 'id'=>'pve','onclick'=>'return guildpvechange();')); ?><label for="pve"></label></span><br /><br />
                <span class="role-text">RP</span> <span class="form-checkbox"><?= Form::checkbox('guild_rp', 1, (bool)$guild->is_rp_enabled, array('style'=>'width:0', 'id'=>'rp','onclick'=>'return guildrpchange();')); ?><label for="rp"></label></span> 
          </span>  
            <span style="margin-top:5px;" align="left" class="section_span lbl_span">
                <label for="minibio">Mini Bio</label><br>
                 <?= Form::textarea('guild_bio', $guild->guild_description, 
                        array('class'=>'profile-input bio_input','maxlength'=>'2000', 'id'=>'bio','onkeyup'=>'return guildbiochange();')); ?>          </span>
        </div>
     <div style="float:right;width:200px;">
            <?php if($guild->server_id != NULL) : ?>
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
            <?= Form::select('guildserver_id', $serverList, $guild->server_id, array('class'=>"select-input", 'id'=>'server','onchange'=>'return guildserverchange();'));?>
       </span>
           <?php endif; if($guild->faction_id != NULL): ?>
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
            <?= Form::select('guildfaction_id', $factionList, $guild->faction_id, array('class'=>"select-input", 'id'=>'faction','onchange'=>'return guildfactionchange();'));?>
       </span>
           
            <?php endif; ?>
            
               
            
        </div>
        
     
        <div class="crop_buttons_div" style="float:bottom; margin-left:180px; width:345px;">
             <input id="cancel" type="button"  style="float:right;" value="CANCEL" class="save-button" onclick="return CloseCharacterPopup();"> 
            <input type="button" value="UPDATE" id="guild_save" disabled="disabled" class="post-button-white" style="float:left;" onclick="return Editguilddetails('<?= URL::base(); ?>',<?= $guild->guild_id ?>,<?= $guild->user_id ?>)"> 
            <input id="guild_cancel" type="button"  style="float:right;" value="REMOVE" class="save-button" onclick="return removeguilddetails('<?= URL::base(); ?>',<?= $guild->guild_id ?>,'<?= $guild->guild_name ?>');"> 

        </div> 
        <?= Form::close(); ?> 
