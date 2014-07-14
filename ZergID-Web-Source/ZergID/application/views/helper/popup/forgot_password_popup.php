        
<div id="success_fpopup" class="popup_box alpha_login_popup" style="margin-left:350px; width:600px;">
<div align="center" style="margin-top:50px">
        <p style="font-size:35px;" class="popup-title">Success!</p>
        <p id="suc_msg" style="line-height: 22px;"></p>
</div>
    <a class="media-box-close" onclick="hidePasswordPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
<!-- Forgot password Popup box -->
<div id="forgot_popup" class="popup_box alpha_login_popup" style="margin-left: 378px;">
    <span class="popup-title" id="popup_title" style="padding-left: 10px;">Forgot Password</span><br />
    <div style="float:left; margin-top: 35px; height: 60px; margin-left: 10px;">
        <?= Form::open('home/index', array('id' => 'forgot_form', 'class'=>'password_form')); ?>
        <?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), array('class' => 'form-input', 'placeholder' => 'Username or Email', 'id' => 'user_name', 'maxlength' => '50', 'style' => "border:1px solid #ddd"));
        ?>
        <div><span id="login_info"></span></div>
    </div>
    <div style="float:right; margin-right:10px; margin-top:35px;">
        <?php $password = Kohana::$config->load('myconf'); ?>
        <input type="button" value="SUBMIT" class="form-button" id="alpha_button" onclick="return getForgotPassword('<?= URL::site(); ?>')" />
    </div>
     <div style="margin-top:85px;" id="floading"></div>
    <div class="taken" id="for_pass_msg" style="height:15px; float:left; margin-left:-80px; margin-top:20px; width: 200px; display: none;"></div>
    <?= Form::close(); ?>
    <a class="media-box-close" onclick="hidePasswordPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>
