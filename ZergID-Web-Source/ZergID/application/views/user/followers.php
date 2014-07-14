      
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/ajaxtabs.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    $(document).ready(function(){
        $('.display').dataTable({
            "sPaginationType":"full_numbers",
            "bJQueryUI":true,
            "fnDrawCallback": function(oSettings) {
                if ($('#datatables tr').length < 11) {
                    $('.dataTables_paginate').hide();
                    $('.dataTables_length').hide();
                    $('#datatables_filter').css({'margin-top':10});
                }
            }
        });
        $('#datatables_filter').css({'display':'block'});
    });
    function refresh() {
        location.reload();
    }
</script>

   
 <ul id="feedtabs" class="shadetabs">
<li onclick="refresh();"><a href="#" rel="#default" class="selected" style="padding-left: 120px; padding-right: 120px;">Followers</a></li>
<?php if($profile_id == ""): ?>
<li><a style="padding-left: 120px; padding-right: 120px;" href="<?= URL::site(); ?>user/following" rel="">Following</a></li>
<?php else:?>
<li><a style="padding-left: 120px; padding-right: 120px;" href="<?= URL::site(); ?>user/profile_following/<?= $profile_id; ?>" rel="">Following</a></li>
<?php endif; ?>
 </ul>

    <div id="all_tab" class="feed-content">
        <span class="large_title">Followers <span class="count"><?php if(count($followers) > 0): echo count($followers); endif;?></span></span>
        <?php if(count($followers) > 0): ?>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header" style="background:#fff;">
                    <th style="display:none;" width="20%"></th>
                    <th style="display:none;" width="80%"></th>
                    
                </tr>
            </thead>
               <?php foreach ($followers as $follow):?> 
            
            <tr> 
            <td class="member-td" style="width:110px;">
                  <?php 
            if (!$follow->profile_image_active){
                $profile_image = $config_path->profile_image['default'];
            }
            else {
                $profile_image = $config_path->profile_image[$follow->profile_image_active];
                $profile_image = $follow->$profile_image;
            }
            echo HTML::image($config_path->path['profile'].$profile_image, array('class'=>'rounded_image_small rounded_image_shadow', 'style'=>'margin-left:20px;')); 
            ?>
         
                <td class="member-name member-td">
                    <div><a href="/user/others/<?= $follow->user_id; ?>"><?php echo ucfirst($follow->username); ?></a></div>
                </td>
            </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>

<script type="text/javascript">
var tabs=new ddajaxtabs("feedtabs", "all_tab")
tabs.setpersist(true)
tabs.setselectedClassTarget("link") //"link" or "linkparent"
tabs.init()
</script>