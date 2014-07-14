<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script src="<?=URL::site('/public/js/jPages.js');?>" type="text/javascript"></script>
<?php echo html::style("public/css/gallery.css"); ?>
<?php echo html::script('public/js/jquery.prettyPhoto.js') ?>         
<script type="text/javascript">
$(document).ready(function(){
    var nAgt = navigator.userAgent;
    var osName = navigator.userAgent;
    var str = osName.split(";");
    var macsplit = str[0];
    var mac = macsplit.split("(");
    if ((verOffset=nAgt.indexOf("Firefox"))!=-1) {
        var browserName = "Firefox";
    }
    $('.footer').css({'margin-left':32+'px'});
    if (mac[1] == "Macintosh" && browserName) 
    {
    $('.footer_left').css({'margin-top':0+'px'});
    $('.footer_left').css({'margin-left':-11+'px'});
    }
    else{
    $('.footer_left').css({'margin-top':171+'px'});
    }
    $("area[rel^='media']").prettyPhoto();
    $(".gallery:first a[rel^='media']").prettyPhoto({
        animation_speed:'normal',
        theme:'light_square',
        slideshow:3000, 
        autoplay_slideshow: false
    });
    $(".gallery:gt(0) a[rel^='media']").prettyPhoto({
        animation_speed:'fast',
        slideshow:10000, 
        hideflash: true
    });
});    

  /* when document is ready */
  $(function(){

    /* initiate the plugin */
    $("div.holder").jPages({
      containerID  : "itemContainer",
      perPage      : 8,
      startPage    : 1,
      startRange   : 1,
      midRange     : 5,
      endRange     : 1
    });

  });
</script>
<style>
    .font_bio_madium{
    font-family: "Helvetica-Bold";
    font-size: 13px;
    color:#424242;
    margin-top:20px;
}

.video_play_button {

    position:relative;
    z-index: 10;
    background-repeat:no-repeat;
    display: inline-block;
    margin: -216px 13px auto -46px;

     }
.video_feed 
{
 z-index: 10;
background-repeat:no-repeat;
margin: -154px 38px auto -41px;

}
    </style>
   <div class="right_content">
        <span style="float:left;margin: 20px 20px 0px 0px"> 
         <?php
             if (!$character_detail->character_icon){ 
             ?>    
            <?= HTML::image($config_path->path['default_image_path'], array('class'=>'rounded_image rounded_image_shadow')); } else {?>
            <?= HTML::image($config_path->path['character'].$character_detail->character_icon, array('class'=>'rounded_image rounded_image_shadow')); } ?></span>
       <span style="width: 70%;float:left" class="title">
         <font style="font-size: 1.5em;color:gray"><?=$character_detail->character_name; ?></font><br />
        <span style="color:gray"> <?=$character_detail->game->game_name; ?></span>
       </span>
   </div>     
     
 <div class="tableDiv">     
