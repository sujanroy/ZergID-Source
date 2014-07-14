<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript">
      $(document).ready(function() {
       $("#keyword").keyup(function() {
          // alert('test');
       });
      });
      
 </script>

<div class="left-title">Options</div>
<?= Form::open('/search/options', array('enctype' => 'multipart/from-data', 'id' => 'profileinfo')); ?>
<span align="left" class="search-span">
<b><?= Form::label('search', 'Search For...', array('class'=>'search-label')); ?></b><br />
<?= Form::input('keyword', $keyword,
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'filer_keyword', 'style'=>"width:235px")); ?>
</span>
<br />
<span align="left" class="search-span" >
<b><?= Form::label('game', 'Game', array('class'=>'search-label')); ?></b><br />
<?php
          $gameList[''] = "Select Game Name";
          foreach ($games as $game):
              $gameList[$game->id] = $game->game_name;
          endforeach;
           
       ?>
       <?= Form::select('game', $gameList, $select, array('class'=>"search-select", 'id'=>'game_name'));?>
</span>
<br />

<div style="width:260px;">
<?= Form::checkbox('zergid', '1', (bool)$zergid, array('style'=>'margin-top:25px; margin-right:10px;', 'id'=>'zergid'))?><b class="search-label">Zerg ID</b><br />
<?= Form::checkbox('character', '1', (bool)$character, array('style'=>'margin-top:10px; margin-right:10px;', 'id'=>'character'))?><b class="search-label">Character</b><br />
<?= Form::checkbox('guilds', '1', (bool)$guild, array('style'=>'margin-top:10px; margin-right:10px;', 'id'=>'guild'))?><b class="search-label">Guild</b><br />
<?= Form::checkbox('zergs', '1', (bool)$zergs, array('style'=>'margin-top:10px; margin-right:10px;', 'id'=>'zergs'))?><b class="search-label">Zergs</b>
<span style="padding-left:110px"><?= Form::button('search', 'Search', array('class'=>'search-button', 'id'=>'zid_search', 'onclick'=>"return zergSearch('".URL::site()."')")); ?></span>
</div>
<div class="left-title" style="font-size:23pt;">Additional Info</div>
<span align="left" class="search-span" style="margin-top:15px">
<b><?= Form::label('class', 'Class', array('class'=>'search-label')); ?></b><br />
<?= Form::input('class', NULL,
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'class', 'style'=>"width:235px")); ?>
</span>
<br />
<span align="left" class="search-span" style="margin-top:15px">
<b><?= Form::label('server', 'Server', array('class'=>'search-label')); ?></b><br />
<?= Form::input('server', NULL,
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'server', 'style'=>"width:235px")); ?>
</span>
<br />
<span align="left" class="search-span" style="margin-top:15px">
<b><?= Form::label('faction', 'Faction', array('class'=>'search-label')); ?></b><br />
<?= Form::input('faction', NULL,
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'faction', 'style'=>"width:235px")); ?>
</span>
<br />
<span align="left" class="search-span" style="margin-top:15px">
<b><?= Form::label('guild', 'Guild', array('class'=>'search-label')); ?></b><br />
<?= Form::input('guild', NULL,
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'guild_name', 'style'=>"width:235px")); ?>
</span>
<br />
<?= Form::close();?>

<hr style="width:90%" size="1" class="line" />
<div align="center" class="logout-button"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png')); ?> </div>
