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
    $faqgroup = array(
        'post_type' => 'faq',
    );
    
    $query = new WP_Query($faqgroup);
?>
  <section class="frequentQuestionsPage mainElement">
    <h1> Frequently Asked Questions</h1>
    <div class="frequentContainer">
      <?php
    if ($query -> have_posts()) {
        $posts = $query->posts;
        foreach($posts as $post) {
    echo '<div class="frequentMainText"><b>Q: </b>'.get_post_custom($post->ID)["question"][0].'<div class="frequentFeatureText"><b>A: </b>'.get_post_custom($post->ID)["answer"][0];
    echo '</div>  <i class="fa fa-plus"></i></div>';
        }
      }
      ?>
    </div>
  </section>
  <script>
    $(document).ready(function(){
      $('.frequentMainText').children('.frequentFeatureText').fadeOut(10);
    $('.frequentMainText').click(function(){
      if($(this).children('.frequentFeatureText')){
        if($(this).children('i').attr('class') === 'fa fa-plus'){
        $(this).children('i').attr('class', 'fa fa-close');
      }
      else{
        $(this).children('i').attr('class', 'fa fa-plus');
      }
        $(this).children('.frequentFeatureText').fadeToggle( 1000 );
      }
    });
  });
  </script>

<?php
    get_footer();
?>