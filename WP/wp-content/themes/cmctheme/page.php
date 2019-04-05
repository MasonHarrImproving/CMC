<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Columbus_Metropolitan_Club_Theme
 * @since 1.0.0
 */

get_header();

?>
    
<?php
$heroimage = get_field('home_page_hero_image');
$cmcstats = get_field('stats');

$getevents = array(
    'post_type' => 'event',
    'posts_per_page' => 3,
    'order' => 'DESC',
);

$events = new WP_Query($getevents);
?>
  <section class="homePage">
    <div class="homePageHero" style="background-image:url(<?php echo $heroimage['url']; ?>)">
      <div class="homePageHeroDarkener">
    <div class="homePageHeroContainer"><h1><?php the_field('home_page_hero_title'); ?></h1><p><?php the_field('home_page_hero_description'); ?></p><div class="learnMore">
      <?php echo '<a href="' . home_url() . '?page_id=' . '348' . '">'; ?>
    <?php the_field('home_page_hero_learn_more'); ?>
  </a>
    </div></div></div>


    </div>
    <div class="joinEvent"><h1><?php the_field('under_hero_text_title'); ?></h1><h2><?php the_field("under_hero_text_description"); ?></h2></div>
      <?php
if ($events->have_posts())
{
    $posts = $events->posts;
    $i = 0;
    foreach ($posts as $post)
    {
        $i++;
        if ($i === 1)
        {
            echo '<div class="upperMainEvent">
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="imageRow"><img src="' . home_url() . '/wp-content/uploads/' . get_post_custom(get_post_custom($post->ID) ["event_image"][0]) ["_wp_attached_file"][0] . '">
        </div>
        <div class="eventInfo">          
        <h1 class="title">' . get_post_custom($post->ID) ["event_title"][0] . '</h1>
        <p class="eventDesc">' . get_post_custom($post->ID) ["event_short_description"][0] . '</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> ' . date("F jS Y", strtotime(get_post_custom($post->ID) ["event_date"][0])) . '</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> ' . get_post_custom($post->ID) ["event_start_time"][0] . ' - ' . get_post_custom($post->ID) ["event_end_time"][0] . '</span>
          <div class="learnEvent"><a href="' . home_url() . '?page_id=';
            if (strtotime(get_post_custom($post->ID) ["event_date"][0]) < time())
            {
                echo "417";
            }
            else
            {
                echo '374';
            }
            echo '&info_id=' . $post->ID . '">Learn More';
            echo '</a></div>
        </div>
      </div>
      </div>
    </section></div>';
        }
        else if ($i > 1)
        {
            echo '<div class="lowerEvents">
<section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="eventInfo">
        <h1 class="title">' . get_post_custom($post->ID) ["event_title"][0] . '</h1>
        <p class="eventDesc">' . get_post_custom($post->ID) ["event_short_description"][0] . '</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> ' . date("F j Y", strtotime(get_post_custom($post->ID) ["event_date"][0])) . '</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> ' . get_post_custom($post->ID) ["event_start_time"][0] . ' - ' . get_post_custom($post->ID) ["event_end_time"][0] . '</span>
          <div class="learnEvent"><a href="' . home_url() . '?page_id=';
            if (strtotime(get_post_custom($post->ID) ["event_date"][0]) < time())
            {
                echo "417";
            }
            else
            {
                echo '374';
            }
            echo '&info_id=' . $post->ID . '">Learn More';
            echo '</a></div>
        </div>
      </div>
      </div>
    </section></div>';
        }
    }
    wp_reset_query();
}
wp_reset_query();
?>
  <div class="moreEventsContainer">
  <div class="moreEvents">
                <?php echo '<a href="' . home_url() . '?page_id=' . '348' . '">'; ?>
    <?php echo the_field('more_events_button'); ?>
  </a>
    </div>
  </div>
  <div class="archiveHero" style="background-image:url(<?php echo the_field('missed_forum_image'); ?>);">
    <div class="imageLightener">
    <div class="archiveHeroText">
    <?php the_field('archive_text_title'); ?>
    <p><?php the_field('archive_text_description'); ?></p>
    <div><div class="archiveLink"><?php echo '<a href="' . home_url() . '?page_id=' . '600' . '">Go to the Archive</a>'; ?></div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent">
<?php echo the_field('under_archive_title'); ?>
    </div>
    <div class="statsContainer">
    <div class="statVideo"><iframe width="560" height="315" src="<?php echo the_field('stats_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
    <div class="statText"><h1><?php echo $cmcstats['title']; ?></h1>
      <div class="innerContainer">
<div class="membersStat stat"><i class="fa fa-users"></i><span><?php echo $cmcstats['members']; ?></span>
<span class="statType">Members</span>
</div>
<div class="sponsorsStat stat"><i class="fa fa-suitcase"></i><span><?php echo $cmcstats['sponsors']; ?></span>
<span class="statType">Sponsors</span></div>
<div class="eventsStat stat"><i class="fa fa-calendar-o"></i><span><?php echo $cmcstats['annual_events']; ?></span>
<span class="statType">Annual Events</span></div>
<div class="speakersStat stat"><i class="fa fa-user"></i><span><?php echo $cmcstats['speakers']; ?></span>
<span class="statType">Speakers each year</span></div>
</div>
    </div>
</div>
  <div class="archiveHero">
    <div class="imageLightener actionHero">
    <div class="archiveHeroText">
    <?php echo the_field('action_area_title'); ?>
    <p><?php echo the_field('action_area_description'); ?></p>
    <div class="joinActionBtnContainer"><div class="joinAction"><?php echo '<a href="';
the_field('action_area_link');
echo '">';
the_field('action_area_button');
echo '</a>'; ?></div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent"><?php echo the_field('sponsors_info'); ?></div>
        <div class="partnersContainer">
      <div class="partnerImageContainer">
        <?php $fields = acf_get_fields('78'); ?>

        <?php if ($fields)
{
    foreach ($fields as $field)
    {
        $images = get_field($field['name']);
?>
            <img src="<?php echo $images['url'] ?>">
            <?php
    }

}
?>
      </div>
    </div>
      <div class="moreSponsorsContainer">
        <?php echo '<a href="' . home_url() . '?page_id=' . '33' . '">'; ?>
  <div class="moreSponsors">
       <?php
echo the_field('more_sponsors_button'); ?>
    </div>
  </a>
  </div>
    </section>

<?php
get_footer();

