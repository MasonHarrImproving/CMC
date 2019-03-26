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
$mainevent = get_field('main_event');
$subevent1 = get_field('sub_event_1');  
$subevent2 = get_field('sub_event_2');
$cmcstats = get_field('stats');
$featuredevents = [];   

      $getevents = array(
            'post_type' => 'event',
            'posts_per_page' => 2,
        );
        
        $events = new WP_Query($getevents);
    ?>

	<section class="homePage">
    <div class="homePageHero" style="background-image:url(<?php echo $heroimage['url'];?>)">
      <div class="homePageHeroDarkener">
    <div class="homePageHeroContainer"><h1><?php the_field('home_page_hero_title'); ?></h1><p><?php the_field('home_page_hero_description'); ?></p><div class="learnMore">
      <?php echo '<a href="'.home_url().'?page_id='.'348'.'">';?>
    <?php the_field('home_page_hero_learn_more'); ?>
  </a>
    </div></div></div>


    </div>
    <div class="joinEvent"><h1><?php the_field('under_hero_text_title'); ?></h1><h2><?php the_field('under_hero_text_description'); ?></h2></div>
    <div class="upperMainEvent">
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="imageRow">
        <?php echo '<img src="'.home_url().'/wp-content/uploads/'.get_post_custom(get_post_custom($mainevent["event"]->ID)["event_image"][0])["_wp_attached_file"][0].'">';?>
        </div>
        <div class="eventInfo">          
        <h1 class="title"><?php echo get_post_custom($mainevent["event"]->ID)['event_title'][0];?></h1>
        <p class="eventDesc"><?php echo get_post_custom($mainevent["event"]->ID)['event_description'][0];?></p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> <?php echo date("F jS Y", strtotime(get_post_custom($mainevent["event"]->ID)['event_date'][0])); ?></span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> <?php echo get_post_custom($mainevent["event"]->ID)['event_start_time'][0];?> - <?php echo get_post_custom($mainevent["event"]->ID)['event_end_time'][0];?></span>
          <div class="learnEvent"><?php echo '<a href="'. home_url().'?page_id=';
          if(strtotime(get_post_custom($mainevent["event"]->ID)['event_date'][0]) < time()){
              echo "417";
                }
                else{
                  echo '374';
                }
          echo '&info_id='.$mainevent["event"]->ID.'">'?><?php echo $mainevent['button'];?>
        </a></div>
        </div>
      </div>
      </div>
    </section>
  </div>
  <div class="lowerEvents">
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="eventInfo">
        <h1 class="title"><?php echo get_post_custom($subevent1["event"]->ID)['event_title'][0];?></h1>
        <p class="eventDesc"><?php echo get_post_custom($subevent1["event"]->ID)['event_description'][0];?></p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> <?php echo date("F j Y", strtotime(get_post_custom($subevent1["event"]->ID)['event_date'][0]));?></span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> <?php echo get_post_custom($subevent1["event"]->ID)['event_start_time'][0];?> - <?php echo get_post_custom($subevent1["event"]->ID)['event_end_time'][0];?></span>
          <div class="learnEvent"><?php echo '<a href="'. home_url().'?page_id=';
          if(strtotime(get_post_custom($subevent1["event"]->ID)['event_date'][0]) < time()){
              echo "417";
                }
                else{
                  echo '374';
                }
          echo '&info_id='.$subevent1["event"]->ID.'">'?><?php echo $subevent1['button'];?>
        </a></div>
        </div>
      </div>
      </div>
    </section>
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="eventInfo">
        <h1 class="title"><?php echo get_post_custom($subevent2["event"]->ID)['event_title'][0];?></h1>
        <p class="eventDesc"><?php echo get_post_custom($subevent2["event"]->ID)['event_description'][0];?></p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> <?php echo date("F jS Y", strtotime(get_post_custom($subevent2["event"]->ID)['event_date'][0])); ?></span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> <?php echo get_post_custom($subevent2["event"]->ID)['event_start_time'][0];?> - <?php echo get_post_custom($subevent2["event"]->ID)['event_end_time'][0];?></span>
          <div class="learnEvent"><?php echo '<a href="'. home_url().'?page_id=';
          if(strtotime(get_post_custom($subevent2["event"]->ID)['event_date'][0]) < time()){
              echo "417";
                }
                else{
                  echo '374';
                }
          echo '&info_id='.$subevent2["event"]->ID.'">'?><?php echo $subevent2['button'];?>
        </a></div>
        </div>
      </div>
      </div>
    </section>

  </div>
  <div class="moreEventsContainer">
  <div class="moreEvents">
            <?php echo '<a href="'.home_url().'?page_id='.'348'.'">';?>
    <?php the_field('more_events_button');?>
  </a>
    </div>
  </div>
  <div class="archiveHero">
    <div class="imageLightener">
    <div class="archiveHeroText">
    <?php the_field('archive_text_title');?>
    <p><?php the_field('archive_text_description');?></p>
    <div><div class="archiveLink"><?php echo '<a href="'.home_url().'?page_id='.'595'.'">Go to the Archive</a>';?></div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent">
<?php the_field('under_archive_title');?>
    </div>
    <div class="statsContainer">
    <div class="statVideo"><iframe width="560" height="315" src="<?php the_field('stats_video');?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
    <div class="statText"><h1><?php echo $cmcstats['title'];?></h1>
      <div class="innerContainer">
<div class="membersStat stat"><i class="fa fa-users"></i><span><?php echo $cmcstats['members'];?></span>
<span class="statType">Members</span>
</div>
<div class="sponsorsStat stat"><i class="fa fa-suitcase"></i><span><?php echo $cmcstats['sponsors'];?></span>
<span class="statType">Sponsors</span></div>
<div class="eventsStat stat"><i class="fa fa-calendar-o"></i><span><?php echo $cmcstats['annual_events'];?></span>
<span class="statType">Annual Events</span></div>
<div class="speakersStat stat"><i class="fa fa-user"></i><span><?php echo $cmcstats['speakers'];?></span>
<span class="statType">Speakers each year</span></div>
</div>
    </div>
</div>
  <div class="archiveHero">
    <div class="imageLightener actionHero">
    <div class="archiveHeroText">
    <?php the_field('action_area_title');?>
    <p><?php the_field('action_area_description');?></p>
    <div class="joinActionBtnContainer"><div class="joinAction"><?php the_field('action_area_button');?></div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent"><?php the_field('sponsors_info');?></div>
        <div class="partnersContainer">
      <div class="partnerImageContainer">
        <?php $fields = acf_get_fields('78'); ?>

        <?php if( $fields )
        { 
        foreach( $fields as $field )
        {   
            $images = get_field($field['name']);
                    ?>
            <img src="<?php echo $images['url']?>">
            <?php
        } 

        } 
        ?>
      </div>
    </div>
      <div class="moreSponsorsContainer">
        <?php echo '<a href="'.home_url().'?page_id='.'33'.'">';?>
  <div class="moreSponsors">
       <?php
       the_field('more_sponsors_button');?>
    </div>
  </a>
  </div>
    </section>

<?php
get_footer();
