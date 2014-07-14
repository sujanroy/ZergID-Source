<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <meta name="language" content="<?php echo I18n::$lang ?>" /> 
        <meta name="keywords" content="Video Games, Videogames, MMO, MMORPG, Xbox One, PS4, World of Warcraft, SWTOR, Tera, RAID, RAIDING, Guilds, League of Legends, MOBA,"/>
        <meta name="description" content="Zerg ID is a social network for MMORPG and MOBA gamers.  Connect with your current and past gaming friends on this video game centric social platform."/>
        <title>Zerg ID - Social Network for Video Games, focused on MMORPGs and MOBAs</title>
        <?php
        foreach ($styles as $file => $type)
            echo HTML::style($file, array('media' => $type)), PHP_EOL
            ?>
        <?php
        foreach ($scripts as $file)
            echo HTML::script($file), PHP_EOL
            ?>           
        <!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
        <!--[if IE 9 ]>    <html class="ie9"> <![endif]-->   
        <script>
            (function($,W,D)
            {
                var ALPHASIGNUP = {};

                ALPHASIGNUP.UTIL =
                    {
                    setupFormValidation: function()
                    {
                        //form validation rules
                        $("#alpha_signup").validate({
                            rules: {
                                email: {
                                    required: true,
                                    email: true
                                }
                            },
                            messages: {
                                email: "Please enter a valid email address" 
                            },
                            submitHandler: function(form) {
                                createUser('<?= URL::site(); ?>');
                            }
                        }); 
                    }
                }
    
     
                //when the dom has loaded setup form validation rules
                $(D).ready(function($) {
                    ALPHASIGNUP.UTIL.setupFormValidation();
                });
            })
            (jQuery, window, document);
            /** User Login ajax function **/
 
            function checkSinlePassword(url, data){
                var password = $("#single_password").val();
                if(password == "") {
                    $('#login_info').css('display', 'block');
                    $('#login_info').html('<span class="taken">Please provide a password</span>');
                }
                else if(password != data) {
                    $('#login_info').css('display', 'block');
                    $('#login_info').html('<span class="taken">Invalid Password</span>');
                }
                else {
                    // window.location.replace(url+'home');
                    $.post(url+"AlphaHome/create_session", {
                        data:password
            
                    }, function(response){
                        window.location.replace(url+'home'); 
                    });
                }
                return false;
            }  


            function loadLoginPopup(Id) {
                var maskHeight = $(document).height();
                var maskWidth = $(window).width();
                $('.mask').css({
                    'width':maskWidth,
                    'height':maskHeight
                });
                $('.mask').fadeIn(100); 
                $('.mask').fadeTo("fast",0.8);
                $('#'+Id).fadeIn("slow");
                return false;
            }
            function hideLoginPopup() {
                $('.mask').hide();
                $('.alpha_login_popup').hide();
                $('#login_info').css('display', 'none');
                $('label.error').css('display', 'none');
            }
   
            $(document).ready(function() {
                $('.form-input').keydown(function() {
                    $('#login_info').css('display', 'none');
                }); 
            });

        </script>
    </head>
    <body class="layout-body">
        <div id="alpha_wrapper">
            <!-- Login Popup box -->
            <div id="login_popup" class="popup_box alpha_login_popup">	<!-- OUR PopupBox DIV-->
                <span class="popup-title" id="popup_title" style="padding-left: 10px;">Password</span><br />
                <?php $password = Kohana::$config->load('myconf');?>
                <?= Form::open('#', array('id' => 'alpha_login', 'onsubmit'=>"return checkSinlePassword('".URL::site()."', '".$password["single_password"]."')")); ?>
                <div style="float:left; margin-top: 35px; height: 60px; margin-left: 10px;">
                    <input type="password" id="single_password" maxlength="25" class="form-input" style="border:1px solid #ddd" placeholder="Password" />
                    <div><span id="login_info"></span></div>
                </div>
                <div style="float:right; margin-right:10px; margin-top:35px;">
                    <input type="button" value="SUBMIT" class="form-button" id="alpha_button" onclick="return checkSinlePassword('<?= URL::site(); ?>', '<?=$password["single_password"];?>')" />
                </div>
                <?= Form::close(); ?>
                <a class="media-box-close" onclick="hideLoginPopup();"><?= HTML::image("public/images/popup-close.gif"); ?></a>	
            </div>
            <div id="success_popup" class="popup_box alpha_login_popup">

            </div>
            <center>
                <div class="home-block">
                    <div style="padding-top: 400px;"><?= $signup_view; ?></div>  
                    <p class="alpha_login_link">If you've been invited click
                        <?php 
                        $value = Cookie::get('value');
                        echo $value;
                        if ($value == NULL):
                            ?>
                            <a style="color:#38CBF0;" href="" onclick="return loadLoginPopup('login_popup');">here</a>
<?php else: ?>
                            <script>window.location.replace('<?=URL::site();?>home')</script>                
<?php endif; ?>
                    </p>
                </div>

                <div style="margin-top:38px;"><?= $footer_content; ?></div>
            </center>
        </div>
        <div class="mask"></div>
    </body>
</html>
