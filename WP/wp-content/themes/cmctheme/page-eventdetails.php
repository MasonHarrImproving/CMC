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
              if(isset($post["speakers_speaker_".$i][0])){
                array_push($speakers, $post["speakers_speaker_".$i][0]);
                
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
    <span class="archiveEventDate archiveInfo"><?php if(strlen($post["event_date"][0]) > 0){ echo '<i class="fa fa-calendar-o"></i>'.date("F jS Y", strtotime($post["event_date"][0]));}?></span>
    <div class="timeHeader"><i class="fa fa-clock-o"></i><?php echo $post["details_times_time_1_header"][0];?></div>
       <div class="archiveEventTime archiveInfo"><?php echo $post["details_times_time_1"][0];?></div>
       <?php if(strlen($post["details_times_time_2_header"][0]) > 0){?>
           <div class="timeHeader"><i class="fa fa-clock-o"></i><?php echo $post["details_times_time_2_header"][0];?></div>
       <div class="archiveEventTime archiveInfo"><?php echo $post["details_times_time_2"][0];?></div>
     <?php }?>

       <div class="archiveEventLocation archiveInfo"><?php if(strlen($post["event_location"][0]) > 0){ echo '<i class="fa fa-map-pin"></i>'.$post["event_location"][0].'<br>'.$post["event_street"][0].'<br>'.$post["event_city"][0]; }?></div>
    </div>
     <div class="rightSideArchive">
      <div class="innerRightSideArchive">
       <span class="archiveEventPrice archiveInfo">
      <?php if(isset($post['pricing_0_price'][0]) > 0){ 
        echo '<i class="fa fa-ticket"></i>';
        for($p=0; isset($post['pricing_'.$p.'_price'][0]); $p++){
          echo $post['pricing_'.$p.'_price'][0].' For '.$post['pricing_'.$p.'_type'][0].'<br>';
          }
      }?>
      </span>
       <div class="archiveEventFood archiveInfo"><?php if(strlen($post["event_food_choices"][0]) > 0){ echo '<i class="fa fa-spoon"></i>'.$post["event_food_choices"][0];}?></div>
    </div>
    </div>
          </div>
      <div class="pastEventLowerDetails">
        <?php echo $post["event_description"][0]?>
          </div>
        </div>
        <div class="pastEventInfo details">
          <div class="eventInteract">
                                    <?php 
            if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $link = "https"; 
          }
        else{
            $link = "http"; 
          }
        $link .= "://"; 
        $link .= $_SERVER['HTTP_HOST']; 
        $link .= $_SERVER['REQUEST_URI'];
        $fblink = $link;
        $link = urlencode($link);
        $postName = $post["event_title"][0];
        $postTime = $post["details_times_time_1"][0];
            $postInfo = 'Columbus Metropolitan Club Event: '.$post["event_short_description"][0];
            $postLocation = $post["event_location"][0];
            ?>
            <?php 
            echo '<a class="registerLink" href="'.$post["wild_apricot_url"][0].'">';
            ?>
          <div>
          Register</div></a>
          <span class="shareEventBtn">Share Event</span>
          <?php 
          echo '<a class="addToCalendar" href="https://www.google.com/calendar/render?action=TEMPLATE&text='.$postName.'&dates='.$post["event_date"][0].'T130000Z/'.$post["event_date"][0].'T120000Z&details='.$postInfo.' '.$link.'&location='.$postLocation.'&sf=true&output=xml">
          <span>Add To Calendar</span>
          </a>';
          ?>
          <div class="shareEventButtons">
            <?php

            echo '<a href="https://www.facebook.com/sharer/sharer.php?u='.$fblink.'"target="_blank">
            <i class="fa fa-facebook"></i>
            </a>';

            echo '<a class="twitter-share-button"
            href="https://twitter.com/intent/tweet?text='.$postInfo.'&url='.$link.'"><i class="fa fa-twitter"></i></a>';

                        echo '<a href="mailto:?subject=Columbus Metropolitan Club Event&body='.$postInfo.'"><i class="fa fa-envelope"></i></a>';

            ?>
          </div>
        </div>
        <div class="attendanceContainer">
    <h2 >Cant Attend?</h2>
    <p>Sign up to recieve an email when the recording is available.</p>
    <span>SIGN UP NOW</span>
