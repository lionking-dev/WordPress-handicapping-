<?php
// Enqueue stylesheets and scripts
function handicapping_theme_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script('handicapping-theme-jquery', "https://code.jquery.com/jquery-3.7.1.min.js");
    wp_enqueue_style('crunchify-font-awesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css?ver=5.7');
    wp_enqueue_style('handicapping-theme-global', get_template_directory_uri(). "/style.css?ver=6.3.2");
    wp_enqueue_style('handicapping-theme-header', get_template_directory_uri(). "/assests/css/header.css?ver=6.3.2");
    wp_enqueue_style('handicapping-theme-footer', get_template_directory_uri(). "/assests/css/footer.css?ver=6.3.2");
    wp_enqueue_style('handicapping-theme-template', get_template_directory_uri(). "/assests/css/template-style.css?ver=6.3.2");
    wp_enqueue_script('handicapping-theme-main-script', get_template_directory_uri(). "/assests/js/main.js?ver=6.3.2");
    // Add any additional stylesheets or scripts here
}
add_action('wp_enqueue_scripts', 'handicapping_theme_scripts');

// Register navigation menus
function handicapping_theme_register_menus() {
    register_nav_menus(array(
        'primary-menu' => 'Primary Menu',
        // Add more menu locations if needed
    ));
}
add_action('init', 'handicapping_theme_register_menus');
?>