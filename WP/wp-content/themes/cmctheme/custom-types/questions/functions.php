<?php
// require get_template_directory() . '/custom_types/faq/meta-boxes.php';

function register_faq() {

	/**
	 * Post Type: faq.
	 */

	$labels = array(
		"name" => __( "faqs"),
		"singular_name" => __( "faq"),
		"menu_name" => __( "faqs"),
		"all_items" => __( "All faqs"),
		"add_new_item" => __( "Add New faq"),
		"edit_item" => __( "Edit faq"),
		"new_item" => __( "New faq"),
		"view_item" => __( "View faq"),
		"view_items" => __( "View faqs"),
		"search_items" => __( "Search faq"),
		"not_found" => __( "No faq Found"),
		"not_found_in_trash" => __( "No faq in Trash"),
		"featured_image" => __( "faq Logo"),
		"set_featured_image" => __( "Set Logo"),
		"remove_featured_image" => __( "Remove Logo"),
		"use_featured_image" => __( "Use as Logo"),
		"filter_items_list" => __( "Filter faqs"),
		"items_list" => __( "faq List"),
		"attributes" => __( "faq Attributes"),
		"name_admin_bar" => __( "faq"),
	);

	$args = array(
		"label" => __( "faqs"),
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
		"rewrite" => array( "slug" => "faq", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "faq", $args );
}

add_action( 'init', 'register_faq' );

function create_faq_meta_boxes() {
	add_meta_box(
		'faq-name',
		esc_html__('faq Information'),
		'faq_logo_meta_box',
		'faq',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_faq_meta_boxes');

function faq_logo_meta_box($post) { ?>
	<?php
		$faq_answer = get_post_meta($post->ID, '_faq_answer', true);
	?>
	<?php wp_nonce_field(basename(__FILE__), 'faq_post_nonce'); ?>

	</div>
	
	<?php
}

add_action('save_post_faq', 'save_faq_post');

function save_faq_post($post_id) {
	if (!isset($_POST['faq_post_nonce'])) {
		return $post_id;
	}
	$faq_answer = (isset($_POST['faq-answer']) ? $_POST['faq-answer'] : null);


	$orig_faq_answer = get_post_meta($post_id, 'faq_answer', true);

	update_meta_data_for_post($post_id, $orig_faq_answer, $faq_answer, 'faq_answer');

	
}