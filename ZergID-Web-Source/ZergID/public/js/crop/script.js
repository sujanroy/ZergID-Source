//Make global variables for selected image for further usage
var selectImgWidth,selectImgHeight,jcrop_api, boundx, boundy,isError=false;
$(document).ready(function(){
	$("#profile_image").change(function(){
              //  $('#load_img').css({'max-width':300, 'max-height':300});
                var previewId = document.getElementById('load_img');
             // var width = $('#load_img').width();
            //  var height = $('#load_img').height();

	    var thumbId = document.getElementById('thumb');
	    previewId.src = '';
		$('#image_div').hide();
	    var flag = 0;
	    
	    // Get selected file parameters
	    var selectedImg = $('#profile_image')[0].files[0];
	    
	    //Check the select file is JPG,PNG or GIF image
	    var regex = /^(image\/jpeg|image\/png|image\/gif)$/i;
	    if (! regex.test(selectedImg.type)) {
	        $('.img-error').html('Please select a valid image file (jpg, png and gif are allowed)').fadeIn(500);
	        flag++;
	        isError = true;
	    }
	    
	    // Check the size of selected image if it is greater than 250 kb or not
	    else if (selectedImg.size > 2000 * 1024) {
	        $('.img-error').html('The file you selected is too big. Max file size limit is 2 MB').fadeIn(500);
	        flag++;
	        isError = true;
	    }
	    
	    if(flag==0){
            var maskHeight = $(document).height();
            var maskWidth = $(window).width();
            $('#back').hide();
            $('#char_next').hide();
            $('#skip').hide();
            $('#next').hide();
            $('#image_instruction').hide();
            $('#image_block').removeClass();
            $('#char_image_block').removeClass();
            $('.mask').css({
                'width':maskWidth,
                'height':maskHeight
            });
            $('.mask').fadeIn(100); 
            $('.mask').fadeTo("fast",0.8);
            $('#crop_box').fadeIn("slow");
	    isError=false;
	    $('.img-error').hide(); //if file is correct then hide the error message
	    
	    
	    // Preview the selected image with object of HTML5 FileReader class
	    // Make the HTML5 FileReader Object
	    var oReader = new FileReader();
	        oReader.onload = function(e) {

	        // e.target.result is the DataURL (temporary source of the image)
	        	thumbId.src = previewId.src=e.target.result;
	        	
	        	// FileReader onload event handler
	        	previewId.onload = function () {

	            // display the image with fading effect
	            $('#image_div').fadeIn(500);
	            selectImgWidth = previewId.clientWidth; //set the global image width
	            selectImgHeight = previewId.clientHeight;//set the global image height
                    
                //    alert(selectImgWidth);
               //     alert(selectImgHeight);

	            // Create variables (in this scope) to hold the Jcrop API and image size
	           
	            // destroy Jcrop if it is already existed
	            if (typeof jcrop_api != 'undefined') 
	                jcrop_api.destroy();

	            // initialize Jcrop Plugin on the selected image
	            $('#load_img').Jcrop({
	                minSize: [32, 32], // min crop size
	                aspectRatio : 1, // keep aspect ratio 1:1
	                bgFade: true, // use fade effect
	                bgOpacity: .3, // fade opacity
	                onChange: showThumbnail,
	                onSelect: showThumbnail
	            }, function(){

	                // use the Jcrop API to get the real image size
	                var bounds = this.getBounds();
	                boundx = bounds[0];
	                boundy = bounds[1];

	                // Store the Jcrop API in the jcrop_api variable
	                jcrop_api = this;
	            });
	        };
	    };

	    // read selected file as DataURL
	    oReader.readAsDataURL(selectedImg);
	}
	})
})

function showThumbnail(e)
{
$('#crop_save').removeAttr('disabled');
$('#crop_save').removeClass().addClass('save-button');
$('#crop_done').removeAttr('disabled');
$('#crop_done').removeClass().addClass('save-button');
	var rx = 100 / e.w; //155 is the width of outer div of your profile pic
	var ry = 100 / e.h; //190 is the height of outer div of your profile pic
	$('#w').val(e.w);
    $('#h').val(e.h);
    $('#w1').val(e.w);
    $('#h1').val(e.h);
    $('#x1').val(e.x);
    $('#y1').val(e.y);
    $('#x2').val(e.x2);
    $('#y2').val(e.y2);
	$('#thumb').css({
		width: Math.round(rx * selectImgWidth) + 'px',
		height: Math.round(ry * selectImgHeight) + 'px',
		marginLeft: '-' + Math.round(rx * e.x) + 'px',
		marginTop: '-' + Math.round(ry * e.y) + 'px'
	});
}

function validateForm(){
	if ($('#profile_image').val()=='') {
        $('.img-error').html('Please select an image').fadeIn(500);
        return false;
    }else if(isError){
    	return false;
    }else {
    	return true;
    }
}