<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo substr(I18n::$lang, 0, 2); ?>" lang="<?php echo substr(I18n::$lang, 0, 2); ?>"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
        <meta name="language" content="<?php echo I18n::$lang ?>" /> 
        <title><?php echo $title ?></title>
        <?php foreach ($styles as $file => $type)
            echo HTML::style($file, array('media' => $type)), PHP_EOL
            ?>
        <?php foreach ($scripts as $file)
            echo HTML::script($file), PHP_EOL
            ?>       
       <style>
           .admin_right-container{
    background-color: #FFF;
    min-height:920px;
    width:970px;
    float:right;
    padding-bottom:40px;
    margin-bottom:20px;
}
.admin_header_shadow {
    background-image: url('../../public/images/headershadow.png');
    background-repeat:repeat-x;
    width: 100%;
    height:19px;
    margin-top:-5px;
    padding-left: 330px;
}
           </style>
    </head>
    <body class="body-layout">
      
        <div class="page-container">
            <div id="container">
                <!-- Header for the site -->
                 <div><?= $header_content; ?></div>


               
                <div class="admin_right-container" align="left">
                    <!-- here we load all content -->
                    <div align="left" id="content">
                        <div class="admin_header_shadow"></div> 
                        <div align="center">
    <p style="" id="items">
         <a href="/admin/manage_user">Manage User</a>
              |          
<!--         <a>Manage User</a>
         | -->
         <a href="/admin/manage_character">Guild/Character</a>
<!--         | 
         <a>Manage Media</a>
         | 
         <a>Addition Request</a>-->
         | 
         <a href="/admin/add">Manage Games</a>
         | 
         <a href="/admin/manage_roles">Manage Roles</a>  
         | 
         <a href="/admin/manage_content">Manage Content</a> 
<!--         <a>Manage Roles</a>-->
         | 
         <a href="/admin/manage_feeds">Manage Feeds</a>
<!--         | 
         <a>Manage Content</a>
         | 
         <a>Manage Adds</a>
         | 
         <a>Fake Word</a> -->
        
     </p>     
</div>
                        <div style="display:none;" id="arrow_focus" class="focus_arrow"></div>
<?= $content; ?>
                    </div>
                    <!-- no footer added -->
                </div>
            </div></div>
        <div class="mask"></div>
    </body>
</html>
