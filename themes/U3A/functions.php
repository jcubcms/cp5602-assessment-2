<?php

function startuptheme_enqueue_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'startuptheme-style', get_stylesheet_uri(), $dependencies ); 

    wp_register_style("bootstrap","https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css",array(). false, 'all');
    wp_enqueue_style("bootstrap");

    wp_register_style("fontStyle","https://fonts.googleapis.com/css?family=Bree+Serif|Libre+Baskerville|Lora|Roboto|Source+Sans+Pro&display=swap",array(). false, 'all');
    wp_enqueue_style("fontStyle");

    //wp_register_style("style",get_template_directory_uri(). "/blog.css",array(). false, 'all');
    //wp_enqueue_style("style");

}

/*function startuptheme_enqueue_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '', true );
}*/

function load_jquery(){

    wp_deregister_script("jquery");
    wp_enqueue_script("jquery","https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", array(), '', 1, true);
    add_action("wp_enqueue_scripts", 'jquery');
}
add_action("wp_enqueue_scripts","load_jquery");


function load_scripts(){
    wp_register_script("bootstrapjs","https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js", array(), '', 1, true);
    wp_enqueue_script("bootstrapjs");
}
add_action("wp_enqueue_scripts","load_scripts");


add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_styles' );
//add_action( 'wp_enqueue_scripts', 'startuptheme_enqueue_scripts' );

function startuptheme_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'startuptheme_wp_setup' );

function startuptheme_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'startuptheme_register_menu' );

function startuptheme_widgets_init() {

	register_sidebar( array(
		'name' 			=> 'Footer - copyright Text',
		'id'   			=> 'footer-copyright-text',
		'before_widget' => '<div calss="footer-copyright-text"',
		'after_widget'	=> '</div>',
		'before_title' 	=> '<h4>',
		'after_title' 	=> '</h4>',
	));
}

	register_sidebar( array(
		'name'          => 'Sidebar - Main',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
	));

	register_sidebar( array(
		'name'          => 'Sidebar - Footer',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
	));

	register_sidebar( array(
		'name'          => 'Sidebar test',
        'id'            => 'sidebar-3',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
	));


?>