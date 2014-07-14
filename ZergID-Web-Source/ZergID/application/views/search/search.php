

<span class="large_title">Search Results 
    <?php //$total_count = count($zergid)+count($character_list)+count($guild_list)+count($feeds);
    $total_count = $zergid['numFound'] + $character_list['numFound'] + $guild_list['numFound'] + $feeds['numFound'];
    ?>
    <span class="search-count"><?php  echo $total_count;  ?></span></span>
    <div id="search_load" style="position:absolute; margin-left:250px; margin-top:-10px;"></div>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#datatables').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "aaSorting": [],
            "iDisplayLength": 15
        });
         $('.dataTables_length').css({'display':'none'});
        // $('.dataTables_info').css({'display':'none'});
         $('.dataTables_paginate').css({'margin-left': 220+'px' });
         
    })

</script>
<style type="text/css">
    .first, .previous, .last, .next {
        color:#fff; padding-top:1px; padding-bottom:1px;; padding-left:5px; padding-right:5px; margin-right:10px; background:#38CBF0; cursor: pointer; text-decoration: none;
    }
    .first {margin-left: -5px;}
    .next {margin-left: 20px;}
    .dataTables_paginate{
        margin-top:10px; margin-bottom:10px;}
    .previous {
     margin-right:15px;   
    }
    .ui-state-disabled{
        color:#D3D3D3;
    }
        object, iframe {
        height: 270px;
        width: 480px;
    }
    </style> 
    <?= $youtube_embed_script_view; ?>
<?php if($total_count > 0): ?>
<div id="search_content">
    <table id="datatables" class="display">
        <thead>
            <tr id="data_header" style="display: none">
                <th width="100%" style="padding-left: 30px;">ZergID</th>
            </tr>
        </thead>
        <?php if($zergid['numFound'] > 0): 
            $zergid = end($zergid);
            ?>
        <tr><td><span class="small-title">Zerg ID</span></td></tr>
        <tr>
            <td id="data_header" style="font-weight:bold;">
                <div style="float:left; padding-left: 30px; width:40%">ZergID</div>
            <div style="float:left">Top Characters</div>
            </td>
        </tr>
        <?php foreach ($zergid as $zergid): ?>
        <tr class="row">
            <td>
                <div class="character_name" style="float:left; padding-left: 30px; width:40%"><?php if(isset($zergid['zerg_name'])): echo HTML::anchor('/user/others/'. $zergid['id'], ucfirst($zergid['zerg_name']), array('class'=>"edit_character")); endif;?></div>
                <div class="top-chars" style="float:left;"><?php if(isset($zergid['char_name'])): echo $zergid['char_name']; endif;?></div>
            </td> 
        </tr>
        <?php endforeach; endif; if($character_list['numFound'] > 0):
            $character_list = end($character_list);
            ?>
        <tr>
            <td style="padding-top:30px"><span class="small-title">Characters</span></td>
        </tr>
        <tr>
            <td id="data_header" style="font-weight:bold;">
                <div style="float:left; width:35%; padding-left:30px;">Name</div>
                <div style="float:left; width:20%;">Game</div>
                <div style="float:left; width:20%;">Server</div>
                <div style="float:left; width:20%;">Faction</div>
            </td>
        </tr>
         <?php foreach ($character_list as $character):?>
        <tr class="row">
            <td>
                <div class="top-chars" style="float:left; width:35%; padding-left:30px;"><?php echo HTML::anchor('/character/view/'. $character['character_detail_id'], ucfirst($character['charactername']), array('class'=>"edit_character",'style'=>'width:210px;margin-left:-10px'));?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($character['game_name'])):echo $character['game_name']; endif; ?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($character['server_name'])): echo $character['server_name']; endif;?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($character['faction_name']) && ($character['faction_name']) != "N/A"): echo $character['faction_name']; endif;?></div>
            </td>
        </tr>
        <?php endforeach; endif; if($guild_list['numFound'] > 0): 
            $guild_list = end($guild_list);
            ?>
        <tr>
            <td style="padding-top:30px"><span class="small-title">Guilds</span></td>
        </tr>
        <tr>
            <td id="data_header" style="font-weight:bold;">
               <div style="float:left; width:35%; padding-left:30px;">Name</div>
                <div style="float:left; width:20%;">Game</div>
                <div style="float:left; width:20%;">Server</div>
                <div style="float:left; width:20%;">Faction</div>
            </td>
        </tr>
         <?php foreach($guild_list as $guild):?>
        <tr class="row">
            <td>
                <div class="top-chars" style="float:left; width:35%; padding-left:30px"><?php if($user->id == $guild['user_id']):$guild_url = '/guild/view/'. $guild['guild_id'];else:$guild_url = '/guild/profile/'. $guild['guild_id'];
