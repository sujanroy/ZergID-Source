<script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
<link rel="stylesheet" href="<?= URL::site('/public/css/admincss.css'); ?>" />

<span id="character_title" class="large_title">Manage Content</span>
<div  class="fom_checkbox" style="margin-left: 75px"> 

<input type="radio" name="bothadvandlor"  value="1" <?php if($advs->is_checked == "1"):?>checked="checked"<?php endif;?> class="advs"/> Show Google Ads<br/>
<input type="radio" name="bothadvandlor"  value="2" <?php if($advs->is_checked == "2"):?>checked="checked"<?php endif;?> class="advs"/> Show Lord of the Rings Image<br/>
<input type="radio" name="bothadvandlor"  value="3" <?php if($advs->is_checked == "3"):?>checked="checked"<?php endif;?> class="advs"/> Show Google Ads and Lord of the Rings Image
</div>
    




