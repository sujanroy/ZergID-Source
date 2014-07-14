<script>
    function showEditGameBox(Id) {
       alert(Id);
        getGameMask();
        $('#smsgbox').fadeIn("slow");
        return false;
    }
    
    function hideEditGameMessage(Id) {	
        $('#smsgbox'+Id).fadeOut(200);
        $('.mask').hide();
    }  
    
    function getGameMask() {
    var maskHeight = $(document).height();
    var maskWidth = $(window).width();
    $('.mask').css({
        'width':maskWidth,
        'height':maskHeight
    });
    $('.mask').fadeIn(100); 
    $('.mask').fadeTo("fast",0.8); 
}
</script>
<div id="smsgbox" class="popup_box" style="margin-top:10px; margin-left:200px; height: 305px;">	<!-- OUR PopupBox DIV-->
    <?= Form::open('message/send_message', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" id="popup_title">New Message</span><br />
   
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:25px;')); ?></span><span style="float:right;" id="frnd_button"><?= Form::submit('btn_submit', 'SUBMIT', array('class' => 'save-button post-btn', 'onclick' => 'return sendMessage("' . URL::site() . '")')); ?></span>

    <?= Form::close(); ?>
   
    <a class="popupBoxClose" onclick="hideEditGameMessage('')"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
 <input type="button" value="COMPOSE NEW" id="compose_new" class="feed-attach btn-send-message" style="width: 155px; margin-left:0px; margin-top:45px;" onclick="showEditGameBox('1')" />