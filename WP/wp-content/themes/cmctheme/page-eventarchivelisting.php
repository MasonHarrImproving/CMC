    <?php
    /*
        Template Name: Archived Events Listing Template
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
$today = date('ymd');

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $events = array(
        'post_type' => 'event',
        'posts_per_page' => 2,
        'paged' => $paged,
        'meta_query' => array(
            array(
                'key' => 'event_date',
                'type'    => 'DATE',
                'value' => $today,
                'compare' => '<'
            )
         )
    );
    
    $eventsquery = new WP_Query($events);
    $wp_query = new WP_Query($events);
?>

      <?php
    if ($eventsquery -> have_posts()) {
        $posts = $eventsquery->posts;
        foreach($posts as $post) {
            $pagetype = "417";
    echo '<section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="imageRow">
        <img src="'.home_url().'/wp-content/uploads/'.get_post_custom(get_post_custom($post->ID)['event_image'][0])["_wp_attached_file"][0].'">
        </div>
        <div class="eventInfo">
        <h1 class="title">'.get_post_custom($post->ID)['event_title'][0].'</h1>
        <p class="eventDesc">'.get_post_custom($post->ID)['event_description'][0].'</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> '.date("F jS Y", strtotime(get_post_custom($post->ID)['event_date'][0])).'</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> '.get_post_custom($post->ID)['event_start_time'][0].' - '.get_post_custom($post->ID)['event_end_time'][0].'</span>
          <span class="bottomEventLocation"><i class="fa fa-map-pin"></i> '.get_post_custom($post->ID)['event_location'][0].'</span>
          <div class="learnEvent"><a href="'. home_url().'?page_id='.$pagetype.'&info_id='.$post->ID.'">'.get_post_custom($post->ID)['learn_more_button'][0].'</a></div>
        </div>
      </div>
      </div>
    </section>';
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
      <?php }?>
<?php
    get_footer();
?>