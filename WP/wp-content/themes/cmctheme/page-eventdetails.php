<?php
/*
    Template Name: Event Details Template
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

            for($i=1; $i<5; $i++) {
              if($post["speakers_speaker_".$i][0]){
                array_push($speakers, $post["speakers_speaker_".$i][0]);;
              }
            }
?>
 <section class="eventDetails">
      <div class="eventTitleContainer">
        <h1><?php echo $post["event_title"][0]?></h1>
        <span><?php echo $post["bottom_title"][0]?></span>
      </div>
            <div class="pastEvents">
        <div class="pastEventDesc">
          <div class="pastEventUpperDetails">
   <div class="leftSideArchive">
    <span class="archiveEventDate archiveInfo"><i class="fa fa-calendar-o"></i> <?php echo $post["event_date"][0]?></span>
       <div class="archiveEventTime archiveInfo"><i class="fa fa-clock-o"></i> <?php echo $post["event_start_time"][0]?> - <?php echo $post["event_end_time"][0]?></div>
       <div class="archiveEventLocation archiveInfo"><i class="fa fa-map-pin"></i> <?php echo $post["event_location"][0]?><br><?php echo $post["event_street"][0]?><br><?php echo $post["event_city"][0]?></div>
    </div>
     <div class="rightSideArchive">
    <span class="archiveEventPrice archiveInfo"><i class="fa fa-ticket"></i> <?php echo $post["event_member_price"][0]?> for members<br> <?php echo $post["event_guest_price"][0]?> for guests</span>
       <div class="archiveEventFood archiveInfo"><i class="fa fa-spoon"></i> <?php echo $post["event_food_choices"][0]?></div>
    </div>
          </div>
      <div class="pastEventLowerDetails">
        <?php echo $post["event_description"][0]?>
          </div>
        </div>
        <div class="pastEventInfo details">
          <div class="eventInteract">
          <div>Register</div>
          <span>Share Event</span>
          <span>Add To Calendar</span>
        </div>
        <div class="attendanceContainer">
    <h2 >Cant Attend?</h2>
    <p>Sign up to recieve an email when the recording is available.</p>
    <span>SIGN UP NOW</span>
</div>
<div class="upcomingEvents">
<h1 class="followText">Follow On Social Media</h1>
  <div class="pastEventSocial"><i class="fa fa-hashtag"></i> <?php echo $post["event_hashtag"][0]?> </div>
  <div class="pastEventSocial"><i class="fa fa-twitter"></i><?php echo $post["event_twitter"][0]?></div>
  <div class="pastEventSocial"><i class="fa fa-instagram"></i> <?php echo $post["event_instagram"][0]?></div>
  <span></span>

</div>
        </div>
      </div>
    <section class="boardContainer mainElement">
      <?php
                  for($m=0; $m<count($speakers); $m++) {
                          echo '<div class="member">
        <a href="'.home_url().'?page_id=355&speaker_id='.$speakers[$m].'"><img class="memberImage" src="'.home_url().'/wp-content/uploads/'.get_post_custom(get_post_custom($speakers[$m])["image"][0])["_wp_attached_file"][0].'" height="250" width="200"></a>
        <span class="memberName">'.get_post_custom($speakers[$m])["name"][0].'<br></span>
        <span class="memberDesc">'.get_post_custom($speakers[$m])["title"][0].'<br>'.get_post_custom($speakers[$m])["subtitle"][0].'</span>
      </div>';
                }
                ?>
    </section>
<div class="eventSponsorBox">
      <div class="eventSponsor">
        <h1>Sponsors</h1>
        <?php
        for($n=1; $n<3; $n++) {
          if($post["sponsor_".$n][0]){
        echo '<img src="'.home_url().'/wp-content/uploads/'.get_post_custom($post["sponsor_".$n][0])["_wp_attached_file"][0].'">';
      }
      }
      ?>
      </div>
      <div class="eventPartners">
        <h1>Partnering Organizations</h1>
        <?php
        for($n=1; $n<3; $n++) {
          if($post["partner_".$n][0]){
        echo '<img src="'.home_url().'/wp-content/uploads/'.get_post_custom($post["partner_".$n][0])["_wp_attached_file"][0].'">';
      }
      }
      ?>
      </div>
    </div>
    <div class="centeredBodyTextContainer">
      <h1><?php echo $post["bottom_title"][0]?></h1>
      <p><?php echo $post["bottom_description"][0] ?></p>
      <div class="learnMore"><?php echo $post["bottom_learn_more"][0] ?></div>
    </div>
    <div class="hiddenSocial">
            <div class="attendanceContainer hiddenAttendance">
    <h2>Cant Attend?</h2>
    <p>Sign up to recieve an email when the recording is available.</p>
    <span>SIGN UP NOW</span>
</div>
<div class="upcomingEvents hiddenEvents">
<h1 class="followText">Follow On Social Media</h1>
  <div class="pastEventSocial"><i class="fa fa-hashtag"></i> <?php echo $post["event_hashtag"][0]?> </div>
  <div class="pastEventSocial"><i class="fa fa-twitter"></i><?php echo $post["event_twitter"][0]?></div>
  <div class="pastEventSocial"><i class="fa fa-instagram"></i> <?php echo $post["event_instagram"][0]?></div>
  <span></span>

</div>
</div>
    </section>

<?php
    get_footer();
?>