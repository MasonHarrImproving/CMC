<?php
// get_header();
?>
<div class="row justify-content-center">
    <h4>Diamond Sponsors</h4>
</div>
<div class="row justify-content-center">
<?php
    $founders_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_sponsor_level',
                'value' => 'diamond'
            )
        )
    );
    
    $query = new WP_Query($founders_args);
    // echo 'There are posts: ' . $query;
    
    if ($query -> have_posts()) {
        while ($query -> have_posts()) {
            $query -> the_post();

            get_template_part('template-parts/sponsors/content-sponsor-logo');
        }
    }
?>
