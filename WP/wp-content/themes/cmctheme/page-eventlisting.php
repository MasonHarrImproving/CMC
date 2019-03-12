    <?php
    /*
        Template Name: Events Listing Template
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
    $events = array(
        'post_type' => 'event',
    );
    
    $eventsquery = new WP_Query($events);
?>

      <?php
    if ($eventsquery -> have_posts()) {
        $posts = $eventsquery->posts;
        foreach($posts as $post) {
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
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> '.get_post_custom($post->ID)['event_date'][0].'</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> '.get_post_custom($post->ID)['event_start_time'][0].' - '.get_post_custom($post->ID)['event_end_time'][0].'</span>
          <div class="learnEvent">'.get_post_custom($post->ID)['learn_more_button'][0].'</div>
        </div>
      </div>
      </div>
    </section>';
        }
      }
      ?>
<?php
    get_footer();
?>
