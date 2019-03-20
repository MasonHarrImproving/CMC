<?php
// require get_template_directory() . '/custom_types/sponsor/meta-boxes.php';

function register_sponsor() {

	/**
	 * Post Type: Sponsors.
	 */

	$labels = array(
		"name" => __( "Sponsors"),
		"singular_name" => __( "Sponsor"),
		"menu_name" => __( "Sponsors"),
		"all_items" => __( "All Sponsors"),
		"add_new_item" => __( "Add New Sponsor"),
		"edit_item" => __( "Edit Sponsor"),
		"new_item" => __( "New Sponsor"),
		"view_item" => __( "View Sponsor"),
		"view_items" => __( "View Sponsors"),
		"search_items" => __( "Search Sponsor"),
		"not_found" => __( "No Sponsor Found"),
		"not_found_in_trash" => __( "No Sponsor in Trash"),
		"featured_image" => __( "Sponsor Logo"),
		"set_featured_image" => __( "Set Logo"),
		"remove_featured_image" => __( "Remove Logo"),
		"use_featured_image" => __( "Use as Logo"),
		"filter_items_list" => __( "Filter Sponsors"),
		"items_list" => __( "Sponsor List"),
		"attributes" => __( "Sponsor Attributes"),
		"name_admin_bar" => __( "Sponsor"),
	);

	$args = array(
		"label" => __( "Sponsors"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => false,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "sponsor", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "sponsor", $args );
}

add_action( 'init', 'register_sponsor' );

function create_sponsor_meta_boxes() {
	add_meta_box(
		'sponsor-name',
		esc_html__('Sponsor Information'),
		'sponsor_logo_meta_box',
		'sponsor',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_sponsor_meta_boxes');

function sponsor_logo_meta_box($post) { ?>
	<?php
		$sponsor_level = get_post_meta($post->ID, '_sponsor_level', true);
		$sponsor_url = get_post_meta($post->ID, '_sponsor_url', true);
		$sponsor_logo_url = get_post_meta($post->ID, '_sponsor_logo_url', true);
		$sponsor_logo_alt = get_post_meta($post->ID, '_sponsor_logo_url', true);
		$is_founder = get_post_meta($post->ID, '_sponsor_founder', true);
	?>
	<?php wp_nonce_field(basename(__FILE__), 'sponsor_post_nonce'); ?>
	<div>
		<label style="width:150px;" for="sponsor-url">Sponsor URL(Required)</label>
		<input type="text" name="sponsor-url" id="sponsor-url" value="<?php echo esc_attr( $sponsor_url ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="sponsor-logo-url">Logo URL(Required)</label>
		<input type="text" name="sponsor-logo-url" id="sponsor-logo-url" value="<?php echo esc_attr( $sponsor_logo_url ); ?>" size="30" />
		<label style="width:150px;" for="sponsor-logo-alt">Alt Text(Required)</label>
		<input type="text" name="sponsor-logo-alt" id="sponsor-logo-alt" value="<?php echo esc_attr( $sponsor_logo_alt ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="sponsor-founder">Is Sponsor an Honorary Founder</label>
		<input type="checkbox" name="sponsor-founder" id="sponsor-founder" <?php checked($is_founder, 1); ?>/>
	</div>
	<div>
		<label style="width:150px;" for="sponsor-level">Sponsor Level</label>
		<select name="sponsor-level" id="sponsor-level">
			<option>--Select Sponsor Level--</option>
			<option value="diamond" <?php selected($sponsor_level, 'diamond'); ?>>Diamond</option>
			<option value="platinum" <?php selected($sponsor_level, 'platinum'); ?>>Platinum</option>
			<option value="gold" <?php selected($sponsor_level, 'gold'); ?>>Gold</option>
			<option value="silver" <?php selected($sponsor_level, 'silver'); ?>>Silver</option>
			<option value="bronze" <?php selected($sponsor_level, 'bronze'); ?>>Bronze</option>
		</select>
	</div>
	
	<?php
}

add_action('save_post_sponsor', 'save_sponsor_post');

function save_sponsor_post($post_id) {
	if (!isset($_POST['sponsor_post_nonce'])) {
		return $post_id;
	}

	$sponsor_level = (isset($_POST['sponsor-level']) ? $_POST['sponsor-level'] : null);
	$sponsor_url = (isset($_POST['sponsor-url']) ? $_POST['sponsor-url'] : null);
	$sponsor_logo_url = (isset($_POST['sponsor-logo-url']) ? $_POST['sponsor-logo-url'] : null);
	$sponsor_logo_alt = (isset($_POST['sponsor-logo-alt']) ? $_POST['sponsor-logo-alt'] : null);
	$sponsor_founder = (isset($_POST['sponsor-founder']) ? 1 : 0);

	if ($sponsor_level == null || $sponsor_url == null || $sponsor_logo_url == null) {
		return $post_id;
	}

	$orig_sponsor_level = get_post_meta($post_id, '_sponsor_level', true);
	$orig_sponsor_url = get_post_meta($post_id, '_sponsor_url', true);
	$orig_sponsor_logo_url = get_post_meta($post_id, '_sponsor_logo_url', true);
	$orig_sponsor_logo_alt = get_post_meta($post_id, '_sponsor_logo_alt', true);
	$orig_sponsor_founder = get_post_meta($post_id, '_sponsor_founder', true);

	update_meta_data_for_post($post_id, $orig_sponsor_founder, $sponsor_founder, '_sponsor_founder');
	update_meta_data_for_post($post_id, $orig_sponsor_level, $sponsor_level, '_sponsor_level');
	update_meta_data_for_post($post_id, $orig_sponsor_url, $sponsor_url, '_sponsor_url');
	update_meta_data_for_post($post_id, $orig_sponsor_logo_url, $sponsor_logo_url, '_sponsor_logo_url');
	update_meta_data_for_post($post_id, $orig_sponsor_logo_alt, $sponsor_logo_alt, '_sponsor_logo_alt');
	
}