<?php 

function alpha_script() {
    wp_enqueue_style( 'customestyle', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'alpha_script' );

function alpha_theme_setup(){
    add_theme_support( 'menus');

    register_nav_menu( 'primary', 'Primary Nav Menu'); 
    register_nav_menu( 'secondary', 'Secondary Nav Menu');

}
add_action( 'init', 'alpha_theme_setup');

add_action('after_setup_theme', 'alpha_theme_setup');

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support('post-thumbnails');
?>