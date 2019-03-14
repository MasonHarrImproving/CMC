    <?php
    /*
        Template Name: Speakers Bio Template
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
$speaker = get_post_custom($_GET['speaker_id']);

?>
<section class="memberBio mainElement">
      <div class="bio">
        <h1 class="hiddenUpper bioName"><?php echo $speaker["name"][0]?></h1>
           <p class="hiddenUpper bioNameDesc"><?php echo $speaker["title"][0]?> , <?php echo $speaker["subtitle"][0]?></p>
        <div class="bioThumbnail">
          <?php echo '<img class="profilePic" src="'.home_url().'/wp-content/uploads/'.get_post_custom($speaker["image"][0])["_wp_attached_file"][0].'">';
          ?>
          <div class="bioSocialBox">
            <div class="bioSocialInnerBox">
      <p class="followOn"> Follow on social media</p>
      <?php if($speaker["social_media_twitter_1"][0]){
        echo'<p class="bioTwitter"><i class="fa fa-twitter"></i> '.$speaker["social_media_twitter_1"][0].'</p>';
      }
      ?>
      <?php if($speaker["social_media_twitter_2"][0]){
        echo'<p class="bioTwitter"><i class="fa fa-twitter"></i> '.$speaker["social_media_twitter_2"][0].'</p>';
      }
      ?>
      <?php if($speaker["social_media_instagram_1"][0]){
        echo'<p class="bioInstagram"><i class="fa fa-instagram"></i> '.$speaker["social_media_instagram_1"][0].'</p>';
      }
      ?>
      <?php if($speaker["social_media_instagram_2"][0]){
        echo'<p class="bioInstagram"><i class="fa fa-instagram"></i> '.$speaker["social_media_instagram_2"][0].'</p>';
      }
      ?>
      <?php if($speaker["social_media_facebook_1"][0]){
        echo'<p class="bioFacebook"><i class="fa fa-facebook"></i> '.$speaker["social_media_facebook_1"][0].'</p>';
      }
      ?>
      <?php if($speaker["social_media_facebook_2"][0]){
        echo'<p class="bioFacebook"><i class="fa fa-facebook"></i> '.$speaker["social_media_facebook_2"][0].'</p>';
      }
      ?>
    </div>
  </div>
        </div>
        <div class="bioDesc">
          <h1 class="bioName"><?php echo $speaker["name"][0];?></h1>
           <p class="bioNameDesc"><?php echo $speaker["title"][0];?> , <?php echo $speaker["subtitle"][0];?></p>
          <p class="memberDesc"><?php echo $speaker["bio"][0]; ?>
          </p>
          <div class="speakerEvents">
            <h1>Speakers Events</h1>
            <?php 
            for($i=1; $i<7; $i++){
              if($speaker["event_".$i][0]){
                echo '<p><a class="associatedEvents" href="'.home_url().'?page_id=374&info_id='.$speaker["event_".$i][0].'">'.get_post_custom($speaker["event_".$i][0])["event_title"][0].'</a></p>';              }
            }
            ?>
          </div>
        </div>
      </div>
    </section>

<?php
    get_footer();
?>
