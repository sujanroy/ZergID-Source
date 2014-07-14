<div id="msg_box" class="popup_box" style="width:450px; height:200px; margin-left:-70px;">
<div align="center" style="margin-top:40px">
<p style="font-size:33px;" class="popup-title">Yey! Request Submitted!</p>
<p style="margin-top:15px; font-size:16px;">We hear you loud and clear!<br>We will do our best to bring your<br> game to Zerg ID!</p>
</div>    
<a id="msg_close" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>
<div id="popup_box" class="popup_box">	<!-- OUR PopupBox DIV-->
     <?= Form::open('character/gamerequest', array('enctype' => 'multipart/form-data')); ?>
	<span class="popup-title">My game is not listed </span>
     <?= Form::hidden('game_subject', 'My game is not listed', array('id'=>'game_subject')); ?>   
     <?= Form::textarea('game_req', "", 
                        array('class'=>'profile-input popup-input', 'id'=>'game_req')); ?>
        <input type="hidden" value="<?=$user->username;?>" id="username" />
        <span id="bar_load" style="display:none; margin-left:15px;"><?=HTML::image("public/images/loading-bar.gif", array('style'=>'margin-top:25px;'));?></span><span style="float:right;"><?= Form::submit('game_submit', 'SUBMIT', array('class'=>'save-button', 'style'=>'width:115px; margin-top:20px','onclick'=>'return sendGameRequest("'.URL::site().'")')); ?>   </span>
     <span id="errormsg" style="margin-left:38px;margin-top: 23px;float: left;" class="error_msg"></span> 
     <?= Form::close(); ?>
        <a id="close_game_popup" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>	
</div>
