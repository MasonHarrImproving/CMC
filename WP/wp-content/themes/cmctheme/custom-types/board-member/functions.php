<?php
function register_board_member() {

	/**
	 * Post Type: Board Member.
	 */

	$labels = array(
		"name" => __( "Board Members"),
		"singular_name" => __( "Board Member"),
		"menu_name" => __( "Board Members"),
		"all_items" => __( "All Board Members"),
		"add_new_item" => __( "Add New Board Member"),
		"edit_item" => __( "Edit Board Member"),
		"new_item" => __( "New Board Member"),
		"view_item" => __( "View Board Member"),
		"view_items" => __( "View Board Members"),
		"search_items" => __( "Search Board Member"),
		"not_found" => __( "No Board Member Found"),
		"not_found_in_trash" => __( "No Board Member in Trash"),
		"featured_image" => __( "Board Member Image"),
		"set_featured_image" => __( "Set Board Member Image"),
		"remove_featured_image" => __( "Remove Board Member Image"),
		"use_featured_image" => __( "Use as Image"),
		"filter_items_list" => __( "Filter Board Members"),
		"items_list" => __( "Board Member List"),
		"attributes" => __( "Board Member Attributes"),
		"name_admin_bar" => __( "Board Member"),
	);

	$args = array(
		"label" => __( "Board Members"),
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
		"rewrite" => array( "slug" => "board_member", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "board_member", $args );
}

add_action( 'init', 'register_board_member' );

function create_board_member_meta_boxes() {
	add_meta_box(
		'board-member-information',
		esc_html__('Board Member Information'),
		'board_member_meta_box',
		'board_member',
		'normal',
		'high'
	);
}

add_action('add_meta_boxes', 'create_board_member_meta_boxes');

function board_member_meta_box($post) { ?>
	<?php
		$board_member_company = get_post_meta($post->ID, '_board_member_company', true);
		$board_member_title = get_post_meta($post->ID, '_board_member_title', true);
	?>
	<?php wp_nonce_field(basename(__FILE__), 'board_member_nonce'); ?>
	<div>
		<label style="width:150px;" for="board-member-company">Company</label>
		<input type="text" name="board-member-company" id="board-member-company" value="<?php echo esc_attr( $board_member_company ); ?>" size="30" />
	</div>
	<div>
		<label style="width:150px;" for="board-member-title">CMC Title</label>
		<input type="text" name="board-member-title" id="board-member-title" value="<?php echo esc_attr( $board_member_title ); ?>" size="30" />
	</div>
	<div>
		<p>TODO - Image uploader</p>
	</div>
	<?php
}

add_action('save_post_board_member', 'save_board_member');

function save_board_member($post_id) {
	if (!isset($_POST['board_member_nonce'])) {
		return $post_id;
	}

	$board_member_company = (isset($_POST['board-member-company']) ? $_POST['board-member-company'] : null);
	$board_member_title = (isset($_POST['board-member-title']) ? $_POST['board-member-title'] : null);

	if ($board_member_company == null || $board_member_title == null) {
		return $post_id;
	}

	$orig_board_member_company = get_post_meta($post_id, '_board_member_company', true);
	$orig_board_member_title = get_post_meta($post_id, '_board_member_title', true);

	update_meta_data_for_post($post_id, $orig_board_member_company, $board_member_company, '_board_member_company');
	update_meta_data_for_post($post_id, $orig_board_member_title, $board_member_title, '_board_member_title');
}