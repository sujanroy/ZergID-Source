<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <meta name="language" content="<?php echo I18n::$lang ?>" />
        <meta name="keywords" content="Video Games, Videogames, MMO, MMORPG, Xbox One, PS4, World of Warcraft, SWTOR, Tera, RAID, RAIDING, Guilds, League of Legends, MOBA,"/>
        <meta name="description" content="Zerg ID is a social network for MMORPG and MOBA gamers.  Connect with your current and past gaming friends on this video game centric social platform."/> 
        <title><?php echo $title ?></title>
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
        <script type="text/javascript">
            //            $(document).ready(function() {  
            //                $('#profileimage').live('change', function(){
            //                });
            //            });
//            function preventBack(){window.history.forward();}
//    setTimeout("preventBack()", 0);
//    window.onunload=function(){null};
        </script>
    </head>
    <body class="body-layout">

        <div class="page-container">
            <div class="bugreport" style="float:right; margin-top:49px;margin-right: 135px;">
            <p><a href="mailto:suggestions@zergid.com" style="color:#38CBF0;text-decoration:underline;">Bug?</a></p>
            </div>
            <div id="container">
                <div>
                    <!-- Header for the site -->
                    <div><?= $header_content; ?></div>
                    <!-- Tutorial Buttons -->
                    <a style="display: none;" id="char_skip" href="" onclick="return false;">Skip!</a>
                    <a style="display: none;" id="char_back" href="" onclick="return false;">Back!</a>
                    <a style="display: none;" id="skip" href="" onclick="return false;">Skip!</a>
                    <a id="back" style="display: none;" href="" onclick="return false;">Back!</a>
                    <a id="char_next" style="display: none;" href="" onclick="return false;">Next!</a>
                    <a id="done" style="display: none;" href="" onclick="return false;">Done!</a>

                    <!-- Tutorial Instruction Blocks -->
                    <div style="display: none;" id="profie_icon_instruction">
                        <p class="instruction-title" style="margin-top:-120px;">Your Profile</p>
                        <p class="instruction-content">This is where you'll find everything about your profile like your Zerg feed, <br /> friends, followers, characters, and more.</p>
                    </div>
                    <div style="display: none;" id="calender_icon_instruction">
                        <p class="instruction-title" style="margin-top:-120px;">Your Calendar</p>
                        <p class="instruction-content">This is where you can see a calendar of all your <br /> events you have coming up. </p>
                    </div>
                    <div style="display: none;" id="message_icon_instruction">
                        <p class="instruction-title" style="margin-top:-120px;">Your Messages</p>
                        <p class="instruction-content">Chat it up! Stay in touch with your friends around Zerg ID. <br /> This is also where you will get notices of friend requests, guild invites, etc.</p>
                    </div>
                    <div style="display: none;" id="helmet_icon_instruction">
                        <p class="instruction-title" style="margin-top:-120px;">Your Guilds</p>
                        <p class="instruction-content">This is how you get to your guilds.</p>
                    </div>
                    <div style="display: none;" id="sidebar_instruction_block">
                        <p class="instruction-title" style="margin-top:-120px;">The Sidebar</p>
                        <p class="instruction-content">The content of this sidebar changes depending on which area of Zerg ID you're in.<br /> Right now you're in your profile, so it's your profile info.</p>
                    </div>
                </div>
                <div>
                    <div id="sidebar_block"><div class="left-container" align="left"> <?= $left_content; ?> </div></div>

                    <div class="right-container" align="left">
                        <!-- here we load all content -->
                        <div align="left" id="content">
                            <div class="header_shadow"></div> 
                            <div style="display:none;" id="arrow_focus" class="focus_arrow"></div>
<?= $content; ?>
                        </div>
                        <!-- no footer added -->
                    </div>
                </div>
                <div align="center"> <?= $footer_content; ?></div> 
            </div>
        </div>
        <div class="mask"></div>
    </body>
</html>
