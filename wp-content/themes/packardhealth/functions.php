<?php

load_template( get_template_directory() . '/inc/custom-post-types.php' );
load_template( get_template_directory() . '/inc/shortcodes.php' );
load_template( get_template_directory() . '/inc/sidebar-widgets.php' );

// Custom menu areas
register_nav_menus( array(
	'main' => 'Main'
) );

// Enable featured image
add_theme_support( 'post-thumbnails' );

add_image_size('216x307', 216, 307);

function jaio_styles_queue() {
	// wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css');
	
	wp_enqueue_style('Roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i');

}
add_action('wp_enqueue_scripts', 'jaio_styles_queue');

function jaio_scripts_queue() {
    wp_deregister_script("jquery");
    wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', false, NULL, true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'), '', true);
}
add_action( 'wp_enqueue_scripts', 'jaio_scripts_queue' );

// remove excerpt dots
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// get first two paragraphs from content
function get_first_two_paragraphs(){
	global $post;
	
	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags($str, '<a><strong><em>');
	return '<p>' . $str . '</p>';
}

// Tagcloud, maintain same font size
function custom_tag_cloud_widget($args) {
    $args['largest'] = 12;
    $args['smallest'] = 12;
    $args['unit'] = 'px';
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );

// Altering WP-Page Navi classes
function theme_pagination_class($class_name) {
  switch($class_name) {
    case 'previouspostslink':
      $class_name = 'pagination__control-link pagination__control-link--previous previous';
      break;
    case 'nextpostslink':
      $class_name = 'pagination__control-link pagination__control-link--next';
      break;
    case 'pages':
      $class_name = 'pagination';
      break;
  }
  return $class_name;
}
add_filter('wp_pagenavi_class_page', 'theme_pagination_class');

function custom_excerpt($content) {
  $content = strip_shortcodes($content);
  $content = preg_replace("/<img[^>]+\>/i", "", $content); 
  $content = substr($content, 0, 350);

  return $content;
}

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page();
  acf_add_options_sub_page('Sidebar');
  acf_add_options_sub_page('Footer');
}