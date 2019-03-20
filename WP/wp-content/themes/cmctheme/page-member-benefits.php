<?php
/*
    Template Name: Member Benefit Template
*/
    get_header();
?>

<?php
    get_template_part('template-parts/shared/content-hero');
?>

<?php
    $diamond_args = array(
        'post_type' => 'benefit',
        'meta_query' => array(
            array(
                'key' => '_benefit_level',
                'value' => 'diamond'
            )
        )
    );
    
    $diamondquery = new WP_Query($diamond_args);
?>

<?php
    $platinum_args = array(
        'post_type' => 'benefit',
        'meta_query' => array(
            array(
                'key' => '_benefit_level',
                'value' => 'platinum'
            )
        )
    );
    
    $platinumquery = new WP_Query($platinum_args);
?>

<?php
    $gold_args = array(
        'post_type' => 'benefit',
        'meta_query' => array(
            array(
                'key' => '_benefit_level',
                'value' => 'gold'
            )
        )
    );
    
    $goldquery = new WP_Query($gold_args);
?>

<?php
    $silver_args = array(
        'post_type' => 'benefit',
        'meta_query' => array(
            array(
                'key' => '_benefit_level',
                'value' => 'silver'
            )
        )
    );
    
    $silverquery = new WP_Query($silver_args);
?>

<?php
    $bronze_args = array(
        'post_type' => 'benefit',
        'meta_query' => array(
            array(
                'key' => '_benefit_level',
                'value' => 'bronze'
            )
        )
    );
    
    $bronzequery = new WP_Query($bronze_args);
?>
<div class="row justify-content-center">
<section class="sponsorsBenefits mainElement">
      <div class="sponsorContactContainer">
        <p class="sponsorContactDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Ultrices eros in cursus turpis massa. Risus ultricies tristique nulla aliquet enim tortor. Eu augue ut lectus arcu bibendum at varius vel pharetra. Quis ipsum suspendisse ultrices gravida dictum. Orci sagittis eu volutpat odio facilisis mauris sit amet. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Diam maecenas ultricies mi eget mauris pharetra. Aliquet eget sit amet tellus cras. Ornare arcu dui vivamus arcu felis. Libero id faucibus nisl tincidunt eget nullam non nisi est. Pulvinar etiam non quam lacus. Elit duis tristique sollicitudin nibh sit. Non nisi est sit amet facilisis. Pharetra convallis posuere morbi leo urna. Sit amet porttitor eget dolor morbi.</p>
        <div class="sponsorContactBtn">Contact Us To Discuss Membership</div>

      <div class="sponsorUpperBenefits">
        <div class="diamond sponsorBox">
          <p class="sponsorAmount">$10,000</p>
          <p class="sponsorType">DIAMOND</p>
          <?php 
       if ($diamondquery->have_posts() ) {
        if(isset(get_post_custom($post->ID)['member'])){
            $diamondposts = $diamondquery->posts;
        foreach($diamondposts as $post) {
       echo '<span>'.$post->post_title.'</span>';
   }
   wp_reset_postdata();
 }
 }
   ?>
      </div>
        <div class="platinum sponsorBox">
          <p class="sponsorAmount">$5,000</p>
          <p class="sponsorType">PLATINUM</p>
        <?php 
               if ($platinumquery->have_posts() ) {
                if(isset(get_post_custom($post->ID)['member'])){
                    $platinumposts = $platinumquery->posts;
                foreach($platinumposts as $post) {
               echo '<span>'.$post->post_title.'</span>';
           }
           wp_reset_postdata();
         }
         }
           ?>
      </div>
    </div>
      <div class="sponsorLowerBenefits">
                <div class="gold sponsorBox">
          <p class="sponsorAmount">$3,500</p>
          <p class="sponsorType">GOLD</p>
        <?php 
       if ($goldquery->have_posts() ) {
            $goldposts = $goldquery->posts;
        foreach($goldposts as $post) {
if(isset(get_post_custom($post->ID)['member'])){
       echo '<span>'.$post->post_title.'</span>';
           
           wp_reset_postdata();
         }
         }
            }
              ?>
      </div>
              <div class="silver sponsorBox">
          <p class="sponsorAmount">$2,000</p>
          <p class="sponsorType">SILVER</p>
          <?php 
                 if ($silverquery->have_posts() ) {
                  if(isset(get_post_custom($post->ID)['member'])){
                      $silverposts = $silverquery->posts;
                  foreach($silverposts as $post) {
                 echo '<span>'.$post->post_title.'</span>';
               }
             wp_reset_postdata();
           }
           }
             ?>
      </div>
              <div class="bronze sponsorBox">
          <p class="sponsorAmount">$1,000</p>
          <p class="sponsorType">BRONZE</p>
          <?php 
       if ($bronzequery->have_posts() ) {
        if(isset(get_post_custom($post->ID)['member'])){
            $bronzeposts = $bronzequery->posts;
        foreach($bronzeposts as $post) {
       echo '<span>'.$post->post_title.'</span>';
           }
           wp_reset_postdata();
         }
        }
              ?>
      </div>
      </div>
    </div>
    </section>

<?php
    get_footer();
?>