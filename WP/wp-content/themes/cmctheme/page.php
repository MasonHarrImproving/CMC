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
?>
	<section class="homePage">
    <div class="homePageHero" style="background-image:url(<?php echo $heroimage['url'];?>)">
      <div class="homePageHeroDarkener">
    <div class="homePageHeroContainer"><h1><?php the_field('home_page_hero_title'); ?></h1><p><?php the_field('home_page_hero_description'); ?></p><div class="learnMore">
    <?php the_field('home_page_hero_learn_more'); ?>
    </div></div></div>


    </div>
    <div class="joinEvent"><h1><?php the_field('under_hero_text_title'); ?></h1><h2><?php the_field('under_hero_text_description'); ?></h2></div>
    <div class="upperMainEvent">
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="imageRow">
        <img src="room.jpg">
        </div>
        <div class="eventInfo">
        <h1 class="title">Harlem Renaissance: A city wide arts celebration</h1>
        <p class="eventDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> April 4th, 2018</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> 12:00PM - 1:15PM</span>
          <div class="learnEvent">Learn More</div>
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
        <h1 class="title">Harlem Renaissance: A city wide arts celebration</h1>
        <p class="eventDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> April 4th, 2018</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> 12:00PM - 1:15PM</span>
          <div class="learnEvent">Learn More</div>
        </div>
      </div>
      </div>
    </section>
    <section class="eventListing">
      <div class="eventContainer">
        <div class="greenBar"></div>
        <div class="eventInfo">
        <h1 class="title">Harlem Renaissance: A city wide arts celebration</h1>
        <p class="eventDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="bottomInfo">
          <span class="bottomEventDate"><i class="fa fa-calendar"></i> April 4th, 2018</span>
          <span class="bottomEventTime"><i class="fa fa-clock-o"></i> 12:00PM - 1:15PM</span>
          <div class="learnEvent">Learn More</div>
        </div>
      </div>
      </div>
    </section>

  </div>
  <div class="moreEventsContainer">
  <div class="moreEvents">
    More Events
    </div>
  </div>
  <div class="archiveHero">
    <div class="imageLightener">
    <div class="archiveHeroText">
    <h1><b>Missed</b> the last forum?</h1>
    <p>Visit our forum archives to watch complete recordings on YouTube, check out the photo gallery, and more.</p>
    <div><div class="archiveLink">GO TO THE ARCHIVE</div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent"><h1><b>Not </b>your average "club"</h1><h2>Stuffy members and boring speakers are out<br> Enlightened engagement and spirited debate are in.</h2></div>
    <div class="statsContainer">
    <div class="statVideo"></div>
    <div class="statText"><h1>What makes up a 21st century civic engagement organization?</h1>
      <div class="innerContainer">
<div class="membersStat stat"><i class="fa fa-users"></i><span>1,265</span>
<span class="statType">Members</span>
</div>
<div class="sponsorsStat stat"><i class="fa fa-suitcase"></i><span>198</span>
<span class="statType">Sponsors</span></div>
<div class="eventsStat stat"><i class="fa fa-calendar-o"></i><span>52+</span>
<span class="statType">Annual Events</span></div>
<div class="speakersStat stat"><i class="fa fa-user"></i><span>210+</span>
<span class="statType">Speakers each year</span></div>
</div>
    </div>
</div>
  <div class="archiveHero">
    <div class="imageLightener actionHero">
    <div class="archiveHeroText">
    <h1><b>Be a part</b> of the action</h1>
    <p>Join the columbus metropolitan club to join the best conversations in town and gain access to special benefits</p>
    <div class="joinActionBtnContainer"><div class="joinAction">Join Now</div>
</div>
    </div>
    </div>
</div>
    <div class="joinEvent"><h1><b>Our sponsors</b> help pave the way</h1><h2>We are very fortunate to have over 200 local<br> businesses and organizations sponsor us!</h2></div>
        <div class="partnersContainer">
      <div class="partnerImageContainer">
      <img src="battelle2017.jpg">
      <img src="CBF.jpg">
      <img src="TCF.jpg">
      <img src="Daily_Reporter_logo.jpg">
      <img src="DMG.jpg">
      <img src="JPMC.png">
      <img src="LBrands.png">
      <img src="MC.jpg">
      <img src="nationwide15.jpg">
      <img src="OFB.jpg">
      <img src="ohiohealth_logo.gif">
      <img src="OSU.png">
      <img src="PNC.jpg">
      <img src="puffin.jpg">
      <img src="WCBE.jpg">
      </div>
    </div>
      <div class="moreSponsorsContainer">
  <div class="moreSponsors">
    More Sponsors
    </div>
  </div>
    </section>

<?php
get_footer();
