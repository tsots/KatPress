<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

 function katpress_setup() {
   // Navigation Menus
   register_nav_menus(array(
     'navbar' => __( 'Navbar Menu')
     ));
   // Add featured image support
     add_theme_support('post-thumbnails');
     add_image_size('main-full', 1078, 516, false); // main post image in full width
   }
   add_action('after_setup_theme', 'katpress_setup');
