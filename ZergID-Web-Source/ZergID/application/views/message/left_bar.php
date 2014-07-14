<script src="<?=URL::site('/public/js/jquery.slimscroll.js');?>" type="text/javascript"></script>
<script src="<?=URL::site('/public/js/ajaxtabs.js');?>" type="text/javascript"></script>
<script src="<?= URL::site('/public/grid/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
//    $(document).ready(function(){
//        loadMsgGrid();
//    });
    function loadMsgGrid() {
            $('#testDiv2').slimscroll({
            color: '#D0D0D0',
            height: '650px',
            width: '322px',
            opacity : .5,
            wheelStep : 5
        });
        $('#testDiv2').slimScroll().bind('slimscroll', function(e, pos){
           var msg_count = $('#msg_count').val();
            if(pos == 'bottom' && msg_count > 9) {
                $("#loader").html('<img src="/public/images/lod.gif" alt="loading"><span class="msg_load">Loading...</span>'); 
                $.post("<?= URL::site(); ?>message/load_more_messages", {   
                    last_msg_id: $(".last_msg:last").attr("id"),
                    msg_type: $('#msg_type').val()
                    
                }, function(response){
                    $("#loader").html(""); 
                    $(response).hide().appendTo("div#more_message").fadeIn(1000);
                });
            }
        });
  
//        $('#datatables').dataTable({
//            "sPaginationType":"full_numbers",
//            "bJQueryUI":false,
//            "bSort": false,
//            "bDestroy": true,
//            "iDisplayLength": 10
//        });
//        $('#datatables_length').css({'display':'none'});
//        $('#datatables_info').css({'display':'none'});
//        $('.page_number').css({'display':'none'}); 
//        var oTable = $('#datatables').dataTable();
//        if(oTable.fnGetData().length < 11) {
//            $('.dataTables_paginate').hide();
//        }
//        $('.dataTables_empty').css('display', 'none');
        var url = window.location.href;
        var urlChunks = url.split('/');
        var id = urlChunks[urlChunks.length - 1];
        $('#div'+id).removeClass().addClass('msg-div-active');
        $('#dlt'+id).html('<span><img src="/public/images/icon-delete-white.png" style="margin-top:10px;" onclick="return deleteMessage('+ id + ')"></span>');
    
}
    setTimeout(function(){
        loadMsgGrid();
    }, 200);
    
    function loadinbox() {
       window.location.replace('');
    }
</script>

<style type="text/css">
    .first, .previous, .last, .next {
        color:#fff; padding-top:1px; padding-bottom:1px;; padding-left:5px; padding-right:5px; margin-right:10px; background:#38CBF0; cursor: pointer;
    }
    .first {margin-left: -5px;}
    .next {margin-left: 90px;}
    .dataTables_paginate{
        margin-top:10px; margin-bottom:10px;}
    
    .error_msg{
                background: none repeat scroll 0 0 #F2E98E;
                color: #FF0000;
                font-family: arial;
                font-weight: normal;
                text-align: center;
                width: 270px;
            }

    </style>   
    
    <!-- Success popup -->
    <div id="msg_box" class="popup_box" style="width:550px; height:306px; margin-left: 200px;">
    <div align="center" style="margin-top:120px">
        <p style="font-size:48px;" class="popup-title">Message Sent!</p>
    </div>    
    <a id="msg_close" class="popupBoxClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>
</div>

