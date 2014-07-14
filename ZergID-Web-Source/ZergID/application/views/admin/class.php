<div class="scroll_bar">
    <?php if (count($classes) > 0): ?>
       <table class="display" style ="width:250px;">
           <thead>
                <tr id="data_header">
                   <th align ="right" style="padding-left:3px;"  width="30%">Server</th>
                    <th align ="right" width="5%">Edit</th>
                      <th  align ="left" style="padding-right:35px;" width="25%">Remove</th>
                 </tr>
            </thead>
           <?php foreach($classes as $class): ?>
           <tr style="  border-bottom: 1px solid #ECECEC;">
               <td style="font-size:12px; border-bottom: 1px solid #ECECEC;"><?= $class->class_name; ?></td>
               <td style="border-bottom: 1px solid #ECECEC;"><?=HTML::image("public/images/edit-icon.png", array('class'=>'edit_icon')); ?></td>
               <td style="border-bottom: 1px solid #ECECEC;"><?=HTML::image("public/images/delete_icon.png", 
                                array('class'=>'delete_icon')); ?></td>
           </tr>
           <?php endforeach; ?>
       </table>
   <?php endif; ?>
   </div>
