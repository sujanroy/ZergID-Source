<script src="<?=URL::site('/public/grid/js/jquery.dataTables.js');?>" type="text/javascript"></script>
 <script type="text/javascript" charset="utf-8">
        $(document).ready(function(){
            $('.display').dataTable({
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
 <ul id="feedtabs" class="shadetabs">
<li><a href="<?= URL::site(); ?>user/followers" rel="#default"style="padding-left: 120px; padding-right: 120px;">Followers</a></li>
<li><a  class="selected"  style="padding-left: 120px; padding-right: 120px;" href="<?= URL::site(); ?>user/following" rel="">Following</a></li>
 </ul>
<div id="all_tab" class="feed-content">
        <span class="large_title">Following <span class="count"><?php if(count($following) > 0): echo count($following); endif; ?></span></span>
       <?php if(count($following) > 0): ?>
        <table id="datatables" class="display">
            <thead>
                <tr id="data_header" style="background:#fff;">
                    <th style="display:none;" width="20%"></th>
                    <th style="display:none;" width="80%"></th>
                    
                </tr>
            </thead>
               <?php foreach ($following as $follow):?> 
            
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
                    <div><a href="/user/others/<?= $follow->linked_id; ?>"><?= ucfirst($follow->username); ?></a> <span class="member-role"><?= $follow->member->role_name;?><span style="float:right; margin-right: 20px;"><input id="<?= $follow->follower_id; ?>" type="button" value="UNFOLLOW" class="feed-attach un-follow" onclick="return unFollow('<?= URL::site() ?>', this)" /></span></span></div>              
                </td>               
            </tr>
                <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>