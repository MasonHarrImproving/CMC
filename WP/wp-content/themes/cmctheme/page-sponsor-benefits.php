<?php
/*
    Template Name: Sponsor Benefit Template
*/
    get_header();
?>

<?php
    get_template_part('template-parts/shared/content-hero');
?>

<?php
    $bronze_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_sponsor_level',
                'value' => 'bronze'
            )
        )
    );
    
    $query = new WP_Query($bronze_args);
?>
<div class="col-12">
    <div class="row justify-content-center">
        <h3>Bronze Sponsors</h3>
    </div>
</div>
<div class="row justify-content-center">

  <?php
if ( $query->have_posts() ) {
$posts = $query->posts;

foreach($posts as $post) {
var_dump($post);
}

    wp_reset_postdata();
}
?>
<section class="sponsorsBenefits mainElement">
      <div class="sponsorContactContainer">
        <p class="sponsorContactDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Ultrices eros in cursus turpis massa. Risus ultricies tristique nulla aliquet enim tortor. Eu augue ut lectus arcu bibendum at varius vel pharetra. Quis ipsum suspendisse ultrices gravida dictum. Orci sagittis eu volutpat odio facilisis mauris sit amet. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Diam maecenas ultricies mi eget mauris pharetra. Aliquet eget sit amet tellus cras. Ornare arcu dui vivamus arcu felis. Libero id faucibus nisl tincidunt eget nullam non nisi est. Pulvinar etiam non quam lacus. Elit duis tristique sollicitudin nibh sit. Non nisi est sit amet facilisis. Pharetra convallis posuere morbi leo urna. Sit amet porttitor eget dolor morbi.</p>
        <div class="sponsorContactBtn">Contact Us To Discuss Sponsorship</div>

      <div class="sponsorUpperBenefits">
        <div class="diamond sponsorBox">
          <p class="sponsorAmount">$10,000</p>
          <p class="sponsorType">DIAMOND</p>
          <span>Lorem ipsum dolor sit amet, consectetur</span>
          <span>Lorem ipsum dolor sit amet sollicitudin tellus cras tristique</span>
          <span>Non nisi est sit amet facilisis sollicitudin tellus cras</span>
          <span>Pharetra convallis posuere morbi leo tellus cras</span>
          <span>Pulvinar etiam non quam lacus</span>
          <span>Eu augue ut lectus arcu bibendum at</span>
          <span>Aliquet eget sit amet tellus cras</span>
          <span>Libero id faucibus nisl tincidunt tristique </span>
      </div>
        <div class="platinum sponsorBox">
          <p class="sponsorAmount">$5,000</p>
          <p class="sponsorType">PLATINUM</p>
          <span>Lorem ipsum dolor sit amet, consectetur</span>
          <span>Lorem ipsum dolor sit amet sollicitudin tellus cras tristique</span>
          <span>Non nisi est sit amet facilisis sollicitudin tellus cras</span>
          <span>Pharetra convallis posuere morbi leo tellus cras</span>
          <span>Pulvinar etiam non quam lacus</span>
          <span>Aliquet eget sit amet tellus cras</span>
          <span>Libero id faucibus nisl tincidunt tristique </span>
      </div>
    </div>
      <div class="sponsorLowerBenefits">
                <div class="gold sponsorBox">
          <p class="sponsorAmount">$3,500</p>
          <p class="sponsorType">GOLD</p>
          <span>Lorem ipsum dolor sit amet, consectetur</span>
          <span>Lorem ipsum dolor sit amet sollicitudin tellus cras tristique</span>
          <span>Non nisi est sit amet facilisis sollicitudin tellus cras</span>
          <span>Pharetra convallis posuere morbi leo tellus cras</span>
          <span>Pulvinar etiam non quam lacus</span>
          <span>Aliquet eget sit amet tellus cras</span>
          <span>Libero id faucibus nisl tincidunt tristique </span>
      </div>
              <div class="silver sponsorBox">
          <p class="sponsorAmount">$2,000</p>
          <p class="sponsorType">SILVER</p>
          <span>Lorem ipsum dolor sit amet, consectetur</span>
          <span>Lorem ipsum dolor sit amet sollicitudin tellus cras tristique</span>
          <span>Non nisi est sit amet facilisis sollicitudin tellus cras</span>
          <span>Pharetra convallis posuere morbi leo tellus cras</span>
          <span>Pulvinar etiam non quam lacus</span>
          <span>Aliquet eget sit amet tellus cras</span>
          <span>Libero id faucibus nisl tincidunt tristique </span>
      </div>
              <div class="bronze sponsorBox">
          <p class="sponsorAmount">$1,000</p>
          <p class="sponsorType">BRONZE</p>
          <span>Lorem ipsum dolor sit amet, consectetur</span>
          <span>Lorem ipsum dolor sit amet sollicitudin tellus cras tristique</span>
          <span>Non nisi est sit amet facilisis sollicitudin tellus cras</span>
          <span>Pharetra convallis posuere morbi leo tellus cras</span>
          <span>Pulvinar etiam non quam lacus</span>
          <span>Aliquet eget sit amet tellus cras</span>
          <span>Libero id faucibus nisl tincidunt tristique </span>
      </div>
      </div>
    </div>
    </section>

<?php
    get_footer();
?>