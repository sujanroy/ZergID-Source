<div>
    <div>
        <?php $base_url = URL::site(NULL, TRUE); ?>
        <?= HTML::image($base_url . "public/images/email_logo.jpg"); ?>
    </div>
    <p>Hi <?= ucfirst($username); ?>,</p>
    <p>Your new password has been successfully registered at <a href="http://www.zergid.com">zergid.com</a>.
        Your new login credentials, </p>

        <p>Username : <?= $username; ?><br />
        Password : <?= $password; ?></p>

    <p>For any questions/suggestions/complaints, please feel free to e-mail us at <a href="mailto:info@zergid.com">
            info@zergid.com</a> and we are happy to assist you.</p><br />
    <p>Regards, <br />The ZergID Team</p>
</div>