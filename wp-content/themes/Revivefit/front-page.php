<?php get_header('front'); ?>

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