<?php
//Includes
require get_template_directory() . '/includes/widgets.php';
function revivefit_setup() {
    // Habilitar imágenes destacadas
    add_theme_support('post-thumbnails');

    // Título SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'revivefit_setup');


function revivefit_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'revivefit')
    ));
}


add_action('init', 'revivefit_menus');

function revivefit_styles() {

    wp_enqueue_style('normalize','https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    // Registrar scripts
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

    // Llamar scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
}

add_action('wp_enqueue_scripts', 'revivefit_styles');

// Definir zona de widgets
function revivefit_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => 'Sidebar 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));
    
}
add_action('widgets_init', 'revivefit_widgets');