<?php
// require get_template_directory() . '/custom_types/gallery/meta-boxes.php';

function register_gallery() {

	/**
	 * Post Type: gallerys.
	 */

	$labels = array(
		"name" => __( "Galleries"),
		"singular_name" => __( "Gallery"),
		"menu_name" => __( "Galleries"),
		"all_items" => __( "All Galleries"),
		"add_new_item" => __( "Add New Gallery"),
		"edit_item" => __( "Edit Gallery"),
		"new_item" => __( "New Gallery"),
		"view_item" => __( "View Gallery"),
		"view_items" => __( "View Galleries"),
		"search_items" => __( "Search Gallery"),
		"not_found" => __( "No Gallery Found"),
		"not_found_in_trash" => __( "No Gallery in Trash"),
		"featured_image" => __( "Gallery Logo"),
		"set_featured_image" => __( "Set Logo"),
		"remove_featured_image" => __( "Remove Logo"),
		"use_featured_image" => __( "Use as Logo"),
		"filter_items_list" => __( "Filter Galleries"),
		"items_list" => __( "Gallery List"),
		"attributes" => __( "Gallery Attributes"),
		"name_admin_bar" => __( "Gallery"),
	);

	$args = array(
		"label" => __( "Galleries"),
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
		"rewrite" => array( "slug" => "gallery", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "gallery", $args );
}

add_action( 'init', 'register_gallery' );

function create_gallery_meta_boxes() {
	add_meta_box(
		'gallery-name',
		esc_html__('Gallery Information'),
		'gallery_logo_meta_box',
		'gallery',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_gallery_meta_boxes');

function gallery_logo_meta_box($post) { ?>
	<?php
		$gallery_level = get_post_meta($post->ID, '_gallery_level', true);
		$gallery_url = get_post_meta($post->ID, '_gallery_url', true);
		$gallery_logo_url = get_post_meta($post->ID, '_gallery_logo_url', true);
		$gallery_logo_alt = get_post_meta($post->ID, '_gallery_logo_url', true);
		$is_founder = get_post_meta($post->ID, '_gallery_founder', true);
	?>
	<?php wp_nonce_field(basename(__FILE__), 'gallery_post_nonce'); ?>
	<div>
		<label style="width:150px;" for="gallery-url">Gallery</label>
		<label style="width:150px;" for="gallery-name">Gallery Name</label>
		<textarea type="text" name="gallery-url" id="gallery-url" value="<?php echo esc_attr( $gallery_url ); ?>" size="30"></textarea>
	</div>
	
	<?php
}

add_action('save_post_gallery', 'save_gallery_post');

function save_gallery_post($post_id) {
	if (!isset($_POST['gallery_post_nonce'])) {
		return $post_id;
	}

	$gallery_level = (isset($_POST['gallery-level']) ? $_POST['gallery-level'] : null);
	$gallery_url = (isset($_POST['gallery-url']) ? $_POST['gallery-url'] : null);
	$gallery_logo_url = (isset($_POST['gallery-logo-url']) ? $_POST['gallery-logo-url'] : null);
	$gallery_logo_alt = (isset($_POST['gallery-logo-alt']) ? $_POST['gallery-logo-alt'] : null);
	$gallery_founder = (isset($_POST['gallery-founder']) ? 1 : 0);

	if ($gallery_level == null || $gallery_url == null || $gallery_logo_url == null) {
		return $post_id;
	}

	$orig_gallery_level = get_post_meta($post_id, '_gallery_level', true);
	$orig_gallery_url = get_post_meta($post_id, '_gallery_url', true);
	$orig_gallery_logo_url = get_post_meta($post_id, '_gallery_logo_url', true);
	$orig_gallery_logo_alt = get_post_meta($post_id, '_gallery_logo_alt', true);
	$orig_gallery_founder = get_post_meta($post_id, '_gallery_founder', true);

	update_meta_data_for_post($post_id, $orig_gallery_founder, $gallery_founder, '_gallery_founder');
	update_meta_data_for_post($post_id, $orig_gallery_level, $gallery_level, '_gallery_level');
	update_meta_data_for_post($post_id, $orig_gallery_url, $gallery_url, '_gallery_url');
	update_meta_data_for_post($post_id, $orig_gallery_logo_url, $gallery_logo_url, '_gallery_logo_url');
	update_meta_data_for_post($post_id, $orig_gallery_logo_alt, $gallery_logo_alt, '_gallery_logo_alt');
	
}