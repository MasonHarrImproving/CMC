<?php
    get_header();

    $speaker_name = get_the_title($post->ID);
    $speaker_company = get_post_meta($post->ID, '_speaker_company_name', true);
    $speaker_company_url = get_post_meta($post->ID, '_speaker_company_url', true);
    $speaker_job_title = get_post_meta($post->ID, '_speaker_job_title', true);
    $speaker_bio = htmlspecialchars_decode(get_post_meta($post->ID, '_speaker_bio', true));
    $speaker_twitter = get_post_meta($post->ID, '_speaker_twitter', true);
    $speaker_instagram = get_post_meta($post->ID, '_speaker_instagram', true);
    $speaker_linkedin = get_post_meta($post->ID, '_speaker_linkedin', true);
    $speaker_facebook = get_post_meta($post->ID, '_speaker_facebook', true);
?>
<section class="memberBio mainElement">
    <div class="bio">
        <h1 class="hiddenUpper bioName"><?php echo $speaker_name ?></h1>
        <p class="hiddenUpper bioNameDesc"><?php echo get_post_meta($post->ID, '_speaker_job_title', true); ?></p>
        <div class="bioThumbnail">
            <?php the_post_thumbnail('full'); ?>
        <div class="bioSocialBox">
            <div class="bioSocialInnerBox">
        <p class="followOn"> Follow on social media</p>
        <?php if ($speaker_twitter != null) { ?>
            <p class="bioTwitter"><i class="fa fa-twitter"></i> @<?php echo $speaker_twitter; ?> </p>
        <?php } ?>
        <?php if ($speaker_instagram != null) { ?>
            <p class="bioInstagram"><i class="fa fa-instagram"></i> @<?php echo $speaker_instagram; ?> </p>
        <?php } ?>
        <?php if ($speaker_linkedin != null) { ?>
            <p class="bioFacebook"><i class="fa fa-linkedin"></i> @<?php echo $speaker_linkedin; ?> </p>
        <?php } ?>
        <?php if ($speaker_facebook != null) { ?>
            <p class="bioFacebook"><i class="fa fa-facebook"></i> @<?php echo $speaker_facebook; ?> </p>
        <?php } ?>
    </div>
    </div>
        </div>
        <div class="bioDesc">
            <h1 class="bioName"><?php echo $speaker_name; ?></h1>
                <p class="bioNameDesc"><?php echo get_post_meta($post->ID, '_speaker_job_title', true); ?></p>
                <p class="memberDesc">
                    <?php echo htmlspecialchars_decode(get_post_meta($post->ID, '_speaker_bio', true)); ?>
                </p>
                <div class="speakerEvents">
                    <h1 >Spearkers Events</h1>
                    <p>To be Integrated</p>
                </div>
        </div>
    </div>
</section>
<?php
    get_footer();
?>