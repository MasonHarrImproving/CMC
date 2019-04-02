<?php
/*
    Template Name: Empty Template
*/
    get_header();
?>

<?php
    get_template_part('template-parts/shared/content-hero');
?>

  <section class="basicTemplate">
        <?php the_field('page_text');?>
        <?php the_field('video');?>
  </section>
   
  <script>
  </script>

<?php
    get_footer();
?>