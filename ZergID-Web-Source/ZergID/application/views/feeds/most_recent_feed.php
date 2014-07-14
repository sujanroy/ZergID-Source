<?= $youtube_embed_script_view; ?>
<div class="feed_dropdown">
    <?= Form::select('em'.$user, array('1' => 'Most Recent', '2' => 'Most Popular'), '1', array('class'=>"select-input feed-select-dropdown myselect", 'id'=>'em'.$user, 'style'=>'width:124px; margin-left:438px;color:gray;','onchange'=>'return selectfeedtype("'.URL::site().'", "'.$user.'");'));?>       
</div>
<?= $feed_view; ?>
