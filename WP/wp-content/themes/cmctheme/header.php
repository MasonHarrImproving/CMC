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
  	<div class="navContainer">
  		<div class="nav">
  		<ul class="navTextGroup">
  			<li class="navText">About</li>
  			<li class="navText">Community Conversations</li>
  			<li class="navText">Connections</li>
  			<li class="navText">Events
<div class="nav-dropdown">
    <a href="<?php echo home_url().'?page_id='.'348'; ?>">Upcoming Events</a>
    <a href="#">Events Archive</a>
    <a href="<?php echo home_url().'?page_id='.'220'; ?>">Event FAQs</a>
  </div>
        </li>
			</ul>
			<a href="<?php home_url() ?>"><img src="<?php bloginfo('template_url') ?>/images/cmc-logo-full.png" alt=""  height="55px" width="140px"></a>
  		<!-- <img class="mainLogo" src="cmclogo.png" height="55px" width="140px"> -->
  		<ul class="tempRule navTextGroup">
  			<li class="navText joinText">Join</li>
  			<li class="navText">Donate</li>
  			<li class="navText">Login</li>
  		</ul>
  		<div class="socialContainer">
  			<ul class="navTextGroup">
  			<li class="navImg facebook"><i class="fa fa-facebook-square"></i></li>
  			<li class="navImg linkedin"><i class="fa fa-linkedin-square"></i></li>
  			<li class="navImg twitter"><i class="fa fa-twitter-square"></i></li>
  			<li class="navImg instagram"><i class="fa fa-instagram"></i></li>
  			<li class="navImg youtube"><i class="fa fa-youtube-square"></i></li>
  			</ul>
  		</div>
  		</div>
  	</div>

