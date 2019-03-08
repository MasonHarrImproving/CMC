<?php
/*
    Template Name: Sponsor Template
*/
    get_header();
?>

<?php
    /*
        The following section would be the portion that is customizable.
    */
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
    
    $bronzequery = new WP_Query($bronze_args);


        $gold_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_sponsor_level',
                'value' => 'gold'
            )
        )
    );
    
    $goldquery = new WP_Query($gold_args);
?>

  <?php
// if ( $query->have_posts() ) {
// $posts = $query->posts;

// foreach($posts as $post) {
// var_dump($post);
// }

//     wp_reset_postdata();
// }
?>
<section class="sponsorsPage">
            <div class="sponsorContactContainer">
            <p class="sponsorContactDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Ultrices eros in cursus turpis massa. Risus ultricies tristique nulla aliquet enim tortor. Eu augue ut lectus arcu bibendum at varius vel pharetra. Quis ipsum suspendisse ultrices gravida dictum. Orci sagittis eu volutpat odio facilisis mauris sit amet. Elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Diam maecenas ultricies mi eget mauris pharetra. Aliquet eget sit amet tellus cras. Ornare arcu dui vivamus arcu felis. Libero id faucibus nisl tincidunt eget nullam non nisi est. Pulvinar etiam non quam lacus. Elit duis tristique sollicitudin nibh sit. Non nisi est sit amet facilisis. Pharetra convallis posuere morbi leo urna. Sit amet porttitor eget dolor morbi.</p>
            <div class="sponsorContactBtn">Learn More About Sponsorship</div>
        </div>
<div class="honoraryFoundersContainer">
        <h1 class="foundersLabel">Honorary Founders</h1>
        <div class="founderImageContainer">
    <img src="DMG.jpg"><img src="AEP.jpg"><img src="blue.png">
        </div>
        <div class="honoraryFoundersDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
    </div>
    <div class="partnersContainer">
        <h1 class="partnerType">Diamond Partners</h1>
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
<div class="sponsorsBoxContainer">

    <?php
   if ( $goldquery->have_posts() ) {
    $goldcount = 0;
$goldposts = $goldquery->posts;
        echo '<div class="goldSponsersLabel" style="width: 100%;"><h1 style="margin: auto;color: black; font-weight: 300;">Gold Sponsors</h1></div>';
    foreach($goldposts as $post) {
    if($goldcount == 0){
        $goldcount++;
        echo '<div class="sponsorsBox">';
        echo '<p>'.$post->post_name.'</p>';
    }
    elseif($goldcount == 3){
    $goldcount = 1;
        echo '</div>';
        echo '<div class="sponsorsBox">';
        echo '<p>'.$post->post_name.'</p>';
    }
    else{
        $goldcount++;
        echo '<p>'.$post->post_name.'</p>';
}
}
    echo ' </div>';
}
    ?>


   
<?php
   if ( $bronzequery->have_posts() ) {
    $bronzecount = 0;
$bronzeposts = $bronzequery->posts;
        echo '<div class="goldSponsersLabel" style="width: 100%;"><h1 style="margin: auto;color: black; font-weight: 300;">Bronze Sponsors</h1></div>';
    foreach($bronzeposts as $post) {
    if($bronzecount == 0){
        $bronzecount++;
        echo '<div class="sponsorsBox">';
        echo '<p>'.$post->post_name.'</p>';
    }
    elseif($bronzecount == 3){
    $bronzecount = 1;
        echo '</div>';
        echo '<div class="sponsorsBox">';
        echo '<p>'.$post->post_name.'</p>';
    }
    else{
        $bronzecount++;
        echo '<p>'.$post->post_name.'</p>';
}
}
    echo ' </div>';
}
    ?>
</div>
    </section>

<div>
</div>

<?php
    get_footer();
?>