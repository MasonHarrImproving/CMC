<?php
    $gold_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_sponsor_level',
                'value' => 'gold'
            )
        )
    );
    
    $query = new WP_Query($gold_args);
?>
<div class="col-12">
    <div class="row justify-content-center">
        <h3>Gold Sponsors</h3>
    </div>
</div>
<div class="row justify-content-center">
    <?php
        if ($query -> have_posts()) {
            while ($query -> have_posts()) {
                $query -> the_post();
                get_template_part('template-parts/sponsors/content-sponsor-grid');
            }
        }
    ?>