<!-- New Message Popup box -->
<div id="smsgbox<?= $user->id;?>" class="popup_box" style="margin-top:10px; margin-left:200px; height: 305px;">	<!-- OUR PopupBox DIV-->
    <?= Form::open('message/send_message', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" id="popup_title">New Message</span><br />
    <?= Form::hidden('message_subject', 'New Message', array('id' => 'message_subject')); ?>
    <?php
    $friends_list[''] = "To";
    foreach ($friends as $friend):
        
        if ($friend->character_detail_id == NULL || $friend->character_detail_id == 0 || $friend->character_detail_id == ""): 
            $friends_list[$friend->user_id] = ucfirst($friend->username);
        else:
            $friends_list[$friend->user_id] = ucfirst($friend->character_name).'('.ucfirst($friend->username).')';
        endif;
    endforeach;
    ?>
    <?= Form::select('to', $friends_list, '', array('class' => "select-input", 'id' => 'to', 'style' => 'width:185px; margin-left:15px')); ?> <br />
    <?php
    $character_list[''] = "Send As...";
    $character_list['0'] = ucfirst($zergid->username);
    foreach ($characters as $char):
        $character_list[$char->character_detail_id] = Text::limit_chars($char->character_name .' - '. $char->game->game_name, 35, '...');
    endforeach;
    ?>
    <?= Form::select('sendas', $character_list, '', array('class' => "select-input", 'id' => 'sendeas'.$user->id, 'style' => 'width:185px; margin-left:15px; margin-top:15px;')); ?>
    <?= Form::textarea('message', "", array('class' => 'profile-input popup-input', 'id' => 'message'.$user->id, 'maxlength' => '2000'));
    ?>   
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class' => 'save-button post-btn', 'onclick' => 'return sendMessage("' . URL::site() . '", null, "'.$user->id.'")')); ?></span>
    <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span> 
    <?= Form::close(); ?>
    <a class="popupBoxClose" onclick="hideSendMessage('<?= $user->id; ?>')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
<!--<div style="float:left; margin-top:20px;">
    <input type="button" value="INBOX" id="inbox" class="feed-attach btn-msg-white" style="float:left;" onclick="javascript:window.location.href='/message/index';" />
    <input type="button" value="SENT ITEMS" id="sent" class="feed-attach btn-msg-blue" style="float:right;" onclick="javascript:window.location.href='/message/sent';"  />
</div>-->
 <input type="button" value="COMPOSE NEW" id="compose_new" class="feed-attach btn-send-message" style="width: 155px; margin-left:0px; margin-top:45px;" onclick="showSendMessageBox('<?= $user->id; ?>')" />
<div style ="margin-top:20px;">
<ul id="msgtabs" class="msgtabs">
<li onclick="loadMsgGrid(); loadinbox();"><a href="#" rel="#default" class="selected">Inbox</a></li>
<li><a href="<?= URL::site(); ?>message/sent/<?=$user->id; ?>" id="msg_sent" rel="all_tab">Sent</a></li>
<li><a href="<?= URL::site(); ?>message/garbage/<?=$user->id; ?>" id="msg_garbage" rel="all_tab">Garbage</a></li>
</ul>
<div id="all_tab" class="msg-content"> 
    <?php if ($action == "index"): ?>
    <?= Form::open('/message/index', array('enctype' => 'multipart/from-data', 'id' => 'profileinfo')); ?>   
    <?php
    if($action == 'sent'):
         $msg_sort = "";   
    endif;
    $sort_by = array();
    $sort_by = $config_path->message_sort;
    ?>
<?= Form::select('message_sort', $sort_by, $msg_sort, array('class' => "select-input msg-sort", 'id' => 'message_sort', 'onChange'=>"this.form.submit()")); ?>
<?= Form::close();  endif; ?>      
            <?= $message_view_block; ?>
</div>
  </div>
<hr style="width:100%" size="1" class="line" />
<div align="center" class="logout-button"><?= HTML::anchor('user/logout', HTML::image('public/images/logout.png', array('title'=>'Log Out'))); ?> </div>

<script type="text/javascript">
var tabs=new ddajaxtabs("msgtabs", "all_tab")
tabs.setpersist(true)
tabs.setselectedClassTarget("link") //"link" or "linkparent"
tabs.init();
//$(document).ready(function() {
//         $('#testDiv2').slimscroll({
//            color: '#D0D0D0',
//            height: '700px',
//            width: '322px',
//            opacity : .5,
//            wheelStep : 5
//        });
//        $('#testDiv2').slimScroll().bind('slimscroll', function(e, pos){
//            if(pos == 'bottom') {
//                $.post("<?= URL::site(); ?>message/load_more_messages", {   
//                    last_msg_id: $(".last_msg:last").attr("id")
//                    
//                }, function(response){
//                    $(response).hide().appendTo("div#more_message").fadeIn(1000);
//                });
//            }
//        });
//        });
</script>