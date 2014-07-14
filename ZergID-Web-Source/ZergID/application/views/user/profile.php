<html>
<head>
<script src="<?=URL::site('/public/js/oauthpopup.js');?>" type="text/javascript"></script>    
<script type="text/javascript"> 
window.history.forward();
function noBack() { 
 window.history.forward(); 
}
</script>
</head>    
<body onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload="">
<p class="profile_title " style="padding:20px">Edit Profile Info</p>
<div id="image_instruction" style="display:none;">
<p class="instruction-title">Give yourself an avatar!</p>
<p class="instruction-content">This will be your Zerg ID avatar. You can have different<br> ones for each of your characters you add.</p>
</div>
<?php
 $uri = $_SERVER['REQUEST_URI'];
 $explode_uri = explode('/',$uri);
 ?>
<input type="hidden" value="<?=$explode_uri[1];?>" id="twitter_active" name ="twitter_active" />
<div id="success_popup" class="popup_box alpha_login_popup" style="margin-left: -100px;">
<div align="center" style="margin-top:80px">
        <p style="font-size:35px;" class="popup-title">Password successfully changed</p>
    </div>
    <a class="media-box-close" onclick="hidePasswordPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
<?= $change_password_popup; ?>
<?= Form::open('user/profile', array('enctype' => 'multipart/from-data', 'id' => 'profileinfo')); ?>
<div style="height:400px;">
       
<div align="right" style="margin-right:20px; float: right;">
    <a style="display:none; " id="next" href="" onclick="return false;">Next!</a>
    <a style="display: none;" id="character_next" href="" onclick="return false;">Next!</a>
    <?= Form::submit('save', 'Skip!', array('id'=>'prof_skip', 'style'=>'display:none;', 'onclick'=>'return saveProfileInfo("'.URL::site().'")')); ?>
    <?= Form::submit('save', 'Next!', array('id'=>'save', 'style'=>'display:none;', 'onclick'=>'return saveProfileInfo("'.URL::site().'")')); ?>
    <?php if ($profile->personal_info_id):?>
       <?= Form::submit('update', 'SAVE', array('id'=>'update','class'=>'save-button', 'onclick'=>'return saveProfileInfo("'.URL::site().'")')); ?> 
   <?php else:?>
       <?= Form::submit('save', 'SAVE', array('id'=>'save_button', 'class'=>'save-button', 'onclick'=>'return saveProfileInfo("'.URL::site().'")')); ?> 
   <?php endif;?>
</div>
<div id="image_block">    
<div class="profile_icon">
 <span style="float:left;width:115px">
 <?php 
  if (!$user->profile_image_active){
     echo HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));
 }
 else {
      $profile_image = $config_path->profile_image[$user->profile_image_active];
      $profile_image = $user->$profile_image;
       echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image rounded_image_shadow', 'id'=>'prof_img'));
 }
 ?></span>
 <?= $image_crop_view; ?>
    <input type="hidden" name="profileimage" id="profileimage" value="" />
</div>
</div>
<div id="profile_instruction" style="display:none;">
<p class="instruction-title" style="margin-top:-130px;">Tell everyone a little about you</p>
<p class="instruction-content" style="margin-top:20px;">Who is the person behind this Zerg ID? <br/>Feel free to keep this as anonymous as you’d like.</p>
</div>    
<div id="profile_block">
<div class="profile_div">
    <span align="left" class="section_span">
<?= Form::label('firstname', 'First Name'); ?><br />
<?= Form::input('firstname', $profile->first_name, 
        array('class'=>'profile-input', 'maxlength'=>'25', 'id'=>'firstname')); ?></span>
<span align="left" class="section_span">
<?= Form::label('lastname', 'Last Name'); ?><br />
<?= Form::input('lastname', $profile->last_name,
        array('class'=>'profile-input','maxlength'=>'25', 'id'=>'lastname')); ?></span>
