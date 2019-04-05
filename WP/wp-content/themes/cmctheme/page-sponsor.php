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
get_template_part('template-parts/shared/content-hero');
?>


<section class="sponsorsPage">
            <div class="sponsorContactContainer">
            <p class="sponsorContactDesc"><?php the_field('sponsorship_info'); ?></p>
            <div class="sponsorContactBtn"><?php the_field('sponsorship_btn'); ?></div>
        </div>
<div class="honoraryFoundersContainer">
        <h1 class="foundersLabel">Honorary Founders</h1>
        <div class="founderImageContainer">
            <?php
$imageOne = get_field('honorary_founders_image_one');
$imageTwo = get_field('honorary_founders_image_two');
$imageThree = get_field('honorary_founders_image_three');
?>

    <img src="<?php echo $imageThree['url']; ?>"><img src="<?php echo $imageTwo['url']; ?>"><img src="<?php echo $imageOne['url']; ?>">
        </div>
        <div class="honoraryFoundersDesc"><?php the_field('HonoraryFoundersDesc'); ?></div>
    </div>
    <div class="partnersContainer">
        <h1 class="partnerType">Diamond Partners</h1>
        <div class="partnerImageContainer">
            <?php
$field_groups = acf_get_field_groups();
?>

    <?php $fields = acf_get_fields('78'); ?>

        <?php if ($fields)
{
    foreach ($fields as $field)
    {
        $images = get_field($field['name']);
?>
            <img src="<?php echo $images['url'] ?>">
            <?php
    }

}
?>
        </div>
    </div>
        <div class="partnersContainer">
        <h1 class="partnerType">Platinum Partners</h1>
        <div class="partnerImageContainer">
    <?php $fields = acf_get_fields('750'); ?>

        <?php if ($fields)
{
    foreach ($fields as $field)
    {
        $images = get_field($field['name']);
?>
            <img src="<?php echo $images['url'] ?>">
            <?php
    }

}
?>
        </div>
    </div>
    <div class="sponsorsBoxContainer">

        <?php
if ($goldquery->have_posts())
{
    $goldcount = 0;
    $goldposts = $goldquery->posts;
    echo '<div class="goldSponsorsLabel"><h1>Gold Sponsors</h1></div>';
    foreach ($goldposts as $post)
    {
        if ($goldcount == 0)
        {
            $goldcount++;
            echo '<div class="sponsorsBox">';
            echo '<p>' . $post->post_name . '</p>';
        }
        elseif ($goldcount == 3)
        {
            $goldcount = 1;
            echo '</div>';
            echo '<div class="sponsorsBox">';
            echo '<p>' . $post->post_name . '</p>';
        }
        else
        {
            $goldcount++;
            echo '<p>' . $post->post_name . '</p>';
        }
    }
    echo ' </div>';
}
?>


   
    <?php
if ($bronzequery->have_posts())
{
    $bronzecount = 0;
    $bronzeposts = $bronzequery->posts;
    echo '<div class="goldSponsorsLabel"><h1>Bronze Sponsors</h1></div>';
    foreach ($bronzeposts as $post)
    {
        if ($bronzecount == 0)
        {
            $bronzecount++;
            echo '<div class="sponsorsBox">';
            echo '<p>' . $post->post_name . '</p>';
        }
        elseif ($bronzecount == 3)
        {
            $bronzecount = 1;
            echo '</div>';
            echo '<div class="sponsorsBox">';
            echo '<p>' . $post->post_name . '</p>';
        }
        else
        {
            $bronzecount++;
            echo '<p>' . $post->post_name . '</p>';
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
