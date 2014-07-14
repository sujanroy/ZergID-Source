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

    function addrolename(){
     
              var rolename = $('#role_name').val(); 
             if ( $.trim( $('#role_name').val() ) == ''){
                 jAlert("Please enter the role name");
                 return false;
             }
              $.post("/admin/add_roles", {       
                    role_name: rolename
                }, function(response){
//                    $('#role_append').html(rolename);
                   $('#role_name').val('');
                  location.reload();
                });
            
         
          
        
				
	}

    </script>

<div id="editrolebox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 155px;">	<!-- OUR PopupBox DIV-->
   
    <span class="popup-title" style="font-size:28px; margin-left:-18px; " id="popup_title">Edit Role</span><br /><br /><br />
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="edit_roleid" id="edit_roleid" class="normal-input" />      

       <h5>Role:</h5><br />
  <div style="margin-left:100px; margin-top:-45px;"><input type="text" value="" style="width:180px; line-spacing:25px;" name="edit_rolename" id="edit_rolename" onkeyup ="return check_professionname()" class="normal-input" /><!--<span id="editprofessionInfo"></span>--><!--<span class="val-loading" style="display:none;" id="editprofessionLoading"><img src="<?php //echo URL::site("/public/images/loader.gif") ?>" alt="" /></span>--></div>
   
    
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><div style="float:right; margin-top:50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn','style' => 'width:150px;','id'=>'editprofessionbt','onclick' => 'return edit_rolevalidate();')); ?></div>


   
    <a class="popupGameClose" onclick="hideEditGameMessage('')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
    

<span id="character_title" class="large_title">Manage Roles <span id="character_count"><?= count($role_list); ?></span> </span>
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

<div id="guild_details_grid"></div>
<div id="guild_details_grid_loading"></div>

  <div id="hide_character_grid">
       <span style="float:left;margin-left: 40px;margin-bottom: 30px" class="title">
       <?= Form::label('role_name', 'Add Role:'); ?>
        <?= Form::input('role_name', '', 
                array('class'=>'normal-input', 'maxlength'=>'72', 'id'=>'role_name','style'=>'width:175px')); ?>           
       </span>
      
      <div style="float:left; margin-top: -4px;margin-left: 30px">
          <?= Form::submit('save', 'ADD', array('class'=>'save-button', 'id' => 'char_save', 'onclick' => 'return addrolename();')); ?> 
         </div>
      
<?php if (count($role_list) > 0): ?>
    <div align="center">
    
        <table id="datatables" class="display" style="width:970px; margin-top:12px;float: left">
            <thead>
                <tr id="data_header">
                    <th style="text-align: center;"  width="20%">Character role</th>
                   
                    <th  width="15%">Created Date/Time</th>
                    <th  width="18%" style="width:130px;">Edit</th>
                    <th  width="18%" style="width:130px;">Delete</th>
                    
                </tr>
            </thead>
            <?php
            foreach ($role_list as $role):
                
            ?>
                <tr  class="row">
                    <td  style="text-align: center; margin-left:-5px;">
                        <span class="character_name"><?php echo $role->role_name; ?></span>
                        <?php
                        $character_create_date = date('Y-m-d', strtotime($role->created_date));
                        $current_date = date('Y-m-d');
                        if ($character_create_date == $current_date):
                           $date = "Today at " . date('h:i A', strtotime($role->created_date));
                       else:
                           $date = date("M d, Y h:i A ", strtotime($role->created_date));
                       endif;
                       
                       $last_login = $role->last_modified_date;
                        ?> 

                    </td>
                   
                    <td><span><?= $date ?></span></td>
                   
               <td width="15%">
                <?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditrolepopup("' . $role->role_name . '","' . $role->role_id . '")')); ?>             
               </td>
               <td width="15%">
                <?=HTML::image("public/images/delete_icon.png", array('class'=>'delete_icon','onclick'=>'deleteRole("'.URL::base(TRUE, 'https').'", "'.$role->role_id.'", "'.$role->role_name.'")')); ?>
               </td>
                 
                </tr>
<!--                <span id="role_append"></span>-->
          
                <?php
                
            endforeach;
            ?>
        </table>

    </div>
<?php endif; ?>
  </div>

