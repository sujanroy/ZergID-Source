<div>
    <div>
    <?php $base_url = URL::site(NULL, TRUE);?>
    <?= HTML::image($base_url."public/images/email_logo.jpg"); ?>
    </div>
    <p>Hi <?= ucfirst($username); ?>,</p>
    Thank you for your request,
    Your login credentials<br />                    
    Username  : <?= $username;?><br />
    Password  : <?= $password; ?>
    <p>Incase you have not requested, Please e-mail us at <a href="mailto:info@zergid.com">
        info@zergid.com</a>.</p><br />
    <p>Regards, <br />The ZergID Team</p>
</div>