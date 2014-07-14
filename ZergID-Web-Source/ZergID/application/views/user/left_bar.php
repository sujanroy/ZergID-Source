<script>
    var url = window.location.href;
    var urlChunks = url.split('/');
    var screen_nxt = urlChunks[4];
    $(document).ready(function(){
    if(screen_nxt == "add?signup" ) {
        $('#opacity_ads').css({'opacity':'0.30'});
        $('#opacity_ads_def').css({'opacity':'0.30'});
    }
});

 </script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<?php
if(strlen($user->username) > 12):
    $font_size = '42px;';
else:
    $font_size = '35pt;';
endif;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div style="display:none;" id="character_instruction">Let's add your first character!</div>
<div align="right" class="top-right-padding"> <?php echo html::anchor('/user/', HTML::image("public/images/edit_profile_icon.png"), array('style'=>'font-size: 20px;','title'=>'Edit Profile'));?></div>
<div class="title-big" style="margin-top:-20px; font-size:<?=$font_size;?>"><?= HTML::anchor('/feeds',ucfirst($user->username), array('class'=>'anchor')); ?></div>
<div style="margin-top:20px; height: 90px;">
 <span style="float:left;width:100px">
  <?php
  if (!$user->profile_image_active){
     echo HTML::anchor('/feeds', HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow','title'=>'Profile Picture')));
 }
 else {
       $profile_image = $config_path->profile_image[$user->profile_image_active];
      $profile_image = $user->$profile_image;
       echo HTML::anchor('/feeds',HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image rounded_image_shadow','title'=>'Profile Picture')));
 }
 ?></span>
 <a href="<?= URL::site(); ?>user/followers"><div class="span-shot" align="center"><span class="left-count"><?= count($followers); ?></span><br /> Followers</div></a>
 <a href="<?= URL::site(); ?>user/friends"><span class="span-shot"><span class="left-count"><?= count($friends); ?></span><br /> Friends</span></a>
</div>
<span class="bio_text" id="profile-bio-text">
    <?php
    if($profile->mini_bio)
        echo '<pre>'.$profile->mini_bio.'</pre>';
    ?>
</span>
<span id="bio-text"></span><!--append mini-bio after ajax save-->

<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Top Characters</span>
   <span id="top_character_list" class="listing"><br />

     <?php foreach ($character as $character):
         if($character->server->server_name)
         {
             $server_name = ' - '.$character->server->server_name;
         }
         else
         {
             $server_name = '';
         }
       echo "<div>".HTML::anchor('/character/edit/'.$character->character_detail_id, '<span style="font-weight:bold">'.$character->character_name.'</span>'." - ".'<span style="font-style:italic">'.$character->game->game_name.'</span>'.$server_name, array('class'=>'anchor','id'=>'top_char'.$character->character_detail_id))."</div>";
       endforeach;
       if (!count($character)):
       echo "<div class='no_char'>No top characters selected</div>";
        endif;
     ?>
       <div style="display: none;" id='no_char'>No top characters selected</div>
    </span>

 <span style="display: none;" id="charcter_block"><?php echo html::anchor('/character/add?signup/', "ADD CHARACTER", array('class'=>"edit_link", 'id'=>'add_character'));?></span>
 <span id="character"><?php echo html::anchor('/character/add/', "ADD CHARACTER", array('class'=>"edit_link",'style'=>'width:110px;', 'id'=>'add_character'));?></span>
 <span style="text-align:right"><?php echo html::anchor("/character/", 'FULL LIST', array('class'=>"edit_link",'style'=>'width:61px;margin-left:112px;','id' => 'char_full_list'));?></span>

</div>
<hr style="width:90%" size="1" class="line" />
<div style="float:left">
    <span class="left-header">Top Guilds</span>
    <span id="top_guild_list" class="listing">
     <?php foreach ($guild as $guild):
       echo "<div>".HTML::anchor('/guild/view/'.$guild->guild_id, '<span style="font-weight:bold">'.$guild->guild_name.'</span>'." - ".'<span style="font-style:italic">'.$guild->game->game_name.'</span>', array('class'=>'anchor','id'=>'top_guild'.$guild->guild_id))."</div>";
       endforeach;
       if (!count($guild)):
       echo "<div class='no_guild'>No top guilds selected</div>";
       endif;
     ?>
        <div style="display: none;" id='no_guild'>No top guilds selected</div>
    </span>
    <span class="edit_link"><?php echo html::anchor('/guild/add/', "START A NEW GUILD", array('class'=>"edit_link",'style'=>'width:130px;', 'id'=>'add_guild'));?></span><span class="edit_link"  style="text-align:right"><?php echo html::anchor("/guild/", 'FULL LIST', array('class'=>"edit_link",'style'=>'width:61px;margin-left:80px;'));?></span>
</div>
<hr style="width:90%" size="1" class="line" />
<div align="center" class="logout-button" title="Log Out"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png')); ?> </div>
<?php if($advs->is_checked == "1"):?>
<div id="opacity_ads" class="advertisment" align="center">
 <!-- Video Games -->
<ins class="adsbygoogle"
     style="display:inline-block;
width:250px;height:250px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="2882744924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<?php else:?>
<?php if($advs->is_checked == "2"):?>
<div id="opacity_ads_def" class="advertisment" align="center">
    <?php echo HTML::image($config_path->path['advertisement']); ?>
</div>
<?php else: ?>
<div id="opacity_ads" class="advertisment" align="center">
<!-- Video Games -->
<ins class="adsbygoogle"
     style="display:inline-block;
width:250px;height:250px"
     data-ad-client="ca-pub-2801466784240223"
     data-ad-slot="2882744924"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
<div id="opacity_ads_def" class="advertisment" align="center">
    <?php echo HTML::image($config_path->path['advertisement']); ?>
</div>
<?php endif;endif; ?>

