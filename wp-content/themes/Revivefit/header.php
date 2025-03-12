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
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo de la empresa">
            </div>

            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );

                wp_nav_menu($args);

            ?>
        </div>
        <?php
            if(is_front_page()): ?>
                <div class="tagline text-center contenedor">
                    <h1 class="ml2">
                        <?php the_field('hero_heading'); ?>
                        
                    </h1>
                    <p>
                            <?php the_field('hero_texto'); ?>
                        </p>
                    

                </div>
            <?php endif; ?>
       
           

    </header>