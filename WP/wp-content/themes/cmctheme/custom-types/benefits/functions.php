<?php
// require get_template_directory() . '/custom_types/benefit/meta-boxes.php';

function register_benefit() {

	/**
	 * Post Type: benefits.
	 */

	$labels = array(
		"name" => __( "benefits"),
		"singular_name" => __( "benefit"),
		"menu_name" => __( "benefits"),
		"all_items" => __( "All benefits"),
		"add_new_item" => __( "Add New benefit"),
		"edit_item" => __( "Edit benefit"),
		"new_item" => __( "New benefit"),
		"view_item" => __( "View benefit"),
		"view_items" => __( "View benefits"),
		"search_items" => __( "Search benefit"),
		"not_found" => __( "No benefit Found"),
		"not_found_in_trash" => __( "No benefit in Trash"),
		"featured_image" => __( "benefit Logo"),
		"set_featured_image" => __( "Set Logo"),
		"remove_featured_image" => __( "Remove Logo"),
		"use_featured_image" => __( "Use as Logo"),
		"filter_items_list" => __( "Filter benefits"),
		"items_list" => __( "benefit List"),
		"attributes" => __( "benefit Attributes"),
		"name_admin_bar" => __( "benefit"),
	);

	$args = array(
		"label" => __( "benefits"),
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
		"rewrite" => array( "slug" => "benefit", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "benefit", $args );
}

add_action( 'init', 'register_benefit' );

function create_benefit_meta_boxes() {
	add_meta_box(
		'benefit-name',
		esc_html__('benefit Information'),
		'benefit_logo_meta_box',
		'benefit',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_benefit_meta_boxes');

function benefit_logo_meta_box($post) { ?>
	<?php
		$benefit_level = get_post_meta($post->ID, '_benefit_level', true);
		$is_for_member = get_post_meta($post->ID, '_member', true);
	?>
	<?php wp_nonce_field(basename(__FILE__), 'benefit_post_nonce'); ?>
	<label>Member Benefit?</label>
	<input type="checkbox" name="member" id="member" <?php checked($is_for_member, 1); ?>/>
		<select name="benefit-level" id="benefit-level">
			<option>--Select benefit Level--</option>
			<option value="diamond" <?php selected($benefit_level, 'diamond'); ?>>Diamond</option>
			<option value="platinum" <?php selected($benefit_level, 'platinum'); ?>>Platinum</option>
			<option value="gold" <?php selected($benefit_level, 'gold'); ?>>Gold</option>
			<option value="silver" <?php selected($benefit_level, 'silver'); ?>>Silver</option>
			<option value="bronze" <?php selected($benefit_level, 'bronze'); ?>>Bronze</option>
			<option value="regular" <?php selected($benefit_level, 'regular'); ?>>Regular</option>
			<option value="company" <?php selected($benefit_level, 'company'); ?>>Company</option>
			<option value="pro" <?php selected($benefit_level, 'pro'); ?>>Young Professional</option>
			<option value="leader" <?php selected($benefit_level, 'leader'); ?>>Seasoned Leader</option>
		</select>
	</div>
	
	<?php
}

add_action('save_post_benefit', 'save_benefit_post');

function save_benefit_post($post_id) {
	if (!isset($_POST['benefit_post_nonce'])) {
		return $post_id;
	}
	$benefit_level = (isset($_POST['benefit-level']) ? $_POST['benefit-level'] : null);
	$member = (isset($_POST['member']) ? isset($_POST['member']) : null);


	$orig_benefit_level = get_post_meta($post_id, '_benefit_level', true);
	$orig_member = get_post_meta($post_id, '_member', true);

	update_meta_data_for_post($post_id, $orig_benefit_level, $benefit_level, '_benefit_level');
	update_meta_data_for_post($post_id, $orig_member, $member, '_member');

	
}