<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
<?php if(count($guild_members) > 0) { ?>
<span id="guild_mem_cnt" class="large_title">Guild Members <?= count($guild_members); ?></span>
<span id="guild_mem_del_cnt" style="display:none" class="large_title">Guild Members <span id="guildcnt"></span></span>
<span id="noguild_mem" style="display:none"><span class="large_title">Guild Members </span>
<div class="large_title" style="margin-top:100px; font-size:30px;" align="center">No members are available</div></span>

<div class="scroll_bar">
        <table id="guild_memberstbl" width="500px;" class="display">
            <thead>
                <tr style="background:#fff;">
                    <th style="display:none;" width="20%"></th>
                    <th style="display:none;" width="60%"></th>
                    <th style="display:none;" width="20%"></th>
                    
                </tr>
            </thead>
               <?php foreach ($guild_members as $guild_members):?> 
            
            <tr id="member<?= $guild_members->guild_member_id; ?>" onmouseover="showOperators('<?= $guild_members->guild_member_id ?>', '<?= $role->guild_role_id ?>')" onmouseout="hideOperators('<?= $guild_members->guild_member_id ?>')"> 
            <td class="member-td">
                <?php if(($guild_members->character_icon)== NULL): ?>
            <?= HTML::image($config_path->path['default_image_path'], array('class' => 'rounded_image_small rounded_image_shadow', 'id' => 'char_img', 'style' => 'margin-left:25px;width:50px;height:50px;')); ?>
                    <?php else: ?>
                        <?= HTML::image($config_path->path['character'] . $guild_members->character_icon, array('class' => 'rounded_image_small rounded_image_shadow', 'id' => 'char_img', 'style' => 'margin-left:20px;width:50px;height:50px;')); ?>
                    <?php endif; ?>    
                </td>
                <td class="member-name member-td"><?= $guild_members->character_name; ?><span class="member-role" id="role<?= $guild_members->guild_member_id; ?>"><?= $guild_members->role_name; ?></span></td>
                <td class="member-td" style="width:25%;">
                    <?php //
                  //  $flag = 0;
                   // if ($role->guild_role_id != 3):
                   //     if ($role->guild_role_id == 1 && $role->guild_role_id != $guild_members->guild_role_id):
                    //        $flag = 1;
                    //    elseif ($role->guild_role_id != 1 && $role->guild_role_id == 2 && $guild_members->guild_role_id == 3):
                    //        $flag = 1;
                    //    endif;
                  //  endif;
                  //  if ($flag != 0):
                        ?>
                       
                    <?php //endif;  ?>
                    <?php if($guild_members->guild_role_id != 1) {?>
              <a href="#" id="<?= $guild_members->guild_member_id ?>" alt="member" onclick='return removeGuildMember("<?= URL::base(TRUE, 'https'); ?>", "<?= $guild_members->character_detail_id ?>", "<?= $guild_members->guild_role_id ?>", "<?= $guild_members->guild_id ?>", "<?= $guild_members->user_id; ?>", this)'><?= HTML::image('public/images/delete_icon.png') ?></a><?php } ?>
                </td>
            </tr>
           
                <?php endforeach; ?>
        </table>
    </div>
<?php } else { ?>
<span class="large_title">Guild Members </span>
<div class="large_title" style="margin-top:100px; font-size:30px;" align="center">No members are available</div>
<?php } ?>

<script>
    $('.scroll_bar').slimscroll({
        color: '#38CBF0',
        width: '500px',
        height: '400px',
        opacity : .7,
        wheelStep : 5,
        railVisible: true
    });
</script>











