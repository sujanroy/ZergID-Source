<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"></html>

<script src="<?=URL::site('/public/js/popbox.js');?>" type="text/javascript"></script>
 <script src="<?=URL::site('/public/js/jquery.placeholder.js');?>" type="text/javascript"></script>
 <!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
 <!--[if IE 9 ]>    <html class="ie9"> <![endif]-->    
    <script type='text/javascript'>
    $(document).ready(function(){
      $('.popbox').popbox();
    });
  </script>
<!-- Header for the site -->
<div align="center" class="hloade_div"><div class="header_load"><img src="/public/images/white-load.gif" style="position:absolute; margin-left:-5px; "> <span style="padding-left:15px;">Loading..</span></div></div>
<div class="header">
    <div class="logo"> <a href="/admin"><?php echo HTML::image("public/images/zerg_icon.png") ?></a></div>
    <div style="float:left; margin-left:80px; margin-top:10px;">
        <span id="profile_icon"><a id="huser_icon" href="/admin"><?php echo HTML::image("public/images/home_icon.png", array('class' => 'header_icon', 'style'=>'width:33px;')); ?></a></span>  


     <?php if($messages > 0): ?>   
     <div style="margin-left:160px;" class="inner msg-inner">
      <div align="center" class="notify_count"><?= $messages; ?></div>
     </div>
     <?php endif; ?>   
        <span id="message_icon"><a id="hmsg_icon" href="/message"><?php echo HTML::image("public/images/message_white_icon.png", array('class' => 'header_icon')); ?></a></span>  
       <?php 
  if (!$user->profile_image_active){
     echo HTML::anchor('/feeds', HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image_mini rounded_image_shadow', 'style'=>'position:absolute; margin-top:10px; margin-left:10px;')));
 }
 else {
      $profile_image = $config_path->profile_image[$user->profile_image_active];
      $profile_image = $user->$profile_image;
       echo HTML::anchor('/feeds',HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_mini rounded_image_shadow', 'style'=>'position:absolute; margin-top:10px; margin-left:10px;')));
 }
 ?>
        <div class="admin-name"><?= ucfirst($user->username);?></div> 
        
    </div>
<div style="float:left; margin-top:33px; margin-left:40px"><?= HTML::anchor('admin/logout', HTML::image('public/images/logout.png')); ?></div>
   
</div>
<div class="msg">Success message!</div>