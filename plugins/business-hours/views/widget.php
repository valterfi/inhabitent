<!-- This file is used to markup the public-facing widget. -->

<div class="business-hours">
    <p>
        <strong><span class="day-of-week">Monday-Friday:</span></strong>
        <?php if (strlen($weekdays) > 0 ) : ?>
            <?php echo $weekdays; ?>
        <?php endif; ?>
    </p>
    <p>
        <strong><span class="day-of-week">Saturday:</span></strong>
        <?php if (strlen($saturdays) > 0 ) : ?>
            <?php echo $saturdays; ?>
        <?php endif; ?>
    </p>
    <p>
        <strong><span class="day-of-week">Sunday:</span></strong>
        <?php if (strlen($sundays) > 0 ) : ?>
            <?php echo $sundays; ?>
        <?php endif; ?>
    </p>
</div>