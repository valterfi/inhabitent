<!-- This file is used to markup the public-facing widget. -->
<p>
    <?php if (strlen($weekdays) > 0 ) : ?>
        <span class="business-weekdays">Monday-Friday</span>
        <?php echo $weekdays; ?>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen($saturdays) > 0 ) : ?>
        <span class="business-weekdays">Saturday</span>
        <?php echo $saturdays; ?>
    <?php endif; ?>
</p>

<p>
    <?php if (strlen($sundays) > 0 ) : ?>
        <span class="business-weekdays">Sundays</span>
        <?php echo $sundays; ?>
    <?php endif; ?>
</p>    