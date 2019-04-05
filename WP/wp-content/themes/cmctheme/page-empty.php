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
        <?php
if( have_rows('content_box') ):

    while ( have_rows('content_box') ) : the_row();

        the_sub_field('content');

    endwhile;

else :
endif;

?>
  </section>
   
  <script>
  </script>

<?php
    get_footer();
?>