<span align="left" class="profile_req_span">

<span class="mandatory">*</span><?= Form::label('email', 'Email Address'); ?><br />
<?= Form::input('email', $user->email, 
        array('class'=>'profile-input','maxlength'=>'30', 'id'=>'email','onkeyup'=>'return check_profileemail("'.URL::site(NULL, 'http').'")')); ?><span class="taken" id="email_info"></span></span>
</div>
    <input type="hidden" id="hidden_user_id" value="<?=$user->id;?>" />
<div class="profile_div">
    <span align="left" class="section_span">
<?= Form::label('bio', 'Bio'); ?><br />
<?= Form::textarea('bio', $profile->mini_bio, 
        array('class'=>'profile-input bio_input','maxlength'=>'2000', 'id'=>'bio')); ?></span>
<span align="left" class="profile_req_span">

<span class="mandatory">*</span><?= Form::label('birthyear', 'Birth Year'); ?>
<?php 
$years = array();

for($i=(date("Y")-13); $i>=(date("Y")-100); $i--) {
     $years[] =$i; 
} $years['0'] ='Birth Year'; ?>
<?= Form::select('birthyear', $years , $profile->birth_year, array('class'=>"select-input", 'id'=>'birthyear', 'onchange'=>'checkBirthYear()'));?>
<span id="birth_info"></span>
</span>
<span align="left" class="section_span" >
<?= Form::label('gender', 'Gender'); ?><br />
<?= Form::select('gender', array(''=>'Gender', 'M' => 'Male', 'F' => 'Female'), $profile->gender, array('class'=>"select-input", 'id'=>'gender'));?>
<br /><br />
</span>
<span align="left" class="section_span" >
<?php  
$country = array();
$country = $config_path->country; ?>
<?= Form::label('country', 'Country'); ?><br />
<?= Form::select('country', $country, $profile->country, array('class'=>"select-input", 'id'=>'country'));?>
</span>
    <?= Form::hidden('unique_email', 0, array('id'=>'unique_email')); ?>
    
    <span align="left" style="margin-top:105px; position:absolute; margin-left:-200px;"><?= HTML::anchor('#', 'Change Password', array('id'=>'change_pass','style'=>"font-size:13px; font-family:'Helvetica-Bold'; color:#38CBF0;", 'onclick'=>'return loadPasswordPopup("change_pass_popup")'))?></span>    
</div>
<?= Form::hidden('is_facebook_share', 0, array('id'=>'is_twitter_share')); ?>
<?= Form::hidden('is_twitter_share', 0, array('id'=>'is_facebook_share')); ?>
<span class="requires-text">*Required Fields</span>
</div>
    <hr size="1" class="line-hr"/>
</div>
<?= Form::close(); ?>
<div id="social_instruction" style="display:none;">
<p class="instruction-title" style="margin-top:-130px;">Link to other social networks</p>
<p class="instruction-content" style="margin-top:20px;">After you link your other social networks, you’ll be able to choose to <br/>share your posts with your friends anywhere they may be. <br/> We will never post anything to these services without your permission.</p>
</div> 
<div id="social_block">
<div style="width:640px; height:180px; margin-top:-50px">
<div class="social-icon" align="center">
 <a href="/feeds/twitter_connect" id="htwit_unlink" class="twit_unlink" style="display:none; color:#D8D8D8;"  onclick="return openTwitterLoginPopup('<?= URL::site(); ?>')"><?=HTML::image("public/images/twit_gray_big_icon.png"); ?><br />Not Linked<br /><font class="social-icon-link">Click to link</font></a>    
 <a href="/feeds/twitter_destroy" id="htwit_link" class="twit_link" style="display:none; color:#D8D8D8;"  onclick="return  clearTwitterSession('<?= URL::site(); ?>')"><?=HTML::image("public/images/twit_blue_big_icon.png"); ?><br />Linked<br /><font class="social-icon-link">Click to unlink</font></a>    
  <?php 
  $session = Session::instance();
  if (count($session->get('access_token')) > 0 && $user->is_twitter_linked == 1) {  ?>
   <a href="/feeds/twitter_destroy" id="twit_link" class="twit_link" style="color:#D8D8D8;" onclick="return clearTwitterSession('<?= URL::site(); ?>')"><?=HTML::image("public/images/twit_blue_big_icon.png"); ?><br />Linked<br /><font class="social-icon-link">Click to unlink</font></a> 
  <?php } else { ?>  
    <a href="/feeds/twitter_connect" id="twit_unlink" class="twit_unlink" style="color:#D8D8D8;"  onclick="return openTwitterLoginPopup('<?= URL::site(); ?>')"><?=HTML::image("public/images/twit_gray_big_icon.png"); ?><br />Not Linked<br /><font class="social-icon-link">Click to link</font></a>
  <?php } ?>
