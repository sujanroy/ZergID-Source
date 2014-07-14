<?php
 $uri = $_SERVER['REQUEST_URI'];
 $explode_uri = explode('/',$uri);
 ?>
<input type="hidden" value="<?=$explode_uri[1];?>" id="twitter_active" name ="twitter_active" />
<script src="<?=URL::site('/public/js/flowplayer.min.js');?>" type="text/javascript"></script>
<script src="<?=URL::site('/public/js/oauthpopup.js');?>" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/public/css/minimalist.css">
<script type="text/javascript">
flowplayer.conf.embed = false;
flowplayer.conf.fullscreen = true;
</script>
<?= $media_resize_script_view; ?>
<?= $youtube_embed_script_view; ?>
<style>
    .loading_img{
        text-align: center;
        vertical-align: middle;
        position: absolute;
        margin-left:350px;
        margin-top:160px;
    }
    object, iframe {
        height: 270px;
        width: 480px;
    }
    #shareas *
    {
    font-family: courier;
    }
</style>
<div id="post_msg_box" class="popup_box" style="width:450px; height:250px; margin-left:-100px;"></div>
<? //= $banner_popup_view; ?>
<div id="upload_box" class="popup_box banner_popup" style="height:370px; overflow: hidden">
<span class="loading_img" id="loading"></span>
<div id="exisiting_banner_id"></div>
<input type="hidden" id="view_id" value="" />
<a id="close_upload_box" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>

<script src="<?=URL::site('/public/js/ajaxtabs.js');?>" type="text/javascript"></script>
<div>
<div id="banner" onmouseover="showBannerKey();" onmouseout="hideBannerKey();">
<?=Form::open('feeds/setbanner/', array('enctype'=>"multipart/form-data")); ?>
<?php if($user_id == "" || $user_id == NULL):?>    
<?= $banner_image_view ?>
<?php endif;
if($banner->file_path == NULL || $banner->file_path == "" || !file_exists($config_path->path['media'].$banner->file_path)): 
$mysock = getimagesize("public/images/wood.png");
echo HTML::image($config_path->path['media'].$banner->file_path,  array('class'=>'banner','style'=>'display:none', 'id'=>'exist_banner_img', imageResize($mysock[0],$mysock[1], 642)));
echo HTML::image("public/images/wood.png", array('class'=>'banner', 'id'=>'banner_img', imageResize($mysock[0],$mysock[1], 642))); else:
$mysock = getimagesize($config_path->path['media'].$banner->file_path);
echo HTML::image($config_path->path['media'].$banner->file_path,  array('class'=>'banner','style'=>'display:none', 'id'=>'exist_banner_img', imageResize($mysock[0],$mysock[1], 642)));
echo HTML::image($config_path->path['media'].$banner->file_path,  array('class'=>'banner', 'id'=>'banner_img', imageResize($mysock[0],$mysock[1], 642))); endif;?>
<div align="center" class="banner_hid_div" id="banner_load"><img src="/public/images/load-blue.gif" /></div>
<?= Form::close(); ?>
</div>
</div>
<div style="float:left" class="main_content">
<div> 
<?php 
//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $config_path->facebook['appId'],
  'secret' => $config_path->facebook['appSecret'],
  'fileUpload' => true,
  'cookie' => true

));
$fbuser = $facebook->getUser();
//$facebook->destroySession();
if(isset($_GET["reset"]) && $_GET["reset"]==1)
{
	$facebook->destroySession();
	header("Location: ".$config_path->facebook['homeurl']);
}
?>  

<?= Form::open('feeds/post/',array('enctype'=>"multipart/form-data", 'id'=>'form_feeds')); ?>
<?php if($user_id == "" || $user_id == NULL):?> 
    
 <?= $media_popup_view; ?>
<?= Form::textarea('feedtext', '', 
        array('class'=>'feed_input','maxlength'=>'2000', 'rows'=>'1', 'cols'=>'50', 'placeholder'=>'Write something for your Zerg feed!', 'id'=>'feedtext')); ?>
