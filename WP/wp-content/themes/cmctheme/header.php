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
             <li><?php echo '<a href="'. home_url().'?page_id=348'.'">Upcoming Events</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id=348'.'">Events Archive</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id=220&type=event'.'">Events FAQs</a>';?></li>
           </ul>
          <li><a>Connection</a>
         <ul class="subMenu">
             <li><a>Become a Member</a>
          <ul class="SuperSubMenu">
                     <li><?php echo '<a href="'. home_url().'?page_id=473'.'">Member Benefits</a>';?></li>
                     <li><?php echo '<a href="'. home_url().'?page_id=220&type=member'.'">Member FAQs</a>';?>
                     </li>
                   </ul>
             </li>
             <li><a>Become a Sponsor</a>
          <ul class="SuperSubMenu">
                     <li><?php echo '<a href="'. home_url().'?page_id=199'.'">Sponsor Benefits</a>';?></li>
                     <li><?php echo '<a href="'. home_url().'?page_id=220&type=sponsor'.'">Sponsor FAQs</a>';?>
                     </li>
                   </ul>
             </li>
             <li><?php echo '<a href="'. home_url().'?page_id=33'.'">Partners</a>';?></li>
             <li><?php echo '<a href="'. home_url().'?page_id=483'.'">Membership Directory</a>';?></li>
             <li><a href="#">Volunteer</a></li>
             <li><a href="#">Donate</a></li>
           </ul>
        <li><a>Community Conversation</a>
            <ul class="subMenu">
             <li><a href="#">Contact Us</a></li>
             <li><a href="#">E-mail Signup</a></li>
             <li><a href="#">Newsletter Archive</a></li>
           </ul>
        </li>
        <li><a>About Us</a>
            <ul class="subMenu">
             <li><a href="#">About and Mission</a></li>
             <li><?php echo '<a href="'. home_url().'?page_id=154'.'">Board</a>';?></li>
             <li><a href="#">Staff</a></li>
             <li><a href="#">History and Founders</a></li>
             <li><a href="#">Legacy Funds</a></li>
             <li><a href="#">Lifetime Members</a></li>
           </ul>
        </li>
    </ul>
    <div class="navLogoContainer"><a href="<?php echo home_url();?>">
      <?php echo '<img class="navLogo" src="'.home_url().'/wp-content/uploads/2019/03/cmclogo.png'.'">';?>
      </a></div>

      <ul class="mainMenu waMenu">
        <li><?php echo '<a href="https://columbusmetroclub.wildapricot.org/membership">Join</a>';?></li>
        <li><?php echo '<a href="https://columbusmetroclub.wildapricot.org/donate">Donate</a>';?></li>
       <li> <?php echo do_shortcode('[wa_login login_label="Log in" redirect_page="'.home_url().'"]');?></li>
    </ul>
    <div class="socialContainer">
        <ul class="navTextGroup">
        <li class="navImg facebook">
<?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=facebook'.'">';?>
          <i class="fa fa-facebook-square"></i>
</a>
        </li>
        <li class="navImg linkedin"><?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=linkedin'.'">';?>
          <i class="fa fa-linkedin-square"></i>
        </a>
      </li>
        <li class="navImg twitter"><?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=twitter'.'">';?>
          <i class="fa fa-twitter-square"></i>
        </a></li>
        <li class="navImg instagram"><?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=instagram'.'">';?>
          <i class="fa fa-instagram"></i>
        </a></i></li>
        <li class="navImg youtube"><?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=youtube'.'">';?>
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
          <a href="#">Events</a>
        </div>
                <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=348'.'">Upcoming Events</a>';?>
        </div>
                  <div class="fullMenuSelection">
          <?php echo '<a href="'. home_url().'?page_id=348'.'">Events Archive</a>';?>
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
          <a href="#">Contact Us</a>
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
<?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=facebook'.'">';?>
          <i class="fa fa-facebook-square"></i>
</a>
        </li>
        <li class="navImg linkedin">
          <?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=linkedin'.'">';?>
          <i class="fa fa-linkedin-square"></i>
        </a>
        </li>
        <li class="navImg twitter">
<?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=twitter'.'">';?>
          <i class="fa fa-twitter-square"></i>
        </a>
        </li>
        <li class="navImg instagram">
<?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=instagram'.'">';?>
          <i class="fa fa-instagram"></i>
        </a>
        </li>
        <li class="navImg youtube">
<?php echo '<a class="socialLink" target="_blank" href="'.home_url().'?page_id='.'582&socialtype=youtube'.'">';?>
          <i class="fa fa-youtube-square"></i>
        </a>
        </li>
        </ul>
      </div>
      </div>

