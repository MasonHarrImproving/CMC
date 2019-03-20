<?php
// require get_template_directory() . '/custom_types/members/meta-boxes.php';

function register_member() {

	/**
	 * Post Type: Members.
	 */

	$labels = array(
		"name" => __( "members"),
		"singular_name" => __( "member"),
		"menu_name" => __( "Members"),
		"all_items" => __( "All members"),
		"add_new_item" => __( "Add New member"),
		"edit_item" => __( "Edit member"),
		"new_item" => __( "New member"),
		"view_item" => __( "View member"),
		"view_items" => __( "View members"),
		"search_items" => __( "Search member"),
		"not_found" => __( "No member Found"),
		"not_found_in_trash" => __( "No member in Trash"),
		"featured_image" => __( "member Logo"),
		"set_featured_image" => __( "Set Logo"),
		"remove_featured_image" => __( "Remove Logo"),
		"use_featured_image" => __( "Use as Logo"),
		"filter_items_list" => __( "Filter member"),
		"items_list" => __( "member List"),
		"attributes" => __( "member Attributes"),
		"name_admin_bar" => __( "member"),
	);

	$args = array(
		"label" => __( "members"),
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
		"rewrite" => array( "slug" => "member", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "member", $args );
}

add_action( 'init', 'register_member' );

function create_member_meta_boxes() {
	add_meta_box(
		'member-name',
		esc_html__('Member Information'),
		'member_logo_meta_box',
		'member',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_member_meta_boxes');

function member_logo_meta_box($post) { ?>
	<?php
	?>
	<?php wp_nonce_field(basename(__FILE__), 'member_post_nonce'); ?>
	</div>
	
	<?php
}

add_action('save_post_member', 'save_member_post');

function save_member_post($post_id) {
	if (!isset($_POST['member_post_nonce'])) {
		return $post_id;
	}

	
}