<div class="hiddendiv feed_input"></div>
<?php endif; ?>
<div id="feed_options" style="display: none;"> 
<!-- <input class="feed-attach" type="button" value="ATTACH SOME MEDIA" onclick="javascipt:document.getElementById('media_icon').click();"/> -->
<input class="feed-attach" type="button" value="ATTACH SOME MEDIA" id="btn_attach_media" />
<a href="/feeds/facebook_on" id="hfb_unlink" class="fb_unlink" style="display:none;"  onclick="return facebookfeedon('<?= URL::base(TRUE, 'https'); ?>')"><img src="/public/images/fb-gray-icon.png" class="facebook-small-icon" style="margin-top:-24px;" /></a>    
 <a href="/feeds/facebook_destroy_session" id="hfb_link" class="fb_link" style="display:none;"  onclick="return  clearFbSession('<?= URL::base(TRUE, 'https');?>')"><img src="/public/images/fb-blue-icon.png" class="facebook-small-icon" style="margin-top:-24px;" /></a>
    <?php
 if ($fbuser && $twitter_status->facebook_active == 1 && $twitter_status->is_facebook_linked == 1) {
     //  $fbuser = null;
     $logoutUrl = $facebook->getLogoutUrl(array('next' => $config_path->facebook['homeurl']));
     echo HTML::anchor($logoutUrl, HTML::image("public/images/fb-blue-icon.png", array('class' => 'facebook-small-icon', 'onclick' => 'return clearFbSession("' . URL::site() . '");')), array('id' => 'fb_link', 'class' => 'fb_unlink'));
//echo HTML::anchor('/feeds/facebook_connect', HTML::image("public/images/fb-gray-icon.png", array('id'=>'fb_login_btn', 'class'=>'facebook-small-icon', 'onclick'=>'return openFbLoginPopup("'.URL::site().'")')), array('id'=>'fb_link', 'class'=>'fb_unlink'));
 } else {
     if ($fbuser && $twitter_status->is_facebook_linked == 1):
         echo HTML::anchor('/feeds/facebook_on', HTML::image("public/images/fb-gray-icon.png", array('id' => 'fb_login_btn', 'class' => 'facebook-small-icon', 'onclick' => 'return facebookfeedon("' . URL::site() . '")')), array('id' => 'fb_link', 'class' => 'fb_unlink'));
     else:
         echo HTML::anchor('/feeds/facebookfeed_connect', HTML::image("public/images/fb-gray-icon.png", array('id' => 'fb_login_btn', 'class' => 'facebook-small-icon', 'onclick' => 'return openFbfeedLoginPopup("' . URL::base(TRUE, 'https') . '")')), array('id' => 'fb_unlink', 'class' => 'fb_unlink'));
     endif;
 }
 ?>

    <span style="padding-left:0px; padding-right:90px">
        <a href="/feeds/feedtwitter_on" id="htwit_unlink" class="twit_unlink" style="display:none;"  onclick="return Twitterfeedon('<?= URL::site(); ?>')"><img src="/public/images/twit-gray-icon.png" class="twitter-small-icon" style="margin-top:-24px;" /></a>    
        <a href="/feeds/twitter_destroy" id="htwit_link" class="twit_link" style="display:none;"  onclick="return  clearTwitterSession('<?= URL::site(); ?>')"><img src="/public/images/twit-blue-icon.png" class="twitter-small-icon" style="margin-top:-24px;" /></a>
      <?php 
  $session = Session::instance();
  if (count($session->get('access_token')) > 0 && $twitter_status->twitter_active == 1  && $twitter_status->is_twitter_linked == 1) { 
      echo HTML::anchor('/feeds/twitter_destroy', HTML::image("public/images/twit-blue-icon.png", array('class'=>'twitter-small-icon', 'onclick'=>'return clearTwitterSession("'.URL::site().'");')), array('id'=>'twit_link', 'class'=>'twit_link'));
  }
  else {
      if(count($session->get('access_token')) > 0  && $twitter_status->is_twitter_linked == 1):
      echo HTML::anchor('/feeds/feedtwitter_on', HTML::image("public/images/twit-gray-icon.png", array('class'=>'twitter-small-icon', 'onclick'=>'return Twitterfeedon("'.URL::site().'");')), array('id'=>'twit_unlink', 'class'=>'twit_unlink'));
      else:
      echo HTML::anchor('/feeds/feedtwitter_connect', HTML::image("public/images/twit-gray-icon.png", array('class'=>'twitter-small-icon', 'onclick'=>'return openTwitterfeedLoginPopup("'.URL::site().'");')), array('id'=>'twit_unlink', 'class'=>'twit_unlink'));    
      endif;
  }   
