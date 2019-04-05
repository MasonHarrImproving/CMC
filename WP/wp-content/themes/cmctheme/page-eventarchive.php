<?php
/*
    Template Name: Event Archive Template
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

$post = get_post_custom($_GET['info_id']);
$speakers = [];

for ($i = 1;$i < 5;$i++)
{
    if (isset($post["speakers_speaker_" . $i][0]))
    {
        array_push($speakers, $post["speakers_speaker_" . $i][0]);

    }
}

// check if the repeater field has rows of data



?>
 <section class="eventDetails">
      <div class="eventTitleContainer">
        <h1><?php echo $post["event_title"][0] ?></h1>
        <span><?php echo $post["bottom_title"][0] ?></span>
      </div>
            <div class="pastEvents">
        <div class="pastEventDesc">
          <div class="pastEventUpperDetails">
    <div class="leftSideArchive">
    <span class="archiveEventDate archiveInfo"><?php if (strlen($post["event_date"][0]) > 0)
{
    echo '<i class="fa fa-calendar-o"></i>' . date("F jS Y", strtotime($post["event_date"][0]));
} ?></span>
    <div class="timeHeader"><i class="fa fa-clock-o"></i><?php echo $post["details_times_time_1_header"][0]; ?></div>
       <div class="archiveEventTime archiveInfo"><?php echo $post["details_times_time_1"][0]; ?></div>
       <?php if (strlen($post["details_times_time_2_header"][0]) > 0)
{ ?>
           <div class="timeHeader"><i class="fa fa-clock-o"></i><?php echo $post["details_times_time_2_header"][0]; ?></div>
       <div class="archiveEventTime archiveInfo"><?php echo $post["details_times_time_2"][0]; ?></div>
     <?php
} ?>

       <div class="archiveEventLocation archiveInfo"><?php if (strlen($post["event_location"][0]) > 0)
{
    echo '<i class="fa fa-map-pin"></i>' . $post["event_location"][0] . '<br>' . $post["event_street"][0] . '<br>' . $post["event_city"][0];
} ?></div>
    </div>
     <div class="rightSideArchive">
      <div class="innerRightSideArchive">
    <span class="archiveEventPrice archiveInfo">
      <?php if (isset($post['pricing_0_price'][0]) > 0)
{
    echo '<i class="fa fa-ticket"></i>';
    for ($p = 0;isset($post['pricing_' . $p . '_price'][0]);$p++)
    {
        echo $post['pricing_' . $p . '_price'][0] . ' For ' . $post['pricing_' . $p . '_type'][0] . '<br>';
    }
} ?>
      </span>
       <div class="archiveEventFood archiveInfo"><?php if (strlen($post["event_food_choices"][0]) > 0)
{
    echo '<i class="fa fa-spoon"></i>' . $post["event_food_choices"][0];
} ?></div>
    </div>
    </div>
          </div>
      <div class="pastEventLowerDetails">
        <?php echo $post["event_description"][0] ?>
          </div>
        </div>
        <div class="pastEventInfo details">
<div class="upcomingEvents">
  <div><h1>This event has ended</h1></div>
  <div>But dont worry, we have new forum each week</div>
  <div class="moreEventsBtn"><a class="eventsListingLink" href="<?php echo home_url() . '?page_id=348'; ?>">View Upcoming events</a></div>
</div>
<div class="upcomingEvents">
<h1 class="followText">Follow On Social Media</h1>
<div class="socialContainer">
  <div class="pastEventSocial"><i class="fa fa-hashtag"></i> <?php echo $post["event_hashtag"][0] ?> </div>
  <div class="pastEventSocial"><i class="fa fa-twitter"></i><?php echo $post["event_twitter"][0] ?></div>
  <div class="pastEventSocial"><i class="fa fa-instagram"></i> <?php echo $post["event_instagram"][0] ?></div>
</div>
  <span></span>

</div>
        </div>
      </div>
    <section class="boardContainer mainElement">
      <?php
for ($m = 0;$m < count($speakers);$m++)
{
    if (strlen($speakers[$m]) === 0)
    {

    }
    else
    {
        echo '<div class="member">
                        <div class="memberLabel"><span>';
        echo get_post_custom($speakers[$m]) ["label"][0];
        echo '</span></div>
        <a href="' . home_url() . '?page_id=355&speaker_id=' . $speakers[$m] . '"><img class="memberImage" src="' . home_url() . '/wp-content/uploads/' . get_post_custom(get_post_custom($speakers[$m]) ["image"][0]) ["_wp_attached_file"][0] . '" height="250" width="200"></a>
        <span class="memberName">' . get_post_custom($speakers[$m]) ["name"][0] . '<br></span>
        <span class="memberDesc">' . get_post_custom($speakers[$m]) ["title"][0] . '<br>' . get_post_custom($speakers[$m]) ["subtitle"][0] . '</span>
                <div class="memberReadMore"><a href="' . home_url() . '?page_id=355&speaker_id=' . $speakers[$m] . '">Read More</a></div>
      </div>';
    }
}
?>
    </section>
        <div class="pressCoverage">
          <?php if ($post["press_coverage_title_1"][0])
{
    echo '<h1> Press Coverage Of The Forum</h1>';
}
?>
          <?php for ($d = 1;$d < 3;$d++)
{
    echo '<div class="pressCoveredEvent">
      <a href="' . $post["press_coverage_link_" . $d][0] . '">' . $post["press_coverage_title_" . $d][0] . '</a><span>' . $post["press_coverage_desc_" . $d][0] . '</span></div>';

}
?>
    </div>
              <?php
if ($post["podcast_video"][0])
{
    echo '<div class="featuredEventVideo">
      <h1>' . $post["podcast_video_name"][0] . '</h1>
      <iframe width="560" height="315" src="' . $post["podcast_video"][0] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>';
}
if ($post["video_link"][0])
{
    echo '<div class="featuredEventVideo">
      <h1>' . $post["video_name"][0] . '</h1>
      <iframe width="560" height="315" src="' . $post["video_link"][0] . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>';
}
?>
    </section>
    <section class="archiveImageGallery">
<?php
if (isset($post["image_gallery"][0]))
{
    echo '<h1>' . $post["gallery_title"][0] . '</h1>';
    echo do_shortcode('[modula id="' . $post["image_gallery"][0] . '"]');
    echo '<p>' . $post["gallery_credits"][0] . '</p>';
}
?>
</section>
<?php
get_footer();
?>
