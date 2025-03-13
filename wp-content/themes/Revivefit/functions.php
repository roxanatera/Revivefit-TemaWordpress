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

// Clases personalizadas


function revivefit_styles() {
    // Registrar y encolar estilos
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.2.5');

    // Registrar scripts
    wp_register_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.2.5', true);
    wp_register_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    wp_register_script('anime2', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'swiper-js', 'anime', 'anime2'), '1.0.0', true);

    // Encolar scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper-js');
    wp_enqueue_script('anime');
    wp_enqueue_script('anime2');
    wp_enqueue_script('scripts');
}
add_action('wp_enqueue_scripts', 'revivefit_styles');



// Registrar áreas de widgets
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

//Crear Shortcode
function revivefit_ubicacion_shortcode() {
    ?>
        <div class="mapa">
            <?php 
             if(is_page('contacto')){
                the_field('ubicacion');
            }
            ?>

        </div>
        <h2 class="text-center text-primary">Formulario de Contacto</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="94aaaa4" title="Contact form 1"]');
}
add_shortcode('revivefit_ubicacion', 'revivefit_ubicacion_shortcode');

// Registrar el widget
function revivefit_registrar_widget() {
    register_widget('revivefit_Clases_Widget');
}
add_action('widgets_init', 'revivefit_registrar_widget');

function revivefit_hero_imagen() {
    
    // obtener id pagina principal
    $front_page_id = get_option('page_on_front');
    // Obtener id imagen
    $id_imagen = get_field('hero_imagen',  $front_page_id);
    // Obtener la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
    
    // Estilos personalizados
    wp_register_style('custom', false);
    wp_enqueue_style('custom');

    $imagen_destacada_css = "
        body.home .header {
            background-image: linear-gradient(rgba(0,0,0,0.75), rgba(0,0,0,0.75)), url($imagen);
        }
    ";

    //Inyectar Css
    wp_add_inline_style('custom', $imagen_destacada_css);
        
}
add_action('init', 'revivefit_hero_imagen');
