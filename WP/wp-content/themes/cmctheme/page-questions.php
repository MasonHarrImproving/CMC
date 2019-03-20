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
    $eventsfaqgroup = array(
        'post_type' => 'faq',
        'meta_query' => array(
            array(
        'key' => 'question_category',
        'value' => 'events'
            )
      )
    );
    
    $eventsquery = new WP_Query($eventsfaqgroup);

       $sponsorfaqgroup = array(
        'post_type' => 'faq',
        'meta_query' => array(
            array(
        'key' => 'question_category',
        'value' => 'sponsor'
            )
      )
    );
    
    $sponsorquery = new WP_Query($sponsorfaqgroup);

       $membersfaqgroup = array(
        'post_type' => 'faq',
        'meta_query' => array(
            array(
        'key' => 'question_category',
        'value' => 'member'
            )
      )
    );
    
    $membersquery = new WP_Query($membersfaqgroup);
?>
  <section class="frequentQuestionsPage mainElement sponsorQuestions">
    <h1>Sponsor FAQs</h1>
    <div class="frequentContainer">
      <?php
    if ($sponsorquery -> have_posts()) {
        $posts = $sponsorquery->posts;
        foreach($posts as $post) {
    echo '<div class="frequentMainText"><b>Q: </b>'.get_post_custom($post->ID)["question"][0].'<div class="frequentFeatureText"><b>A: </b>'.get_post_custom($post->ID)["answer"][0];
    echo '</div>  <i class="fa fa-plus"></i></div>';
        }
      }
      ?>
    </div>
  </section>
    <section class="frequentQuestionsPage mainElement eventQuestions">
    <h1>Event FAQs</h1>
    <div class="frequentContainer">
      <?php
    if ($eventsquery -> have_posts()) {
        $posts = $eventsquery->posts;
        foreach($posts as $post) {
    echo '<div class="frequentMainText"><b>Q: </b>'.get_post_custom($post->ID)["question"][0].'<div class="frequentFeatureText"><b>A: </b>'.get_post_custom($post->ID)["answer"][0];
    echo '</div>  <i class="fa fa-plus"></i></div>';
        }
      }
      ?>
    </div>
  </section>
    <section class="frequentQuestionsPage mainElement memberQuestions">
    <h1>Member FAQs</h1>
    <div class="frequentContainer">
      <?php
    if ($membersquery -> have_posts()) {
        $posts = $membersquery->posts;
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
      function getQueryString(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
console.log(getQueryString('type'));
      switch(getQueryString('type')) {
  case 'member':
    $('html, body').animate({
      scrollTop: $('.memberQuestions').offset().top
    }, 'slow');
     break;
  case 'sponsor':
    $('html, body').animate({
      scrollTop: $('.sponsorQuestions').offset().top
    }, 'slow');
    break;
      case 'event':
    $('html, body').animate({
      scrollTop: $('.eventQuestions').offset().top
    }, 'slow');
    break;
}

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