</div>
<div class="social-icon" align="center">
<a href="/feeds/facebook_connect" id="hfb_unlink" class="fb_unlink" style="display:none; color:#D8D8D8;"  onclick="return openFbLoginPopup('<?= URL::site(); ?>')"><?= HTML::image("public/images/fb_gray_big_icon.png"); ?><br />Not Linked<br /><font class="social-icon-link">Click to link</font></a>
<a href="/feeds/facebook_destroy" id="hfb_link" class="fb_link" style="display:none; color:#D8D8D8;"  onclick="return  clearFbSession('<?= URL::site(); ?>')"><?= HTML::image("public/images/fb_blue_big_icon.png"); ?><br />Linked<br /><font class="social-icon-link">Click to unlink</font></a>
        <?php
//Call Facebook API
    $facebook = new Facebook(array(
                'appId' => $config_path->facebook['appId'],
                'secret' => $config_path->facebook['appSecret'],
                'fileUpload' => true,
                'cookie' => true
            ));
    $fbuser = $facebook->getUser();
     if ($fbuser  && $user->is_facebook_linked == 1) {
         $logoutUrl = $facebook->getLogoutUrl(array('next' => $config_path->facebook['homeurl']));?> 
        <a href="<?= $logoutUrl; ?>" id = "fb_link" class = "fb_link" style="color:#D8D8D8;" onclick="return clearFbSession('<?= URL::site(); ?>')"><?= HTML::image("public/images/fb_blue_big_icon.png"); ?><br />Linked<br /><font class="social-icon-link">Click to unlink</font></a>
         <?php } else { ?>
       <a href="/feeds/facebook_connect" id ="fb_unlink" class ="fb_unlink" style="color:#D8D8D8;" onclick="return openFbLoginPopup('<?= URL::site(); ?>')"><?= HTML::image("public/images/fb_gray_big_icon.png"); ?><br />Not Linked<br /><font class="social-icon-link">Click to link</font></a>
    <?php } ?>	
</div>
</div>
</div>




<!--	<input type="file" class="uploadfile" id="profile_image">
	<div class="newupload">Upload an image?</div>

	<div class="example">

		
			NOTE: To change the aspect ratio, look in crop.css
			The class 'default' links the div to the innit(); function
		
		<div class="default">
			<div class="cropMain"><div class="crop-container" style="width: 320px; height: 320px;"><div class="crop-overlay" style="z-index: 6000; top: 0px; left: 0px;"></div><img class="crop-img" src="./jQuery & Canvas Image Cropper_files/one.jpg" style="z-index: 5999; top: -149.8px; left: -622.6650049850448px; width: 1402.7676969092722px; height: 549.6px;"></div></div>
			<div class="cropSlider horizontal"><a style="left: 43%; z-index: 1;"><div class=""></div></a><input type="hidden" name="" value="2.29"></div>
			<button class="cropButton">Crop</button>
		</div>
		<canvas width="150" height="150" id="canvas">

	</canvas></div>-->






</body>
</html>
