<?= $game_request_popup; ?>

<?= Form::open('guild/create', array('enctype' => 'multipart/form-data', 'id'=>'guild_info')); ?>
<div class="right_content">
        <div style="float:left;" id="name_block">
       <span style="width: 70%;float:left" class="title">
         <span class="mandatory">*</span> <?= Form::label('guild_name', 'Name:'); ?>
        <?= Form::input('guild_name', '', 
                array('class'=>'normal-input','style'=>'width:265px;','maxlength'=>'30', 'id'=>'guild_name')); ?>
         </span>
       <span style="float:left" class="title">
       <span class="mandatory">*</span><?= Form::label('game', 'Game:',array('style'=>'margin-left:6px')); ?>     
       <?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->id] = $game->game_name;
          endforeach;
              $gameList['Not Listed'] = "Game not listed";
       ?>
       <?= Form::select('game', $gameList, "", array('class'=>"game-input", 'id'=>'game', 'onchange'=>'getServerList("'.URL::site().'", "guild")'));?><br />
      </span>
            
        </div>
  <div style="float:left" class="accept_applicants"> 
            <span class="role-text">Accepting Applicants</span>
            <span class="form-checkbox"><?= Form::checkbox('accept_applicant', 1, "1", array('style'=>'width:0', 'id'=>'accept_applicant')); ?><label  for="accept_applicant"></label></span>
       </span>
  </div> 
    <div style="float:left; width: 100%">
        <div style="width:200px;float:right;" class="section_span">
          <?= Form::label('minibio', 'Mini Bio'); ?><br />
          <?= Form::textarea('guild_bio', "", 
                 array('class'=>'profile-input bio_input','maxlength'=>'500', 'id'=>'guild_bio')); ?>
        </div>
            <div class="upload_icon" style="margin-top: 30px;" align="left" >
            <span id="default_icon" style="float:left;width:110px">
            <?= HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));?>
            </span>
            <?= $image_crop_view; ?>
            <input type="hidden" name="profileimage" id="profileimage" value="" />    
                <div class="media-name" id="image_name"  style="margin-top:8px; display: none;">Profile image cropped and added</div>
           </div>
        
        </div>
        <div id="char_info_block">
        <div  style="width:620px;float:left">
        <span id="server_menu" style="margin-top: 5px;" align="left" class="section_span">
            <?php //
           // foreach ($servers as $server):
           //     $serverList[$server->id] = $server->server_name;
         //   endforeach;
          //  if(empty($serverList)):
                $serverList[''] = "Select Game";
          //  endif; 
              ?>
            <?= Form::label('server', 'Server'); ?><br />
            <?= Form::select('server', $serverList, "", array('class'=>"select-input", 'id'=>'server', 'onchange'=>'getCharacterList("'.URL::site().'", null)'));?>
       </span>
         <span id="faction_menu" style="margin-top: 5px;" align="left" class="section_span" >
            <?= Form::label('faction','Faction'); ?><br />
            <?php
      //      foreach ($factions as $faction):
      //          $factionList[$faction->faction_id] = $faction->faction_name;
      //      endforeach;
      //      if (empty($factionList)):
                $factionList[] = "Select Game";
      //       endif;
            ?>
            <?= Form::select('faction', $factionList, "", array('class' => "select-input", 'id' => 'faction', 'onchange' => 'getCharacterList("' . URL::site() . '", null)')); ?>
       </span>
            <span align="left" class="profile_req_span">
               <span class="mandatory">*</span><?= Form::label('character', 'Character'); ?><br />
                <?php
                $character_list[''] = "Select Your Character";
//                foreach ($characters as $character):
//                    $character_list[$character->character_detail_id] = $character->character_name;
//                endforeach;
                ?>
                    
                <?= Form::select('character', $character_list, "", array('class' => "select-input", 'id' => 'characterlist')); ?><br />
            </span>
        </div>
        </div>   
        <span align="left" class="section_span margin_top_20" style="float:left;width:100%" >
           <span class="role-text">PvP</span><span class="form-checkbox"><?= Form::checkbox('pvp', 1, "", array('style' => 'width:0px', 'id' => 'pvp')); ?><label  for="pvp"></label></span>  <span style="margin-left:30px;" class="role-text">PvE</span><span class="form-checkbox"> <?= Form::checkbox('pve', 1, "", array('style' => 'width:0px', 'id' => 'pve')); ?><label for="pve"></label></span> <span style="margin-left:30px;" class="role-text">RP</span><span class="form-checkbox"> <?= Form::checkbox('rp', 1, "", array('style' => 'width:0px;', 'id' => 'rp')); ?> <label for="rp"></label></span>
        </span> 
        <div style="float:left;width:100%">
            <span style="float:left;width:100%" class="title margin_top_20">
            <?= Form::label('communication', 'Main Communication'); ?>
         </span>
         <span style="float:left;width:100%" class="section_span margin_top_20">
            <?= Form::label('service', 'Service'); ?><br/>
            <?= Form::input('service', '', 
            array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'service')); ?><br/><br/>
            <?= Form::label('server', 'Server'); ?><br/>
            <?= Form::input('url', '', 
            array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'url')); ?><br/><br/>
            <?= Form::label('port', 'Port'); ?><br/>
            <?= Form::input('port', '', 
            array('class'=>'profile-input', 'maxlength'=>'10', 'id'=>'port')); ?><br/><br/>
            <?= Form::label('password', 'Password'); ?><br/>
            <?= Form::input('password', '', 
            array('class'=>'profile-input', 'maxlength'=>'20', 'id'=>'guild-password')); ?>
        </span>
    </div>
     <div style="float:left;width:100%">
        <span style="float:left;width:100%" class="title margin_top_20">
            <?= Form::label('communication', 'Secondary Communication'); ?>
         </span>
         <span style="float:left" class="section_span margin_top_20">
            <?= Form::label('service', 'Service'); ?><br/>
            <?= Form::input('second_service', '', 
            array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'second_service')); ?><br/><br/>
            <?= Form::label('server', 'Server'); ?><br/>
            <?= Form::input('second_url', '', 
            array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'second_url')); ?><br/><br/>
            <?= Form::label('port', 'Port'); ?><br/>
            <?= Form::input('second_port', '', 
            array('class'=>'profile-input', 'maxlength'=>'10', 'id'=>'second_port')); ?><br/><br/>
            <?= Form::label('password', 'Password'); ?><br/>
            <?= Form::input('second_password', '', 
            array('class'=>'profile-input', 'maxlength'=>'20', 'id'=>'second_password')); ?>
        </span>
    </div>
    <div class="right_content">
        <span style="float: right;" class="margin_right_20"><?= Form::submit('create', 'CREATE', array('class'=>'save-button', 'onclick'=>'saveGuildInfo("'.URL::site().'",this,null)')); ?>   </span>
    </div>
    </div> 
<?= form::close();?>
