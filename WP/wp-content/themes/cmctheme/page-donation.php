<?php
/*
    Template Name: Donation Template
*/
    get_header();
?>

<?php
    get_template_part('template-parts/shared/content-hero');
?>
<section class="donatePage mainElement">
      <div class="donationDescContainer">
        <p class="donationDesc"><?php the_field('description')?></p>
      </div>
<div class="donateInfo">
       <div class="donate donateNameBoxContainer">
          <p class="mainInfoText"><?php the_field('amount')?></p>
          <input class="donateNameBox">
        </div>
        <div class="donate addressBoxContainer">
          <p class="mainInfoText"><?php the_field('address')?></p>
          <input class="donateEmailBox">
        </div>
       <div class="donate cityBoxContainer">
          <p class="mainInfoText"><?php the_field('city')?></p>
          <input class="donateNameBox">
        </div>
               <div class="donate stateBoxContainer">
          <p class="mainInfoText"><?php the_field('state')?></p>
          <input class="donateNameBox">
        </div>
               <div class="donate zipBoxContainer">
          <p class="mainInfoText"><?php the_field('zip')?></p>
          <input class="donateNameBox">
        </div>
               <div class="donate countryBoxContainer">
          <p class="mainInfoText"><?php the_field('country')?></p>
          <input class="donateNameBox">
        </div>
               <div class="donate donateCommentBoxContainer">
          <p class="mainInfoText"><?php the_field('comment')?></p>
          <input class="donateCommentBox">
        </div>
      </div>
      <div class="donateSubmitBtns">
        <div class="donateCancelBtn"><?php the_field('cancelbtn')?></div>
        <div class="donatePayBtn"><?php the_field('paybtn')?></div>
      </div>
    </section>

<?php
    get_footer();
?>