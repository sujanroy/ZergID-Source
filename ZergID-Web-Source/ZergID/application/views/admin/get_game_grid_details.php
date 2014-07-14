  <script src="<?= URL::site('/public/js/adminjs.js'); ?>"></script>
        <script src="<?=URL::site('/public/js/adminjPages.js');?>" type="text/javascript"></script>
<script>
   
//  $(document).ready(function(){
//                $('#data_header').css({cursor:'default'});     
//                $(".accordion div").click(function(){
//                    $(this).next(".child").slideToggle("slow")
//                    .siblings(".child:visible").slideUp("slow");
//                    $(this).toggleClass("active");
//                    $(this).siblings("div.accordin").removeClass("active");
//                    $('div.accordin img.arr').attr('src', '../../public/images/up-arrow.png');
//                    $('div.accordin.active img.arr').attr('src', '../../public/images/down-arrow.png');
//                        
//                    
//                });
//            });
    function loadgrid(gameid)
    {

    if ($("#child"+gameid).is(":visible") == true) {
    $('#child'+gameid).hide();
    $('.arr').attr('src', '../../public/images/up-arrow.png');
    return false;
    }
    else
    {
    $('.arr').attr('src', '../../public/images/up-arrow.png');
    $('.child').hide();
    $('#child'+gameid).hide();
    $('#arr'+gameid).attr('src', '../../public/images/down-arrow.png');
    $('#grid_loader').css('display', 'block');
    $('#child'+gameid).html('');
    $("#child"+gameid).slideToggle(500);

    $.post('/admin/get_game_details/',
    {
    game_id: gameid
    }
    , function(response) {
    $('#grid_loader').css('display', 'none');
    $('#child'+gameid).html(response);
    });  
    }
    }
            
            $(function() {
    /* initiate plugin */
    $("div.holder").jPages({
        containerID : "itemContainer",
        perPage : 20
    });
    /* on select change */
    $("#setpagingcount").change(function(){
        /* get new nº of items per page */
      var newPerPage = parseInt( $(this).val() );
      /* destroy jPages and initiate plugin again */
      $("div.holder").jPages("destroy").jPages({
            containerID   : "itemContainer",
            perPage       : newPerPage
        });
    });
});
    </script>

<div style="float:left;"> 
    
  
            <span  class="large_title" style="font-size:35px;">ZergID Game Details </span> 
             
            <div   class="accordion" style ="width:950px; padding-left:10px;">
                <table  class="display" style ="width:950px;">
                    <thead>
                        <tr id="data_header">
                            <th align ="right"  style="padding-left:57px;"  width="70%">Game</th>
                            <th align ="right" style="padding-left: 25px;" width="15%">Edit</th>
                            <th style="padding-left: 15px;" align ="left" width="15%">Remove</th>
                        </tr>
                    </thead>
               </table>
                <div id="itemContainer">
                <?php foreach ($games as $game): ?>
                    <span id="append_game"> </span>
                    <div class="accordin" id="<?= $game->id; ?>game" style="border-bottom: 1px solid #ECECEC; height: 40px;">
                        <div onclick="return loadgrid(<?= $game->id; ?>);"  style="float: left; margin-top: 12px; width: 70%; margin-left:25px;">      
                            <img id="arr<?= $game->id; ?>"  class="arr" src="../../public/images/up-arrow.png" /> <span id="game_name<?= $game->id; ?>" style="padding-left:20px; font-size:13px;"><?= $game->game_name; ?></span>
                        </div>
                        <div style="float: left; margin-top: 12px; width:15%">      
                            <?= HTML::image("public/images/edit-icon.png", array('class' => 'edit_icon', 'onclick' => 'showEditGameBox("' . $game->id . '")')); ?>
                        </div>
                        <div style="float: left; margin-top: 12px;  ">      
                            <?=
                            HTML::image("public/images/delete_icon.png", array('class' => 'delete_icon', 'id' => $game->id,
                                'alt' => $game->game_name, 'onclick' => 'deleteGame("' . URL::base(TRUE, 'https') . '", "' . $game->id . '", "' . $game->game_name . '")'));
                            ?>
                        </div>
                    </div>
                       

                    <div id="child<?= $game->id; ?>" class="child" align="right" style="padding-top:5px; display: none;">

                    </div>

<?php endforeach; ?>
                </div> 
                <div align="right" class="holder"></div>
                 <div style="font-size:13px;  margin-top:-32px;"> <form>
        <label>Show
       <select id="setpagingcount">
          <option>20</option>
          <option>50</option>
          <option>75</option>
           <option>100</option>
        </select>entries</label>
      </form></div> 
            </div>
        </div>