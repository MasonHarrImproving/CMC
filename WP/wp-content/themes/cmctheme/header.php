<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Columbus_Metropolitan_Club_Theme
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); 
?>>
<head>
    <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
		<?php wp_head(); ?>
  </head>
  <body>
  	  <div class="wrapper">
<nav>
    <ul class="mainMenu">
         <li>
          <a>Events</a>
         <ul class="subMenu">
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_1', 'option'); echo '">'; the_field('menu_tab_text_1', 'option'); echo'</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_2', 'option'); echo '">'; the_field('menu_tab_text_2', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_3', 'option'); echo '&type=event">'; echo the_field('menu_tab_text_3', 'option'); echo'</a>';?></li>
           </ul>
          <li><a>Connection</a>
         <ul class="subMenu">
             <li><a><?php the_field('menu_tab_text_4', 'option')?></a>
          <ul class="SuperSubMenu">
                     <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_5', 'option'); echo '">'; the_field('menu_tab_text_5', 'option'); echo '</a>';?></li>
                     <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_6', 'option'); echo '&type=member">'; the_field('menu_tab_text_6', 'option'); echo '</a>';?></li>
                     </li>
                   </ul>
             </li>
             <li><a><?php the_field('menu_tab_text_7', 'option');?></a>
          <ul class="SuperSubMenu">
                     <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_8', 'option'); echo '">'; the_field('menu_tab_text_8', 'option'); echo'</a>';?></li>
                     <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_9', 'option'); echo '&type=sponsor">'; the_field('menu_tab_text_9', 'option'); echo '</a>';?></li>
                     </li>
                   </ul>
             </li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_10', 'option'); echo '">'; the_field('menu_tab_text_10', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_11', 'option'); echo '">'; the_field('menu_tab_text_11', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_12', 'option'); echo '">'; the_field('menu_tab_text_12', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_13', 'option'); echo '">'; the_field('menu_tab_text_13', 'option'); echo '</a>';?></li>
           </ul>
        <li><a><?php the_field('menu_tab_text_14', 'option');?></a>
            <ul class="subMenu">
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_15', 'option'); echo '">'; the_field('menu_tab_text_15', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_16', 'option'); echo '">'; the_field('menu_tab_text_16', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_17', 'option'); echo '">'; the_field('menu_tab_text_17', 'option'); echo '</a>';?></li>
           </ul>
        </li>
        <li><a><?php the_field('menu_tab_text_18', 'option');?></a>
            <ul class="subMenu">
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_19', 'option'); echo '">'; the_field('menu_tab_text_19', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_20', 'option'); echo '">'; the_field('menu_tab_text_20', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_21', 'option'); echo '">'; the_field('menu_tab_text_21', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_22', 'option'); echo '">'; the_field('menu_tab_text_22', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_23', 'option'); echo '">'; the_field('menu_tab_text_23', 'option'); echo '</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id='; the_field('menu_tab_24', 'option'); echo '">'; the_field('menu_tab_text_24', 'option'); echo '</a>';?></li>
           </ul>
        </li>
    </ul>
    <div class="navLogoContainer"><a href="<?php echo home_url();?>">
      <?php echo '<img class="navLogo" src="'.home_url().'/wp-content/uploads/2019/03/cmclogo.png'.'">';?>
      </a></div>

      <ul class="mainMenu waMenu">
        <li><?php echo '<a href="'; the_field('menu_tab_25', 'option'); echo '">'; the_field('menu_tab_text_25', 'option'); echo '</a>';?></li>
        <li><?php echo '<a href="'; the_field('menu_tab_26', 'option'); echo '">'; the_field('menu_tab_text_26', 'option'); echo '</a>';?></li>
       <li> <?php echo do_shortcode('[wa_login login_label="Log in" redirect_page="'.home_url().'"]');?></li>
    </ul>
    <div class="socialContainer">
        <ul class="navTextGroup">
        <li class="navImg facebook">
          <a class="socialLink" target="_blank" href="<?php the_field('menu_facebook', 'option');?>">
          <i class="fa fa-facebook-square"></i>
</a>
        </li>
        <li class="navImg linkedin">
          <a class="socialLink" target="_blank" href="<?php the_field('menu_linkedin', 'option');?>">
          <i class="fa fa-linkedin-square"></i>
        </a>
      </li>
        <li class="navImg twitter">
          <a class="socialLink" target="_blank" href="<?php the_field('menu_twitter', 'option');?>">
          <i class="fa fa-twitter-square"></i>
        </a></li>
        <li class="navImg instagram"><a class="socialLink" target="_blank" href="<?php the_field('menu_instagram', 'option');?>">
          <i class="fa fa-instagram"></i>
        </a></i></li>
        <li class="navImg youtube">
          <a class="socialLink" target="_blank" href="<?php the_field('menu_youtube', 'option');?>">
          <i class="fa fa-youtube-square"></i>
        </a></li>
        </ul>
      </div>
      <ul class="mainMenu hamburgerMenu">
        <li><div class="menuLine"></div>
            <div class="menuLine"></div>
            <div class="menuLine"></div>
          </li>
      </ul>
</nav>
      <div class="fullMenu">
                <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=348'.'">Upcoming Events</a>';?>
        </div>
                  <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=600'.'">Events Archive</a>';?>
        </div>
                  <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=220&type=event'.'">Events FAQs</a>';?>
        </div>
                <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=473'.'">Member Benefits</a>';?>
        </div>
                <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=220&type=member'.'">Member FAQs</a>';?>
        </div>
                  <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=199'.'">Sponsor Benefits</a>';?>
        </div>
                  <div class="fullMenuSelection">
         <?php echo '<a href="'. home_url().'?page_id=220&type=sponsor'.'">Sponsor FAQs</a>';?>
        </div>
                <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=33'.'">Partners</a>';?>
        </div>
        <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=154'.'">Board</a>';?>
        </div>
        <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=483'.'">Membership Directory</a>';?>
        </div>
                  <div class="fullMenuSelection">
          <a href="#">Volunteer</a>
        </div>
                  <div class="fullMenuSelection">
       <?php echo '<a href="https://columbusmetroclub.wildapricot.org/membership">Join</a>';?>
        </div>
                      <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=175'.'">Contact Us</a>';?>
        </div>
                <div class="fullMenuSelection">
          <a href="#">E-Mail Signup</a>
        </div>
                  <div class="fullMenuSelection">
          <a href="#">Newsletter Archive</a>
        </div>
                  <div class="fullMenuSelection">
        <?php echo '<a href="https://columbusmetroclub.wildapricot.org/donate">Donate</a>';?>
        </div>
                      <div class="fullMenuSelection">
          <a href="#">About and Mission</a>
        </div>
                <div class="fullMenuSelection">
          <a href="#">Staff</a>
        </div>
                  <div class="fullMenuSelection">
          <a href="#">History and Founders</a>
        </div>
                  <div class="fullMenuSelection">
          <a href="#">Legacy Funds</a>
        </div>
                          <div class="fullMenuSelection">
          <a href="#">Lifetime Members</a>
        </div>
        <div class="socialContainer hiddenNavSocial">
        <ul class="navTextGroup">
        <li class="navImg facebook">
          <a class="socialLink" target="_blank" href="https://facebook.com/cbusmetroclub/">
          <i class="fa fa-facebook-square"></i>
</a>
        </li>
        <li class="navImg linkedin">
                    <a class="socialLink" target="_blank" href="https://www.linkedin.com/companies/cbusmetroclub">
          <i class="fa fa-linkedin-square"></i>
        </a>
        </li>
        <li class="navImg twitter">
                    <a class="socialLink" target="_blank" href="https://twitter.com/cbusmetroclub">
          <i class="fa fa-twitter-square"></i>
        </a>
        </li>
        <li class="navImg instagram">
          <a class="socialLink" target="_blank" href="https://www.instagram.com/cbusmetroclub/">
          <i class="fa fa-instagram"></i>
        </a>
        </li>
        <li class="navImg youtube">
           <a class="socialLink" target="_blank" href="https://www.youtube.com/user/adrewbart">
          <i class="fa fa-youtube-square"></i>
        </a>
        </li>
        </ul>
      </div>
      </div>

