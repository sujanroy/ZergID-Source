     
<!-- Change password Popup box -->
<div id="change_pass_popup" class="popup_box alpha_login_popup" style="margin-left: -128px; height: 230px;">
    <span class="popup-title" id="popup_title" style="padding-left: 10px;">Change Password</span><br />
    <div style="float:left; margin-top: 20px; height: 60px; margin-left: 10px; margin-right: 30px;">
        <?= Form::open('home/index', array('id' => 'password_form', 'class'=>'password_form')); ?>
        <?= Form::password('current_password', HTML::chars(Arr::get($_POST, 'current_password')), array('class' => 'form-input', 'placeholder' => 'Current Password', 'id' => 'curr_pass', 'maxlength' => '25', 'style' => "border:1px solid #ddd", 'onblur'=>'return checkCurrentPassword("'.URL::site().'")'));
        ?>
<!--        <div align="center" style="margin-top:5px;"> //HTML::anchor('#', 'Forgot Password?', array('id'=>'forgot_pass','style'=>"font-size:13px; font-family:'Helvetica-Bold'; color:#38CBF0;", 'onclick'=>'return openForgotPoupup()'))</div>-->
    </div>
    <div style="folat: right; margin-top: 20px; height: 60px; margin-left: 30px;">
        <?= Form::open('home/index', array('id' => 'login')); ?>
        <?= Form::password('new_password', HTML::chars(Arr::get($_POST, 'current_password')), array('class' => 'form-input', 'placeholder' => 'New Password', 'id' => 'new_password', 'maxlength' => '25', 'style' => "border:1px solid #ddd"));
        ?>
    </div>
    <div style="float:left; height: 60px; margin-left: 10px; margin-top: 5px;">
        <?= Form::open('home/index', array('id' => 'login')); ?>
        <?= Form::password('confirm_password', HTML::chars(Arr::get($_POST, 'confirm_password')), array('class' => 'form-input', 'placeholder' => 'Confirm Password', 'id' => 'confirm_password', 'maxlength' => '25', 'style' => "border:1px solid #ddd"));
        ?>
        <div><span id="login_info"></span></div>
    </div>
    <div style="float:right; margin-right:15px; margin-top: 5px;">
        <?php $password = Kohana::$config->load('myconf'); ?>
        <input style="height: 38px;" type="button" value="SUBMIT" disabled="disabled" class="form-button white_sbutton" id="change_sub_button" onclick="return changePassword('<?= URL::site(); ?>')" />
    </div>
    <div style="margin-top:60px;" id="loading"></div>
    <div class="taken" id="pass_msg" style="height:15px; float:left; margin-left:160px; margin-top:5px; width: 200px; display: none;"></div>
    <?= Form::close(); ?>
    <a class="media-box-close" onclick="hidePasswordPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
</div>

