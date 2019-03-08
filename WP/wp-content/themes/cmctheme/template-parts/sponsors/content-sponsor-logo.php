<?php
    $logo_width = get_post_meta($post->ID, '_logo_width', true);
    $logo_height = get_post_meta($post->ID, '_logo_height', true);
    $logo_alt_text = get_post_meta($post->ID, '_logo_alt', true);
    $logo_url = esc_html(get_post_meta($post->ID,'_logo_url', true));
    $sponsor_level = get_post_meta($post->ID, '_sponsor_level', true);
    $sponsor_name = the_title();

    if (!isset($logo_width) || !is_numeric($logo_width)) {
        $logo_width = 75;
    }

    if (!isset($logo_height) || !is_numeric($logo_height)) {
        $logo_height = 75;
    }

    if (isset($logo_url) && !empty($logo_url)) {
        echo '<img class="sponsor-logo" src="' . $logo_url . '" alt="' . $logo_alt_text . '" height="' . $logo_height . '" width="' . $logo_width . '">';
    } else {
        echo '<span class="align-middle sponsor-text-large">Missing Image for ' . $sponsor_name . '</span>';
    }
?>