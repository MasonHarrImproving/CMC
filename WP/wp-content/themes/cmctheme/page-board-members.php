<?php
/*
    Template Name: Board Members Template
*/
    get_header();

    $members_args = array(
        'post_type' => 'board-member'
    );
    
    $query = new WP_Query($members_args);
    // echo 'There are posts: ' . $query;
    
    if ($query -> have_posts()) {
        $post_index = 0;
        $count = 0;
        while ($count < 40) {
            while ($query -> have_posts()) {
                $query -> the_post();

                get_template_part('template-parts/board-members/content-board-member');
            }
            $count++;
        }
    }
?>

<?php
    /*
        The following section would be the portion that is customizable.
    */
?>
  	<section class="boardContainer mainElement">
      <?php 
      for($i = 1; $i <= 4; $i++){
        $memberImage = get_field('member_image_'.$i);
      echo '<div class="member">';
        echo '<img class="memberImage" src="'.$memberImage["url"].'" height="250" width="200">';
        echo '<span class="memberName">';
        echo the_field('member_title_'.$i).'<br>';
        echo '</span>';
        echo '<span class="memberDesc">';
        echo the_field('member_subtitle_'.$i).'<br>';
        echo the_field('member_category_'.$i);
        echo '</span>';
      echo '</div>';
      }
      ?>
  	</section>

<?php
    get_footer();
?>