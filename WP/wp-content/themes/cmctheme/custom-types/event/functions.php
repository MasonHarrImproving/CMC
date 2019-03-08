<?php
function register_event() {

	/**
	 * Post Type: Event.
	 */

	$labels = array(
		"name" => __( "Events"),
		"singular_name" => __( "Event"),
		"menu_name" => __( "Events"),
		"all_items" => __( "All Events"),
		"add_new_item" => __( "Add New Event"),
		"edit_item" => __( "Edit Event"),
		"new_item" => __( "New Event"),
		"view_item" => __( "View Event"),
		"view_items" => __( "View Events"),
		"search_items" => __( "Search Event"),
		"not_found" => __( "No Event Found"),
		"not_found_in_trash" => __( "No Event in Trash"),
		"featured_image" => __( "Event Image"),
		"set_featured_image" => __( "Set Event Image"),
		"remove_featured_image" => __( "Remove Event Image"),
		"use_featured_image" => __( "Use as Image"),
		"filter_items_list" => __( "Filter Events"),
		"items_list" => __( "Event List"),
		"attributes" => __( "Event Attributes"),
		"name_admin_bar" => __( "Event"),
	);

	$args = array(
		"label" => __( "Events"),
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
		"rewrite" => array( "slug" => "event", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 5,
		"supports" => array( "title", "thumbnail" ),
	);

	register_post_type( "event", $args );
}

add_action( 'init', 'register_event' );

function create_event_meta_boxes() {
	add_meta_box(
		'event-information',
		esc_html__('Event Information'),
		'event_meta_box',
		'event',
		'normal',
		'high'
    );
    
    // add_meta_box(
	// 	'event-sponsors',
	// 	esc_html__('Event Sponsors'),
	// 	'event_sponsor_meta_box',
	// 	'event',
	// 	'normal',
	// 	'high'
    // );
    
    // add_meta_box(
	// 	'event-sponsors',
	// 	esc_html__('Event Sponsors'),
	// 	'event_sponsor_meta_box',
	// 	'event',
	// 	'normal',
	// 	'high'
	// );
}

add_action('add_meta_boxes', 'create_event_meta_boxes');

function event_meta_box($post) { ?>
    <?php
        $event_legacy_fund = get_post_meta($post->ID, '_event_legacy_fund', true);
        $event_date = get_post_meta($post->ID, '_event_date', true);
        $event_registration_time = get_post_meta($post->ID, '_event_registration_time', true);
        $event_program_time = get_post_meta($post->ID, '_event_program_time', true);
        $event_location = get_post_meta($post->ID, '_event_location', true);
        $event_tickets = get_post_meta($post->ID, '_event_ticket', true);
        $event_menu = get_post_meta($post->ID, '_event_menu', true);
        $event_email_signup = get_post_meta($post->ID, '_event_email_signup', true);
        $event_short_description = get_post_meta($post->ID, '_event_short_description', true);
        $event_long_description = get_post_meta($post->ID, '_event_long_description', true);
        $event_speakers = get_post_meta($post->ID, '_event_speaker', true);
        $event_sponsors = get_post_meta($post->ID, '_event_sponsor', true);
        $event_partnering_organization = get_post_meta($post->ID, '_event_partnering_organization', true);
        $event_legacy_forum_title = get_post_meta($post->ID, '_event_legacy_forum_title', true);
        $event_legacy_forum_description = get_post_meta($post->ID, '_event_legacy_forum_description', true);
        $event_forum_title = get_post_meta($post->ID, '_event_forum_title', true);
        $event_forum_descrption = get_post_meta($post->ID, '_event_forum_description', true);
        $event_press_coverage_title = get_post_meta($post->ID, '_event_press_coverage_title', true);
        $event_press_coverage_url = get_post_meta($post->ID, '_event_press_coverage_url', true);
        $event_press_coverage_source = get_post_meta($post->ID, '_event_press_coverage_source', true);
        $event_press_coverage_date = get_post_meta($post->ID, '_event_press_coverage_date', true);
        $event_recording = get_post_meta($post->ID, '_event_recording', true);
        $sponsors = get_sponsors();
        $speakers = get_speakers();

	?>
	<?php wp_nonce_field(basename(__FILE__), 'event_nonce'); ?>
	<div>
		<label style="width:150px;" for="event-legacy-fund">Legacy Fund</label>
		<input type="text" name="event-legacy-fund" id="event-legacy-fund" value="<?php echo esc_attr( $event_legacy_fund ); ?>" size="30" />
    </div>
    
    <div>
		<label style="width:150px;" for="event-date">Date</label>
		<input type="date" name="event-date" id="event-date" value="<?php echo esc_attr( $event_date ); ?>" />
	</div>
    
    <div>
		<label style="width:150px;" for="event-registration-time">Registration Time</label>
		<input type="date" name="event-registration-time" id="event-registration-time" value="<?php echo esc_attr( $event_registration_time ); ?>" />
    </div>

    <div>
		<label style="width:150px;" for="event-program-time">Program Time</label>
		<input type="time" name="event-program-time" id="event-program-time" value="<?php echo esc_attr( $event_program_time ); ?>" />
    </div>

    <div>
        <label style="width:150px;" for="event-speaker">Speaker</label>
        <select name="event-speaker" id="event-speaker">
            <?php
                foreach ($speakers as $speaker) {
					?>
						<option value='<?php echo $speaker->ID ?>'><?php echo $speaker->post_title ?></option>
					<?php
				}
            ?>
        </select>
    </div>
    <?php
}

add_action('save_post_event', 'save_event');

function save_event($post_id) {
	if (!isset($_POST['event_nonce'])) {
		return $post_id;
	}

	// $event_company = (isset($_POST['board-member-company']) ? $_POST['board-member-company'] : null);
	// $event_title = (isset($_POST['board-member-title']) ? $_POST['board-member-title'] : null);

	// if ($event_company == null || $event_title == null) {
	// 	return $post_id;
	// }

	// $orig_event_company = get_post_meta($post_id, '_event_company', true);
	// $orig_event_title = get_post_meta($post_id, '_event_title', true);

	// update_meta_data_for_post($post_id, $orig_event_company, $event_company, '_event_company');
	// update_meta_data_for_post($post_id, $orig_event_title, $event_title, '_event_title');
}

function get_sponsors() {
    $sponsor_args = array(
        'post_type' => 'sponsor'
    );
    
    $sponsors = new WP_Query($sponsor_args);
    
    return $sponsors;
}

function get_speakers() {
    $speakers_args = array(
        'post_type' => 'speaker'
    );
    
    $speakers = new WP_Query($speakers_args);
    
    return $speakers;
}