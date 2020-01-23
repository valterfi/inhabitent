<!-- This file is used to markup the public-facing widget. -->

<div class="contact">
    <p><i class="fa fa-envelope"></i>
        <a href="mailto:info@inhabitent.com">
            <?php if (strlen($email) > 0 ) : ?>
                <?php echo $email; ?>
            <?php endif; ?>
        </a>
    </p>
    <p><i class="fa fa-phone"></i>
        <a href="tel:5553434567891">
            <?php if (strlen($phone) > 0 ) : ?>
                <?php echo $phone; ?>
            <?php endif; ?>
        </a>
    </p>
    <p>
        <span><i class="fa fa-facebook-square"></i></span>
        <span><i class="fa fa-twitter-square"></i></span>
        <span><i class="fa fa-google-plus-square"></i></span>
    </p>
</div>

