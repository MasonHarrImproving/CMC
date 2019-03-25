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
          <input class="searchEvents" placeholder=" Search">
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
            <span><a href="https://columbusmetroclub.wildapricot.org/membership">Join</a></span>
            <span><a href="https://columbusmetroclub.wildapricot.org/donate">Donate</a></span>
            <span> <?php echo do_shortcode('[wa_login login_label="Log in" redirect_page="'.home_url().'"]');?></span>
          </div>
          </div>
</body>
   <script>
  $(".searchEvents").on('keyup', function (e) {
      if (e.keyCode == 13) {
          if(e.keyCode.toString().length > 0){
            var test = window.location.href.split('?')[0];
           window.location.href = test + '?page_id=590' + '&searchstr=' + $('.searchEvents').val();
          }
      }
  });
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
