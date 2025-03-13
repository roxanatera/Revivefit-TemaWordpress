<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <a href="<?php echo site_url('/'); ?>">
            <div class="logo">
                <img  class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo de la empresa">
                </a>
            </div>
            <div class="hamburguer-menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="50" height="50">
                <rect x="10" y="20" width="80" height="10" fill="white"/>
                <rect x="10" y="40" width="80" height="10" fill="white"/>
                <rect x="10" y="60" width="80" height="10" fill="white"/>
            </svg>

            </div>

            <div class="contenedor-menu">
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal'
                    );

                    wp_nav_menu($args);

                 ?>
            </div>
        </div>
        <?php
            if(is_front_page()): ?>
                <div class="tagline text-center contenedor">
                    <h1 class="ml2">
                        <?php the_field('hero_heading'); ?>
                        
                    </h1>
                    <p class="ml2">
                            <?php the_field('hero_texto'); ?>
                        </p>
                    

                </div>
            <?php endif; ?>
       
           

    </header>