<?php

function jaio_register_widgets() {

	register_sidebar(array(
		'name'			=> __( 'Default Sidebar' ),
		'id'			=> 'default_sidebar',
		'description'	=> 'The Default Sidebar is used on news page.',
		'class'			=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
		));

	register_sidebar(array(
		'name'			=> __( 'Footer 1' ),
		'id'			=> 'footer_1',
		'description'	=> '',
		'class'			=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s footer_col social_col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
		));

	register_sidebar(array(
		'name'			=> __( 'Footer 2' ),
		'id'			=> 'footer_2',
		'description'	=> '',
		'class'			=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s footer_col loc_col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
		));

	register_sidebar(array(
		'name'			=> __( 'Footer 3' ),
		'id'			=> 'footer_3',
		'description'	=> '',
		'class'			=> '',
		'before_widget' => '<div id="%1$s" class="widget %2$s footer_col">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>'
		));
}
add_action( 'widgets_init', 'jaio_register_widgets' );