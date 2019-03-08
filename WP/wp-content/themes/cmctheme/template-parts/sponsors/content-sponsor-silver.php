<?php
    $silver_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_sponsor_level',
                'value' => 'silver'
            )
        )
    );
    
    $query = new WP_Query($silver_args);
?>
<div class="col-12">
    <div class="row justify-content-center">
        <h3>Silver Sponsors</h3>
    </div>
</div>
<div class="row justify-content-center">
    <?php
        if ($query -> have_posts()) {
            $post_index = 0;
            $count = 0;
            while ($count < 10) {
                while ($query -> have_posts()) {
                    $query -> the_post();
                    get_template_part('template-parts/sponsors/content-sponsor-grid');
                }
                $count++;
            }
        }
    ?>