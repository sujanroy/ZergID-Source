<?= $game_request_popup; ?>

<?= Form::open('', array('enctype' => 'multipart/form-data', 'id'=>'guild_info')); ?>
<div class="right_content">
      <div id="name_block" style="float: left; width: 100%;">
       <span style="width: 70%;float:left" class="title">
         <span class="mandatory">*</span> <?= Form::label('guild_name', 'Name:'); ?>
        <?= Form::input('guild_name', $guild->guild_name, 
                array('class'=>'normal-input','style'=>'width:265px;','maxlength'=>'30', 'id'=>'guild_name')); ?><br/>
       <span class="mandatory">*</span><?= Form::label('game', 'Game:'); ?>     
       <?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->id] = $game->game_name;
          endforeach;
              $gameList['Not Listed'] = "Game not listed";
       ?>
       <?= Form::select('game', $gameList, $guild->game, array('class'=>"game-input", 'id'=>'game', 'onchange'=>'getServerList("'.URL::site().'", "guild")'));?>
       </span>
        </div>
     <div style="float:left" class="accept_applicants"> 
             <span class="role-text">Accepting Applicants</span>
            <span class="form-checkbox"><?= Form::checkbox('accept_applicant', 1, (bool)$guild->is_accept_applicant, array('style'=>'width:0', 'id'=>'accept_applicant')); ?><label  for="accept_applicant"></label></span>      
     </div>
    <div style="float:left; width: 100%">
        <div style="width:200px;float:right;" class="section_span">
          <?= Form::label('minibio', 'Mini Bio'); ?><br />
          <?= Form::textarea('guild_bio', $guild->guild_description, 
                 array('class'=>'profile-input bio_input','maxlength'=>'500','id'=>'guild_bio')); ?>
        </div>
            <div class="upload_icon" align="left" style="margin-top: 30px;">
            <span style="float:left;width:110px">
                <?php
                if (!$guild->guild_logo)
                    $logo = $config_path->path['default_image_path'];
                else
                    $logo = $config_path->path['guild'].$guild->guild_logo;
                ?>
            <?= HTML::image($logo, array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));?>

            </span>
            <?= $image_crop_view; ?>
                <input type="hidden" name="profileimage" id="profileimage" value="<?= $guild->guild_logo ?>" /> 
          </div>
    </div>
        <div id="char_info_block">
        <div  style="width:405px;float:left">
        <span id="server_menu"  style="margin-top:5px" align="left" class="section_span">
            <?php
            foreach ($servers as $server):
                $serverList[$server->id] = $server->server_name;
            endforeach;
            if(empty($serverList)):
                $serverList[''] = "No server available.";
            endif; 
              ?>
            <?= Form::label('server', 'Server'); ?><br />
            <?= Form::select('server', $serverList,  $guild->server, array('class'=>"select-input", 'id'=>'server', 'onchange'=>'getCharacterList("'.URL::site().'", null)'));?>
       </span>
     
         <span id="faction_span">
          
         <?php
            foreach ($factions as $faction):
                $factionList[$faction->faction_id] = $faction->faction_name;
            endforeach;
            if(empty($factionList)):
                $factionList[''] = "No faction available.";
            endif; 
              ?>
         </span>
            <span style="display:none" id="faction_hidden_count"><?=$hidden_faction_count?></span>
            <?php if($faction_count == 0 && $guild->faction_id != NULL): ?>    
            <span id="faction_menu" style="margin-top:5px" align="left" class="section_span" >
            <?= Form::label('faction','Faction'); ?><br />
            <?= Form::select('faction', $factionList,  $guild->faction, array('class'=>"select-input", 'id'=>'faction','onchange'=>'getCharacterList("'.URL::site().'", null)'));?>
      <?php else: ?> 
            <?= Form::select('faction', $factionList,  $guild->faction, array('class'=>"select-input", 'id'=>'faction','style'=>'display:none;','onchange'=>'getCharacterList("'.URL::site().'", null)'));?>
         <?php endif; ?>
            </span>
           
              </div>
            </div> 
        <span align="left" class="section_span margin_top_20" style="float:left;width:100%" >
           <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('pvp', 1,  (bool)$guild->is_pvp_enabled, array('style'=>'width:0', 'id'=>'pvp')); ?><label  for="pvp"></label></span>  <span style="margin-left:30px;" class="role-text">PvE</span><span class="form-checkbox"> <?= Form::checkbox('pve', 1,  (bool)$guild->is_pve_enabled, array('style'=>'width:0', 'id'=>'pve')); ?><label for="pve"></label></span> <span style="margin-left:30px;" class="role-text">RP</span><span class="form-checkbox"> <?= Form::checkbox('rp', 1,  (bool)$guild->is_rp_enabled, array('style'=>'width:0', 'id'=>'rp')); ?> <label for="rp"></label></span>
        </span> 
    <div style="float:left;width:100%">
          <span style="float: right;" class="margin_right_20"><?= Form::submit('create', 'SAVE', array('class'=>'save-button','alt'=>'update', 'onclick'=>'saveGuildInfo("'.URL::site().'",this,"'.$guild->guild_id.'")')); ?>   </span>
        <span style="float:left;width:100%" class="title margin_top_20">
            <?= Form::label('communication', 'Main Communication:'); ?>
         </span>
                 <span style="float:left;width:100%" class="section_span margin_top_20">
            <?= Form::label('service', 'Service'); ?><br/>
            <?= Form::input('service',  $guild->main_comm_service, 
            array('class'=>'profile-input', 'maxlength'=>'25','id'=>'service')); ?><br/><br/>
            <?= Form::label('server', 'Server'); ?><br/>
            <?= Form::input('url',  $guild->main_comm_url, 
            array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'url')); ?><br/><br/>
            <?= Form::label('port', 'Port'); ?><br/>
            <?= Form::input('port', $guild->main_comm_port, 
            array('class'=>'profile-input', 'maxlength'=>'10', 'id'=>'port')); ?><br/><br/>
            <?= Form::label('password', 'Password'); ?><br/>
            <?= Form::input('password', $guild->main_comm_password, 
            array('class'=>'profile-input', 'maxlength'=>'20','id'=>'guild-password')); ?>
        </span>
    </div>
     <div style="float:left;width:100%">
        <span style="float:left;width:100%" class="title margin_top_20">
            <?= Form::label('communication', 'Secondary Communication:'); ?>
         </span>
         <span style="float:left" class="section_span margin_top_20">
            <?= Form::label('service', 'Service'); ?><br/>
            <?= Form::input('second_service', $guild->second_comm_service, 
            array('class'=>'profile-input', 'maxlength'=>'25','id'=>'second_service')); ?><br/><br/>
            <?= Form::label('server', 'Server'); ?><br/>
            <?= Form::input('second_url', $guild->second_comm_url, 
            array('class'=>'profile-input', 'maxlength'=>'25','id'=>'second_url')); ?><br/><br/>
            <?= Form::label('port', 'Port'); ?><br/>
            <?= Form::input('second_port', $guild->second_comm_port, 
            array('class'=>'profile-input', 'maxlength'=>'10','id'=>'second_port')); ?><br/><br/>
            <?= Form::label('password', 'Password'); ?><br/>
            <?= Form::input('second_password', $guild->second_comm_password, 
            array('class'=>'profile-input', 'maxlength'=>'20','id'=>'second_password')); ?>
        </span>
    </div>
    <?= form::close('guild/edit');?>
    <div class="right_content" align="center">
           <span><?php echo  Form::button('update', 'CLOSE GUILD', array('class'=>'close_button','type'=>'button', 'id'=>$guild->guild_id, 'alt'=>$guild->guild_name, 'onclick'=>'deleteGuild("'.URL::base(TRUE, 'https').'",this)'));?></span>
    </div>
    </div>
