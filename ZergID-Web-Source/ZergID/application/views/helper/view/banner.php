<style type="text/css">
    .upload-browse
{
    height: 25px;
    padding-top: 7px;
    position: relative;
    width: 120px;
    overflow: hidden;
    width:145px; 
    margin-left:-10px; 
    margin-top:-10px;
    padding-left:10px;
}

.upload_tab
{
    filter:alpha(opacity=0);
    opacity: 0;
    width: 102px;
    height: 35px;
    position: absolute;
    top: 0px;
    left: 0px;
    cursor: pointer;
}

</style>

<div id="banner_key" style="position: absolute; float: right; margin-left:450px; ">    
<!--<input class="save-button" type="button" value="Change banner" style="font-size:12px; width:120px; height:25px;" onclick="javascipt:document.getElementById('banner_image').click();"/>-->
<section id="banner_selection" class="main" style="float:left">
    <div class="wrapper-demo">
        <div id="dd" class="wrapper-dropdown-3 save-button" tabindex="1">
            <span>Change banner</span>
            <ul id="ban_menu" class="dropdown" style='padding:0;'>
                <li><a href="#" alt="<?=$guild_id?>" class="dmenu" id="dmenu2"><i class="icon-truck icon-large"></i>Choose existing</a></li>
                <li><a style="height:12px;" href="#" class="dmenu"><div class="upload-browse"><input type="file" class="upload_tab" id="banner_image"   name="banner_image" onchange="setBannerImg(this.form, '<?= URL::site(); ?>', 'banner_load');"/>Upload</div></a></li>
            </ul>
        </div>
				​</div>
</section>
    <span id="save_cancel_existing" style="margin-left:50px; "></span>
<?= Form::hidden('file_name', 'file', array('id'=>'file_name')); ?> 
<?= Form::submit('save', 'Save', array('id'=>'banner_save', 'alt'=>$guild_id, 'class'=>'save-button banner_button', 'onclick'=>'return saveBannerImg("'.URL::site().'", this)')); ?>
<input type="button" id="banner_cancel" class="save-button banner_button"  value="Cancel" style="float:left; margin-left: 40px;" onclick="return cancelBannerImg('<?= URL::site(); ?>', '<?= $banner->file_path; ?>');" />  
</div>

