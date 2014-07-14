<script src="<?= URL::site('/public/js/jstz-1.0.4.min.js'); ?>" type="text/javascript"></script>
<script>
    $(document).ready(function() {  
    var tz = jstz.determine(); // Determines the time zone of the browser client
    $('#timezone').val(tz.name());
    });
</script>
<p class="form-title">Sign Up</p>
<?= Form::open('home/index', array('id' => 'signup')); ?>
<input type="hidden" id="timezone" value="" name ="timezone" />
<div class="div-input"><?= Form::input('username', HTML::chars(Arr::get($_POST, 'username')), 
        array('class'=>'form-input', 'placeholder'=>'Username', 'maxlength'=>'15', 'id'=>'username', 'onblur'=>'return check_username("'.URL::site(NULL, 'https').'")')); ?><span id="Info"></span><span class="val-loading" id="Loading"><img src="<?php echo URL::site("/public/images/loader.gif") ?>" alt="" /></span></div>
<div class="div-input"><?= Form::input('email', HTML::chars(Arr::get($_POST, 'email')), 
        array('class'=>'form-input', 'placeholder'=>'Email', 'maxlength'=>'50', 'id'=>'user_email', 'onblur'=>'return check_email("'.URL::site(NULL, 'https').'")')); ?><span id="email_info"></span></div>
<div class="div-input"><?= Form::password('password', NULL, 
        array('class'=>'form-input', 'placeholder'=>'Password', 'maxlength'=>'25', 'id'=>'password')); ?></div>
<div class="div-input"><?= Form::password('password_confirm', NULL, 
        array('class'=>'form-input', 'placeholder'=>'Confirm Password', 'maxlength'=>'25', 'id'=>'confirm_password')); ?></div>
<div><?= Form::submit('create', 'SIGN UP', array('class'=>'form-button','id'=>'signupbutton')); ?></div>
<?= Form::close(); ?>
<? if ($message) : ?>
    <h3 class="message">
        <?= $message; ?>
    </h3>
<? endif; ?>
<div class="taken">
    <?= Arr::get($errors, 'zerg_id'); ?>
</div>
<div class="taken">
    <?= Arr::get($errors, 'email'); ?>
</div>
<div class="taken">
    <?= Arr::path($errors, '_external.password'); ?>
</div>
 <div class="taken">
    <?= Arr::path($errors, '_external.password_confirm'); ?>
</div>
 
