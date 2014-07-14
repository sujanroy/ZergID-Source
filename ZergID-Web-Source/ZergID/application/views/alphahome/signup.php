<script type="text/javascript">
    $(document).ready(function() {
        $('#alpha_user_email').attr('placeholder', 'Email Address'); //placeholder in for 10   
    });
    
    function createUser(url) {
        getMask();
        $('#signup_loader').html('<div style="position: absolute; width: 200px; padding-top:30px; padding-bottom:30px; background: #fff; margin-left:205px"><img style="position:absolute; margin-top:-12px"src="/public/images/msg_load_blue.gif"><span style="font-size:13px;padding-left:50px; margin-top:10px">Please wait...</span></div>');
        $.post(url+"AlphaHome/create_user", {
            email: $("#alpha_user_email").val()
            
        }, function(response){
            if(response == 'success') {
                $('#signup_loader').html('');
                $('.mask').hide();
                $('#alpha_signup')[0].reset();
                loadLoginPopup('success_popup');
                $('#success_popup').html('<div align="center" style="margin-top:50px"><span id="popup_title" class="popup-title">Successfully Registered</span><br /><p style="font-size:14px; line-height:22px; padding-top:5px">Thank you for your interest in ZergID.<br> If you are selected to be a tester, we will send you an e-mail with further instruction.</p></div><a class="media-box-close" onclick="hideLoginPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>');
            }
            
        });
        return false;  
    }
</script>
<div id="signup_loader" style="position: absolute; z-index: 9999"></div>
<?= Form::open('AlphaHome/create_user', array('id' => 'alpha_signup')); ?>
<div style="height: 70px;">
<?= Form::input('email', HTML::chars(Arr::get($_POST, 'email')), 
        array('class'=>'form-input', 'placeholder'=>'Email Address', 'maxlength'=>'50', 'id'=>'alpha_user_email')); ?><span id="email_info"></span></div>
<div><?= Form::submit('create', 'SIGN UP', array('class'=>'form-button')); ?></div>
<?= Form::close(); ?>

 