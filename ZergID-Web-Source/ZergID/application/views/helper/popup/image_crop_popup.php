<link rel="stylesheet" type="text/css" href="/public/css/crop.css" rel="stylesheet" media="all" />
<script src="<?=URL::site('/public/js/crop.min.js');?>" type="text/javascript"></script>
<?= Form::open('character/save', array('enctype' => 'multipart/form-data', 'id'=>'characterinfo')); ?>
<span class="choose_button"> <p style="color:#333333;font-family: Helvetica-Bold">Choose a new profile pic</p> 
<!--    <input type="file" id="profile_image" class="upload_file uploadfile"  name="profile_image"  onchange="return load_crop_popup(this.form, '<?= URL::site(); ?>');"/>
 <input class="browse-button" type="button" value="BROWSE" onclick="javascript:document.getElementById('profile_image').click()" />-->
<div  class="button-browse"><input type="file" id="profile_image" class="file-upload uploadfile" name="profile_image" onchange="return load_crop_popup(this.form, '<?= URL::site(); ?>', '<?= $directory; ?>');"><span class="button">BROWSE</span></div>
</span> 
<input type="hidden" name="directory" id="directory" value="<?= $directory; ?>" />
<div class="img-error" style="display: none;"></div>
<br/>

<!-- Crop Popup Box -->
<div id="crop_box" class="crop_popup_box crop_popup">
<span class="popup-title" id="popup_title">Crop Image</span>    
<div id="crop_div" style="display:none;">
	<div style="margin-left:60px;" class="example">
		<div class="default">
			<div  class="cropMain"><div class="crop-container" style="width: 320px; height: 320px;"><div class="crop-overlay" style="z-index: 6000; top: 0px; left: 0px;"></div><img class="crop-img" src="./jQuery & Canvas Image Cropper_files/one.jpg" style="z-index: 5999; top: -149.8px; left: -622.6650049850448px; width: 1402.7676969092722px; height: 549.6px;"></div></div>
			<div class="cropSlider horizontal"><a style="left: 43%; z-index: 1;"><div class=""></div></a><input type="hidden" name="" value="2.29"></div>
		</div>
       </div>
<div class="crop_buttons_div">
    <input type="button" value="CANCEL" id="crop_cancel" class="save-button" style="float:left;" onclick="return cropImageCancel('<?= URL::site() ?>', '<?= $directory; ?>')">
    <?php if ($id != NULL): ?> <input id="crop_save" type="button"  style="float:right;" value="SAVE" class="save-button" onclick="return <?= 'save' . $view; ?>Image('<?= URL::site(); ?>', <?= $id; ?>, this);">
    <?php else: ?>
    <input type="button" value="DONE" id="crop_done" class="save-button" style="float:right;" onclick="return cropImageDone('<?= URL::site(); ?>', '<?= $directory; ?>')"> 
    <?php endif; ?>     
</div>

<span id="crop_save_load" class="crop_image_save"><?= HTML::image('/public/images/small_load.gif'); ?><span style="position:absolute; margin-left:10px;">Image saving...</span></span>
<a id="crop_close" class="crop_close" onclick="return cropImageCancel('<?= URL::site() ?>', '<?= $directory; ?>')"><?=HTML::image("public/images/popup-close.gif");?></a>
</div>
<div id="crop_load" align="center" style="margin-top:100px; display: none;"><img src="/public/images/loading.gif" style="margin-bottom:10px" /><br /> Please wait...</div>
</div>
<?= Form::close(); ?>
<script type="text/javascript">
    var one=new CROP;
    one.init(".default");
    one.loadImg("img/one.jpg");
</script>
