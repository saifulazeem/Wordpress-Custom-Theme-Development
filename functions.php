<?php



/*


This file will be used to Extend the features of Theme.
Also work as mini Plugin.





*/

add_theme_support('custom-logo');

function wp_fileinfo_theme_scripts ()
{
    
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/assets/js/bootstrap.js');
}

add_action('wp_enqueue_scripts','wp_fileinfo_theme_scripts');








?>