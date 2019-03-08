<?php
    $founders_args = array(
        'post_type' => 'sponsor',
        'meta_query' => array(
            array(
                'key' => '_founder',
                'value' => 'on'
            )
        )
    );

    $query = new WP_Query($founders_args);
?>
<div class="row justify-content-center">
    <h4>Honorary Founders</h4>
</div>
<div class="row justify-content-center">
<?php
    if ($query -> have_posts()) {
        $post_index = 0;
        while ($query -> have_posts()) {
            $query -> the_post();

            get_template_part('template-parts/sponsors/content-sponsor-logo');
        }
    }
?>
<div class="row justify-content-center">
    <p>Needs to be customizable somehow.  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dui dolor, dictum ac felis in, lacinia fringilla diam. Maecenas laoreet sollicitudin vehicula. Duis arcu justo, pharetra at libero non, fringilla vulputate diam. Nunc et consequat urna. Quisque vel hendrerit nibh. Fusce feugiat pulvinar urna, et pellentesque turpis pulvinar a. Praesent eu elit dapibus, commodo nulla et, pharetra magna. Fusce turpis quam, aliquam eu iaculis ac, eleifend laoreet dui. Donec vel fermentum erat. Proin ac euismod odio, quis vehicula ipsum. Pellentesque nec ligula sit amet dolor tincidunt ullamcorper et at arcu. Integer vehicula lorem eget justo tincidunt, id congue mauris dignissim.</p>
</div>