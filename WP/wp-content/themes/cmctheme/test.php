    <?php
    /*
        Template Name: Member Directory Template
    */
        get_header();
    ?>

    <?php
        /*
            The following section would be the portion that is customizable.
        */
    ?>
<?php
    get_template_part('template-parts/shared/content-hero');
?>

<?php
    
    $eventsquery = new WP_Query($events);
    $wp_query = new WP_Query($events);
?>
<?php
    get_footer();
?>
