<?= $youtube_embed_script_view; ?>
<?= $feed_view; ?>

<script type="text/javascript">
    $(function(){

    var minimized_elements = $('p.feed-text');
    minimized_elements.each(function(){    
        var t = $(this).html();        
        if(t.length < 250) return;
        
        $(this).html(
            t.slice(0,250)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(250,t.length)+' <a href="#" class="less">Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });

});
</script>
