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
    </head>
    <body class="body-layout">

        <div class="page-container">
            <div id="container">
                <div>
                    <!-- Header for the site -->
                    <div><?= $header_content; ?></div>
                </div>
                <div>
                    <div style="width: 965px;" class="right-container" align="left">
                        <!-- here we load all content -->
                        <div style="width: 965px;" align="left" id="content">
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
