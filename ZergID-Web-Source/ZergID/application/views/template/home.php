<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <meta name="language" content="<?php echo I18n::$lang ?>" /> 
        <meta name="keywords" content="Video Games, Videogames, MMO, MMORPG, Xbox One, PS4, World of Warcraft, SWTOR, Tera, RAID, RAIDING, Guilds, League of Legends, MOBA,"/>
        <meta name="description" content="Zerg ID is a social network for MMORPG and MOBA gamers.  Connect with your current and past gaming friends on this video game centric social platform."/>
        <title>Zerg ID - Social Network for Video Games, focused on MMORPGs and MOBAs</title>
        <?php foreach ($styles as $file => $type)
            echo HTML::style($file, array('media' => $type)), PHP_EOL
            ?>
        <?php foreach ($scripts as $file)
            echo HTML::script($file), PHP_EOL
            ?>           
        <!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
        <!--[if IE 9 ]>    <html class="ie9"> <![endif]-->      
	<script type="text/javascript">
         window.history.forward();

          function noBack() {
          window.history.forward();
             }
        </script> 
    </head>
	<body class="layout-body" onload="noBack();" onpageshow="if (event.persisted) noBack();" onunload=""> 
      <div id="wrapper">
            <center>
<?= $header; ?>
                <!--                <hr size="1" align="center"></hr>-->
                <div class="home-block" style="margin-left: -27px;padding-top: 175px;">
                    <div style="float: left;"><?= $signup_view; ?></div>
                    <div style="float:right;"><?= $login_view; ?></div>
                </div>
<?= $footer_content; ?>
            </center>
        </div>
        <?= $forgot_password_popup; ?>
        <div class="mask"></div>
    </body>
</html>