//echo HTML::image("public/images/twit-gray-icon.png", array('style'=>'position:absolute; padding-left:40px; margin-top:8px'));?></span>
    <?php
          $character_list[''] = "SHARE AS...";
          $character_list['0'] = ucfirst($zergid->username);
          foreach ($characters as $character):
               $character_list[$character->character_detail_id] =Text::limit_chars($character->character_name  .' - '. $character->game->game_name, 35, '');       
          endforeach;
           
    ?>
   <?= Form::select('shareas',$character_list, '', array('class'=>"feed-select", 'id'=>'shareas'));?>
   <?= Form::submit('post', 'POST', array('id'=>'post', 'style'=>'position:absolute; margin-top:12px;', 'class'=>'post-button-white', 'disabled')); ?>
<div id="media_name" class="media-name"></div>
</div>
  <?= Form::close(); ?>
</div>

<ul id="feedtabs" class="shadetabs">
<li><a id="default_tab" href="#" rel="#default" class="selected">My Friends</a></li>
<li><a href="<?= URL::site(); ?>feeds/mygames/<?= $user_id; ?>" rel="all_tab">My Games</a></li>
<?php if($zergid->feed_type == '1'): ?>
<li><a id="recent_tab" href="<?= URL::site(); ?>feeds/most_recent_feed/<?= $user_id; ?>" rel="all_tab">All Zergs</a></li>
<?php else:?>
<li><a id="popular_tab" href="<?= URL::site(); ?>feeds/most_popular_feed/<?= $user_id; ?>" rel="all_tab">All Zergs</a></li>
<?php endif;?>
<li><a href="<?= URL::site(); ?>feeds/myfeed/<?= $user_id; ?>" rel="all_tab">My Zerg Feed</a></li>
</ul>
<div id="all_tab" class="feed-content"> <?= $feed_view; ?> </div>
</div>
<script type="text/javascript">
$(function() {
$('.load_more').live("click",function() {
var last_msg_id = $(this).attr("id");
var feed_type = $(this).attr("alt");
if(last_msg_id!='end'){
$.post('<?= URL::site(); ?>feeds/feed_more/<?= $user_id; ?>',
{
lastmsg:last_msg_id,
feed:feed_type,
beforeSend: function() { 
$('a.load_more').append('<img src="<?= URL::site(); ?>public/images/facebook_style_loader.gif" />');
}
}
, function(response) {
$(".facebook_style").remove(); 
$(response).hide().appendTo("div#updates").fadeIn(2000);
$(window).scrollTop($('#div'+last_msg_id).offset().top);
$('input, textarea').placeholder();
$( ".popup_box" ).draggable();
 $('#aswift_3').css({'height':'70px'});
 $('#aswift_4').css({'height':'70px'});
}
);
 
}
return false;
});
});

</script>

<script type="text/javascript">
var tabs=new ddajaxtabs("feedtabs", "all_tab")
tabs.setpersist(true)
tabs.setselectedClassTarget("link") //"link" or "linkparent"
tabs.init()
var pathname = window.location.href;
var str = pathname.split("?");
var qstr = str[1];
if(qstr == 'done'){
    $('#default_tab').removeClass('selected');
    $('#popular_tab').removeClass().addClass('selected');
    tabs.expandit(2)
}
</script>
