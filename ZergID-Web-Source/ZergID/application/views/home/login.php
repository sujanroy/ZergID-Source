<script src="<?= URL::site('/public/js/jstz-1.0.4.min.js'); ?>" type="text/javascript"></script>
<script>
    $(document).ready(function() {  
    var tz = jstz.determine(); // Determines the time zone of the browser client
    $('#time_zone').val(tz.name());
    });
</script>
<p class="form-title">Login</p>
 
<?= Form::open('home/index', array('id'=>'login')); ?>
<input type="hidden" id="time_zone" value="" name ="timezone" />
<div class="div-input"><?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), 
        array('class'=>'form-input', 'placeholder'=>'Username', 'id'=>'loginname', 'maxlength'=>'25')); ?></div>
<div class="div-input"><?= Form::password('password', NULL,
        array('class'=>'form-input', 'placeholder'=>'Password', 'id'=>'loginpassword', 'maxlength'=>'25')); ?></div>
<div class="div-input"><?= Form::submit('login', 'LOGIN', array('class'=>'form-button','id'=>'loginbutton', 'onclick'=>'return check_login("'.URL::site().'")')); ?></div>
<div>
   <span style="position:absolute; margin-left:-15px; margin-top:3px;"><input type="checkbox" value="0" id="remember_me" /></span><span class="remember_me" onclick="rememberMeCheck('remember_me')">Remember me</span> <span><?= HTML::anchor('', 'Forgot password?', array('class'=>'forgot_pass', 'id'=>'forgot_password', 'onclick'=>'return loadPasswordPopup("forgot_popup")'))?></span>
 <span id="logInfo"></span><span style="display: none;" id="overlay"></span><span style="display: none;" id="popup"><img src="<?php echo URL::site("/public/images/loading.gif") ?>" /></span>
</div>
<?= Form::close(); ?>
