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
  		<div class="member">
  			<img class="memberImage" src="placeImg.jpg" height="250" width="200">
  			<span class="memberName">John Smith<br></span>
  			<span class="memberDesc">Executive President<br>Executive Operations</span>
  		</div>
  		  		<div class="member">
  			<img class="memberImage" src="placeImg.jpg" height="250" width="200">
  			<span class="memberName">John Smith<br></span>
  			<span class="memberDesc">Executive President<br>Executive Operations</span>
  		</div>
  		  		<div class="member">
  			<img class="memberImage" src="placeImg.jpg" height="250" width="200">
  			<span class="memberName">John Smith<br></span>
  			<span class="memberDesc">Executive President<br>Executive Operations</span>
  		</div>
  		  		<div class="member">
  			<img class="memberImage" src="placeImg.jpg" height="250" width="200">
  			<span class="memberName">John Smith<br></span>
  			<span class="memberDesc">Executive President<br>Executive Operations</span>
  		</div>
  		  		<div class="member">
  			<img class="memberImage" src="placeImg.jpg" height="250" width="200">
  			<span class="memberName">John Smith<br></span>
  			<span class="memberDesc">Executive President<br>Executive Operations</span>
  		</div>
  	</section>

<?php
    get_footer();
?>