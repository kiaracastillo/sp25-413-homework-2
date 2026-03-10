<?php
/* functions.php */

function kc_css() {

 wp_enqueue_style(
   'kc-style',
        get_stylesheet_uri()
   
        );

}
add_action('wp_enqueue_scripts', 'kc_css');

/*setup */

function kc_setup() {

    add_theme_support('title-tag');

add_theme_support('post-thumbnails');
     add_theme_support('custom-logo');

    register_nav_menus(array(
        'menu-principal' => 'Main Menu'

    )
    
);

}

add_action('after_setup_theme', 'kc_setup');

?>