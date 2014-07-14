<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div style="display:none;" id="character_instruction">Let's add your first character!</div>
<div align="right" class="top-right-padding"> <?php echo html::anchor('/user/', HTML::image("public/images/edit_profile_icon.png"), array('style'=>'font-size: 20px;'));?></div>
<div class="title-big" style="margin-top:-20px;"><?= HTML::anchor('/feeds',ucfirst($user->username), array('class'=>'anchor')); ?></div>
<div style="margin-top:20px; height: 90px;">
 <span style="float:left;width:100px"> 
  <?php 
  if (!$user->profile_image_active){
     echo HTML::anchor('/feeds', HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow')));
 }
 else {
      $profile_image = $config_path->profile_image[$user->profile_image_active];
      $profile_image = $user->$profile_image;
       echo HTML::anchor('/feeds',HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image rounded_image_shadow')));
 }
 ?></span>
</div>
<span class="bio_text">
    <?php 
    if($profile->mini_bio)
        echo $profile->mini_bio; 
    ?>
    
</span>
<hr style="width:90%" size="1" class="line" />
<div align="center" class="logout-button"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png')); ?> </div>
<div class="advertisment" align="center">
    <?= HTML::image($config_path->path['advertisement']); ?>
</div>