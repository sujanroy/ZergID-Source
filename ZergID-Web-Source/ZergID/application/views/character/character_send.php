<?php
if (count($characters_sends)): ?>
<span class="section_span">
<input type="checkbox" id="select_all_char" name="select_all_char" onclick="return selectparentfriend();" value="1" class="parentCheckBox" style="margin-right:5px;">
<label for="evnt_select_all">Select All</label></span><br>
<?php foreach ($characters_sends as $characters_send):
    //echo $characters_send->character_user_count;
?>

<span class="section_span" style="padding-top:5px; width:250px;"><input type="checkbox" id="event_members" onclick="return selectchildfriend();" name="event_members[]" value="" class="childCheckBox" style="margin-right:10px;"><label for="evnt_members"><?=ucfirst($characters_send->username);?></label></span><br>

<?php endforeach;
endif;
?>