<table class="rowDiv">
          <tr>
              <td style="width: 110px;"><span> <font class="font_madium"><?php if($character_detail->level): echo $character_detail->level; ?><br /> <font class="div_span">Level</font> <?php endif;?></font></span></td><td><?= HTML::image('/public/images/charspacer.png'); ?></td>
              <td style="width: 220px;"><span><font class="font_madium"><?php if($character_detail->class->class_name): echo $character_detail->class->class_name; ?><br /> <font class="div_span">Class</font> <?php endif; ?></font></span></td><td><?= HTML::image('/public/images/charspacer.png'); ?></td>
              <td style="width: 220px;"><span><font class="font_madium"><?php if($character_detail->server->server_name): echo $character_detail->server->server_name; ?><br /> <font class="div_span">Server</font> <?php endif; ?></font></span></td><td><?= HTML::image('/public/images/charspacer.png'); ?></td>
              <td style="width: 110px;"><span><font class="font_madium">
              <?php if($character_detail->is_pvp_enabled && $character_detail->is_pve_enabled && $character_detail->is_rp_enabled):
                         echo $config_path->player_role1.'/'.$config_path->player_role2.'/'.$config_path->player_role3;
                    elseif($character_detail->is_pvp_enabled && $character_detail->is_pve_enabled):
                         echo $config_path->player_role1.'/'.$config_path->player_role2;
                    elseif($character_detail->is_pvp_enabled  && $character_detail->is_rp_enabled):
                         echo $config_path->player_role1.'/'.$config_path->player_role3;    
                    elseif($character_detail->is_pve_enabled && $character_detail->is_rp_enabled):
                         echo $config_path->player_role2.'/'.$config_path->player_role3;
                    elseif($character_detail->is_pvp_enabled):
                         echo $config_path->player_role1;
                    elseif($character_detail->is_pve_enabled):
                         echo $config_path->player_role2;
                    elseif($character_detail->is_rp_enabled):
                         echo $config_path->player_role3;
                    endif;
              ?>
               <?php if($character_detail->is_pvp_enabled || $character_detail->is_pve_enabled ||$character_detail->is_rp_enabled):?> <br> <font class="div_span">Play Style <?php endif; ?></font> </font></span></td>
          </tr>
      </table>
 </div>
       <?php if($character_detail->faction->faction_name && $character_detail->faction->faction_name != "N/A"): ?>
        <div style="float:left;margin-top:20px; margin-left: 30px;">
         <div style="float: left;" class="columnDiv">
         <p style="width: 120px;padding-left:35px"> Faction</p>
         <p style="width: 440px;">
             <font class="font_madium"><?=$character_detail->faction->faction_name; ?></font></p>
        </div>
        <?php endif; if($character_detail->character->character_role_name): ?>    
        <div style="float: left;" class="columnDiv">
         <p style="width: 120px;padding-left:35px"> Role</p>
         <p style="width: 440px;"><font class="font_madium"><?=$character_detail->character->character_role_name; ?></font></p>
        </div>
        <?php endif; if($guild->guild_name && $guild_member->is_accepted == 1): ?>    
         <div style="float: left;" class="columnDiv">
         <p style="width: 120px;padding-left:35px"> Member of Guild</p>
         <p style="width: 440px;"><font class="font_madium"><?php echo $guild->guild_name; ?></font></p>
        </div>
        <?php endif; if($character_detail->profession != ''): ?>       
        <div style="float: left;" class="columnDiv">
         <p style="width: 120px;padding-left:35px"> Professions</p>
         <p style="width: 440px;"><font class="font_madium"><?=$character_detail->profession->profession_name . ', ' . $character_detail->profession2->profession_name . ', ' . $character_detail->profession3->profession_name ?></font></p>
        </div>
        <?php endif; if($character_detail->mini_bio): ?>    
        <div style="float: left;width:600px;" class="columnDiv">
         <p style="width: 120px;padding-left:35px"> Bio</p>
        <span style="float:left; margin-left:163px;margin-top: -45px;"><p><font class="font_madium"><?=nl2br($character_detail->mini_bio); ?></font></p></span>
        </div>
       <?php endif; ?>     
     </div>
    <hr size="1" class="line-hr" style="width:99%; margin-top:40px;">
    <div style="margin:20px 0 0 0px;float:left">
        <?= $youtube_embed_script_view; ?>
    <span class="title" style="margin-left: 20px;">Uploaded Media</span>
   <div class="media_table1">
         <div id="content" class="defaults">
      <!-- navigation holder -->
      <div align="right" class="holder"></div>
      <!-- item container -->
      <ul class="gallery clearfix" id="itemContainer">
          <?php foreach($media as $media):
          if($media->file_path != "" || $media->file_path != NULL):?>
          <li><?php echo HTML::anchor($config_path->path['media'].$media->file_path, HTML::image($config_path->path['media'].$media->file_path, array('class'=>'media_image' , 'id'=>'media')), array('rel'=>'media[gallery1]', 'alt'=>$media->file_path));?></li>
            <?php else: 
              $embed_code = youtubeEmbedFromUrl($media->youtube_url, 125, 80); ?>
                     
                   <li> <?php echo HTML::image('http://img.youtube.com/vi/'.$embed_code.'/3.jpg', array('class'=>'media_image' , 'id'=>'media'));?>
              <span>
              <?php echo HTML::anchor("http://www.youtube.com/watch?v=".$embed_code, HTML::image('/public/images/rsz_play_white.png', array('class'=>'video_play_button ' , 'style'=>'height:30px;width:30px;','align'=>'center')), array('rel'=>'media[gallery1]','class'=>'video_feed', 'alt'=>$media->file_path));?>
             </span></li>
             <?php endif;
           endforeach; ?>   
      </ul>
         </div>  
    </div>
    <div class="media_table1"></div>
    </div>
   </div>
