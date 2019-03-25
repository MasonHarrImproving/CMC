    <?php
    /*
        Template Name: Events Search Results Template
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
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$searchname = $_GET['searchstr'];
    $events = array(
        'post_type' => 'event',
        'posts_per_page' => 10,
        'paged' => $paged,
        's' => $searchname,
    );
    
    $eventsquery = new WP_Query($events);
    $wp_query = new WP_Query($events);
?>
<section class="results">
  <h1>Search Results</h1>
      <?php
    if ($eventsquery -> have_posts()) {
        $posts = $eventsquery->posts;
        foreach($posts as $post) {
          $pagetype = "";
          if(strtotime(get_post_custom($post->ID)['event_date'][0]) < time()){
            $pagetype = "417";
          }
          else{
            $pagetype = "374";
          }
    echo '<section class="eventListing searchResults"><a class="eventResult" href="'. home_url().'?page_id='.$pagetype.'&info_id='.$post->ID.'">'.get_post_custom($post->ID)['event_title'][0].'</a><p>'.get_post_custom($post->ID)['event_short_description'][0].'</p></section>';
        }
        ?> 
        <div class="pagedPostContainer">
        <?php if(get_previous_posts_link('Previous Events')){
          echo '<div class="pagedPosts">'.get_previous_posts_link("Previous Events").'</div>';
        }?>
      <?php if(get_next_posts_link('Next Events')){
        echo '<div class="pagedPosts">'.get_next_posts_link("Next Events").'</div>';
         }
         ?>
        </div>
      <?php }
    if (!$eventsquery -> have_posts()) {
        echo '<h1>No Events Found</h1>';
    }
      ?>
    </section>
<?php
    get_footer();
?>
