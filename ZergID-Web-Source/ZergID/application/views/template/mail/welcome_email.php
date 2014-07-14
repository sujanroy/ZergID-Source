<div>
    <div>
    <?php $base_url = URL::site(NULL, TRUE);?>
    <?= HTML::image($base_url."public/images/email_logo.jpg"); ?>
    </div>
    <p>Hi <?= ucfirst($username); ?>,</p>
    <p>We are thrilled to have you as a member of our community.<p> 
    <p>    Get the most out of ZergID by adding all your characters to your profile, even from games you no longer play.  This
        way people you used to play with, but have lost touch with, will be able to find you.</p>
    
    <p>If you have any questions or comments, be sure to write to visit our <a href="<?= $base_url;?>page/support" style="color:#15c;  text-decoration:  underline;">FAQ</a> or <a href="mailto:info@zergid.com" style="color:#15c;  text-decoration:  underline;">contact us</a> directly.  We welcome your feedback to help build our community.</p><br />
    <p>Regards, <br />The ZergID Team</p>
</div>
