
<script>
$(document).ready(function() {
    $("#browse_button").click(function () {
     $("#media_icon").trigger('click');
});
$("#media_box").mouseover(function() {
    if($('#youtube_url').val().length > 0)
    {
        disableUploadMedia()
    }
    else if($('#embed_url').val().length > 0)
    {
        activeEmbedScript()
    }    
});
});
</script>

<div id="media_box" class="popup_box" style="top:80px;">	<!-- OUR PopupBox DIV-->
	<span class="popup-title">Add media </span>
        <div style="margin-left:15px; margin-top:10px;">
        <b style="margin-right:15px">Choose image</b>
        <!--<input type="file" id="media_icon" name="media_icon" class="upload_file" onchange="getImageName(this);"/>
        <input id="browse_button" class="browse-button" type="button" value="BROWSE" />-->
        <div  class="button-browse"><input type="file" id="media_icon" class="file-upload" name="media_icon" onchange="getImageName(this);">BROWSE</div>
        </div>
        <div id="medianame" class="media-name" style="float:left; margin-left:150px; margin-top:-25px"></div>
        <div style="margin-top:15px; margin-left:150px; font-weight:bold">OR</div>
        <div style="margin-left:15px; margin-top:15px;">    
        <b style="margin-right:101px;">Youtube URL</b> <?= Form::input('youtube_url', '', 
                array('class'=>'normal-input', 'style'=>'width:335px;', 'id'=>'youtube_url', 'onkeyup'=>'disableUploadMedia()', 'onmouseout'=>'disableUploadMedia()','autocomplete' => 'off')); ?>
        </div>
        <div style="margin-top:17px; margin-left:150px; font-weight:bold">OR</div>
        <div style="margin-left:15px; margin-top:17px;">
         <b style="margin-right:101px;">Embed Script</b> <?= Form::input('embed_url', '', 
                array('class'=>'normal-input', 'style'=>'width:335px;', 'id'=>'embed_url', 'onkeyup'=>'activeEmbedScript()','autocomplete' => 'off')); ?>
        </div>
        <span style="margin-left:410px;"><input type="button" name="media_upload" value="DONE" disabled="disabled" class="post-button-white"  id="media_upload" style='width:115px; margin-top:20px;' onclick='unloadMediaUploadPopupBox();' /></span>

 	<a id="close_media_box" class="media-box-close"><?=HTML::image("public/images/popup-close.gif");?></a>	
        
</div>
