<?php
/*
    Template Name: FAQ Template
*/
    get_header();
?>

<?php
    get_template_part('template-parts/shared/content-hero');
?>
<?php
    $bronze_args = array(
        'post_type' => 'faq',
    );
    
    $query = new WP_Query($bronze_args);
?>
  <section class="frequentQuestionsPage mainElement">
    <div class="frequentContainer">
      <?php
    if ($query -> have_posts()) {
        $posts = $query->posts;
        foreach($posts as $post) {
    echo '<p class="frequentMainText"><b>Q:</b>'.get_post_custom($post->ID)["question"][0].'</p>';
    echo '<p class="frequentFeatureText"><b>A:</b>'.get_post_custom($post->ID)["answer"][0].'</p>';
        }
      }
      ?>
    </div>
  </section>

<?php
    get_footer();
?>