<script src="<?= URL::site('/public/grid/js/admin.jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
<link rel="stylesheet" href="<?= URL::site('/public/css/admincss.css'); ?>" />
<script src="<?= URL::site('/public/js/jquery.alerts.js'); ?>" type="text/javascript"></script>
<link rel="stylesheet" href="<?= URL::site('/public/css/jquery.alerts.css'); ?>" />
<style>.popup_box { 
    display:none; /* Hide the DIV */
    _position:absolute; /* hack for internet explorer 6 */  
    background:#FFFFFF;  
    margin-top: 10px;
    z-index:9999; /* Layering ( on-top of others), if you have lots of layers: I just maximized, you can change it yourself */
    border:1px solid #fff;  	
    padding:15px;  
    font-size:15px;

}
.popup_box{
    margin-left: -130px; 
    min-height:235px;  
    width:550px;  
    position:absolute;
}



/*#items a:hover {
    background-color:#F0F0F0;
    border-bottom: 2px solid #555555;   
}*/


body { font-family: Arial, Sans-serif; padding: 0 0px; }
	.field { width: 100%; float: left; margin: 0 0 20px; }
	.field input { margin: 0 0 0 20px; }
	h3 span { background: #444; color: #fff; padding: 3px; }
	pre { background: #f4f4f4; }

	/* Used for the Switch effect: */
	.cb-enable, .cb-disable, .cb-enable span, .cb-disable span { background: url(/public/images/switch.gif) repeat-x; display: block; float: left; }
	.cb-enable span, .cb-disable span { line-height: 30px; display: block; background-repeat: no-repeat; font-weight: bold;font-size: 11px; }
	.cb-enable span { background-position: left -90px; padding: 0 10px; }
	.cb-disable span { background-position: right -180px;padding: 0 10px; }
	.cb-disable.selected { background-position: 0 -30px; }
	.cb-disable.selected span { background-position: right -210px; color: #fff; }
	.cb-enable.selected { background-position: 0 -60px; }
	.cb-enable.selected span { background-position: left -150px; color: #fff; }
	.pointer { cursor: pointer; }

</style>
<script>
    $(document).ready(function(){
    $('#datatables').dataTable({
        "sPaginationType":"full_numbers",
        "bJQueryUI":true,
        "aoColumnDefs": [{
            'bSortable': false, 
            'aTargets': [0,1,2,3]
            }]
    });
    var oTable = $('#datatables').dataTable();
    $('.dataTables_paginate').css({
        'float':'left'
    });
    $('.dataTables_length').css({
        'margin-right':'486px'
    });
    $('#datatables_filter').css({
        'display':'block',
        'margin-left':'126px',
        'padding-left':'685px'
    });
    $('.dataTables_info').css({
        'display':'block',
        'float':'right'
    });
    if(oTable.fnGetData().length < 1) {
        $('.dataTables_paginate').hide();
        $('.dataTables_length').hide();
    }
});

    function deactiveuser(userId){
        if($('#enable'+userId).hasClass('cb-enable') && $('#enable'+userId).hasClass('selected')){
            
         jConfirm("Are you sure you want to De-activate this User?", 'Confirmation', function(confirm) {
         if (confirm) {
            
              $.post("/admin/deactivate_user", {       
                    userid: userId
                }, function(response){
                    if(response == "deactive"){
                $('#enable'+userId).removeClass('selected');
                $('#disenable'+userId).addClass('selected');
                $('#enable'+userId).addClass('pointer');
		$('#disenable'+userId).removeClass('pointer');   
            }
                });
            }
          });
          
        }
				
	}


    function activeuser(userId){
        if($('#disenable'+userId).hasClass('cb-disable') && $('#disenable'+userId).hasClass('selected')){
            
            jConfirm("Are you sure you want to Activate this User?", 'Confirmation', function(confirm) {
            if (confirm) {
            
              $.post("/admin/activate_user", {       
                    userid: userId
                }, function(response){
                    if(response == "active"){
                $('#enable'+userId).addClass('selected');
                $('#disenable'+userId).removeClass('selected');
                $('#disenable'+userId).addClass('pointer');
                $('#enable'+userId).removeClass('pointer');
	        }
                });  
                }
             });
        }       		
	}


    </script>


<span id="character_title" class="large_title">Deleted User <span id="character_count"><?= count($user_list); ?></span> </span>
      <div id="editcharacterbox" class="popup_box" style="margin-top:-100px; margin-left:180px; height: 580px; width:580px;">	<!-- OUR PopupBox DIV-->
          <div id="loading"></div>
          <div id="char_info"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
 <div id="deletecharacterbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="char_del_info" style="font-size: 68px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>
<div id="editsuccesscharacterbox" class="popup_box" style="margin-top: 10px; margin-left: 350px; width: 350px;">	<!-- OUR PopupBox DIV-->
          <div align="center" class="title" id="char_edit_info" style="font-size: 68px;color:gray; margin-top:80px"></div>
          <a class="popupGameClose" onclick="return popupCharacterEditSuccessClose();"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
      </div>

<div id="manage_user_grid"></div>
<!--<div id="deleteduser_details_grid_loading"></div>-->

  <div id="hide_deleteduser_grid">
  <div style="width:940px;" align="right"> <span class="radio_class"><input type="radio"  name="deleteduserlist" value="1"  onclick="ShowUserlist('<?= URL::base(); ?>');" class="checkbox" style="margin-right:10px;"><label for="deleteduser" style="font-size:15px;">Manage User</label></span> <span class="radio_class"><input type="radio"  name="charaguildlist" value="2" checked="checked" class="checkbox" style="margin-right:10px;"><label for="evnt_members"  style ="color: #71bdf0; font-size:15px;">Deleted User</label></span></div>
  <div>
      
<?php if (count($user_list) > 0): ?>
    <div align="center">
    
        <table id="datatables" class="display" style="width:970px; margin-top:12px;">
            <thead>
                <tr id="data_header">
                    <th style="text-align: center;"  width="20%">Username </th>
                    <th  width="22%" style="margin-left:20px;">Email Address </th>
                    <th  width="23%">Created Date/Time</th>
                    <th  width="15%">Last Login</th>
                    
                   
                </tr>
            </thead>
            <?php
            foreach ($user_list as $user):
                if ($user->user_type != 2):
                    if ($user->is_active == 1):
                $active_class = "pointer";
                $deactive_class = "selected";
            else:
                $active_class = "selected";
                $deactive_class = "pointer";
            endif;
            ?>
                <tr  class="row">
                    <td  style="text-align: center; margin-left:-5px;">
                        <span class="character_name"><?php echo $user->username; ?></span>
                        <?php
                        $character_create_date = date('Y-m-d', strtotime($user->created_date));
                        $current_date = date('Y-m-d');
                        if ($character_create_date == $current_date):
                           $date = "Today at " . date('h:i A', strtotime($user->created_date));
                       else:
                           $date = date("M d, Y h:i A ", strtotime($user->created_date));
                       endif;
                       
                       $last_login = date("M d, Y h:i A ", $user->last_login);
                        ?> 

                    </td>
                    <td><span><?= $user->email; ?></span></td>
                    <td><span><?= $date; ?></span></td>
                    <td><span><?= $last_login ?></span></td>
                   
              
                 
                </tr>
          
                <?php
                endif;
            endforeach;
            ?>
        </table>

    </div>
<?php endif; ?>
  </div>
</div>