endif; ?><?php echo HTML::anchor($guild_url, ucfirst($guild['guild_name']), array('class'=>"edit_character",'style'=>'width:210px;margin-left:-10px'));?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($guild['game_name'])):echo $guild['game_name']; endif;?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($guild['server_name'])): echo $guild['server_name']; endif;?></div>
                <div class="top-chars" style="float:left; width:20%;"><?php if(isset($guild['faction_name']) && ($guild['faction_name']) != "N/A"): echo $guild['faction_name']; endif;?></div>
            </td>
        </tr>
        <?php endforeach; endif; if($feeds['numFound'] > 0):
            $feeds = end($feeds);
            ?>
        <tr>
  <td style="padding-top:30px;">
       <span class="small-title">Zergs</span>  
  </td>
        </tr>
        
<?php foreach ($feeds as $feed) : ?>
        <tr>
            <td>
 <div id="div<?= $feed['id']; ?>" style="margin-top:30px;">
           <div class="feed_icon" align="left"> 
            <?php 
            if (!isset($feed['profile_image_active'])){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
           //     $profile_image = $config_path->profile_image1;
                $profile_image = $feed['profile_image1'];
            }
            if(!isset($feed['character_icon'])) {
               $character_image = $config_path->path['default_image_path'];
            }
            else {
                $character_image = $config_path->path['character'].$feed['character_icon'];
            }
            if(!isset($feed['character_name'])):    
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_small rounded_image_shadow')); 
            else:
                echo HTML::image($character_image, array('class'=>'rounded_image_small rounded_image_shadow'));
            endif; ?>
           </div> 
         <div  class="feed" align="right">
         <?php if(!isset($feed['character_name'])): ?>    
         <div class="title"><?= HTML::anchor('user/others/'.$feed['user_id'], ucfirst($feed['username'])); ?></div>
         <?php else: ?>
         <div class="title"><?= HTML::anchor('user/others/'.$feed['user_id'], ucfirst($feed['character_name'])); ?> <span class="feed-charname"><?=$feed['username']?>'s Character</span></div>
         <?php endif; ?>
         <?php 
         $feed_date = date('Y-m-d', strtotime($feed['last_modified_date']));
         $current_date = date('Y-m-d');
         if($feed_date == $current_date):
             $date = "Today at ". date('h:i A', strtotime($feed['last_modified_date']));
         else:
             $date = date("M d, Y",strtotime($feed['last_modified_date']));
         endif;
         ?>
         <span class="feed-date"><?=$date;?></span>
         <a href="<?= URL::site(); ?>feeds/view/<?php echo $feed['feed_id']; ?>">
        <p class="feed-text" style="word-wrap:break-word;">
                 <?php 
               echo nl2br($feed['feed_text']); ?></p>
   <?php if(isset($feed['file_path'])): 
          $file_extension =  substr(strchr($feed['file_path'], '.'), 1);
          if($file_extension == "jpg"): ?>    
         <div><?php echo HTML::image($config_path->path['media'].$feed['file_path'], array('class'=>'feed-media-image')); ?></div>
         <?php else: ?>
         <div style="margin-top:15px; width: 480px; height: 270px;" class="flowplayer" data-swf="flowplayer.swf" data-ratio="0.4167">
         <video>
         <source type="video/<?=$file_extension?>" src="/<?=$config_path->path['media'].$feed['file_path']?>">
         </video>
         </div>
         <?php endif; elseif(isset($feed['youtube_url'])):
                $embed_code = youtubeEmbedFromUrl($feed['youtube_url'], 480, 270); ?>
         <div class="ywrapper" id="vid_wrapper_<?=$feed['feed_id'];?>"  style="width:480px;height:270px;" onclick='return playYotubeVideo("<?= $feed['feed_id']; ?>", "<?=$embed_code?>", this)'>
             <img class="absolute" src="http://i.ytimg.com/vi/<?=$embed_code; ?>/hqdefault.jpg" />
             <!--<img style="position:absolute;" src="/public/images/play-button.png" />-->
             <div class="play-button">...</div>
         </div>  
         <?php endif; ?>
         </a>
          </div>
 </div>
<?php  endforeach; ?>
</div>       
            </td>
        </tr>
        <?php endif; ?>
    </table>
</div>
    <?php endif;?>
