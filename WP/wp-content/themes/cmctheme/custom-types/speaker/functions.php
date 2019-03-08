<?php
function register_speaker() {

	/**
	 * Post Type: Speaker.
	 */

	$labels = array(
		"name" => __( "Speakers"),
		"singular_name" => __( "Speaker"),
		"menu_name" => __( "Speakers"),
		"all_items" => __( "All Speakers"),
		"add_new_item" => __( "Add New Speaker"),
		"edit_item" => __( "Edit Speaker"),
		"new_item" => __( "New Speaker"),
		"view_item" => __( "View Speaker"),
		"view_items" => __( "View Speakers"),
		"search_items" => __( "Search Speaker"),
		"not_found" => __( "No Speaker Found"),
		"not_found_in_trash" => __( "No Speaker in Trash"),
		"featured_image" => __( "Speaker Image"),
		"set_featured_image" => __( "Set Speaker Image"),
		"remove_featured_image" => __( "Remove Speaker Image"),
		"use_featured_image" => __( "Use as Image"),
		"filter_items_list" => __( "Filter Speakers"),
		"items_list" => __( "Speaker List"),
		"attributes" => __( "Speaker Attributes"),
		"name_admin_bar" => __( "Speaker"),
	);

	$args = array(
		"label" => __( "Speakers"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => false,
		"exclude_from_search" => false,
		"capability_type" => "page",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "speaker" ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "speaker", $args );
}

add_action( 'init', 'register_speaker' );

function create_speaker_meta_boxes() {
	add_meta_box(
		'speaker-information',
		esc_html__('Speaker Information'),
		'speaker_meta_box',
		'speaker',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_speaker_meta_boxes');

function speaker_meta_box($post) { ?>
	<?php
        $speaker_company = get_post_meta($post->ID, '_speaker_company_name', true);
        $speaker_company_url = get_post_meta($post->ID, '_speaker_company_url', true);
        $speaker_job_title = get_post_meta($post->ID, '_speaker_job_title', true);
        $speaker_bio = get_post_meta($post->ID, '_speaker_bio', true);
        $speaker_twitter = get_post_meta($post->ID, '_speaker_twitter', true);
        $speaker_instagram = get_post_meta($post->ID, '_speaker_instagram', true);
        $speaker_linkedin = get_post_meta($post->ID, '_speaker_linkedin', true);
		$speaker_facebook = get_post_meta($post->ID, '_speaker_facebook', true);
				
		$speaker_bio_editor_settings = array(
			'textarea_name' => 'speaker-bio',
			'media_buttons' => 'false'
		)
	?>

	<?php wp_nonce_field(basename(__FILE__), 'speaker_nonce'); ?>

	<div>
		<label style="width:150px;" for="speaker-company-name">Company</label>
		<input type="text" name="speaker-company-name" id="speaker-company-name" value="<?php echo esc_attr( $speaker_company ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-company-url">Company URL</label>
		<input type="url" name="speaker-company-url" id="speaker-company-url" value="<?php echo esc_attr( $speaker_company_url ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-job-title">Job Title</label>
		<input type="text" name="speaker-job-title" id="speaker-job-title" value="<?php echo esc_attr( $speaker_job_title ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-bio">Bio</label><br/>
		<?php
			wp_editor( htmlspecialchars_decode($speaker_bio), '_speaker_bio', $settings = $speaker_bio_editor_settings );
		?>
	</div>
	<hr />
	<div>
		<label style="width:150px;" for="speaker-twitter">Twitter</label>
		<input type="text" name="speaker-twitter" id="speaker-twitter" value="<?php echo esc_attr( $speaker_twitter ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-instagram">Instagram</label>
		<input type="text" name="speaker-instagram" id="speaker-instagram" value="<?php echo esc_attr( $speaker_instagram ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-linkedin">LinkedIn</label>
		<input type="text" name="speaker-linkedin" id="speaker-linkedin" value="<?php echo esc_attr( $speaker_linkedin ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="speaker-facebook">Facebook</label>
		<input type="text" name="speaker-facebook" id="speaker-facebook" value="<?php echo esc_attr( $speaker_facebook ); ?>" size="30" />
	</div>
	<?php
}

add_action('save_post_speaker', 'save_speaker');

function save_speaker($post_id) {
	if (!isset($_POST['speaker_nonce'])) {
		return $post_id;
	}

	$speaker_company = (isset($_POST['speaker-company-name']) ? $_POST['speaker-company-name'] : null);
	$speaker_company_url = (isset($_POST['speaker-company-url']) ? $_POST['speaker-company-url'] : null);
	$speaker_job_title = (isset($_POST['speaker-job-title']) ? $_POST['speaker-job-title'] : null);
	$speaker_bio = (isset($_POST['speaker-bio']) ? $_POST['speaker-bio'] : null);
	$speaker_twitter = (isset($_POST['speaker-twitter']) ? $_POST['speaker-twitter'] : null);
	$speaker_instagram = (isset($_POST['speaker-instagram']) ? $_POST['speaker-instagram'] : null);
	$speaker_linkedin = (isset($_POST['speaker-linkedin']) ? $_POST['speaker-linkedin'] : null);
	$speaker_facebook = (isset($_POST['speaker-facebook']) ? $_POST['speaker-facebook'] : null);

	$orig_speaker_company = get_post_meta($post->ID, '_speaker_company_name', true);
	$orig_speaker_company_url = get_post_meta($post->ID, '_speaker_company_url', true);
	$orig_speaker_job_title = get_post_meta($post->ID, '_speaker_job_title', true);
	$orig_speaker_bio = get_post_meta($post->ID, '_speaker_bio', true);
	$orig_speaker_twitter = get_post_meta($post->ID, '_speaker_twitter', true);
	$orig_speaker_instagram = get_post_meta($post->ID, '_speaker_instagram', true);
	$orig_speaker_linkedin = get_post_meta($post->ID, '_speaker_linkedin', true);
	$orig_speaker_facebook = get_post_meta($post->ID, '_speaker_facebook', true);

	update_meta_data_for_post($post_id, $orig_speaker_company, $speaker_company, '_speaker_company_name');
	update_meta_data_for_post($post_id, $orig_speaker_company_url, $speaker_company_url, '_speaker_company_url');
	update_meta_data_for_post($post_id, $orig_speaker_job_title, $speaker_job_title, '_speaker_job_title');

	if ($speaker_bio != null) {
		$speaker_bio = htmlspecialchars($speaker_bio);
	}
	update_meta_data_for_post($post_id, $orig_speaker_bio, $speaker_bio, '_speaker_bio');
	update_meta_data_for_post($post_id, $orig_speaker_twitter, $speaker_twitter, '_speaker_twitter');
	update_meta_data_for_post($post_id, $orig_speaker_instagram, $speaker_instagram, '_speaker_instagram');
	update_meta_data_for_post($post_id, $orig_speaker_linkedin, $speaker_linkedin, '_speaker_linkedin');
	update_meta_data_for_post($post_id, $orig_speaker_facebook, $speaker_facebook, '_speaker_facebook');
}