    <?php
    /*
        Template Name: Member Directory Template
    */
        get_header();
    ?>

    <?php
        /*
            The following section would be the portion that is customizable.
        */
    ?>
<?php
    get_template_part('template-parts/shared/content-hero');
?>

<?php
?>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $members = array(
        'post_type' => 'member',
        'posts_per_page' => 20,
        'paged' => $paged,
        'orderby' => 'title',
        'order'   => 'ASC',
    );
    
    $membersquery = new WP_Query($members);
    $wp_query = new WP_Query($members);
?>
<div class="directoryContainer">
  <div class="directoryLabelBar">
    <div class="directoryLabel">Name</div>
    <div class="directoryLabel">Organization</div>
    <div class="directoryLabel">Title</div>
  </div>
      <?php
    if ($membersquery -> have_posts()) {
        $posts = $membersquery->posts;
        foreach($posts as $post) {
  echo '<div class="directoryMember">
    <div class="directoryColumn directoryName">
      <span>'.get_post_custom($post->ID)["name"][0].'</span>
</div>
    <div class="directoryColumn directoryOrganization">
      <span>'.get_post_custom($post->ID)["organization"][0].'</span>
</div>
    <div class="directoryColumn directoryTitle">
     <span>'.get_post_custom($post->ID)["title"][0].'</span>
</div>
  </div>';
        }
        ?> 
      <?php }?>
      </div>
              <div class="numberedPostContainer">
                          <?php echo paginate_links(); ?>
        </div>
<?php
    get_footer();
?>
