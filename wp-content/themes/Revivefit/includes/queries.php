<?php

function revivefit_lista_clases ($cantidad = -1){
    ?>
    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'revivefit_clases', 
                'posts_per_page' => $cantidad,
                'order' => 'ASC',
                'orderby' => 'title'
            );
            $clases = new WP_Query($args);

            if ($clases->have_posts()) :
                while ($clases->have_posts()) : 
                    $clases->the_post(); 
        ?>
                <li class="card">
                    <?php the_post_thumbnail(); ?>
                    <div class="contenido">
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <?php
                            $hora_inicio = get_field('hora_inicio');
                            $hora_fin = get_field('hora_fin');
                        ?>
                        <p>
                            <?php the_field('dias_de_clases'); ?> -
                            <?php echo $hora_inicio . " a " . $hora_fin; ?>
                        </p>
                    </div>
                </li>
        <?php
                endwhile;
                wp_reset_postdata(); 
            else :
                echo '<p>No hay clases disponibles.</p>'; // Mensaje si no hay posts
            endif;
        ?>
    </ul>


    <?php

}
function revivefit_lista_testimoniales($cantidad = -1) { ?>
    <ul class="lista-grid">
        <?php
            $args = array(
                'post_type' =>  'revivefit_testimoniales',
                'posts_per_page' => $cantidad
            );
            $testimoniales = new WP_Query($args);
            while( $testimoniales->have_posts() ): $testimoniales->the_post(); ?>

            <li class="card">
                <?php the_post_thumbnail('mediano'); ?>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <?php
                        $hora_inicio = get_field('hora_inicio');
                        $hora_fin = get_field('hora_fin');
                    ?>
                    <p><?php the_field('dias_clase'); ?> - <?php echo $hora_inicio . " a " . $hora_fin; ?></p>
                </div>
            </li>

        
            <?php endwhile; wp_reset_postdata(); ?>
    </ul>

<?php
}
function revivefit_testimoniales(){
    ?>
    <ul class="listado-testimoniales swiper-wrapper">
        <?php
            $args = array(
                'post_type' =>  'testimoniales'
            );
            $testimoniales = new WP_Query($args);
            while( $testimoniales->have_posts() ):
             $testimoniales->the_post(); 
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

        
            <?php endwhile; wp_reset_postdata(); 
            ?>
    </ul>

    <?php
}