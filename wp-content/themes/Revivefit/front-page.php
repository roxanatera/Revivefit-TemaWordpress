<?php get_header('front'); ?>

<section class="bienvenida text-center seccion">
    <h1 class="text-primary"><?php the_field('encabezado_bienvenida'); ?></h1>
    <p><?php the_field('texto_bienvenida'); ?></p>
</section>

<section class="areas">
        <div class="area">
            <?php 
                $area1 = get_field('area1');
                $imagen = $area1 ['imagen']['sizes']['medium_large'];
                $texto = $area1['texto'];
            
            ?>
            <img src="<?php echo esc_attr($imagen );?>" alt="area1['$texto'] " />
            <p><?php echo esc_html( $texto); ?></p>
        </div>
        <div class="area">
            <?php 
                $area_2 = get_field('area_2');
                $imagen = $area_2 ['imagen_2']['sizes']['medium_large'];
                $texto = $area_2['texto'];
            
            ?>
            <img src="<?php echo esc_attr($imagen );?>" alt="" />
            <p><?php echo esc_html( $texto); ?></p>
        </div>
        <div class="area">
            <?php 
                $area_3 = get_field('area_3');
                $imagen = $area_3 ['imagen_3']['sizes']['medium_large'];
                $texto = $area_3['texto'];
            
            ?>
            <img src="<?php echo esc_attr($imagen );?>" alt="" />
            <p><?php echo esc_html( $texto); ?></p>
        </div>
        <div class="area">
            <?php 
                $area_4 = get_field('area_4');
                $imagen = $area_4 ['imagen_4']['sizes']['medium_large'];
                $texto = $area_4['texto'];
            
            ?>
            <img src="<?php echo esc_attr($imagen );?>" alt="" />
            <p><?php echo esc_html( $texto); ?></p>
        </div>
        
</section>
<main class="contenedor seccion">
    <h2 class="text-center text-primary">Nuestras Clases</h2>
    <?php revivefit_lista_clases(4); ?>
    <div class="contenedor-boton">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('clases') ) ) ;?>"
        class="boton boton-primario">Ver todas la clases</a>
    </div>
</main>


<main class="contenedor seccion">
        <h1 class="text-center text-primary">Nuestros Instructores</h1>
        <p class="text-center">Instructores profesionales que te ayudarán a lograr tus objetivos</p>

        <ul class="listado-instructores">
            <?php
                $args = array(
                    'post_type' => 'instructores', 
                    'posts_per_page' => 30
                );
                $instructores = new WP_Query($args);
                while($instructores->have_posts()): $instructores->the_post();
            ?>
            <li class="instructor">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido text-center">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>

                    <div class="especialidad">
                        <?php
                            $esp = get_field('especialidad');
                            foreach($esp as $e): ?>
                                <span class="etiqueta"><?php echo esc_html( $e ); ?></span>  
                        
                        <?php endforeach; ?>
                    </div>
                </div>
            </li>

            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
  <section class="testimoniales">
    <h2 class="text-center texto-blanco">Testimoniales</h2>

    <div class="contenedor-testimoniales swiper">
            <ul class="listado-testimoniales swiper-wrapper">
                
                    <?php 
                        $args = array(
                            'post_type' => 'testimoniales',
                            'posts_per_page' => 10
                        );
                        $testimoniales = new WP_Query($args);
                        while($testimoniales->have_posts()): $testimoniales->the_post();
                    ?>
                    <li class="testimonial text-center swiper-slide">
                        <blockquote>
                            <?php the_content(); ?>
                        </blockquote>

                        <footer class="testimonial-footer">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <p><?php the_title(); ?></p>
                        </footer>

                    </li>
                    <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>

    <section class="contenedor seccion">
        <h1 class="text-center text-primary">Nuestro Blog</h1>
        <p class="text-center">Conoce nuestros servicios y mejora tu calidad de vida</p>
    </h2>
    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4
            );
            $blog = new WP_Query($args);
            while($blog->have_posts()): $blog->the_post();
        ?>
        <li class="card">
    <?php the_category(); ?>
    <?php the_post_thumbnail(); ?>
    <div class="contenido">
        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
        </a>
        <p class="meta">
            <span>Por:</span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                <?php echo get_the_author_meta('display_name') ?>
            </a>
        </p>
        <p class="meta">
            <span>Fecha:</span>
            <?php the_time(get_option('date_format')); ?>
        </p>
    </div>
</li>
        <?php endwhile; wp_reset_postdata(); ?>

    </ul>

    </section>


   

</main>

<?php
get_footer(); 

?>