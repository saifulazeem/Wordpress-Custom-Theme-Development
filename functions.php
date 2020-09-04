<?php

//require_once('wp_bootstrap_navlist_walker.php');

/*


This file will be used to Extend the features of Theme.
Also work as mini Plugin.





*/



// function wp_fileinfo_theme_setup()
// {
//     register_nav_menus(
//         array(
//                 'primary' => __('Primary Menu','FileInfo'),
//         )
//         );
// }
// add_action('after_setup_theme','wp_fileinfo_theme_setup');




function wp_fileinfo_theme_setup()
{
    add_theme_support('custom-logo');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wp_fileinfo' )
        
    ) );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'wp_fileinfo_theme_setup');


function wp_fileinfo_theme_scripts ()
{
    
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.js');
}

add_action('wp_enqueue_scripts','wp_fileinfo_theme_scripts');








?>