</div>
<div class="upcomingEvents">
<h1 class="followText">Follow On Social Media</h1>
  <div class="socialContainer"><div class="pastEventSocial"><i class="fa fa-hashtag"></i> <?php echo $post["event_hashtag"][0]?> </div>
  <div class="pastEventSocial"><i class="fa fa-twitter"></i><?php echo $post["event_twitter"][0]?></div>
  <div class="pastEventSocial"><i class="fa fa-instagram"></i> <?php echo $post["event_instagram"][0]?></div></div>
  <span></span>

</div>
        </div>
      </div>
    <section class="boardContainer mainElement">
      <?php
                  for($m=0; $m<count($speakers); $m++) {
                    if(strlen($speakers[$m]) === 0){

                    }
                    else{
                          echo '<div class="member">
                        <div class="memberLabel"><span>';
                       echo get_post_custom($speakers[$m])["label"][0];
              echo'</span></div>
        <a href="'.home_url().'?page_id=355&speaker_id='.$speakers[$m].'"><img class="memberImage" src="'.home_url().'/wp-content/uploads/'.get_post_custom(get_post_custom($speakers[$m])["image"][0])["_wp_attached_file"][0].'" height="250" width="200"></a>
        <span class="memberName">'.get_post_custom($speakers[$m])["name"][0].'<br></span>
        <span class="memberDesc">'.get_post_custom($speakers[$m])["title"][0].'<br>'.get_post_custom($speakers[$m])["subtitle"][0].'</span>
        <div class="memberReadMore"><a href="'.home_url().'?page_id=355&speaker_id='.$speakers[$m].'">Read More</a></div>
      </div>';
    }
                }
                ?>
    </section>
<div class="eventSponsorBox">
    <?php if(strlen($post["sponsor_1"][0]) > 0){
echo '<div class="eventSponsor">
        <h1>Sponsors</h1>';
        for($n=1; $n<3; $n++) {
          if($post["sponsor_".$n][0]){
        echo '<a href="'.$post["sponsor_link_1"][0].'"><img src="'.home_url().'/wp-content/uploads/'.get_post_custom($post["sponsor_".$n][0])["_wp_attached_file"][0].'"></a>';
      }
      }
          echo '</div>';
    }
      ?>
          <?php if(strlen($post["partner_1"][0]) > 0){
echo '<div class="eventPartners">
        <h1>Partnering Organizations</h1>';
        for($n=1; $n<3; $n++) {
          if($post["partner_".$n][0]){
        echo '<a href="'.$post["partner_link_1"][0].'"><img src="'.home_url().'/wp-content/uploads/'.get_post_custom($post["partner_".$n][0])["_wp_attached_file"][0].'"></a>';
      }
      }
                echo '</div>';
              }
      ?>
    </div>
    <?php if(strlen($post["bottom_title"][0]) > 0){
    echo '<div class="centeredBodyTextContainer">
      <h1>'.$post["bottom_title"][0].'</h1>
      <p>'.$post["bottom_description"][0].'</p>
      <div class="learnMore">';
      if(isset($post["bottom_forum_link"][0])){ echo '<a href="'.$post["bottom_forum_link"][0].'">'.$post["bottom_learn_more"][0].'</a>';}
      echo '</div>
    </div>';
  }?>
    <div class="hiddenSocial">
            <div class="attendanceContainer hiddenAttendance">
    <h2>Cant Attend?</h2>
    <p>Sign up to recieve an email when the recording is available.</p>
    <span>SIGN UP NOW</span>
</div>
<div class="upcomingEvents hiddenEvents">
<h1 class="followText">Follow On Social Media</h1>
<div class="socialContainer">
  <div class="pastEventSocial"><i class="fa fa-hashtag"></i> <?php echo $post["event_hashtag"][0]?> </div>
  <div class="pastEventSocial"><i class="fa fa-twitter"></i><?php echo $post["event_twitter"][0]?></div>
  <div class="pastEventSocial"><i class="fa fa-instagram"></i> <?php echo $post["event_instagram"][0]?></div>
</div>
  <span></span>

</div>
</div>
    </section>

<?php
    get_footer();
?>