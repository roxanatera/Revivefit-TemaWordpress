<?php

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