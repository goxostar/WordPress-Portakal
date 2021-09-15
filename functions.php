<?php

function psoftware_scripts(){
  wp_enqueue_style( 'bootstrap-style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
  wp_enqueue_style( 'fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.2/css/all.css');
  wp_enqueue_style( 'owlcarousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
  wp_enqueue_style( 'owlcarousel2-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
  wp_enqueue_style( 'lightbox-style', get_template_directory_uri().'/css/lightbox.css'); 
  wp_enqueue_style( 'portakal-style', get_stylesheet_uri(), array(), rand(111, 9999), 'all');

  wp_enqueue_script("jquery");
  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true); 
  wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true); 
  wp_enqueue_script('owlcarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '2.3.4', true,); 
  wp_enqueue_script('lightbox', get_template_directory_uri().'/js/lightbox-plus-jquery.js', array('jquery'), '1.0.0', true); 
  wp_enqueue_script('portakal', get_template_directory_uri().'/js/portakalsoftware.js', array('jquery'), '1.0.0', true);   
}
add_action('wp_enqueue_scripts', 'psoftware_scripts');

function remove_admin_bar(){
  show_admin_bar(false);
}
add_action('after_setup_theme', 'remove_admin_bar');

require_once('class-wp-bootstrap-navwalker.php');

function register_my_menu(){
  register_nav_menu('primary',__('Primary Menu'));
}
add_action('init', 'register_my_menu');

?>

