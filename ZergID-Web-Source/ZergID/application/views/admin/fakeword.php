 <script src="../../public/js/adminjs.js"></script>
<style>
    .table_heading
{
margin-left:12px;
margin-bottom: -30px;


color: #424242;
font-family: "HelveticaNeueLTCom25UltraLight";
font-size: 29pt;
line-height: 100px;
}

tr.row td {
    border-bottom: 1px solid #ECECEC;
    font-size: 13px;
    height: 50px;
}
.add_word{
  float:right;  
  border-color: #DDDDDD;
    border-style: solid;
    border-width: thin;
    height:25px;
    float:right;
    margin-left:14px;
    margin-right:-72px;
    margin-top:-4px;
        }
 .new_button
 {
  float:right;
  margin-right:-170px;
  margin-top: 6px;
      font-size: 15px;
    height: 25px;
    width: 80px;
    border: solid 1px #CCC;
    background-color:#00BFFF;
    font-weight: bold;
    color:#FFFFFF;
      
 }
 .popupGameClose {
            font-size:20px;  
            line-height:15px;  
            right:5px;  
            top:5px;  
            position:absolute;  
            color:#6fa5e2;  
            cursor: pointer;
            margin-top: 10px;
            margin-right: 10px;
            }
</style>
<script>
    function AddFakeWords() 
    {
        var url ='<?= URL::site(); ?>';
        var fakeword = $('#add_word').val();
       
       
        if(fakeword == "") {
            alert("Please enter an 'Inappropriate word'!");
            return false;
        }
                    $.post(url+"admin/add_fakeword", {
                    fake_word: fakeword
                  
                                
                }, function(response){
                   location.reload(true);
                   alert(response);
            
                });
                return false;
        
       }
       
           function UpdateFakeWords() 
    {
        var url ='<?= URL::site(); ?>';
        var fake_wordid;
       document.getElementsByName("fake_wordid")[0].setAttribute("value",fake_wordid)
       var fakeword=fake_wordid;
       
        if(fakeword == "") {
            alert("Please enter fake word");
            return false;
        }
                    $.post(url+"admin/edit_fakeword", {
                    fake_word: fakeword
                  
                                
                }, function(response){
                   location.reload(true);
                   alert(response);
            
                });

       }






 function delete_Fakeword(url, fakeword_id,fake_word){ 
 if(confirm("Do you want to delete " +fakeword_id+ " confirm"))
 {
 $.post(url+'admin/fakeworddelete/',
{
fakewordid: fakeword_id
}
, function(response) {
//window.location.replace(url+'admin/add');
//location.reload(true);
$('#'+fakeword_id+'fake_word').css({
'display':'none'
});
});    
 }
 }



function showEditFakewordBox(fakeword,fakewordId) {
getGameMask();
$('#fake_word').val(fakeword);
$('#id').val(fakewordId);
$('#editfakewordbox').fadeIn("slow");
return false;
} 

function check_fakeword_name(){
var fakewordname = $("#fake_word").val();
//alert(gamename);
var url ='/';
if(fakewordname.length > 0){
$('#Loading').show();
$.post(url+"admin/fakeword_validate", {
fakeword: $('#fake_word').val()
}, function(response){
$('#Info').fadeOut();
$('#Loading').hide();
setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
if(response)
{
$('#editfakebt').attr('class', 'post-button-white');
$('#editfakebt').attr('disabled','disabled');
}
else
{
$('#editfakebt').attr('class', 'save-button');
$('#editfakebt').removeAttr("disabled");
}
});
}
return false;
} 



//
// function edit_fakewordvalidate(fake_word,id)
//{
//var url ='/';
//if(fake_word == "") {
//alert("Please enter inappropriate name");
////this.game_name.focus();
//return false;
//}
//$.post(url+"admin/edit_fakeword", {
//fake_word: fakeword,
//fakeword_id: id
//}, function(response){
////location.reload(true);
//// alert(response);
//});
//return false;
//} 


    </script>
<div>
    <p class="table_heading">ZergId Inappropriate Names List</p>
</div><br><br>
<?php foreach ($fake_words as $fake_word): ?>
<div id="editfakewordbox" class="popup_box" style="margin-top:-125px; margin-left:200px; height: 100px;">	<!-- OUR PopupBox DIV-->
  
 <?= Form::open('admin/edit_fakeword', array('enctype' => 'multipart/form-data')); ?>
    <span class="popup-title" style="font-size:28px; margin-left:-18px; margin-top:50px" id="popup_title">Edit Fakeword</span><br /><br /><br /><br />
    
  <input type="hidden" value="" style="width:180px; line-spacing:25px;" name="fake_wordid" id="fake_wordid" class="normal-input" />
     <h5>Fake Word:</h5 <br />
     
     <div style="margin-left:100px; margin-top:-25px;"> <input type="text" value="<?= $fake_word->fake_word; ?>" style="width:180px; line-spacing:25px;" name="fake_word" id="fake_word" onkeyup ="return check_fakeword_name()" class="normal-input" /><span id="Info"></span></div>
    
  
    <span id="bar_load" style="display:none; margin-left:15px;"><?= HTML::image("public/images/loading-bar.gif", array('style' => 'margin-top:-50px; ')); ?></span><div style="float:right; margin-top:-50px;" id="frnd_button"><?= Form::submit('btn_submit', 'SAVE CHANGES', array('class' => 'save-button post-btn' ,'style' => 'width:150px;','id'=>'editfakebt','onclick' => 'return UpdateFakeWords();')); ?></div>

    <?= Form::close(); ?> 
   
    <a class="popupGameClose"><?= HTML::image("public/images/popup-close.gif"); ?></a>		
</div>
 <?php endforeach; ?>
 <?= Form::open('admin/add_fakeword', array('enctype' => 'multipart/form-data')); ?>
<table style="margin-left:6px;">
    <tr>
        <td>
    <p>Insert a New Inappropriate word:
        </td>
        <td>
        <input type="text" size="21" id="add_word" class="add_word"/>
        </td>
        <td>
    </p>
<input type="button" onclick="return AddFakeWords();" value="ADD" class="new_button">  <?= Form::close(); ?> <br><br>
        </td>
    </tr>
</table>
 <table style="width:952px; margin-left:9px;margin-top:20px">
     <tr style="color:#B8B8B8; background-color:#F0F0F0; height:30px;">
         <th style="width:14%">S.No </th>
         <th style="width:40%">Inappropriate Name</th>
         <th style="width:16%">Edit</th>
         <th style="width:30%">Remove From List</th>
     </tr>
     <?php foreach ($fake_words as $fake_word): ?>
     <tr class="row">
         <td align="left"><?= $fake_word->id; ?></td>
         <td><?= $fake_word->fake_word; ?></td>
         <td>  <?= HTML::image("public/images/edit-icon.png", array('id' => $fake_word->id, 'class' => 'edit_icon','alt' => $fake_word->fake_word, 'onclick' => 'showEditFakewordBox("' . URL::base(TRUE, 'https') . '", "' . $fake_word->fake_word  . '", "' . $fake_word->id . '")')); ?> </td>
        
     
     <td>
      <?=
                            HTML::image("public/images/delete_icon.png", array( 'id' => $fake_word->id,
                                'alt' => $fake_word->fake_word, 'onclick' => 'delete_Fakeword("' . URL::base(TRUE, 'https') . '", "' . $fake_word->fake_word  . '", "' . $fake_word->id . '")'));
                            ?>
     </td>
     </tr>
    <?php endforeach; ?>
 </table> 
 