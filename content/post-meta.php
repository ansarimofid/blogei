<?php
$date   = date_i18n( get_option( 'date_format' ), strtotime( get_the_date( 'r' ) ) );
$author = get_the_author();
?>

<span class="post-meta credit">
&nbsp;by <strong class="primary-color author-name"> <?php echo $author; ?></strong> on <?php echo $date; ?>
</span>