<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Columbus_Metropolitan_Club_Theme
 * @since 1.0.0
 */
wp_footer();

?>
     <div class="spacing"></div>
    <div class="footerContainer">
      <div class="logoBox">  <?php echo '<img class="footerLogo" src="'.home_url().'/wp-content/uploads/2019/03/cmclogo.png'.'">';?></div>
      <div class="contactBox">
        <p class="contactText">Contact</p>
        <p class="contactNumber">614-464-3220</p>
        <p class="contactEmail">staff@columbusmetroclub.com</p>
      </div>
      <div class="addressBox">
        <p class="boxHeader">Address</p>
        <p class="boxText">100 East Broad Street</p>
        <p class="boxText">Suite 100</p>
        <p class="boxText">Columbus, OH 43215</p>
      </div>
      <div class="searchBox">
        <p class="boxText">Search</p>
        <div class="footerSearch">
          <span>Search</span>
        </div>
      </div>
    </div>
    <div></div>
  </div>
            <div class="lowerInfo">
            <p>©2016 Columbus Metropolitan Club. All rights reserved. Review our privacy policy, terms of use, and non-profit information.</p>
            <div class="innerLowerInfo">
            <span>About</span>
            <span>
              <?php echo '<a href="'. home_url().'?page_id=348'.'">Events</a>';?>
            </span>
            <span>Join</span>
            <span>Donate</span>
            <span>Login</span>
          </div>
          </div>
</body>
   <script>

      $('.navText').hover(function(){
        $(this).children('.nav-dropdown').css('display', 'block');
        $(this).find('.innerDropdown').mouseleave(function(){
          $(this).children('.nav-dropdown').css('display', 'none');
        });
      });

      $('.hamburgerMenu').click(function(){
        console.log('test');
        $('.fullMenu').fadeToggle();
        $('.fullMenu').css('display', 'flex');
      });

    </script>
</html>
