<span class="large_title">Guild Members <?= count($guild_members); ?></span>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('#datatables').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "fnDrawCallback": function(oSettings) {
                if ($('#datatables tr').length < 11) {
                    $('.dataTables_paginate').hide();
                    $('.dataTables_length').hide();
                    $('#datatables_filter').css({'margin-top':-10});
                }
            }
        });
        $('#datatables_filter').css({'display':'block'});
    });
</script>
<div>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header" style="background:#fff;">
                    <th style="display:none;" width="20%"></th>
                    <th style="display:none;" width="50%"></th>
                    <th style="display:none;" width="30%"></th>
                    
                </tr>
            </thead>
               <?php foreach ($guild_members as $guild_members):?> 
            
            <tr onmouseover="showOperators('<?= $guild_members->guild_member_id ?>', '<?= $role->guild_role_id ?>')" onmouseout="hideOperators('<?= $guild_members->guild_member_id ?>')"> 
            <td class="member-td">
                <?php if(($guild_members->character_icon)== NULL): ?>
            <?= HTML::image($config_path->path['default_image_path'], array('class' => 'rounded_image_small rounded_image_shadow', 'id' => 'char_img', 'style' => 'margin-left:25px')); ?>
                    <?php else: ?>
                        <?= HTML::image($config_path->path['character'] . $guild_members->character_icon, array('class' => 'rounded_image_small rounded_image_shadow', 'id' => 'char_img', 'style' => 'margin-left:20px')); ?>
                    <?php endif; ?>    
                </td>
                <td class="member-name member-td" id="member<?= $guild_members->guild_member_id; ?>"><?= HTML::anchor('/character/view/'.$guild_members->character_detail_id, $guild_members->character_name); ?><span class="member-role" id="role<?= $guild_members->guild_member_id; ?>"><?= $guild_members->role_name; ?></span></td>
                <td class="member-td" style="width:25%;">
                    <?php
                    $flag = 0;
                    if ($role->guild_role_id != 3):
                        if ($role->guild_role_id == 1 && $role->guild_role_id != $guild_members->guild_role_id):
                            $flag = 1;
                        elseif ($role->guild_role_id != 1 && $role->guild_role_id == 2 && $guild_members->guild_role_id == 3):
                            $flag = 1;
                        endif;
                    endif;
                    if ($flag != 0):
                        ?>
                        <div style="margin-left: 25px; display: none;" id="op<?=$guild_members->guild_member_id;?>">
                            <span id="<?= $guild_members->guild_member_id ?>" onclick='promote("<?= URL::base(TRUE, 'https'); ?>", "<?=$role->guild_role_id ; ?>", this)'><?= HTML::image('public/images/up-arrow.png', array('style' => 'margin-left:5px')) ?> <span class="prom-link">PROMOTE</span></span><br />
                            <span id="<?= $guild_members->guild_member_id ?>" onclick='demote("<?= URL::base(TRUE, 'https'); ?>", this)'><?= HTML::image('public/images/down-arrow.png', array('style' => 'margin-left:5px')) ?> <span class="prom-link">DEMOTE</span></span><br />
                            <a href="#" id="<?= $guild_members->guild_member_id ?>" alt="member" onclick='return removeMember("<?= URL::base(TRUE, 'https'); ?>", "<?= $guild_members->character_detail_id ?>", "<?= $guild_members->guild_role_id ?>", "<?= $guild_members->guild_id ?>", "<?= $guild_members->user_id; ?>", this)'><?= HTML::image('public/images/delete_icon.png') ?> <span class="delete-link">REMOVE</span></a>
                        </div> 
                    <?php endif; ?>
            
                </td>
            </tr>
                <?php endforeach; ?>
        </table>
    </div>













