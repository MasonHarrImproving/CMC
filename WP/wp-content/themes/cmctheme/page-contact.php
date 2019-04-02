<?php
/*
    Template Name: Contact Page Template
*/
    get_header();
    get_template_part('template-parts/shared/content-hero');
?>
<section class="contactContainer mainElement">
    <form id="formid" action="" method="POST">
    <div class="mainContactInfoBox">
        <div class="nameBoxContainer">
            <p class="mainInfoText"><?php the_field('name_box_label'); ?></p>
            <input type="text" name="namebox" class="nameBox">
        </div>
        <div class="emailBoxContainer">
            <p class="mainInfoText"><?php the_field('email_box_label'); ?></p>
            <input type="text" name="emailBox" class="emailBox">
        </div>
        <div class="phoneBoxContainer">
            <p class="mainInfoText"><?php the_field('number_box_label'); ?></p>
            <input type="text" name="phoneBox" class="phoneBox">
        </div>
    </div>
    <div class="commentBoxContainer">
        <p class="mainInfoText"><?php the_field('comment_box_label'); ?></p>
        <textarea name="comments" class="commentBox"></textarea>
        <div class="submitBtn">Submit</div>
    </div>
</form>
    <div class="mapOfLocation" style="background-image:url(<?php bloginfo('template_url') ?>/images/maps.png)">
        <div class="innerInfoBox">
            <h1><?php the_field('contact_label'); ?></h1>
            <div class="innerNumber"><p><i class="fa fa-mobile-phone"></i><?php the_field('contact_number'); ?></p></div>
            <div class="innerEmail"><p><i class="fa fa-at"></i><?php the_field('contact_email'); ?></p></div>
            <div class="innerLocation"><p><i class="fa fa-map-pin"></i><?php the_field('contact_location'); ?></p></div>
            <div class="innerStreet"><p><?php the_field('contact_street'); ?></p></div>
            <div class="inner2ndLocation"><p><i class="fa fa-map-pin"></i><?php the_field('contact_2nd_location'); ?></p></div>
            <div class="inner2ndStreet"><p><?php the_field('contact_2nd_street'); ?><br></p></div>

        </div>
    </div>
</section>
<script>
    $('.submitBtn').click(function(){
        console.log($('form#formid').serialize());
    });
  $('.submitBtn').click( function() {
    // $.ajax({
    //     url: 'url',
    //     type: 'post',
    //     dataType: 'json',
    //     data: $('form#formid').serialize(),
    //     success: function(data) {
    //              }
    // });
});
</script>
<?php
    get_footer();
?>